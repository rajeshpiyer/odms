<?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         session_start();
        $email=$_SESSION['mail'];
        $sq="select * from donor where mail='$email'";
        $re=$conn->query($sq);
        $bow=$re->fetch_assoc();
        $ii=$bow['don_id'];
        $sq1="select org_id from booking ";
         $re2=$conn->query($sq1);
         $bow1=$re2->fetch_assoc();
         $ii1=$bow1['org_id'];
         $sq2="select * from organ where don_id='$ii'";
         $re3=$conn->query($sq2);
         $bow2=$re3->fetch_assoc();
         $ii2=$bow2['org_id'];
         $sqlt="select * from booking where org_id='$ii2'";
         $resultt=$conn->query($sqlt);
         $bow3=$resultt->fetch_assoc();
         $d=$bow3['org_id'];
         $h=$bow3['hos_id'];
         $hehe=$bow3['book_id'];
         $sqm="select * from organ where org_id='$d'";
         $rem=$conn->query($sqm);
         $sqll1="select * from hospital where hos_id=$h";
        $resultt1=$conn->query($sqll1);
        //$sql2="select * from organ where org_id='$a'";
          //$result2=$conn->query($sql2);
         //$sql1="select * from hospital where hos_id='$b'";
         //$result1=$conn->query($sql2);
         //$don=$obj->UniqueRecords("select * from organ where org_id='$a'");
        // $don1=$obj->UniqueRecords("select * from hospital where email='$b'");
if(isset($_POST['Submit']))
{
$email=$_SESSION['mail'];
$s="update booking set status='1' where book_id='$hehe'";   
		$n=$conn->query($s);
		 if ($n>0)
		   {
		   ?>
		   <script>alert("Successful....")</script> ;
		   <?php
		   }
	  }
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
      <a href="#"><em>ORGAN</em> DONATION</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
    <ul class="main-menu">
      <li><a href="table1.php?email=<?php echo $_SESSION['mail'];?>">Home</a></li>
      <li><a href="patientview.php?email=<?php echo $_SESSION['mail'];?>">View patients</a></li>
        <li class="has-submenu"><a href="#section2">DONATE</a>
          <ul class="sub-menu">
            <li><a href="add1.php?email=<?php echo $_SESSION['mail'];?>">Donate organ</a></li>
            <li><a href="viewB.php?email=<?php echo $_SESSION['mail'];?>">View Booking</a></li>
          </ul>
        </li>
        <li><a href="edit1.php?email=<?php echo $_SESSION['mail'];?>">Edit Profile</a></li>
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
if($resultt->num_rows>0){
        while ($brow2=$resultt1->fetch_assoc()) {
           
          $row1=$rem->fetch_assoc();
      ?><form method="post">
            <div class="plan" id="border-left" method="post">

                <div class="name" style="color: #81b836"><?php echo $brow2['name'];?></div>
               
                <div class="price">Address: <?php echo $brow2['address'];?></div>
                <div class="name" style="color: #81b836"><?php echo $brow2['phone'];?></div>

                <div style="color: #81b836"><strong>Blood: </strong> <?php echo $row1['blood'];?></div>

                <div style="color: #81b836" ><strong>Required: </strong> <?php echo $row1['org'];?></div>

              <div ><button style="background-color: #000312; color:white;" name="Submit">Accept</button></div>
            </div>
        </form>
            <?php
        }
    }
        else
        {

        echo "ahaha";
        //echo"$bow3[1]";
        ?>
        <h1 style="color:white">Nothing to show</h1>s
        <?php
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

