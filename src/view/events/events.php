<section class='highlights content'>
  <div class='highlight-header'>
    <header>
      <h1><em class='section-title'>Evenementen in de kijker</em></h1>
    </header>
    <a class='all-events' href='?page=events'>Bekijk alle evenementen</a>
  </div>
  <div class='highlight-events'>
    <?php foreach ($images as $image): ?>
      <a href='index.php?page=detail&amp;id=<?php echo($image['id']); ?>'>
        <h2 class='event-highlight-title'><?php echo $image['title']; ?></h2>
        <img alt='Afbeeldingen evenementen in spotlight' class='highlight-image' height='250' src="assets/img/database/thumb-<?php echo($image['img'])?>">
      </a>
    <?php endforeach; ?>
  </div>
</section>
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
        <h4>Zoek op maand</h4>
        <div class='select-month'>
          <div class='months'>
            <input type="radio" name="mei"/>
            <label>mei</label> <br/>
            <input type="radio" name="juni"/>
            <label>juni</label><br/>
            <input type="radio" name="juli"/>
            <label>juli</label><br/>
          </div>
          <div class='months'>
            <input type="radio" name="augustus"/>
            <label>augustus</label><br/>
            <input type="radio" name="september"/>
            <label>september</label>
          </div>
        </div>
        <h4>Zoek op titel</h4>
        <input class='main-input' type="text" id="search" name="query" placeholder="Zoek op titel"/>
        <input type="hidden" name="page" value="search"/>
        <h4 class='hide-mobile'>Zoek op tags</h4>
        <div class='styled-select hide-mobile'>
          <select name='tag' id='tag'>
            <option disabled selected>Kies een tag</option>
            <?php foreach ($tags as $tag): ?>
              <option><?php echo($tag['tag']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <br/>
        <input class='submit-btn' type="submit" name="action" value="zoek"/>
      </form>
    </div>
    <div class='event'>
      <?php foreach($events as $event): ?>
        <div>
          <a href='index.php?page=detail&amp;id=<?php echo($event['id']); ?>'>
            <h2 class='event-title'><?php echo $event['title']; ?></h2>
            <img alt='Afbeelding van evenement' class='event-image' width='275' src="assets/img/database/thumb-<?php echo($event['img'])?>">
          </a>
          <p class='tag'><?php foreach($event['tags'] as $tag): ?>
            <?php echo $tag['tag'];?><?php endforeach;?>
          </p>
        </div>
      <? endforeach;?>
    </div>
  </div>
</section>
