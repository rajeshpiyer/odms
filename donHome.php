<?php
session_start();
$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
 <meta name="author" content="">
<title>DONOR HOME</title> <style type="text/css">
.photoOptions
{
    text-align: center;
    width: 400px;
    color:red;

/* For visibility. Delete me */
border: 1px solid brown;
}
		body {
			background-image:url("img/photo/9.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}

</style>
<center><h1 class="photoOptions"><strong>DONOR HOME PAGE</strong></h1></center>
</head>
<body id="page-top" data-spy="scroll" >
    <div >
    <h2><?php echo "Logged in using $email" ?> </h2>
    </div>


    <div class="collapse navbar-collapse navbar-center navbar-main-collapse" style=float:center;>
      <ul class="nav navbar-nav" >
	  <br>
       <li><a href="viewP.php"><strong>VIEW PATIENT</strong></a></li>
       <br>
       <br>
       <br>
        <br>
        <li><a href="addO.php?email=<?php echo "$email";?>"> <strong>DONATE ORGAN</strong></a></li>
        <br>
        <br>
        <br>
        <br>
        <li><a href="viewB.php?email=<?php echo "$email"; ?>"><strong>VIEW BOOKING</strong></a></li>
        <br>
        <br>
        <br>
        <br>
        <li><a href="donEdit.php?email=<?php echo "$email";?>"><strong>EDIT PROFILE</strong></a></li>
        <br>
        <br>
        <br>
        <br>
        <li><a href="viewdonorgan.php?email=<?php echo "$email";?>"><strong>VIEW ORGANS</strong></a></li>
        <br>
        <br>
        <br>
        <br>
        <li><a href="index.html"><strong>LOGOUT</strong></a></li>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </ul>
    </div>
</body>
</html>
