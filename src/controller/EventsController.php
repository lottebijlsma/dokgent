<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {
    $images = $this->eventDAO->highlights();
    $this->set('images', $images);

    $items = $this->eventDAO->selectAll();
    if($this->isAjax) {
      header('Content-Type: application/json');
      echo json_encode($items);
      exit();
    }
    $this->set('items', $items);
    // als de param t niet leeg is, deze if binnengaan
    // hier checken op $this->isAjax()
    // content-type als app/json returnen
    // zorgen dat je enkel de events ophaalt die voldoen aan de param t in $GET
    // json_encode($images)

    if(!empty($_POST)) $this->handleRegistration();
  }

  public function events() {
    $images = $this->eventDAO->highlights();
    $this->set('images', $images);

    $tags = $this->eventDAO->tags();
    $this->set('tags', $tags);

    $conditions = array();


    // example: events ending in may 2017
    $conditions[0] = array(
      'field' => 'end',
      'comparator' => '>=',
      'value' => '2017-05-01 00:00:00'
    );
    $conditions[1] = array(
      'field' => 'end',
      'comparator' => '<',
      'value' => '2017-06-01 00:00:00'
    );

    if (isset($_POST['juni'])) {
      $conditions[0] = array(
        'field' => 'end',
        'comparator' => '>=',
        'value' => '2017-06-01 00:00:00'
      );
      $conditions[1] = array(
        'field' => 'end',
        'comparator' => '<',
        'value' => '2017-07-01 00:00:00'
      );
    }

    if (isset($_POST['juli'])) {
      $conditions[0] = array(
        'field' => 'end',
        'comparator' => '>=',
        'value' => '2017-07-01 00:00:00'
      );
      $conditions[1] = array(
        'field' => 'end',
        'comparator' => '<',
        'value' => '2017-08-01 00:00:00'
      );
    }

    if (isset($_POST['augustus'])) {
      $conditions[0] = array(
        'field' => 'end',
        'comparator' => '>=',
        'value' => '2017-08-01 00:00:00'
      );
      $conditions[1] = array(
        'field' => 'end',
        'comparator' => '<',
        'value' => '2017-09-01 00:00:00'
      );
    }

    if (isset($_POST['september'])) {
      $conditions[0] = array(
        'field' => 'end',
        'comparator' => '>=',
        'value' => '2017-09-01 00:00:00'
      );
      $conditions[1] = array(
        'field' => 'end',
        'comparator' => '<',
        'value' => '2017-10-01 00:00:00'
      );
    }

    //example: search on title
    if (isset($_POST['query'])) {
      $conditions[0] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_POST['query']
      );
    }

    //example: search on tag name
    if (isset($_POST['tag'])) {
      $conditions[0] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_POST['tag']
      );
    }

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

  public function detail() {
    $events = $this->eventDAO->selectById($_GET['id']);
    $this->set('events', $events);
  }

  private function handleRegistration(){
    if($this->eventDAO->insert($_POST)) {
      // $_SESSION['info'] = 'Registratie was succesvol';
      $this->redirect('index.php');
    } else {
      $errors = $this->eventDAO->validateRegistrationData($_POST);
      $_SESSION["error"] = $errors;
      $this->redirect('index.php');
    }
  }

}
