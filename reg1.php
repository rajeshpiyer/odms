<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="reg/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="reg/css/style.css">
		<!-- Main CSS-->
		<link href="css/main.css" rel="stylesheet" media="all">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-grad-school.css">
    <link rel="stylesheet" href="css/owl.css">
	</head>
<?php
include_once("ex.php");
$obj1=new ex;
$temp=0;
if(isset($_POST['submit']))
{
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$mt5=$_POST['t5'];
$mt6=$_POST['t6'];
echo"added";

//$n=mysql_query("insert into register ( nam ,cperson, mobile, email,status) values('$mt1','$mt2','$mt3','$mt4','N')");
$n=$obj1->InsertUpdateDelete("insert into donor ( name, mail, phn, gender, age, pass) values('$mt1','$mt2','$mt3','$mt4','$mt5','$mt6')");
$m=$obj1->InsertUpdateDelete("insert into user ( mail, pass, type) values('$mt2','$mt6','1')");
if($n>0)
//echo "insertion success";
header("Location:loginn.php");
else 
echo "failure";
}
?>
	<body>
	<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Donor</em> Registration</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="index.html">Home</a></li>
        <li class="has-submenu"><a href="#section2">About</a>
          <ul class="sub-menu">
            <li><a href="#section2">Organs</a></li>
            <li><a href="#section3">How it works?</a></li>
          </ul>
        </li>
        <li><a href="#section4">CONTACT US</a></li>
       </ul>
    </nav>
  </header>
		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="reg/images/111.jpg" alt="">
				</div>
				<form method="post" action="">
					<h3>Registration info</h3>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Name" required pattern="[A-Za-z_ '']+" title= "Use alphabets only" name='t1'>
						<input type="text" class="form-control" placeholder="Mail" required pattern="[^ @]*@[^ @]*" title="enter valid email eg: user@gmail.com" name='t2'>
					</div>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Phone" required pattern="[0-9]+" required minlength="10" maxlength="10" title="use proper 10 digit mobile number" name='t3'>
						<div class="form-holder">
							<select name="t4" id="" class="form-control"  required name='t4'>
								<option name='t4' value="" disabled selected>Gender</option>
								<option name='t4' value="Male">Male</option>
								<option name='t4' value="Female ">Female</option>
								<option name='t4' value="Other ">Other </option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<div class="form-row">
						<input type="text" class="form-control" placeholder="Age" name='t5' required minlength="2" maxlength="2" required pattern="[0-9]+" title= "Use digits only">
						<input type="password" class="form-control" placeholder="Password"  name='t6' required pattern="[^' ']+" title="No spaces">
					</div>
					<button style="background-color: skyblue" name='submit' value='submit'>Submit
						<i class="zmdi zmdi-long-arrow-right"></i>
					</button>
				</form>
				
			</div>
		</div>

		<script src="reg/js/jquery-3.3.1.min.js"></script>
		<script src="reg/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>