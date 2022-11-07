<!DOCTYPE html>
<html>
<head>
    <title>Admin | View Order</title>
</head>
<body>
  <header>
    <h1>Admin @ Efarm</h1>
  </header>
  <nav>
    <ul>
      <li><a href="admin_home.php">Home</a></li>
      <li><a href="a_logout.php">Log Out</a></li>
      <li><a href='item_image.php'>Upload Image</a></li>
      <li><a href='edit_item.php'>EDIT</a></li>
      <li><a href='delete_item.php'>DELETE</a></li>
    </ul>
  </nav>
  <table>
		<tr>
			<th>Sales ID</th>
			<th>User ID</th>
			<th>Item ID</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
			<th>Date</th>
			<th>Review</th>
		</tr>
 <?php

$host="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "odms";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
		die('Connect error('. mysqli_connect_error().')'. mysqli_connect_error());
	}

        $sql = "SELECT * from donor;";
        $result=mysqli_query($conn, $sql);
       $resultCheck = mysqli_num_rows($result);
       if($resultCheck > 0){
           while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['don_id'] ."</td>";
            //echo "<td>".$row['users_id'] ."</td>";
            echo "<td><a href=user_individual.php?don_id=".$row['don_id']. ">".$row['don_id'] ."</a></td>";
            //echo "<td>".$row['items_id'] ."</td>";
            echo "<td><a href=item_individual.php?items_id=".$row['don_id']. ">".$row['don_id'] ."</a></td>";
            echo "<td>".$row['blood'] ."</td>";
            echo "<td>".$row['age'] ."</td>";
            echo "<td>₹".$row['blood'] ."</td>";
            echo "<td>".$row['gender'] ."</td>";
            echo "</tr>";
           }
       }
?>
</table>
</body>
</html>