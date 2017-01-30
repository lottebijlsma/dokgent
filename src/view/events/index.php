<section class='about'>
  <div class='content-wrap content'>
    <div>
      <picture class='about-image'>
        <source media="(max-width: 585px)" srcset="./assets/img/default.gif" />
        <source type="image/webp" media="(min-width: 878px)" srcset="./assets/img/about-image.webp" />
        <source media="(min-width: 878px)" srcset="./assets/img/about-image.png" />
      </picture>
      <!-- <img class='about-image' src="./assets/img/about-image.png" alt=""> -->
    </div>
    <div class='about-content about-container'>
      <header>
        <h1><em class='section-title'>"Een werfplek voor verpozing <br/ >&amp; creatieve manoeuvres"</em></h1>
      </header>
      <p class='about-info'>Een <em class='text-em-small'>ontmoetingsplek</em>, een platform voor <em class='text-em-small'>creatie</em> en een werkplek,
        maar tegelijkertijd ook een publieksplek met grote en kleine <em class='text-em-small'>evenementen</em>
        voor jong en oud, waar <em class='text-em-small'>iedereen welkom</em> is. Een project waar ook organisaties,
        buurtbewoners, aanstormend artistiek talent, bedrijven enz. worden betrokken.</p>
        <button type='submit' name="button"><a href='?page=events'>Bekijk het programma</a></button>
    </div>
  </div>
</section>

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
        <img class='highlight-image' height="250" src="../assets/img/database/<?php echo($image['img']);?>"
          srcset="../assets/img/database/thumb-<?php echo($image['img']);?> 400w">
        <!-- <img class='highlight-image' height='250' src="../assets/img/database/thumb-<?php echo($image['img'])?>"> -->
      </a>
    <?php endforeach; ?>
  </div>
</section>

<section class='agenda'>
  <header class='content'>
    <h1><em class='section-title'>Agenda</em></h1>
  </header>
</section>

<section class='newsletter content'>
  <header>
    <h1><em class='section-title'>Blijf op de hoogte</em></h1>
  </header>
  <p>Schrijf je in op onze nieuwsbrief om op de hoogte te blijven van alle coole dingen die bij DOKGent gebeuren.</p>
  <form action="index.php" method="post">
    <input class='newsletter-input' type='email' name='email' id='email' placeholder='ronaldmcdonald@gmail.com' required>
    <input class='submit-btn' type="submit" value="oké">
    <p class="error"></p>
  </form>
</section>
