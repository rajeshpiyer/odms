
    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         $sql="select * from organ";
         $result=$conn->query($sql);
         $sql1="select * from booking";
         $result1=$conn->query($sql1);
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
      <td><?php echo "<a href=del.php?orgid=",$row['org_id'],"> DELETE </a>";?></td>
      
      </tr>
	 <?php
        }
		  }
    ?>
	
</table>
</div>
<ul><li><a style="color:red" href="adminHome.php">Back </a></li></ul>	
</form>
</body>
</html>