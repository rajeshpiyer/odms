<?php
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE HTML >
<html>
<head>
<title>EDIT PROFILE</title>
<style>
body {
			background-image:url("img/photo/11.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}
    </style>
</head>
<?php
include_once("ex.php");
$obj=new ex;
$don=$obj->UniqueRecords("select * from donor where email='$email'");
echo $email;
if(isset($_POST['submit1']))
{
$email=$_SESSION['email'];
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$_SESSION['email']=$_POST['t4'];
$s="update donor set name='$mt1', age='$mt2', email='$mt4', num='$mt3' where email='$email'";
$n=$obj->InsertUpdateDelete($s);
$mt5=$_POST['t4'];
$s1="update user set email='$mt5' where email='$email'";
$n1=$obj->InsertUpdateDelete($s1);
echo "UPDATED SUCCESSFULLY"; 
}	

?>
<body>
<div>
	<table  border="0">
    <tr>
      <td >Registered Mail </td>
      <td ><?php echo $email;?></td>
      </tr>
    </table>
	<table width="86%"  border="0">
    <tr>
      <td colspan="8"><div align="center"><span class="style1">EDIT DETAILS </span></div></td>
      </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="13%">&nbsp; </td>
      <td width="41%">&nbsp;</td>
	  <td colspan="3">&nbsp;</td>
      </tr>
      <form action="" method="POST">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Name</td>
      <td><input name="t1" type="text" size="75" value="<?php if(isset($don[1])) echo $don[1];?>" ></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td> AGE</td>
      <td><input name="t2" type="text" size="75" value="<?php  echo $don[3];?>"></td>
      
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Mobile Number</td>
      <td>
        <input name="t3" type="text" size="75" value="<?php  echo $don[6];?>"></td>
      
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td> Email</td>
      <td><input name="t4" type="text" size="75" value="<?php  echo $don[5];?>"></td>
      </tr>

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="6%">&nbsp;</td>
      <td width="9%">&nbsp;</td>
      <td width="14%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="submit1" type="submit" value="submit" > </td>

      <td> </td>
      <br>
      <td>
      
    </td>
      <td>&nbsp;</td>
    </tr>

    <?php 

?>

 
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><br>   

      <a style="color:red" href="donHome.php?email=<?php echo $_SESSION['email'];?>">Back to home</a></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
   
  </table>
  
	
</div>	
</form>
</body>
</html>
