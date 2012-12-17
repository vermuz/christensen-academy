<!DOCTYPE html>
<html>
	<head>
		<title>Christensen Academy</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Cameron Christensen">
		<meta name="keywords" content="computer science, programming, learn, java, javascript, html, css, binary, processing, flash, actionscript, image manipulation, game maker">
		<meta name="description" content="A gateway to the world of computer science, a place where you can learn about computers and computer programming for free!">
    <link rel="shortcut icon" href="img/logo16.png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/colorbox.css" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="css/ca.css" rel="stylesheet">
    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30969336-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/showdown.js"></script>
<script src="js/jquery.blend-min.js"></script>
<script src="js/jquery.colorbox.js"></script>
	</head>
	<body>
	<div class="navbar nav-top navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand">Christensen Academy</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="dropdown">
                <a href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown">
                    Learn
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#cs-basics" class="cs-basics-color">Computer Science Basics</a>
                    <ul class="dropdown-menu">
                      <li><a href="#computer-basics" class="cs-basics-color">Computer Basics</a></li>
                      <li><a href="#binary" class="cs-basics-color">Binary</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#web" class="web-color">Web Design and Development</a>
                    <ul class="dropdown-menu">
                      <li><a href="#web-design-and-development-intro" class="web-color-color">Web Design and Development Intro</a></li>
                      <li><a href="#html-basics" class="web-color-color">HTML Basics</a></li>
                      <li><a href="#css-basics" class="web-color-color">CSS Basics</a></li>
                      <li><a href="#css-layouts" class="web-color-color">CSS Layouts</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#game-maker" class="game-maker-color">Game Maker</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#processing" class="processing-color">Processing</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#java" class="java-color">Java</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#flash" class="flash-color">Flash</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#brain-teasers" class="brain-teasers-color">Brain Teasers</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#image-manipulation" class="image-manipulation-color">Image Manipulation</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a tabindex="-1" href="#office" class="office-color">Office Applications</a>
                  </li>
                </ul>
              </li>
              <li><a data-toggle="modal" href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<div class="modal hide fade" id="contact">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>cameron@christensenacademy.org</h3>
	  </div>
	</div>
	
  <div class="container-fluid">
    <div class="hero-unit hidden-phone" style="background:none">
      <div class="row-fluid">
        <div class="span2">
          <img src="img/logo112.png" style="display:block;margin:0 auto;" alt="The Christensen Academy Logo">
        </div>
        <div class="span10">
          <h1>Hello World!</h1>
          <p>Welcome to the Christensen Academy&ndash;a gateway to the world of computer science, a place where you can learn about computers and computer programming for free!</p>
        </div>
      </div>
    </div>   
  </div>

  <?php include('./modules/classes.php'); ?>
  
  <div class="container-fluid subject-area" id="cs-basics">   
    <?php include('./modules/computer-basics/module.php'); ?>
    <?php include('./modules/binary/module.php'); ?>
  </div>
      
  <div class="container-fluid subject-area" id="web">   
    <?php include('./modules/web-design-and-development-intro/module.php'); ?>
    <?php include('./modules/html-basics/module.php'); ?>
    <?php include('./modules/css-basics/module.php'); ?>
    <?php include('./modules/css-layouts/module.php'); ?>
          
          <!--
          <div class="row-fluid playlist">
            <div class="span12" id="javascript-basics">
              <h3>
                JavaScript Basics <small class="hidden-phone">with jQuery</small>
              </h3>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="html-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">HTML <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">XHTML vs. HTML</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Why "A" is for Anchor</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Make One or More Elements into a Link</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Quirks Mode</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML5 Boilerplate</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Structural Elements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Tables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Deprecated HTML Attributes</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">The lang (Language) Attribute</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="css-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">CSS <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5t_4_UMo4JY?rel=0">Pre Element and white-space</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/C1-gW70Wszc?rel=0">CSS Nested Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Grouped Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Universal Selector</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Advanced CSS Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Elements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/AiOgwMmAkiQ?rel=0">CSS rgba (transparent colors)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/rQbs-QaFtbk?rel=0">CSS @import</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS for Tables (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS for Tables (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Link Tag Media Attribute for CSS</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Styling Forms (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Styling Forms (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="javascript-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">JavaScript <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="web-related">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Related Topics</h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Browser Plugins</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6sch0T2PUS4?rel=0">Browser Cache Explanation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Flash</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Information Architecture</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Information Architecture Challenge: School Website</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Navigation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Usability</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Accessibility</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Typography (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Typography (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div> 
          
          <div class="row-fluid playlist">
            <div class="span12" id="web-server">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Server Side Programming <small class="hidden-phone">an Introduction...</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
        </div>
       -->
      </div>




<!-- *****************************
      GAME MAKER
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="game-maker" >
          <h2>Game Maker <small class="hidden-phone">Learn how to make computer games!</small></h2>

          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-intro">
              <h3>Intro to Game Maker</h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/tOasHfeLIGc?rel=0">Game Maker Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KA3WEs0aZJ0?rel=0">Game Maker Versions</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/9lu_t4odW2M?rel=0">Why Learn Game Maker?</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NFFFjP9EQFw?rel=0">Why Learn through Projects?</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/19ixFAFsmZc?rel=0">A Successful Attitude</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p1">
              <h3>Project: On the Loose! <small class="hidden-phone">Create Your First Game!</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="">Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/gXJuQ0MN_gw?rel=0">Create, Save, and Play</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zf4LE4ImH0g?rel=0>Resources (Images and Sounds)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ho_l7QDl3jk?rel=0">Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/r3TGBebLSU0?rel=0">Objects, Rooms, and Instances</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DhdB9pvBmVg?rel=0">Events and Actions (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/OJ4QyCI7zL4?rel=0">Events and Actions (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Ah6ae2sBC0s?rel=0">Music and Sounds</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NLB_0sRW2Bc?rel=0">Alarms</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/uzNxavrvefQ?rel=0">Increasing the Difficulty</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/t1Wn7TQTX94?rel=0">Relative Speeds</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/z-ei8xibAxY?rel=0">Game Info</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/dR1YdUNHe4U?rel=0">Rubric Discussion</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p2">
              <h3>Project: Projectile Comet <small class="hidden-phone">A Game of Intergalactic Wizardry!</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="">Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/tOqGYO6nuQ0?rel=0">Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/VPRjRuACJjI?rel=0">Coordinates and Wizard Movement</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/127tmb9qwX4?rel=0">Set Wizard Boundaries</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EW2RaIfyk04?rel=0">Shoot Comets</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EW2RaIfyk04?rel=0">Bad Guys</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/UK-NwGetJGE?rel=0">Comets Hit Bad Guys</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/9jnT4_tszdE?rel=0">Moving Background</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/41Xi8j-TAQQ?rel=0">Score and Health</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/f4k_qth1sFk?rel=0">Enhancement Ideas</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p3">
              <h3>Project: Global Thermonuclear Pong <small class="hidden-phone">Why Not....</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6U6zMyJgRvo?rel=0">Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/q4uTJIESNXg?rel=0">Variables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MJEbu1NNbt4?rel=0">Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/yl4xiCifmxE?rel=0">Left Paddle Movement</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1b_XwfoD3tQ?rel=0">Left Paddle (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GQhbN5mblUo?rel=0">Right Paddle</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/PzR1C8qR2o0?rel=0">Ball Direction and Speed</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Lp8Lf5HFg6Q?rel=0">Ball Bounce</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/a2THVUyZS8k?rel=0">Smart Bounce (Left Paddle)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MrK2XbTovz8?rel=0">Smart Bounce (Right Paddle)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SiN9FBR2qag?rel=0">Score Variables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/7rnUMPNRFjY?rel=0">Drawing the Score (Part 1)</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DiZCaNYmlwM?rel=0">Drawing the Score (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/h5muYUKlwOk?rel=0">Explosoin Animation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/wa3i5AB0MRQ?rel=0">Animation Strips with the GIMP</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/38NZoaKCeCk?rel=0">Animation Sprites from Sprite Sheets</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/b_UByqcP-eA?rel=0">Escalating Difficulty</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DJTV4LBkOH4?rel=0">Wrapping Things Up</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p4">
              <h3>Project: Four <small class="hidden-phone">Great Name. Great Game.</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DPpHEgtZ82k?rel=0">Background Tile Set (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/z1xyrDn3dUI?rel=0">Background Tile Set (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LzqltQ3vEtg?rel=0">Walking Sprite</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Yxg8Z9PoKfw?rel=0">Animated Sprites from Tile Sets</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/T2udr1XO1Bg?rel=0">Game Maker: Finding Animated Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SAZUg6Eoogs?rel=0">Grid Movement</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HaYv0Xzzz2g?rel=0">Inheritance Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/alEfhT7bPec?rel=0">Inheritance for Collisions</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LqMDg7O5HLo?rel=0">Sprite Speed</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/628EtUSeUuw?rel=0">Change Instance</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CYIfwN1AXFM?rel=0">Toggle Sprite Subimages</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/tL0Xrzho8cQ?rel=0">Rooms and Persistence</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      GAME MAKER
     ***************************** -->      
     



<!-- *****************************
      PROCESSING
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="processing" >
          <h2>Processing <small class="hidden-phone">Learn how to program using the Processing language!</small></h2>
 
          <div class="row-fluid playlist">
            <div class="span12" id="processing-intro">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Intro to Processing <small class="hidden-phone"> Why Processing is a Great Intro to Computer Programming</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
<?php include('./modules/khan-cs/module.html'); ?>
          
          <div class="row-fluid playlist">
            <div class="span12" id="processing-intermediate">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Processing Intermediate <small class="hidden-phone">A Step Beyond the Basics</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="processing-advanced">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Processing Advanced <small class="hidden-phone">Digging Deeper Into Advanced Features</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="processing-expert">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Processing Expert <small class="hidden-phone">Go Big or Go Home...</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      PROCESSING
     ***************************** -->        

<!-- *****************************
      JAVA
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="java" >          
<?php include('./modules/java-getting-started/module.php'); ?>
<?php include('./modules/beginning-java/module.php'); ?>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      JAVA
     ***************************** -->   

<!-- *****************************
      FLASH
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="flash" >
          <h2>Adobe Flash <small class="hidden-phone">and ActionScript 3</small></h2>
    
          <div class="row-fluid playlist">
            <div class="span12" id="flash-intro">
              <h3>Intro to Flash and ActionScript 3 <small class="hidden-phone">An Overview of What You Can Make in Flash and What is Involved in the Process</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EdauXIWYOQ4?rel=0">Intro to Flash and ActionScript</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/cfEch0V5dvw?rel=0">Don't Worry about the Version</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/w5Qp7nHyYGY?rel=0">.fla vs .swf</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sDFjfEqnySM?rel=0">Workspace: Reset Essentials</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sU3-Ur8s910?rel=0">Workspace: Stage and Tools Panel</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/bEPHpfsi4dY?rel=0">Zoom</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/PaCKvUtwGTQ?rel=0">Workspace: Timeline and Animation</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jkscZYqAUWY?rel=0">Workspace: Library and Properties Panels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KPKAXHlChAM?rel=0">Workspace: Actions Panel</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Flash Workspace: Recap with Game Examples</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="flash-drawing">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/drawing-in-flash/reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Drawing in Flash<small class="hidden-phone"> Using Flash as a Drawing Tool to Create Vector Graphics</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/JqyyhDKqfrk?rel=0">Intro to Drawing Playlist</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/PBR5QpDvm-o?rel=0">Stroke and Fill</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/VGI1YYa_d8A?rel=0">Ink Bottle and Paint Bucket</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/BbCZcPeDrl8?rel=0">Primitive Shapes vs. Objects Drawings</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/cLxPEVbTNFQ?rel=0">Ordering Objects on the Stage (Arrange)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/_wGWhbQnV2k?rel=0">Colors Basics</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RZ9nTquwmXo?rel=0">Alpha (Transparency and Opacity)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/7-VP3A8Htqw?rel=0">Eyedropper Tool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6MqxZBJRLik?rel=0">Line, Pencil, and Paintbrush Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YRf3LDKf7zQ?rel=0">Vector vs Bitmap (Raster)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/K6g8YAumxnU?rel=0">Subselection Tool (Anchor Points)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ptG9DBSSFf0?rel=0">More on Anchor Points</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1wSg0Ork5XI?rel=0">Paint Bucket Tool (Gap Options)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CZbM9_hypqg?rel=0">Controlling Curves (Anchor Points and Handlebars)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Cbh7pUGEXuU?rel=0">Controlling Curves (Types of Anchor Points)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/hnRW6_XCdGI?rel=0">Pen Tool Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/fyixUWnK8Q0?rel=0">Layers Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Paste in Place</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/WMlukBMuouE?rel=0">Transform Tool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jHF1SQgxahQ?rel=0">Yin Yang Drawing Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/BH1i0mNWCSI?rel=0">Drawing a class="youtube" hand (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/BoVxZjuiF_E?rel=0">Drawing a Car (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YRNv8hXEh-M?rel=0">Drawing a T-Shirt Design (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GEGJLV0n2pg?rel=0">Intro to the Rest of the Drawing Playlist</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/IRXCVialMsw?rel=0">Symbols and Instances</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/V9pLXuVQum0?rel=0">Copy Symbols Between Projects</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/hNSEfcsxIgA?rel=0">Editing Symbols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jSgzLy54yiU?rel=0">Editing Instances</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/2WKb1gH5qJU?rel=0">Symbols Inside of Symbols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/iRaxebpt9R0?rel=0">Flash Coordinate System</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FTRozSAJ8pg?rel=0">Registration Points</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/fICj7OX56gM?rel=0">Transformation Points</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KdOvIjK3wy4?rel=0">Rulers, Grids, and Alignment</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/8OdAX4UfBRM?rel=0">Gradients</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Colors Panel in Depth</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/2lPFE4W3E-Q?rel=0">Text Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/czGCxGP2c3Y?rel=0">Fruit Basket Scene (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/g-Pbdvdc0Vg?rel=0">Monster Example (Example)</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="flash-animation">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/animating-in-flash/reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Animating in Flash <small class="hidden-phone">Using Flash to Make Animated "Movies" with Some Interactive Parts</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Intro to Playlist</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Examples of Animations Online</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4IJtl99pT7I?rel=0">Timeline (Layers and Frames)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ALom2HMiDbs?rel=0">Intro to Reading the Timeline</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/u-BTUgiGkOk?rel=0">Frame-by-Frame Animation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jS3lRTL5Mk8?rel=0">Frame-by-Frame Animation (Eye Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/v0R9RBkewqQ?rel=0">Christensen Academy-Style (Example)</a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/OM5RXq">Frame-by-Frame Animation Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Graphic Symbols vs. Movie Clip Symbols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/olRhUq2ZkkQ?rel=0">Animation in Movie Clip Symbol (Example 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5VPc3imRNCQ?rel=0">Animations in Movie Clips (Example 2)</a></li>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/waMFV2GLy0k?rel=0">Motion Tweens Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NP5LMNTAuJ4?rel=0">Types of Keyframes Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/st4UXzXmGSc?rel=0">Controlling Tween Paths </a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/RnTHR3">Butterfly Animation Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YGt9ZSWznfw?rel=0">Pan and Zoom Effects</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ptMVy_a4Qcc?rel=0">Bone Tool on Primitives</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zxiy4LAtxe0?rel=0">Bone Tool on Instances</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HDgmn2Flx0w?rel=0">More on the Bone Tool</a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/animating-in-flash/challenges/bone-tool-animation-challenge.md">Bone Tool Animation Challenge</a></li>
<!-- Get rid of this project. It is unecessary. -->
<li><i class="icon-leaf"></i> <a href="http://bit.ly/VMYjE0">Single Scene Animation Project</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<!-- Make new sound video with the recommendation that audio editing skills be exercised instead of telling sounds to stop -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/j7X42K0fGfw?rel=0">Inserting a Sound</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5splLSEcbac?rel=0">Inserting Music</a></li>
<!-- Get rid of this video. Scenes are a distraction. -->
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Shape Tweens</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Complex Timelines</a></li>
<!-- Alter this challenge to use my example project animation. Give clear specific instructions for what the playback controls should do. -->
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/VAJgi8">Multi-Scene Animation Project</a></li>
                </ul>
                </ul>
              </div>
            </div>
          </div>
          
<?php include('./modules/beginning-actionscript/module.html'); ?>

          
          <div class="row-fluid playlist">
            <div class="span12" id="flash-as3-intermediate">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Intermediate ActionScript <small class="hidden-phone">Using Classes and More...</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-leaf"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Intro to Playlist</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div><!--/row-->
      
<!-- *****************************
      FLASH
     ***************************** -->   
     
     
<!-- *****************************
      Brain Teasers
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="brain-teasers" >
          <h2>Brain Teasers <small class="hidden-phone"> Open Your Mind</small></h2>
          
          <div class="row-fluid playlist">
          
            <div class="span12" id="brain-teasers-intro">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/brain-teasers/brain-teaser-reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Brain Teasers<small class="hidden-phone"> I might eventually separate these by difficulty...</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xihDL-uPYe8?rel=0">E.T.T.B</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FigvXEE2g8w?rel=0">Robot Hats</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/npxGA8rSWqg?rel=0">Robo Grid</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/m2PmTw8hnwo?rel=0">Antidote</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YnlbJR_mMs0?rel=0">Beeping Bot</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SU9WMkIUvH8?rel=0">Symbol Square</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/d3yzjQvqClY?rel=0">Symbol Square (Solution)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/TPlFVwQpQRk?rel=0">Robo Progeny</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/eBVJ5wb3vWU?rel=0">Robo Break Dance</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CKcxr1jQBeE?rel=0">Chopsticks</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/UoGKPmLjynU?rel=0">Axels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HSYOB04vLqw?rel=0">Spaceship</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/W3emxjmcNnk?rel=0">Pink Turtles</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SzUI7njSmdw?rel=0">Boating for President</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      Brain Teasers
     ***************************** -->   


<!-- *****************************
      IMAGE MANIPULATION
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="image-manipulation" >
          <h2>Image Manipulation <small class="hidden-phone">Learn About Digital Images and How to Manipulate Them with the GIMP!</small></h2>

          <div class="row-fluid playlist">
            <div class="span12" id="image-manipulation-intro">
              <h3>Image Manipulation Intro <small class="hidden-phone"> The Basics of Working with Digital Images</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SJkQ9FbzbnI">Pixels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KPzTZPSM_II">Image Resolution</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CIToOlO6SKc">RGB Color</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FxyR47wJvZQ">Image Types</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Downloading Images from Online</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Copyright and Creative Commons</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Fxzs6uTlgak">Screenshots</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ZePmBnM6c8s">GIMP vs. Photoshop</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Drawing Tablets</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="color-theory">
              <h3>Color Theory <small class="hidden-phone">What You Should Know about Colors</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Color Wheel and Primary Colors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Subtractive Color Mixing</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Additive Color Mixing</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Visual Spectrum</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Colors, Tints, and Shades</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Warm vs. Cool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Color Schemes</a></li>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-basics">
              <h3>GIMP Basics <small class="hidden-phone"> The Basics of Image Manipulation with the GIMP</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zqt-TWGR6D4?rel=0">Download the GIMP</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4cyaZECGmo4?rel=0">Crop and Resize</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LPGQ6Mo_Ims?rel=0">Drawing Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5hDVI_NXNO8?rel=0">Saving and Exporting Images</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zBmyHAWTX3Y?rel=0">Selection Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/2ydTejq9OIU?rel=0">Layers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5SWEJbP2Qq8?rel=0">Removing Backgrounds</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/TjanJBXbRcI?rel=0">Swapping Heads</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/A9CrKxD1_XI?rel=0">New Image</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MVpUScfF-N0?rel=0">Open Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FLA3hn9JTa0?rel=0">Paste Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HBwoXRX4HOw?rel=0">Save vs. Export</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KFqMaVtfcGw?rel=0">Restore Default Workspace</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RGLPl0h033A?rel=0">Single Window Mode</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1hspw3d5JX4?rel=0">Zoom</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/AYOsR6ZrXpA?rel=0">Brush Size</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/opDalqJc-e0?rel=0">Choosing Colors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/eQ2VTCPNKII?rel=0">Layers</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/yvQVj34vXZc?rel=0">Selection Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/y4Tomb1Y2hM?rel=0">Selected Areas</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/L64evL-egk0?rel=0">Floating Selections</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/OYCXp3Lh38Q?rel=0">New Layer from Floating Selection</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/aOVAkS-8ulc?rel=0">Fuzzy Selection Tool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zEKdwS-k7Z0?rel=0">Invert a Selection</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/A_mchmFBUtI?rel=0">Special Background Layer</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Itw8JiCT-Tg?rel=0">Crop Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MB2Dkd11fCg?rel=0">Scale Image and Layers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/W5gKDoMltaU?rel=0">Transform Tools</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-intermediate">
              <h3>GIMP Intermediate <small class="hidden-phone">Going Beyond the Basics</small></h3>
            </div>
            <div class="row-fluid videos">
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-advanced">
              <h3>GIMP Advanced <small class="hidden-phone">On the Road to Mastery</small></h3>
            </div>
            <div class="row-fluid videos">
            </div>
          </div>
          
        </div>
      </div><!--/row-->
      
<!-- *****************************
      IMAGE MANIPULATION
     ***************************** -->        
     
      
<!-- *****************************
      START OFFICE
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="office" >
          <h2>Office Applications <small class="hidden-phone">Learn How to Use Word Processors, Spreadsheets, and More!</small></h2>
          
          <div class="row-fluid playlist">
            <div class="span12" id="office-word-processing">
              <h3>Word Processing <small class="hidden-phone"> Learn the Basics of Microsoft Word</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NNz3n0CDSsA?rel=0">Intro to Word Processing</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/WaD06I9esx8?rel=0">Word Processor vs. Text Editor</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/gd1RVv1JB5M?rel=0">Ribbon Hero</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Fk5u6pt37V4?rel=0">New Document</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/8wlFWU-MnU8?rel=0">Save and Save As</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Kke054AzHNU?rel=0">Opening Files</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sEHWLv0R8nc?rel=0">Cut, Copy, and Paste (Keyboard Shortcuts)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/vTx6ZhZsGp4?rel=0">Paste Special</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/E26pJ3FIRKM?rel=0">Undo and Redo</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/s5qh7DciNpU?rel=0">Zoom</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/XNRNTLJXuQo?rel=0">Fonts (Size and Type)</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GrExHDdLvSo?rel=0">Bold, Italic, Underling</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xi5ODkx60Cg?rel=0">Subscripts and Superscripts</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ZU5ekrlHLsA?rel=0">Colors, Background Colors, and Text Effects</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/giLVFoOu8Pc?rel=0">Clear Formatting and the Format Painter</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/8GhV3EbestE?rel=0">Font Defaults</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/nboSYtmiPRA?rel=0">Styles and Themes Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RbpcXDwWQeg?rel=0">Lists Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/WZagxWWwqVQ?rel=0">Multi-Level Lists</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KNJ165mv9GU?rel=0">Spacing between List Items</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/JnvxJuAcMOA?rel=0">Controlling List Numbering</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/XtnzLzfFWMA?rel=0">Selecting Text with the Keyboard</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Q4guX_Z3BaQ?rel=0">Find and Replace</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/kvYc4L04wCI?rel=0">Page Size</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4zikfQcBItA?rel=0">Portrait and Landscape</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MWAf01eOYlc?rel=0">Margins</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/T2OAmp30nDE?rel=0">Line Spacing</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MeUlaSuusx4?rel=0">Aligning (and Justifying) Text</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ASv7jU3pQjg?rel=0">Indenting</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/T0BbQBc6Xcw?rel=0">Tabs</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YE69f48pU1U?rel=0">Tabs (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="office-spreadsheets">
              <h3>Spreadsheets <small class="hidden-phone">Learn the Basics of Microsoft Excel and Other Spreadsheet Applications</small></h3>
            </div>
            <div class="row-fluid videos">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xDswIATeNDk">Custom Shortcuts</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="">Macros</a></li>

            </div>
          </div>
          
        </div>
      </div><!--/row-->
      
<!-- *****************************
       END OFFICE
     ***************************** -->   

     <footer>
     </footer>
	</div> <!-- End container -->

<div id="popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="popup-header"></h1>
  </div>
  <div class="modal-body" id="popup-content">
    
  </div>
</div>

  <script>
$('.future-video').each(function(index) {
    var messages = ["Rome wasn't built in a day...", "Hold you horses, cowboy!", "Patience, young grasshopper.", "I'm workin' on it...", "This video has not yet been made.", "IN PRODUCTION", "Google it for now...", "Please check back later.", "Yet to be made...", "I haven't made this yet.", "I'm plannin' on makin' it...", "Video not yet made." ];
    $(this).attr("title", messages[Math.floor(Math.random()*messages.length)]);
});
$('.future-video').tooltip({
  placement: 'right'
});
$('.future-playlist').tooltip({
  placement: 'top'
});
$('.reference-guide').tooltip({
  placement: 'top'
});
$('.challenge').tooltip({
  placement: 'top'
});
$('.intro').tooltip({
  placement: 'top'
});
$('.challenge-map-heading').tooltip({
  placement: 'right'
});

$('.challenge').blend();
$('.big-project').blend();
$('.small-project').blend();

$(document).ready(function(){
  var converter = new Showdown.converter();
  
  $(".popupper").click(function(event){   
    event.preventDefault();
    var pathToChallenge = $(this).attr("data-link");
    $('#popup-header').html($(this).attr("data-original-title"));
    $.ajax({  
      url: pathToChallenge,  
      cache: false,
      beforeSend: function() {
        $('#popup-content').html("<img src='/img/loading.gif' />");
      },
      success: function(html) {
        $('#popup-content').html(converter.makeHtml(html));
      }
    });
  });
 
  $(".youtube").colorbox({iframe:true, innerWidth:853, innerHeight:480});
});
  </script>
	</body>
</html>