<!DOCTYPE html>
<html lang="en">

<head>
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
			background-image:url("img/photo/22.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}
	</style>
    <title>Add patients</title>
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
</head>
<?php
//$co= mysql_connect("localhost","root","");
//mysql_select_db("odms",$co);
include_once("ex.php");
$obj1=new ex;
$temp=0;
$errt1=$errt2=$errt3=$errt4=$errt5=$errt6=$errt7="";
if(isset($_POST['submit']))
{
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$mt5=$_POST['t5'];
if ($temp==0)
{
//$n=mysql_query("insert into register ( nam ,cperson, mobile, email,status) values('$mt1','$mt2','$mt3','$mt4','N')");
$n=$obj1->InsertUpdateDelete("insert into patient ( name, age, gender, blood, org) values('$mt1','$mt2','$mt3','$mt4','$mt5')");
if($n>0)
echo "insertion success";
else 
echo "failure";
}
}
?>

<body>
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
    <form name="form1" method="post" action="">
        <br>
        <div class="panel panel-skin">
        <div class="panel-heading">
            <h3 class="panel-title" style="color: antiquewhite"><span class="fa fa-pencil-square-o">ADD PATIENT DETAILS </span> </h3>
            </div>
            </div>
            <br>
        <div>
            <table border="0">
              <tr> 
                <td width="182">NAME</td>
                <td width="433"><input name="t1" type="text" size="70" placeholder="Enter Name" required pattern="[A-Za-z_ '']+" title= "Use alphabets only"></td>
                <td width="314"> <?php echo $errt1; ?></td>
              </tr>
              <tr> 
                <td>AGE</td>
                <td><input name="t2" type="text" size="70" placeholder="Enter age" required minlength="2" maxlength="2" pattern="[0-9]+" title="use proper 10 digit mobile number"></td>
                <td><?php echo $errt2; ?></td>
              </tr>
              <tr> 
                <td>GENDER</td>
                <td><input name="t3" type="radio" id="Male" value="MALE" size="70" required value="<?php if(isset($mt4)) echo $mt4; ?>">
                <label for="Male">MALE</label>
                <input name="t3" type="radio" id="Female" value="FEMALE" size="70" required value="<?php if(isset($mt4)) echo $mt4; ?>">
                <label for="Female">FEMALE</label>
                <input name="t3" type="radio" id="other" value="OTHER" size="70" required value="<?php if(isset($mt4)) echo $mt4; ?>">
                <label for="other">OTHER</label> </td>
                <td><?php echo $errt3; ?></td>
              </tr>
              <tr> 
                <td>BLOOD GROUP</td>
                <td> <select name="t4" id="subject">
    <option value="" selected="selected">Select blood group</option>
    <option value="A+" >A+</option>
    <option value="B+" >B+</option>
    <option value="B-" >B-</option>
    <option value="AB+">AB+</option>
  </select></td>
              </tr>
              <tr> 
                <td>REQUIRED ORGAN</td>
                <td><input name="t5" type="text" size="70" placeholder="Enter required organ" required pattern="[A-Za-z_ '']+" title= "Use alphabets only"></td>
                <td><?php echo $errt5; ?></td>
              </tr>
              <tr> 
                <td></td>
                </tr>
        </table>
    </div>
    <br>
                    
   <input name="submit" type="submit" value="submit" class="btn btn-skin btn-block btn-lg" style="color: rgb(16, 16, 82);">
                    
       <br>
       </form> 
</section>   
        </body>
        </html>
        			
    