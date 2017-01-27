<section class='events content'>
  <header>
    <h1><em class='section-title'>Wat kan je nog verwachten</em></h1>
  </header>
  <div class='events-content'>
    <div class='filter' id='filter'>
      <header>
        <h1>Zoek je favoriete event</h1>
      </header>
      <form action="?page=events" method="post">
        <h4>Zoek op titel</h3>
        <input type="text" id="search" name="query" placeholder="Zoek op titel" value="">
        <input type="hidden" name="page" value="search">

        <h4>Zoek op tags</h3>
        <div class='styled-select'>
          <select class='tag' name='tag' id='tag' placeholder=" een tag">
            <option value"" disabled selected>Kies een tag</option>
            <?php foreach ($tags as $tag): ?>
              <option><?php echo($tag['tag']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <input class='zoeken' type="submit" name="action" value="zoek">
      </form>
    </div>
    <div class='event'>
      <?php foreach($events as $event): ?>
        <article>
          <a href='index.php?page=detail&amp;id=<?php echo($event['id']); ?>'>
            <h2 class='event-title'><?php echo $event['title']; ?></h2>
            <img class='event-image' src="./assets/img/database/<?php echo($event['img']); ?>" alt='foto van het evenement' width="270"/>
          </a>
          <dl>
            <!-- <dt>start</dt><dd><?php echo $event['start'];?></dd>
            <dt>end</dt><dd><?php echo $event['end'];?></dd>
            <dt>organiser</dt><dd><?php echo $event['organiser'];?></dd>
            <dt>title</dt><dd><?php echo $event['title'];?></dd>
            <dt>locations</dt><dd><ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
            <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd> -->
            <p class='tag'><?php foreach($event['tags'] as $tag): ?><?php echo $tag['tag'];?><?php endforeach;?></p>
          </dl>
        </article>
      <? endforeach;?>
    </div>
  </div>
</section>
<section class='highlights content'>
  <div class='highlight-header'>
    <header>
      <h1><em class='section-title'>Evenementen in de kijker</em></h1>
    </header>
  </div>
  <div class='events'>
    <?php foreach ($images as $image): ?>
      <img class='highlight-image' src="../assets/img/database/<?php echo($image['img']);?>" alt="img van gehighlighte evenementen" height="250">
    <?php endforeach; ?>
  </div>
</section>
