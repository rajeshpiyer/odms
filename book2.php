<?php
session_start();
$email=$_SESSION['mail'];
$id=$_GET["id"];
//echo $email;
//echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Confirm Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link href="css/main.css" rel="stylesheet" media="all">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-grad-school.css">
    <link rel="stylesheet" href="css/owl.css">
  </head>
<?php
include_once("ex.php");
$obj=new ex;
$don=$obj->UniqueRecords("select * from organ where org_id='$id'");
$don1=$obj->UniqueRecords("select * from hospital where email='$email'");
if(isset($_POST['submit']))
{
$email=$_SESSION['mail'];
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$mt5=$_POST['t5'];
$mt6=$_POST['t6'];
$_SESSION['mail']=$_POST['t4'];
$s="insert into booking(org_id,hos_id,status) values('$id','$don1[0]','0')";	   
		$n=$obj->InsertUpdateDelete($s);
		 if ($n>0 )
		   {
		   ?>
		   <script>alert("Boking done ....")</script> ;
		   <?php
		   }
	
	  }
?>
<body> 
  <style>
    .contact1-form-btn {
  min-width: 193px;
  height: 50px;
  border-radius: 25px;
  background: darkblue;
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: rgba(255, 255, 255, 0.297);
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.container-contact1-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
</style>
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
  </header>
  <section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
          <source src="img/molecule.mp4" type="video/mp4" />
      </video>
<div class="video-overlay header-text">
  <div class="caption">
<div class="container bootstrap snippets bootdey">
    <h1 style="color: white" class="text-primary">CONFIRM DETAILS</h1>
    <p> &nbsp</p>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
        <p> &nbsp</p>
        <p> &nbsp</p>
        <p> &nbsp</p>
          <img src="Login/images/doc.png" class="avatar img-circle img-thumbnail" alt="avatar">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i ></i>
          Press  <strong> confirm booking</strong> to complete booking
        </div>
        <p> &nbsp</p>
        <form class="form-horizontal" role="form" method="post" >
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">HOSPITAL NAME:</label>
            <div class="col-lg-8">
              <input class="form-control" readonly type="text" name="t1" value="<?php  echo $don1[1];?>" >
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">ADDRESS:</label>
            <div class="col-lg-8">
              <input class="form-control" readonly type="text" name="t2" value="<?php  echo $don1[2];?>">
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">NUMBER:</label>
            <div class="col-lg-8">
              <input class="form-control" readonly type="text"name="t3" value="<?php  echo $don1[3];?>">
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">EMAIL:</label>
            <div class="col-lg-8">
              <input class="form-control" readonly type="text" name="t4" value="<?php  echo $don1[4];?>" >
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">ORGAN:</label>
            <div class="col-lg-8">
              <input class="form-control" readonly type="text" name="t5" value="<?php  echo $don[3];?>" >
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">BLOOD GROUP:</label>
            <div class="col-lg-8">
              <input class="form-control" readonly type="text" name="t6" value="<?php  echo $don[2];?>" >
            </div>
          </div>
          <div class="container-contact1-form-btn">
					<button style="color: white" type= "submit" name="submit" class="contact1-form-btn">
						<span>
							Confirm Booking
							<i  class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
        </form>
      </div>
  </div>
</div>
</div>
</div>
<hr>

<style type="text/css">
				                
body{margin-top:20px;}
.avatar{
width:200px;
height:200px;
}				              
</style>

<script type="text/javascript">

</script>
</body>
</html>