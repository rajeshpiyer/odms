
    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n".$conn -> error);
         $sql="select * from booking";
         $result=$conn->query($sql);
         ?>
<!DOCTYPE HTML>
<html>
<head>
<title>view patients</title>
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
      <td colspan="9"><div align="center" class="style10">BOOKINGS</div></td>
      </tr>
      
    <tr>
      <td width="7%" height="25" bordercolor="cyan" bgcolor="skyblue"><span class="style21">Booking id</span></td>
      <td width="14%" bgcolor="skyblue"><span class="style21">organ id</span></td>
	  <td width="13%" bgcolor="skyblue"><span class="style1"><span class="style21">Donor id</span></span></td>
      <td width="13%" bgcolor="skyblue"><span class="style1"><span class="style21">Donor mail</span></span></td>
      <td width="13%" bgcolor="skyblue"><span class="style1"><span class="style21">Contact No</span></span></td>
      </tr>
      <?php 
      if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {
      ?>
         <tr>
        <td><?php echo $row['book_id'];?></td>
      <td><?php echo $row['don_id'];?></td>
      <td><?php echo $row['organ'];?></td>
      <td><?php echo $row['doc_email'];?></td>
      <td><?php echo $row['no'];?></td>
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