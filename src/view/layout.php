<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: ['Rubik'] }
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
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
      <div class='main-nav'>
      <ul>
        <li><a class='nav-link' href="">Home</a></li>
        <li><a class='nav-link' href="">Programma</a></li>
        <li><a class='nav-link' href="">Informatie</a></li>
        <li><a class='nav-link' href="">Blog</a></li>
        <li><a class='nav-link' href="">&hearts;</a></li>
      </ul>
      <img src='../assets/svg/doklogo.svg' alt="">
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
  </body>
</html>
