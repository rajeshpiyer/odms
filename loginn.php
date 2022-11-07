<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login/images/icons/b.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Additional CSS Files -->
<link href="css/main.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="icon" type="image/png" href="Login/images/icons/b.jpg"/>
<link rel="stylesheet" href="css/templatemo-grad-school.css">
<link rel="stylesheet" href="css/owl.css">
<link rel="stylesheet" href="css/lightbox.css">
</head>
<?php
include_once("ex.php");
$obj=new ex;
session_start();
 if(isset($_POST["LOGIN"]))
  {
	 $email=$_POST['email'];
	 $pword=$_POST['pass'];
	$s=mysql_query("select * from user where mail ='$email' and pass='$pword'");
	$x=mysql_fetch_array($s);
	 $count=mysql_num_rows($s);
	 if($x[0]!=null)
	 {
    $n=$x[1];
		 $p=$x[2];
		$r=$x[3];

	  $_SESSION['mail']=$n;
		 $_SESSION['pass']=$p;
		 $_SESSION['type']=$r;
			
		if($r=="2")
		  {
     $_SESSION['mail']=$n;
		  header('location:table2.php');
		  }
      elseif($r=="1")
      {
        $_SESSION['mail']=$n;
        header('location:table1.php');
      }
      elseif($r=="0")
      {
        $_SESSION['email']=$email;
        header('location:DONATION/index.html');
      }
	 else
	   {
	   echo "Invalid user";
	  }	 		
    }   
    else
	   {
	   //echo "<b> <div style='font-size:2.25em;'>Invalid user </div></b>";
	   echo '<script> alert("INVALID USER"); </script>';
	  }	 		
 }
?>
<body>
	<style>
	.wrap-login100 {
  width: 960px;
  height:500px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding: 90px 130px 33px 95px;
}

		</style>
	<!--header-->
	<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>MEMBER</em> LOGIN</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="index.html">Home</a></li>
        <li class="has-submenu"><a href="#section2">About</a>
          <ul class="sub-menu">
            <li><a href="index.html #section7">Organs</a></li>
            <li><a href="#section3">How it works?</a></li>
          </ul>
        </li>
        <li><a href="#section6">CONTACT US</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
       </ul>
    </nav>
  </header>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Login/images/icons/b.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						 Login info
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="LOGIN">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
						<p>&nbsp</p>
						<a class="txt2" href="index.html">
						Create new Account
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="Login/js/main.js"></script>

</body>
</html>