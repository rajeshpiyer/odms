
    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         $sql="select * from doctor";
         $result=$conn->query($sql);
         ?>
<!DOCTYPE HTML>
<html>
<head>
<title>view DOCTORS</title>
</head>
<body>
<form name="form1" method="post" action="">
	<table width="98%"  border="2">
    <br>
    <br>
    <tr>
      <td colspan="9"><div align="center" class="style10">DOCTOR DETAILS</div></td>
      </tr>
      
    <tr>
      <td width="7%" height="25" bordercolor="cyan" bgcolor="cyan"><span class="style21">NAME</span></td>
      <td width="14%" bgcolor="cyan"><span class="style21">HOSPITAL</span></td>
	  <td width="13%" bgcolor="cyan"><span class="style1"><span class="style21">AGE</span></span></td>
      <td width="13%" bgcolor="cyan"><span class="style1"><span class="style21">GENDER</span></span></td>
      </tr>
      <?php 
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
      ?>
         <tr>
        <td><?php echo $row['name'];?></td>
      <td><?php echo $row['hospital'];?></td>
      <td><?php echo $row['age'];?></td>
      <td><?php echo $row['gender'];?></td>
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