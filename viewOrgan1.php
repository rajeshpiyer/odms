
    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         $sql="select * from organ";
         $result=$conn->query($sql);
         ?>
<!DOCTYPE HTML>
<html>
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
			background-image:url("img/photo/6.jpg");
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
	<table width="98%"  border="2">
    <br>
    <br>
    <tr>
      <td colspan="9"><div align="center" class="style10">Available oragan</div></td>
      </tr>
      
    <tr>
      <td width="7%" height="25" bordercolor="cyan" bgcolor="skyblue"><span class="style21">ORGAN ID</span></td>
	  <td width="13%" bgcolor="skyblue"><span class="style1"><span class="style21">DONOR ID</span></span></td>
      <td width="13%" bgcolor="skyblue"><span class="style1"><span class="style21">NAME</span></span></td>
      </tr>
      <?php 
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
      ?>
         <tr>
        <td><?php echo $row['org_id'];?></td>
      <td><?php echo $row['don_id'];?></td>
      <td><?php echo $row['name'];?></td>
        <td><?php echo "<a href=book.php?orgid=",$row['org_id'],"> Book Now </a>";?></td>
      
      </tr>
	 <?php
        }
		  }
    ?>
	
</table>
</div>
</section>
</form>
</body>
</html>