<?php
include 'connect_test_db.php';
$searchErr = '';
$employee_details='';
session_start();
$email=$_SESSION['mail'];
if(isset($_POST['save']))
{
	if(!empty($_POST['search']))
	{
		$search = $_POST['search'];
		$stmt = $con->prepare("select * from organ where org like '%$search%' or blood like '%$search%'");
		$stmt->execute();
		$employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($employee_details);
		
	}
	else
	{
		$searchErr = "Please enter the information";
	}
   
}

?>
<html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="icon" type="image/png" href="Login/images/icons/b.jpg"/>
    <link rel="stylesheet" href="css/templatemo-grad-school.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/lightbox.css">
<meta content="text/html; charset=utf-8" />

<title> search </title>

<link rel="canonical" href="http://www.demo.freshdesignweb.com/web-hosting-templates-css3.html" />

<link rel="stylesheet" type="text/css" href="patient/style.css" media="all"/>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-10146041-18"]);

  _gaq.push(["_trackPageview"]);



  (function() {

    var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;

    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";

    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);

  })();

</script>

</head>

<body>
<style>
        #plans .name
        {

font-size:26px;

font-weight:bold;

}
#plans .plan:hover .name{

font-size:26px;

}
        </style>
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
  <section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
          <source src="img/molecule.mp4" type="video/mp4" />
      </video>
<div class="video-overlay header-text">

<div id="plans" class="clearfix">
	<div class="container">
	<h3><u> search database and display results</u></h3>
	<br/><br/>
	<form class="form-horizontal" action="#" method="post">
	<div class="row">
		<div class="form-group">
		    <label style="color: white" class="control-label col-sm-4" for="email"><b>Search organ name or blood group:</b>:</label>
		    <div class="col-sm-4">
		      <input type="text" class="form-control" name="search" placeholder="search here">
		    </div>
		    <div class="col-sm-2">
		      <button style="color: white" type="submit" name="save" class="btn btn-success btn-sm">Search</button>
		    </div>
		</div>
		<div class="form-group">
			<span class="error" style="color:red;"> <?php echo $searchErr;?></span>
		</div>
		
	</div>
    </form>
	<h3 style="color: white"><u>Search Result</u></h3>
	    		<?php
		    	 if(!$employee_details)
		    	 { ?>
		    		<span style="color:white;"><?php echo '<tr> No data found </tr>'; ?> </span>
                    <?php
		    	 }
		    	 else{
		    	 	foreach($employee_details as $key=>$value)
		    	 	{
          
		    	 		?>
<div class="plan" id="border-left">
<div style="color: #81b836"><strong>No: </strong> <?php echo $key+1;?></div>

<div style="color: #81b836" ><strong>Organ: </strong> <?php  echo $value['org'];?></div>

<div style="color: #81b836" ><strong>Blood Group: </strong><?php echo $value['blood']; ?></div>

<div ><button style="background-color: #000312" ><?php echo "<a href=book2.php?id=",$value['org_id'],"> Book Now </a>";?></button></div>
</div>
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
	</div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>