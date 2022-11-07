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
       
        $sq1="select * from booking where hos_id='$ii' ";
         $re2=$conn->query($sq1);
         $sq1n="select * from booking where hos_id='$ii' and status='1' ";
         $re2n=$conn->query($sq1n);
         $bow1=$re2n->fetch_assoc();
         $ii1=$bow1['org_id'];
          //echo $ii1;
         $sq2="select * from organ where org_id='$ii1'";
         $re3=$conn->query($sq2);
         $bow2=$re3->fetch_assoc();
         $ii2=$bow2['don_id'];
         $sqlt="select * from donor where don_id='$ii2'";
         $resultt=$conn->query($sqlt);
         //$bow3=$resultt->fetch_assoc();
        //  $d=$bow3['org_id'];
        //  $h=$bow3['hos_id'];
        //  $hehe=$bow3['book_id'];
        $sqm="select * from organ where don_id='$ii2'";
        $rem=$conn->query($sqm);
        //  $sqll1="select * from hospital where hos_id=$h";
        // $resultt1=$conn->query($sqll1);
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
if($re2->num_rows>0){
    $bow1w=$re2->fetch_assoc();
    if($bow1w['status']='1'){
      
        while ($bow3=$resultt->fetch_assoc()) {

          $row1=$rem->fetch_assoc();
      ?>
            <div class="plan" id="border-left" method="post">

                <div class="name" style="color: #81b836">Name: <?php echo $bow3['name'];?></div>
               
                <div style="color: #81b836">Mail: <?php echo $bow3['mail'];?></div>
                <div  class="price" style="color: #81b836">Number: <?php echo $bow3['phn'];?></div>

                <div style="color: #81b836"><strong>Blood: </strong> <?php echo $row1['blood'];?></div>

                <div style="color: #81b836" ><strong>Organ: </strong> <?php echo $row1['org'];?></div>

             </div>
        
            <?php
            }
            ?>
            <p style="color: #81b836">Contact for further processing...</P>
            <?php
        }
            else{
                echo "No responses yet";
            }
       
    }
        else
        {
          ?>
          <p> &Nbsp</p>
          <h1 style="color:white">Nothing to show</h1>
          <?php
        echo "nothing to show";
        //echo"$bow3[1]";
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

