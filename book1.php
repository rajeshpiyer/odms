<?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         $sql="select * from organ";
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
#plans .plan{
font-size:16px;float:left;

height:296px;width:260px;

line-height:46px;

border-right:1px dotted #97d947;

border-top:1px dotted #97d947;

border-bottom:1px dotted #97d947;

padding:24px;

margin-top:82px;

margin-bottom:42px;

text-align:center;

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
  <div  id="top" >
  <video autoplay muted loop id="bg-video">
          <source src="img/molecule.mp4" type="video/mp4" />
      </video>
<div class="video-overlay header-text">
<video autoplay muted loop id="bg-video">
          <source src="img/molecule.mp4" type="video/mp4" />
      </video>
<div id="plans" class="video-overlay header-text">
<?php 
if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
            $id=$row['org_id'];
            $_SESSION['id']= $id;
         // $i=$row['doc_id'];
         // $sql1="select name from hospital where hos_id=$i";
        // $result1=$conn->query($sql1);
       //  $row1=$result1->fetch_assoc();
          
      ?>
         <div class="plan" id="border-left">

                <div style="color: #81b836"><strong>Blood: </strong> <?php echo $row['blood'];?></div>

                <div style="color: #81b836" ><strong>Organ: </strong> <?php echo $row['org'];?></div>

                <div ><button style="background-color: #000312" ><?php echo "<a href=book2.php?id=",$row['org_id'],"> Book Now </a>";?></button></div>
        </div>
            <?php
        }
		  }
    ?>
    </div>
    </div>
        </div >
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

