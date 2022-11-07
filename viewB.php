<?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         session_start();
        $email=$_SESSION['mail'];
        $sq="select * from hospital where email='$email'";
        $re=$conn->query($sq);
        $bow=$re->fetch_assoc();
        $ii=$bow['hos_id'];
        $sq2m="select * from patient where doc_id='$ii'";
         $re3m=$conn->query($sq2m);
         $bow2m=$re3m->fetch_assoc();
         $ii2m=$bow2m['pat_id'];
    
         $sq1m="select * from donation where pat_id=$ii2m";
         $re2m=$conn->query($sq1m);
         
         ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="icon" type="image/png" href="Login/images/icons/b.jpg"/>
    <link rel="stylesheet" href="css/templatemo-grad-school.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/lightbox.css">
<meta content="text/html; charset=utf-8" />

<title> bookings </title>

<link rel="canonical" href="http://www.demo.freshdesignweb.com/web-hosting-templates-css3.html" />

<link rel="stylesheet" type="text/css" href="patient/style.css" media="all"/>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-10146041-18"]);

  _gaq.push(["_trackPageview"]);



  (function() {

    var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;

    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";

    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);

  })();

</script>

</head>

<body>
    <style>
        #plans .name
        {

font-size:20px;

font-weight:bold;

}
#plans .plan:hover .name{

font-size:26px;

}
        </style>
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
  <section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
          <source src="img/molecule.mp4" type="video/mp4" />
      </video>
<div class="video-overlay header-text">
<div id="plans" class="clearfix">
<?php 
if($re2m->num_rows>0){
         $bow1m=$re2m->fetch_assoc();
         $ii1m=$bow1m['don_id'];
         //echo $ii1m;
         $sq2="select * from patient where pat_id='$ii2m'";
         $re3=$conn->query($sq2);
         //$bow2=$re3->fetch_assoc();
         //$ii2=$bow2['don_id'];
        $sq1="select * from donor where don_id='$ii1m' ";
         $re2=$conn->query($sq1);
         $sq2mm="select * from patient where doc_id='$ii2m'";
         $re3mm=$conn->query($sq2mm);
         $bow2mm=$re3mm->fetch_assoc();
       while ( $bow2=$re3->fetch_assoc()) {
           
        $bow1=$re2->fetch_assoc();;
      ?>
            <div class="plan" id="border-left" method="post">

                <div class="name" style="color: #81b836">Patient: <?php echo $bow2['name'];?></div>
              
                <div class="name" style="color: #81b836">Blood: <?php echo $bow2['blood'];?></div>

                <div style="color: #81b836" class="price"><strong>Organ: </strong> <?php echo $bow2['org'];?></div>
                
                <div style="color: #81b836" ><strong>Donor: </strong> <?php echo $bow1['name'];?></div>
                <div style="color: #81b836"><strong>Mail: </strong> <?php echo $bow1['mail'];?></div>
                <div style="color: #81b836"><strong>Number:</strong><?php echo $bow1['phn'];?></div>

              </div>
       
            <?php
        }
    }
        else
        {
        echo "no donations";
        
		  }

    ?>
    </div>

            
    </section >
            <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10146041-24', 'auto');
  ga('send', 'pageview');
</script>
</body>

</html>

