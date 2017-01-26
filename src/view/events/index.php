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
        <!-- <svg width="1282px" height="441px" viewBox="35 0 1282 441" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <desc>Created with Sketch.</desc>
            <defs>
              <clipPath id='clippy'>
                  <path d="M36,32 C36,32 155.080725,-4.68243466 339.577695,1.32491244 C524.074665,7.33225953 701.520724,54.1500073 818.183201,54.1500073 C938.199258,54.1500073 1065.89987,18.5479025 1155.80508,13.4147353 C1245.71029,8.28156819 1316,32 1316,32 L1316,440 C1316,440 1065.86658,407.988286 948.22025,407.988286 C885.479837,407.988286 834.766912,427.235757 609.090715,431.50342 C159.78723,440 36,398.2514 36,398.2514 L36,32 Z" id="section-bg" stroke="#979797" stroke-width="1" fill="none" transform="translate(676.000000, 220.330056) scale(1, -1) translate(-676.000000, -220.330056) "></path>
              <clipPath/>
            </defs>
        </svg> -->
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
  <div class='events'>
    <?php foreach ($images as $image): ?>
      <img class='highlight-image' src="../assets/img/database/<?php echo($image['img']);?>" alt="img van gehighlighte evenementen" height="250">
    <?php endforeach; ?>
  <!-- Vier evenementen uit de database die tag hebben: in de kijker -->
  </div>
</section>

<section class='agenda'>
  <header class='content'>
    <h1><em class='section-title'>Agenda</em></h1>
  </header>
</section>
