<!DOCTYPE html>
<html lang="en">

<head>
    <title>DOCTOR REGESTRATION</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
//$co= mysql_connect("localhost","root","");
//mysql_select_db("odms",$co);
include_once("ex.php");
$obj1=new ex;
$temp=0;
$errt1=$errt2=$errt3=$errt4=$errt5=$errt6="";
if(isset($_POST['submit']))
{
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$mt5=$_POST['t5'];
$mt6=$_POST['t6'];
if(empty($mt1))
{
$errt1="name is blank";
$temp=1;
}
if(empty($mt2))
{
$errt2="hospital details is blank";
$temp=1;
}
if(empty($mt3))
{
$errt3="age is blank";
$temp=1;
}
if(empty($mt4))
{
$errt4="gender blank";
$temp=1;
}
if(empty($mt5))
{
$errt5="email is blank";
$temp=1;
}
if(empty($mt6))
{
$errt6="password is blank";
$temp=1;
}
if ($temp==0)
{
//$n=mysql_query("insert into register ( nam ,cperson, mobile, email,status) values('$mt1','$mt2','$mt3','$mt4','N')");
$n=$obj1->InsertUpdateDelete("insert into doctor ( name, hospital, age, gender, email, pass, type) values('$mt1','$mt2','$mt3','$mt4','$mt5','$mt6','DT')");
$m=$obj1->InsertUpdateDelete("insert into user ( email, pass, type) values('$mt5','$mt6','DT')");
if($n>0)
//echo "insertion success";
header("Location:login.php");
else 
echo "failure";
}
}
?>
<style>
  body {
			background-image:url("img/photo/3.jpg");
			background-repeat:no-repeat;
			background-size: cover;
		}
  </style>
<body>
    <form name="form1" method="post" action="">
        <br>
        <div class="panel panel-skin">
        <div class="panel-heading">
            <h3 class="panel-title" style="color: antiquewhite"><span class="fa fa-pencil-square-o">DOCTOR REGESTRATION </span> </h3>
            </div>
            </div>
            <br>
        <div>
            <table border="0">
              <tr> 
                <td width="182"><strong>NAME</strong></td>
                <td width="433"><input name="t1" type="text" size="70" required pattern="[A-Za-z_ '']+" title= "Use alphabets only" value="<?php if(isset($mt1)) echo $mt1; ?>"></td>
                <td width="314"> <?php echo $errt1; ?></td>
              </tr>
              <tr> 
                <td><strong>HOSPITAL</strong></td>
                <td><input name="t2" type="text" size="70" required pattern="[A-Za-z_ '']+" title= "Use alphabets only"></td>
                <td><?php echo $errt2; ?></td>
              </tr>
              <tr> 
                <td><strong>AGE</strong></td>
                <td><input name="t3" type="text" size="70" required minlength="2" maxlength="2" required pattern="[0-9]+" title= "use numbers only" value="<?php if(isset($mt3)) echo $mt3; ?>"></td>
                <td><?php echo $errt3; ?></td>
              </tr>
              <tr> 
                <td><strong>GENDER</strong></td>
                <td><input name="t4" type="radio" id="Male" value="MALE" size="70" required value="<?php if(isset($mt4)) echo $mt4; ?>">
                <label for="Male"><strong>MALE</strong></label>
                <input name="t4" type="radio" id="Female" value="FEMALE" size="70" required value="<?php if(isset($mt4)) echo $mt4; ?>">
                <label for="Female"><strong>FEMALE</strong></label>
                <input name="t4" type="radio" id="other" value="OTHER" size="70" required value="<?php if(isset($mt4)) echo $mt4; ?>">
                <label for="other"><strong>OTHER</strong></label> </td>
              </tr>
              <tr> 
                <td><strong>EMAIL</strong></td>
                <td><input name="t5" type="text" size="70" required pattern="[^ @]*@[^ @]*" title="enter valid email eg: user@gmail.com" value="<?php if(isset($mt5)) echo $mt5; ?>"></td>
                <td><?php echo $errt5; ?></td>
              </tr>
              <tr>
                <td ><strong>PASSWORD</strong></td>
                <td><input name="t6" type="password" required pattern="[^' ']+" title="No spaces" value="<?php if(isset($mt6)) echo $mt6; ?>" size="70"></td>
                <td><?php echo $errt6; ?></td>
              </tr>
              <tr> 
                <td></td>
                </tr>
        </table>
    </div>
    <br>
                    
   <input name="submit" type="submit" value="submit" class="btn btn-skin btn-block btn-lg" style="color: rgb(16, 16, 82);">
                    
       <br>
               

        <ul><li><a style="color:red" href="index.html">Back to home</a></li></ul>
                </form>    
        </body>
        </html>
        			
    