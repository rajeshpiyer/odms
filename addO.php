<?php
//session_start();
//$email=$_SESSION['email'];
//$bb=$obj->UniqueRecords("select don_id from donor where email='$email' ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>add patients</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
//$co= mysql_connect("localhost","root","");
//mysql_select_db("odms",$co);
include_once("ex.php");
$obj1=new ex;
$temp=0;
$errt1="";
session_start();
$email=$_SESSION['email'];
$donor=$obj1->UniqueRecords("select don_id from donor where email='$email' ");
if(isset($_POST['submit']))
{
$mt1=$_POST['t1'];
if(empty($mt1))
{
$errt1="organ name is blank";
$temp=1;
}
if ($temp==0)
{
$n=$obj1->InsertUpdateDelete("insert into organ( name, don_id) values('$mt1','$donor[0]')");
if($n>0)
echo "insertion success";
else 
echo "failure";
}
}
?>
<body>
    <!--<h1><?php  echo $donor[0];?></h1>-->
    
    <form name="form1" method="post" action="">
        <br>
        <div class="panel panel-skin">
        <div class="panel-heading">
            <h3 class="panel-title" style="color: antiquewhite"><span class="fa fa-pencil-square-o">ADD DONATING ORGAN </span> </h3>
            </div>
            </div>
            <br>
        <div>
            <table border="0">
              <tr> 
                <td width="182">ORGAN</td>
                <td width="433"><input name="t1" type="text" size="70" required pattern="[A-Za-z_]+" title= "Use alphabets only" ></td>
               
</tr>
              <tr> 
                <td></td>
                </tr>
        </table>
       
    </div>
    <br>
                    
   <input name="submit" type="submit" value="submit" class="btn btn-skin btn-block btn-lg" style="color: rgb(16,16,82);">
                    
       <br>
               

        <ul><li><a style="color:red" href="donHome.php">Back to home</a></li></ul>
                </form>    
        </body>
        </html> 
        			
    