<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<?php
class connection
{
   var $conn;
   function connection()
   {
     $this->conn=mysql_connect("localhost","root","");
	 mysql_select_db("odms",$this->conn);
  // $sql="select * from donor";
   //$result= $conn->query($sql);
	}
}
?>	
<body>

</body>
</html>
 