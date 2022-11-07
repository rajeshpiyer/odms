<!DOCTYPE html>
<html lang="en">
<head>
	<title>add </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="organ/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="organ/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="organ/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="organ/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="organ/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="organ/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="organ/css/util.css">
	<link rel="stylesheet" type="text/css" href="organ/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-grad-school.css">
    <link rel="stylesheet" href="css/owl.css">
	<script src="organ/js/1b-ajax-notify.js"></script>
	</head>
<?php
include_once("ex.php");
$obj1=new ex;
$temp=0;
session_start();
$email=$_SESSION['mail'];
echo $email;
$donor=$obj1->UniqueRecords("select don_id from donor where mail='$email' ");

if(isset($_POST['submit']))
{

$mt2=$_POST['t2'];
$mt4=$_POST['t4'];

//$n=mysql_query("insert into register ( nam ,cperson, mobile, email,status) values('$mt1','$mt2','$mt3','$mt4','N')");
$n=$obj1->InsertUpdateDelete("insert into organ ( don_id, blood, org) values('$donor[0]','$mt4','$mt2')");
if($n>0)
echo '<script> alert("DETAILS ADDED SUCCESSFULLY"); </script>';

}
?>
<body>
<style>
        .in {
  display: block;
  width: 100%;
  height:50px;
  background: #e6e6e6;
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #666666;
  border-radius: 25px;
  padding: 0 30px;
}
.shadow-in {
  content: '';
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 45px;
  box-shadow: 0px 0px 0px 0px;
  color: rgba(87,184,70, 0.5); 
}
.in:focus + .shadow-in {
  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
  animation: anim-shadow 0.5s ease-in-out forwards;
}
.wrap-in {
  position: relative;
  width: 100%;
  z-index: 1;
  margin-bottom: 20px;
}
        </style>
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Donate</em> Organ</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
	  <li><a href="table1.php?email=<?php echo $_SESSION['mail'];?>">Home</a></li>
      <li><a href="patientview.php?email=<?php echo $_SESSION['mail'];?>">View patients</a></li>
        <li class="has-submenu"><a href="#section2">DONATE</a>
          <ul class="sub-menu">
            <li><a href="add1.php?email=<?php echo $_SESSION['mail'];?>">Donate organ</a></li>
            <li><a href="view1.php?email=<?php echo $_SESSION['mail'];?>">View Booking</a></li>
          </ul>
        </li>
        <li><a href="edit1.php">Edit Profile</a></li>
        <li><a href="index.html">LOG OUT</a></li>
	</ul>
    </nav>
  </header>
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="img/molecule.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
<div class="caption">
		<div style="background-color:#33333300 " class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="organ/images/clipart1394941.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="add1.php"method="post" target="_self">
				

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
				<span style="color: white"class="contact1-form-title">
					Fill the details
				</span>
					<select class="in" type="text" name="t4" required >
					<option name='t4' value="" disabled selected >Blood group</option>
								<option name='t4' value="B+">B+</option>
								<option name='t4' value="B- ">B-</option>
								<option name='t4' value="A+ ">A+ </option>
								<option name='t4' value="A-">A-</option>
								<option name='t4' value="AB- ">AB-</option>
								<option name='t4' value="AB+ ">AB+ </option>
								<option name='t4' value="O+">O+</option>
								<option name='t4' value="O- ">O-</option>
								</select>
					<span class="shadow-in"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<select class="in" type="text" name="t2" required >
					<option name='t4' value="" disabled selected >Organ</option>
								<option name='t4' value="kidney">kidney</option>
								<option name='t4' value="liver ">liver</option>
								<option name='t4' value="pancrease">pancreas</option>
								<option name='t4' value="lung lobe ">lung lobe</option>
								</select>
					<span class="shadow-in"></span>
				</div>
				<div class="container-contact1-form-btn">
					<button type= "submit" name="submit" class="contact1-form-btn">
						<span>
							Donate
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--===============================================================================================-->
	<script src="organ/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="organ/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="organ/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="organ/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="organ/js/main.js"></script>
	<script src="reg/js/jquery-3.3.1.min.js"></script>
		<script src="reg/js/main.js"></script>

</body>
</html>
