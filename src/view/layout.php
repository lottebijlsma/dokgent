<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='X-UA-Compatible' content='IE=Edge'>
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: ['Rubik:400,500,700'] }
      };

      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>

    <!-- <script type="text/javascript">
      WebFontConfig = {
        google: { families: ['Rubik:400,500,700'] }
      };

      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script> -->
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
      <div class='main-nav'>
        <a href="/"><img src='../assets/img/doklogo.png' alt="logo van DOK Gent" width="100"></a>
      <ul class='main-nav-links'>
        <li><a class='nav-link <?php if(empty($_GET['page']) || $_GET['page'] === 'home') {
          echo 'nav-link-active';
        }?>' href="/">Home</a></li>
        <li><a class='nav-link <?php if($_GET['page'] === 'events') {
          echo 'nav-link-active';
        }?>' href="?page=events">Programma</a></li>
        <li><a class='nav-link' href="">Informatie</a></li>
        <li><a class='nav-link' href="">Blog</a></li>
        <li><a class='nav-link' href="">&hearts;</a></li>
      </ul>
      </div>
    </header>
    <main>
      <div class='fold'>
        <img src='../assets/svg/dok17.svg' alt="">
      </div>
      <div class="container">
        <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
        <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

        <?php echo $content; ?>
      </div>

      <?php echo $js;?>
    </main>
    <footer>
      <div class='content-wrap content'>
        <div class='contact-info'>
          <img src='./assets/img/doklogo.png' alt="logo van DOKGent" width="100">
          <address class='contact'>
            <p>Adres: Koopvaardijlaan 13</p>
            <p>Telefoon: 09 224 19 40</p>
          </address>
        </div>
        <!-- <div class="social-media">

        </div> -->
      </div>
    </footer>
  </body>
</html>
