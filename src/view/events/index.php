<section class='about'>
  <div class='content-wrap content'>
    <div class='about-content content'>
      <header>
        <h1><em class='section-title'>"Een werfplek voor verpozing <br/ >&amp; creatieve manoeuvres"</em></h1>
      </header>
      <p class='about-info'>Een <em class='text-em-small'>ontmoetingsplek</em>, een platform voor <em class='text-em-small'>creatie</em> en een werkplek,
        maar tegelijkertijd ook een publieksplek met grote en kleine <em class='text-em-small'>evenementen</em>
        voor jong en oud, waar <em class='text-em-small'>iedereen welkom</em> is. Een project waar ook organisaties,
        buurtbewoners, aanstormend artistiek talent, bedrijven enz. worden betrokken.</p>
        <button type='submit' name="button"><a href='#'>Bekijk het programma</a></button>
    </div>
    <div class='about-image'>
      <img class='about-image' src="./assets/img/placeholder.png" alt="">
    </div>
  </div>
</section>

<section class='highlights content'>
  <div class='highlight-header'>
    <header>
      <h1><em class='section-title'>Evenementen in de kijker</em></h1>
    </header>
    <a href='?page=events'>Bekijk alle evenementen</a>
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

<section class='agenda'>
  <header class='content'>
    <h1><em class='section-title'>Agenda</em></h1>
  </header>
</section>
