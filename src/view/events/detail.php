<section class='event-detail content'>
  <header>
    <h1><em class='section-title'><?php echo($events['title']);?></em></h1>
  </header>
  <div class='event-content'>
    <img class="event-detail-image" src="../assets/img/database/<?php echo($events['img']);?>" alt="afbeelding van evenement" width="600"/>
    <div class='event-detail-about'>
      <div class='mobile-position-change'>
        <div class='desc-about'>
          <h3><?php echo($events['title']);?></h3>
          <p><?php echo($events['description']);?></p>
        </div>
        <div class='desc-specs'>
          <dl>
            <div class='item'>
              <dt>Datum:</dt>
              <dd> <?php $dt = new DateTime($events['start']);  $date = $dt->format('d M'); echo $date; ?> -
              <?php $dt = new DateTime($events['end']);  $date = $dt->format('d M'); echo $date; ?></dd>
            </div>
            <div class='item'>
              <dt>Tijdstip:</dt>
              <dd> <?php $dt = new DateTime($events['start']);  $date = $dt->format('H'); echo $date; ?>u - <?php $dt = new DateTime($events['end']);  $date = $dt->format('H'); echo $date; ?>u</dd>
            </div>
            <div class='item'>
              <dt>Locatie:</dt>
              <dd> <?php echo($events['location']);?></dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>
</section>
