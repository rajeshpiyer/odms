<?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         $sql="select * from patient";
         $result=$conn->query($sql);
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
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="icon" type="image/png" href="Login/images/icons/b.jpg"/>
    <link rel="stylesheet" href="css/templatemo-grad-school.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/lightbox.css">
<meta content="text/html; charset=utf-8" />

<title> Table </title>

<link rel="canonical" href="http://www.demo.freshdesignweb.com/web-hosting-templates-css3.html" />

<link rel="stylesheet" type="text/css" href="patient/style.css" media="all"/>


</head>

<body>
<style>
        #plans .name
        {

font-size:26px;

font-weight:bold;

}
#plans .plan:hover .name{

font-size:24px;

}
        </style>
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>ORGAN</em> DONATION</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
    <ul class="main-menu">
      <li><a href="table1.php">Home</a></li>
      <li><a href="patientview.php?email=<?php echo $_SESSION['mail'];?>">View patients</a></li>
        <li class="has-submenu"><a href="#section2">DONATE</a>
          <ul class="sub-menu">
            <li><a href="add1.php?email=<?php echo $_SESSION['mail'];?>">Donate organ</a></li>
            <li><a href="view1.php?email=<?php echo $_SESSION['mail'];?>">View Booking</a></li>
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
if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
          $i=$row['doc_id'];
          $sql1="select name from hospital where hos_id=$i";
         $result1=$conn->query($sql1);
         $row1=$result1->fetch_assoc();
          
      ?>
            <div class="plan" id="border-left" >

                <div class="name" style="color: #81b836"><?php echo $row['name'];?></div>

                <div class="price">Age: <?php echo $row['age'];?></div>

                <div style="color: #81b836"><strong>Blood: </strong> <?php echo $row['blood'];?></div>

                <div style="color: #81b836" ><strong>Required: </strong> <?php echo $row['org'];?></div>

                <div style="color: #81b836" ><strong>Hospital: </strong><?php echo $row1['name']; ?></div>

                <div ><button style="background-color: #000312;color: white "><?php echo "<a href=book3.php?id=",$row['pat_id'],"> Donate </a>";?></button></div>
       
            </div>
             
            <?php
        }
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

