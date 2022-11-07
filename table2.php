<?php
session_start();
$email=$_SESSION['mail'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Hospital</title>
    
    <link href="css/main.css" rel="stylesheet" media="all">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-grad-school.css">
    <link rel="stylesheet" href="css/owl.css">
  </head>
<body> 
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Hospital</em> Home Page</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
      <li><a href="table2.php?email=<?php echo $_SESSION['mail'];?>">Home</a></li>
      <li><a href="add2.php?email=<?php echo $_SESSION['mail'];?>">Add Patients</a></li>
        <li class="has-submenu"><a href="#section2">ORGAN</a>
          <ul class="sub-menu">
            <li><a href="book1.php?email=<?php echo $_SESSION['mail'];?>">Book Organ</a></li>
            <li><a href="viewB.php?email=<?php echo $_SESSION['mail'];?>">Donations</a></li>
            <li><a href="viewB1.php?email=<?php echo $_SESSION['mail'];?>">Responses</a></li>
            <li><a href="search.php?email=<?php echo $_SESSION['mail'];?>">Search</a></li>
          </ul>
        </li>
        <li><a href="edit2.php?email=<?php echo $_SESSION['mail'];?>">Edit Profile</a></li>
        <li><a href="index.html">LOG OUT</a></li></ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="img/molecule.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>ORGAN DONATION MANAGEMENT SYSTEM</h6>
              <h2><em> FIND A NEED </em> AND FILL IT</h2>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

 
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022 Bobby Benny  </p>
          
          
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/isotope.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/video.js"></script>
    <script src="js/slick-slider.js"></script>
    <script src="js/custom1.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
        <script src="reg/js/jquery-3.3.1.min.js"></script>
		<script src="reg/js/main.js"></script>
    </script>
</body>
</html>
  </section>
        
	</body>
</html>

