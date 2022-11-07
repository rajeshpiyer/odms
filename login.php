<!DOCTYPE HTML>
<html>
<head>
<title>Login Page</title>
<style>
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: cyan;  
}  
button {   
       background-color: #4CAF50;   
       width: 32%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: 3px solid #f1f1f1;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue; 
        width: 98%;  
    }   
    body{
      background-image:url("img/photo/5.jpg");
      background-repeat:no-repeat;
			background-size: cover;
    }
</style>   
<center><h1>LOGIN</h1></center>
</head>
<?php
//include_once("ex.php");
//$obj=new ex;
//$co= mysql_connect("localhost","root","");
//mysql_select_db("odms",$co);
include_once("ex.php");
$obj=new ex;
session_start();
 if(isset($_POST["LOGIN"]))
  {
	 $email=$_POST['t1'];
	 $pword=$_POST['t2'];
	$s=mysql_query("select * from user where email ='$email' and pass='$pword'");
	$x=mysql_fetch_array($s);
	 $count=mysql_num_rows($s);
	 if($x[0]!=null)
	 {
    $n=$x[1];
		 $p=$x[2];
		$r=$x[3];

	  $_SESSION['email']=$n;
		 $_SESSION['pass']=$p;
		 $_SESSION['type']=$r;
			
		if($r=="DT")
		  {
     $_SESSION['email']=$n;
		  header('location:dash.php');
		  }
      elseif($r=="DN")
      {
        $_SESSION['email']=$n;
        header('location:donHome.php');
      }
      elseif($r=="A")
      {
        $_SESSION['email']=$email;
        header('location:adminHome.php');
      }
	 else
	   {
	   echo "Invalid user";
	  }	 		
    }   
    else
	   {
	   echo "<b> <div style='font-size:2.25em;'>Invalid user </div></b>";
	  }	 		
 }
?>
<body>
	<div class="container">
 <form name="form1" method="post" action="">
  <table align="center" width="32%"border="0">
    <tr> 
      <td ></td>
    </tr>
    <tr> 
      <td width="41%" height="44" >Email </td>
      <td width="59%"> <input type="text" name="t1" required pattern="[^ @]*@[^ @]*" title="enter valid email eg: user@gmail.com"></td>
    </tr>
    <tr> 
      <td height="59">Password</td>
      <td><input type="password" name="t2" required></td>
    </tr>
</table>

  <br>
	<center>	<button height="59" name="LOGIN" type="submit" id="LOGIN2" value="LOGIN" >LOGIN </button> 
  <br>
  <a style="color:red" href="index.html">Go back home</a>
  </center>
  </center>
  </div> 
  </form>
</body>
</html>