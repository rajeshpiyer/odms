<?php
session_start();
$email=$_SESSION['mail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>edit profile</title>
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
$don=$obj->UniqueRecords("select * from donor where mail='$email'");
if(isset($_POST['submit']))
{
$email=$_SESSION['mail'];
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$_SESSION['mail']=$_POST['t4'];
$s="update donor set name='$mt1', age='$mt2', mail='$mt4', phn='$mt3' where mail='$email'";
$n=$obj->InsertUpdateDelete($s);
$mt5=$_POST['t4'];
$s1="update user set mail='$mt5' where mail='$email'";
$n1=$obj->InsertUpdateDelete($s1);
echo '<script> alert("DETAILS UPDATED SUCCESSFULLY"); </script>';
$_SESSION['mail']=$_POST['t4'];
$email=$_SESSION['mail'];
$don=$obj->UniqueRecords("select * from donor where mail='$email'");
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
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Donor</em> Home</a>
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
        <li><a href="edit1.php">Edit Profile</a></li>
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
    <h1 style="color: white" class="text-primary">EDIT PROFILE</h1>
    <p> &nbsp</p>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
        <p> &nbsp</p>
          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-circle img-thumbnail" alt="avatar">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i ></i>
          Edit your<strong> contact</strong> details
        </div>
        <p> &nbsp</p>
        <form class="form-horizontal" role="form" method="post" action="edit1.php?email=<?php echo $_SESSION['mail'];?>">
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">NAME:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="t1" value="<?php  echo $don[1];?>"required >
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">AGE:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" name="t2" value="<?php  echo $don[4];?>"required>
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">NUMBER:</label>
            <div class="col-lg-8">
              <input class="form-control" type="number"name="t3" value="<?php  echo $don[3];?>"required>
            </div>
          </div>
          <div class="form-group">
            <label style="color: white" class="col-lg-3 control-label">EMAIL:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="t4" value="<?php  echo $don[2];?>" required>
            </div>
          </div>
          <div class="container-contact1-form-btn">
					<button style="color: white" type= "submit" name="submit" class="contact1-form-btn">
						<span>
							Update
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