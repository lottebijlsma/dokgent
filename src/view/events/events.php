<section class='events content'>
  <header>
    <h1><em class='section-title'>Wat kan je nog verwachten</em></h1>
  </header>
  <div class='filter'>
  </div>
  <div class='event'>
    <?php foreach($events as $event): ?>
      <article>
        <header></header>
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
</section>
