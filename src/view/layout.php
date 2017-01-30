<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='X-UA-Compatible' content='IE=Edge'>
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: ['Rubik:400,500,700'] }
      };

      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>
    <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
    <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>
    <header>
      <div class='main-nav'>
        <a href="/">
          <h1 class='logo'><span class='hidden'>DOKGent</span></h1>
        </a>
        <nav>
          <ul id='main-nav-links' class='main-nav-links'>
            <li>
              <a class='nav-link <?php if(empty($_GET['page']) || $_GET['page'] === 'home') {
              echo 'nav-link-active';}?>' href="/">Home</a>
            </li>
            <li>
              <a class='nav-link <?php if($_GET['page'] === 'events' || $_GET['page'] === 'detail' ) {echo 'nav-link-active';}?>' href="?page=events">Programma</a>
            </li>
            <li><a class='nav-link' href="">Informatie</a></li>
            <li><a class='nav-link' href="">Blog</a></li>
          </ul>
          <div class='mobile-nav-toggle'>
            <input type="checkbox" />
            <span class='nav-link'>menu</span>
            <ul class='mobile-nav-links'>
              <li>
                <a class='nav-link <?php if(empty($_GET['page']) || $_GET['page'] === 'home') {
                echo 'nav-link-active';}?>' href="/">Home</a>
              </li>
              <li>
                <a class='nav-link <?php if($_GET['page'] === 'events' || $_GET['page'] === 'detail' ) {echo 'nav-link-active';}?>' href="?page=events">Programma</a>
              </li>
              <li><a class='nav-link' href="">Informatie</a></li>
              <li><a class='nav-link' href="">Blog</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class='fold'>
        <img src='../assets/svg/dok17.svg' alt="">
      </div>
      <div class='container'>
        <?php echo $content; ?>
      </div>
    </main>
    <footer>
      <div class='footer-wrap content'>
        <div class='contact-info'>
          <img src='./assets/img/doklogo.png' alt="logo van DOKGent" width="100">
          <address class='contact'>
            <p>Adres: Koopvaardijlaan 13</p>
            <p>Telefoon: 09 224 19 40</p>
          </address>
        </div>
        <div class="social-media">
          <h1 class='socials'>Sociale media</h1>
          <a href="https://www.facebook.com/DOKgent/"><img src='../assets/svg/facebook.svg' alt='Social media icoon voor Facebook' height="20"></a>
          <a href="https://twitter.com/dokgent"><img src='../assets/svg/twitter.svg' alt='Social media icoon voor Twitter' height="20"></a>
          <a href="https://www.instagram.com/dokgent/"><img src='../assets/svg/instagram.svg' alt='Social media icoon voor Instagram' height="20"></a>
          <a href="https://vimeo.com/dokgent"><img src='../assets/svg/vimeo.svg' alt='Social media icoon voor Vimeo' height="20"></a>
        </div>
      </div>
    </footer>
    <?php echo $js;?>
  </body>
</html>
