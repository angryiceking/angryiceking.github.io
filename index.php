<!-- disclaimer, stylish-portfolio start bootstrap theme used to create this site.  -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>King</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/font-awesome/fonts/sanpro.css" rel="stylesheet" type="text/css">
  <link href="css/stylish-portfolio.css" rel="stylesheet">
</head>

<body>
  <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
        <i class="fa fa-times"></i>
      </a>
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#top">King</a>
      </li>
      <li>
        <a class="js-scroll-trigger" href="#top">About me? I'm also an idiot.</a>
      </li>
      <!-- <li>
        <a class="js-scroll-trigger" href="#about">About Myself</a>
      </li>
      <li>
        <a class="js-scroll-trigger" href="#services">Work</a>
      </li>
      <li>
        <a class="js-scroll-trigger" href="#portfolio">Hobbies</a>
      </li>
      <li>
        <a class="js-scroll-trigger" href="#contact" onclick=$( "#menu-close").click();>Contact</a>
      </li> -->
    </ul>
  </nav>

  <header class="header" id="top">
    <div class="text-vertical-center"  >
      <h1 style="color: #fff; margin-top: -3% !important;" id="headingone"></h1>
      <h1 style="color: #fff" id="headingone-part2"></h1>
      <h3 style="color: #fff" id="headingtwo"></h3>
      <hr>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6 text-center ">
            <div class="row">
              <div class="col-md-8">

              </div>
              <div class="col-md-4" id="games" style="display:none">
                <p><small style="color: #fff;">I actively play these games!</small></p>
                <img src="img/chika.png" class="img img-circle" style="width: 50px; height: 50px;" data-toggle="tooltip" title="Love Live! School Idol Festival! WW Server / Rin-boi ♥">
                <img src="img/honkai.png" class="img img-circle" style="width: 50px; height: 50px;" data-toggle="tooltip" title="Honkai Impact 3 - SEA Server / AngryIceKing">
                <img src="img/dota2.png" class="img img-circle" style="width: 50px; height: 50px;" data-toggle="tooltip" title="Defense of the Ancients 2 - 7.07 1k MMR / King">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-center col-md-4 col-md-offset-4" id="frameworks" style="display:none;">
              <p><small style="color: #fff;">and this langs/frameworks!</small></p>
              <img src="img/python.png" class="img img-circle" style="width: 50px; height: 50px;" data-toggle="tooltip" title="Best Python (Django / Pygame / RenPy)">
              <img src="img/php.png" class="img img-circle" style="width: 50px; height: 50px;" data-toggle="tooltip" title="Shitty PHP (CI and Laravel)">
              <img src="img/vue.png" class="img img-circle" style="width: 50px; height: 50px;" data-toggle="tooltip" title="Easy to use VueJS!">
            </div>
          </div>
        </div>
      </div>
      <div class="text-center center-block" id="contact" style="display:none; color: #fff; margin-top: 220px;">
        <p><small style="color: #fff;">Reach me with this sites.</small></p>
        <a href="https://github.com/angryiceking" class="btn btn-xs btn-light"><i class="fa fa-github" id="git" style="font-size: 2em; display:none;"></i></a>
        <a href="https://facebook.com/carljshra" class="btn btn-xs btn-light"><i class="fa fa-facebook" id="fb" style="font-size: 2em; display:none; padding-left: 30px; padding-right: 30px;">
        </i></a>
        <a href="https://twitter.com/user/goingcc" class="btn btn-xs btn-light"><i class="fa fa-twitter" id="tw" style="font-size: 2em; display:none;"></i></a>
      </div>
      <br>
    </div>
  </header>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      memelist = [
      'giphy.gif',
      'giphy2.gif',
      'giphy3.gif',
      'giphy4.gif',
      'giphy5.gif',
      'giphy6.gif',
      'giphy7.gif',
      'giphy8.gif',
      'giphy9.gif'
      ];
      var showText = function (target, message, index, interval) {   
        if (index < message.length) {
          $(target).append(message[index++]);
          setTimeout(function () { showText(target, message, index, interval); }, interval);
        }
      }

      showText("#headingone", "Hello", 0, 50)
      setTimeout(function(){
        showText("#headingone-part2", "Nice to meet you", 0, 50)
      }, 50*10);
      setTimeout(function(){
        showText("#headingtwo", "My name is carl. I'm angryiceking -- a meme collector, pessimist, fanatic, obsessive-compulsive, a bit of a perfectionist, a developer and a simple guy.", 0, 30)
      }, 50*30);
      setTimeout(function(){
        $('#games').fadeIn(1500);
        $('#frameworks').fadeIn(1500);
      }, 6500);
      setTimeout(function(){
        // $('.header').css('background-image', 'url(../wiseking/img/chuck.gif)');
      }, 9000);
      setTimeout(function(){
        $('#contact').fadeIn(1000);
      }, 7000)
      setTimeout(function(){
        $('#git').fadeIn(1500);
      }, 7500);
      setTimeout(function(){
        $('#fb').fadeIn(1500);
      }, 8000);
      setTimeout(function(){
        $('#tw').fadeIn(1500);
      }, 8500);

    })
  </script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/stylish-portfolio.js"></script>

</body>

</html>
