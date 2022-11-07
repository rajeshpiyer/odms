<!DOCTYPE >
<html>
<head>
<title>book</title>
<style>
body {
			background-image:url("img/photo/B1.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}
</style>
</head>
<?php
session_start();
$q=$_SESSION["email"];
//$r=$_GET["org"];
$t=$_GET["orgid"];
?>

<?php
include_once("ex.php");
$obj=new ex;
//$q=$_GET["id"];
$doct=$obj->UniqueRecords("select * from doctor where email='$q'");
$org=$obj->UniqueRecords("select * from organ where don_id='$t'");


   if(isset($_POST["SUBMIT"]))
   {
  $donid=$_POST["t1"];
	$org=$_POST["t2"];
	$docid=$_POST["t3"];
  $docname=$_POST["t4"];
  $demail=$_POST["t5"];
  $no=$_POST["t6"];

    $s="insert into booking(don_id,doc_email,organ,no) values('$donid','$demail','$org','$no')";	   
		$n=$obj->InsertUpdateDelete($s);
		 if ($n>0 )
		   {
		   ?>
		   <script>alert("Boking done ....")</script> ;
		   <?php
		   }
	
	  }

?>

<body>
<form name="form1" method="post" action="">
<div>
 <center> <table width="70%"  border="0">
    <tr>
      <td colspan="3"><div align="center" class="style1">BOOKING CONFIRMATION PAGE </div></td>
      </tr>
      <tr>
      <td>Organ Id </td>
      <td><input name="t1" type="text" id="t1" readonly size="70" value="<?php echo $t;?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "odms";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    $sql="select * from organ where org_id=$t";
         $result=$conn->query($sql);
        while ($row=$result->fetch_assoc()) {
          $qq=$row['don_id'];
        }

          ?>

      <td>Donor id</td>
      <td><input name="t2" readonly type="text" id="t2" size="70" value="<?php echo $qq;?>"></td>
      <td>&nbsp;</td>
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Doctor Id </td>
      <td><input name="t3" readonly type="text" id="t3" value="<?php if(isset($doct[1])) echo $doct[0];?>"></td>
      <td>&nbsp;</td>
      </tr>
      <tr>
      <td>Name </td>
      <td><input name="t4" readonly type="text" id="t4" value="<?php if(isset($doct[1])) echo $doct[1];?>"></td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>Email </td>
      <td><input name="t5" readonly type="text" id="t5" value="<?php echo $q;?>"></td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
      <tr>
      <td>Number for communication</td>
      <td><input name="t6" type="text" id="t6" size="70" required pattern="[0-9]+" required minlength="10" maxlength="10"></td>
      <td>&nbsp;</td>
      </tr>
      <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center">
        <input type="submit" name="SUBMIT" value="SUBMIT">
      </div></td>
      <td>&nbsp;</td>
      </tr>
  </table>
  </center>
</form>
<ul><li><a style="color:red" align:"center" href="doctHome.php">Return Home </a></li></ul>	
</body>
</html>
