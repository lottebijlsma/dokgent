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
        <img class='highlight-image' src="../assets/img/database/<?php echo($image['img']);?>" alt="img van gehighlighte evenementen" height="250">
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
            <input type="radio" name="mei" value="">
            <label for="">mei</label> <br/>
            <input type="radio" name="juni" value="">
            <label for="">juni</label><br/>
            <input type="radio" name="juli" value="">
            <label for="">juli</label><br/>
          </div>
          <div class='months'>
            <input type="radio" name="augustus" value="">
            <label for="">augustus</label><br/>
            <input type="radio" name="september" value="">
            <label for="">september</label>
          </div>
        </div>
        <h4>Zoek op titel</h4>
        <input class='main-input' type="text" id="search" name="query" placeholder="Zoek op titel" value="">
        <input type="hidden" name="page" value="search">
        <h4>Zoek op tags</h4>
        <div class='styled-select'>
          <select name='tag' id='tag' placeholder=" een tag">
            <option value"" disabled selected>Kies een tag</option>
            <?php foreach ($tags as $tag): ?>
              <option><?php echo($tag['tag']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <input class='submit-btn' type="submit" name="action" value="zoek">
      </form>
    </div>
    <div class='event'>
      <?php foreach($events as $event): ?>
        <div>
          <a href='index.php?page=detail&amp;id=<?php echo($event['id']); ?>'>
            <h2 class='event-title'><?php echo $event['title']; ?></h2>
            <img class='event-image' src="./assets/img/database/<?php echo($event['img']); ?>" alt='foto van het evenement' width="275"/>
          </a>
          <p class='tag'><?php foreach($event['tags'] as $tag): ?>
            <?php echo $tag['tag'];?><?php endforeach;?>
          </p>
        </div>
      <? endforeach;?>
    </div>
  </div>
</section>
