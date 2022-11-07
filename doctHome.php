<?php
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
 <meta name="author" content="">
<title>DOCTOR HOME</title><style type="text/css">
#ProfilePage
{
    /* Move it off the top of the page, then centre it horizontally */
    margin: 50px auto;
    width: 635px;

/* For visibility. Delete me */
border: 1px solid red;
}

.photoOptions
{
    text-align: center;
    width: 400px;

/* For visibility. Delete me */
border: 1px solid brown;
}
body {
			background-image:url("img/photo/22.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}
</style>
<center><h1 class="photoOptions"><strong>DOCTOR HOME PAGE</strong></h1></center>
</head>
<body id="page-top" data-spy="scroll" >
<p><?php echo "Logged in using $email" ?> </p>
<div class="collapse navbar-collapse navbar-center navbar-main-collapse" style=float:center;>
      <ul class="nav navbar-nav" >
	  <br>
	  <br>
	  <br>
        <li style=font-size:larger;><a href="addP.php" class="nav3"><strong>ADD PATIENT</strong></a></li>
        <li style=font-size:larger;><a href="viewOrgan.php" class="nav4"><strong>VIEW DONOR</strong></a></li>
        <li style=font-size:larger;><a href="viewOrgan1.php" class="nav4"><strong>VIEW ORGAN</strong></a></li>
        <li style=font-size:larger;><a href="doctEdit.php" class="nav5"><strong>EDIT PROFILE</strong></a></li>
        <li style=font-size:larger;><a href="index.html" class="nav6"><strong>LOGOUT</strong></a></li>
      </ul>
    </div>
	
</body>
</html>

