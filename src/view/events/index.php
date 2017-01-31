<section class='about'>
  <div class='content-wrap content'>
    <div class='about-content'>
      <picture class='about-image'>
        <source media="(max-width: 800px)" srcset="assets/img/default.gif"/>
        <source type="image/webp" srcset="./assets/img/about-image.webp"/>
        <img src="./assets/img/about-image.png" alt="about sectie afbeelding"/>
      </picture>
    </div>
    <div class='about-content about-container'>
      <header>
        <h1><em class='section-title'>"Een werfplek voor verpozing <br/> &amp; creatieve manoeuvres"</em></h1>
      </header>
      <p class='about-info'>Een <em class='text-em-small'>ontmoetingsplek</em>, een platform voor <em class='text-em-small'>creatie</em> en een werkplek,
        maar tegelijkertijd ook een publieksplek met grote en kleine <em class='text-em-small'>evenementen</em>
        voor jong en oud, waar <em class='text-em-small'>iedereen welkom</em> is. Een project waar ook organisaties,
        buurtbewoners, aanstormend artistiek talent, bedrijven enz. worden betrokken.
      </p>
      <a class='btn' href="?page=events">Bekijk het programma</a>
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
        <img alt='foto van evenement in de spotlight' class='highlight-image' height='250' src="assets/img/database/thumb-<?php echo($image['img'])?>"/>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<section class='agenda'>
  <div class='content'>
    <header>
      <h1><em class='section-title'>Agenda</em></h1>
    </header>
    <div class='calendar-wrap content'>
      <table class='calendar-view'>
        <tr>
          <td class='calendar-day'>1</td>
          <td class='calendar-day'>2</td>
          <td class='calendar-day'>3</td>
          <td class='calendar-day'>4</td>
          <td class='calendar-day'>5</td>
          <td class='calendar-day'>6</td>
          <td class='calendar-day'>7</td>
        </tr>
        <tr>
          <td class='calendar-day'>8</td>
          <td class='calendar-day'>9</td>
          <td class='calendar-day'>10</td>
          <td class='calendar-day calendar-day-event'>11</td>
          <td class='calendar-day'>12</td>
          <td class='calendar-day'>13</td>
          <td class='calendar-day'>14</td>
        </tr>
        <tr>
          <td class='calendar-day'>15</td>
          <td class='calendar-day'>16</td>
          <td class='calendar-day'>17</td>
          <td class='calendar-day'>18</td>
          <td class='calendar-day calendar-day-event'>19</td>
          <td class='calendar-day'>20</td>
          <td class='calendar-day'>21</td>
        </tr>
        <tr>
          <td class='calendar-day'>22</td>
          <td class='calendar-day calendar-day-event'>23</td>
          <td class='calendar-day calendar-day-event'>24</td>
          <td class='calendar-day'>25</td>
          <td class='calendar-day'>26</td>
          <td class='calendar-day'>27</td>
          <td class='calendar-day'>28</td>
        </tr>
      </table>
      <div class='active-events'>
        <header>
          <h1>Met vandaag:</h1>
        </header>
        <ul class='event-today'>
          <li>Cosy Cosy</li>
          <li>Blanco Elisabeth Van Dam</li>
          <li>Koffie, Taart en Gazetten</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class='newsletter content'>
  <header>
    <h1><em class='section-title'>Blijf op de hoogte</em></h1>
  </header>
  <p>Schrijf je in op onze nieuwsbrief om op de hoogte te blijven van alle coole dingen die bij DOKGent gebeuren.</p>
  <form action="index.php" method="post">
    <input class='newsletter-input' type='email' name='email' id='email' placeholder='ronaldmcdonald@gmail.com' required />
    <input class='submit-btn' type="submit" value="oké"/>
    <p class="error"></p>
  </form>
</section>
