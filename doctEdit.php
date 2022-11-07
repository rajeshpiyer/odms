<?php
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE HTML >
<html>
<head>
<title>EDIT PROFILE</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
    <br>
    <h2 class="bold text-center" style="color:#095e80">ORGAN DONATION MANAGEMENT SYSTEM </h2>
	<style>
		body {
			background-image:url("img/photo/333.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}
    
	</style>
  <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include_once("ex.php");
$obj=new ex;
$don=$obj->UniqueRecords("select * from doctor where email='$email'");
if(isset($_POST['submit1']))
{
$email=$_SESSION['email'];
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$_SESSION['email']=$_POST['t4'];
$s="update doctor set name='$mt1', hospital='$mt2', email='$mt4', age='$mt3' where email='$email'";
$n=$obj->InsertUpdateDelete($s);
$mt5=$_POST['t4'];
$s1="update user set email='$mt5' where email='$email'";
$n1=$obj->InsertUpdateDelete($s1);
echo "UPDATED SUCCESSFULLY"; 
}	

?>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">DOCTOR HOME</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="addP.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add patient</span>
          </a>
        </li>
        <li>
          <a href="viewOrgan.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">View donor</span>
          </a>
        </li>
        <li>
          <a href="viewOrgan1.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">View organ</span>
          </a>
        </li>
        <li>
          <a href="doctEdit.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Edit profile</span>
          </a>
        </li>
        <li>
          <a href="index.html">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
       
      </ul>
  </div>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 <section class="home-section">
<div>
	<table  border="0">
    <tr>
      <td >Registered Mail:  </td>
      <td ><?php echo $email;?></td>
      </tr>
    </table>
	<table width="86%"  border="0">
    <tr>
      <td colspan="8"><div align="center"><span class="style1">EDIT DETAILS </span></div></td>
      </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="13%">&nbsp; </td>
      <td width="41%">&nbsp;</td>
	  <td colspan="3">&nbsp;</td>
      </tr>
      <form action="" method="POST">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Name</td>
      <td><input name="t1" type="text" size="75" value="<?php if(isset($don[1])) echo $don[1];?>" ></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td> HOSPITAL</td>
      <td><input name="t2" type="text" size="75" value="<?php  echo $don[2];?>"></td>
      
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>AGE</td>
      <td>
        <input name="t3" type="text" size="75" value="<?php  echo $don[3];?>"></td>
      
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td> Email</td>
      <td><input name="t4" type="text" size="75" value="<?php  echo $don[5];?>"></td>
      </tr>

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="9%">&nbsp;</td>
      <td width="14%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="submit1" type="submit" value="submit" > </td>

      <td> </td>
      <br>
      <td>
      
    </td>
      <td>&nbsp;</td>
    </tr>

    <?php 

?>

 
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><br>   

      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
   
  </table>
  
	
</div>	
</form>
</section>
</body>
</html>
