<!DOCTYPE html>
<?php
session_start();
$email=$_SESSION['email'];
?>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
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
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
    <br>

    <h2 class="bold text-center" style="color:#095e80">ORGAN DONATION MANAGEMENT SYSTEM </h2>

	<style>
		body {
			background-image:url("img/photo/");
			background-repeat:no-repeat;
			background-size: cover;
		}
	</style>
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
          <a href="viewOrgan.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">View organ</span>
          </a>
        </li>
        <li>
          <a href="#">
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
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">WELCOME</span>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $email; ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
  </section>

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

</body>
</html>