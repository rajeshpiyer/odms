
    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         $sql="select * from donor";
         $result=$conn->query($sql);
         $sql1="select name from organ where org_id= don_id";
         $result1=$conn->query($sql1);
         $row1=$result1->fetch_assoc()
         ?>
<!DOCTYPE HTML>
<html>
<head>
<title>view organs</title>
</head>
<body>
<form name="form1" method="post" action="">
	<table width="98%"  border="2">
    <br>
    <br>
    <tr>
      <td colspan="9"><div align="center" class="style10">organs available for donation</div></td>
      </tr>
      
    <tr>
      <td width="7%" height="25" bordercolor="cyan" bgcolor="cyan"><span class="style21">organ</span></td>
      <td width="14%" bgcolor="cyan"><span class="style21">Blood group</span></td>
	  <td width="13%" bgcolor="cyan"><span class="style1"><span class="style21">age</span></span></td>
      <td width="13%" bgcolor="cyan"><span class="style1"><span class="style21">gender </span></span></td>
      </tr>
      <?php 
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
      ?>
         <tr>
        <td><?php echo $row1['name'];?></td>
      <td><?php echo $row['blood'];?></td>
      <td><?php echo $row['age'];?></td>
      <td><?php echo $row['gender'];?></td>
	  <td><?php echo "<a href=doctHome.php> Book Now </a>";?></td>
      </tr>
	 <?php
        }
		  }
    ?>
	
</table>
</div>
<ul><li><a style="color:red" href="doctHome.php">Back </a></li></ul>	
</form>
</body>
</html>