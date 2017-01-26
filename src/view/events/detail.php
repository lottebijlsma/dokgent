<section class='event-detail content'>
  <header>
    <h1><em class='section-title'><?php echo($events['title']);?></em></h1>
  </header>
  <div class='event-content'>
    <img class="event-detail-image" src="../assets/img/database/<?php echo($events['img']);?>" alt="afbeelding van evenement" width="600"/>
    <div class='event-detail-about'>
      <div>
        <div class='desc-about'>
          <h3><?php echo($events['title']);?></h3>
          <p><?php echo($events['description']);?></p>
        </div>
        <div class='desc-specs'>
          <dl>
            <dt>Datum:</dt>
            <dd> <?php echo($events['start']);?> - <?php echo($events['end']);?></dd>
            <!-- <dt>Locatie</dt><dd><?php echo($events['location']);?></dd> -->
          </dl>
        </div>
      </div>
    </div>
  </div>
</section>
