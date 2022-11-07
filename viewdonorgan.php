
    <?php
    
    session_start();
    $email=$_SESSION['email'];
    

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         
         $ssq="select * from donor where email='$email'";
         $rrq=$conn->query($ssq);
        while ($row=$rrq->fetch_assoc()) {
           $qqq=$row['don_id'];
        }

         $sql="select * from booking where organ='$qqq'";
         $result=$conn->query($sql);
         ?>
<!DOCTYPE HTML>
<html>
<head>
<title>view organs</title>
<style>
body {
			background-image:url("img/photo/8.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}
    </style>
</head>
<body>
<form name="form1" method="post" action="">
	<table width="98%"  border="2">
    <br>
    <br>
    <tr>
      <td colspan="9"><div align="center" class="style10">Registered organ</div></td>
      </tr>
      
    <tr>
      <td width="7%" height="25" bordercolor="cyan" bgcolor="skyblue"><span class="style21">BOOK ID</span></td>
      <td width="7%" height="25" bordercolor="cyan" bgcolor="skyblue"><span class="style21">ORGAN ID</span></td>
      <td width="7%" height="25" bordercolor="cyan" bgcolor="skyblue"><span class="style21">ORGAN NAME</span></td>
      </tr>
      <?php 
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
      ?>
         <tr>
      <td><?php echo $row['book_id'];?></td>
      <td><?php echo $row['don_id']; $ty=$row['don_id'];?></td><td>


      <?php $zz="select * from organ where org_id='$ty'";
         $xx=$conn->query($zz);
        while ($row=$xx->fetch_assoc()) {
           echo $row['name'];
        }?>
</td>


      </tr>
	 <?php
        }
		  }
    ?>
	
</table>
</div>
<ul><li><a style="color:red" href="donHome.php">Back </a></li></ul>	
</form>
</body>
</html>