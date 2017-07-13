<!DOCTYPE html>

<html lang="en">
    
<!-- Mirrored from www.coderare.com/new/counselor.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2017 23:45:33 GMT -->
<head>
      <meta charset="utf-8">
      <title>POP Money Matrix</title>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

      <!-- Favicon ================== -->
      <!-- Standard -->
      <link rel="shortcut icon" href="img/favicon-144.png">
      <!-- Retina iPad Touch Icon-->
      <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-144.png">
      <!-- Retina iPhone Touch Icon-->
      <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-114.png">
      <!-- Standard iPad Touch Icon-->
      <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-72.png">
      <!-- Standard iPhone Touch Icon-->
      <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-57.png">

      <!--  Resources style ================== -->
      <link href="css/veryblue.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>

    </head>
    <body>
      <section id="parent" class="animsition">

        <div id="leftSide" class="color full-height">
          <div id="particles-js"></div>
          <div class="count-particles">
            <span class="js-count-particles"></span>
          </div>


          <div id="home" class="center text-center col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <!-- Your logo -->
  			    <!-- <img src="img/logo.png" alt="logo" class="quick fadeIn align-center mt50 mb70 main-logo" /> -->

            <div class="h-content top-25">
              <h3 class="mid animated fadeInUp fw500 italic mb10 pacifico">Coming Soon..!</h3>
              <h1 class="mid animated fadeInUp mb30 medium-heading fw700">We are getting ready
              to launch.</h1>

              <div class="mt40 slow animated fadeInUp">
                <div id="subscribe" class="fadeup vertical center compress">

                    <form
                    id="subscribe-form" class="vertical-form   compressed-form"
                    action="/send" method="post">
                    {{csrf_field()}}
                      <input type="email" name="email-address" class="input-email round mr10" placeholder="Email Address">
                      <button type="submit" name="subscribe" class="submit btn-solid round input-submit"><i class="ion-android-send"></i></button>

                    </form>
                  </div>
              </div>
            </div>

            <div class="copyright quick fadeIn align-bottom fixed">
              <p class="block  fw400">
               &copy; 2017 - Made with <i class="ti-heart pr5 pl5"></i> by <span class="notoSerif italic fw600"><a href="http://easaber.com" target="_blank">easaber</a></span>.
              </p>
            </div>

            <div class="vertical-result">
              <div id="subscribe-result" class="vertical-result fixed col-sm-10 align-bottom">
              </div>
            </div>
          </div>



        </div>


        <div id="rightSide" class="visible img-only">
          <div class="background-img-holder">
            <img src="img/bg.png" alt="This is my work">
          </div>

        </div>
      </section>


      <script src="js/jquery-1.11.3.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/animsition.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/photoswipe.min.js"></script>
      <script src="js/photoswipe-ui-default.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/particles.min.js"></script>
      <script src="js/script.js"></script>
      <script type="text/javascript">
        particlesJS("particles-js", {"particles":{"number":{"value":20,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"triangle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":8,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
      </script>
  </body>

<!-- Mirrored from www.coderare.com/new/counselor.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2017 23:45:38 GMT -->
</html>
