<!DOCTYPE html>
<html>
<head>
    <title>ADD PATIENTS</title>
    <style type="text/css">
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 18px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 35px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 1;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 12px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 50%;
  }
}
</style>
</head>
<?php
//$co= mysql_connect("localhost","root","");
//mysql_select_db("odms",$co);
include_once("ex.php");
$obj1=new ex;
$temp=0;
if(isset($_POST['submit']))
{
$mt1=$_POST['t1'];
$mt2=$_POST['t2'];
$mt3=$_POST['t3'];
$mt4=$_POST['t4'];
$mt5=$_POST['t5'];
if ($temp==0)
{
//$n=mysql_query("insert into register ( nam ,cperson, mobile, email,status) values('$mt1','$mt2','$mt3','$mt4','N')");
$n=$obj1->InsertUpdateDelete("insert into patient ( name, age, gender, blood, org) values('$mt1','$mt2','$mt3','$mt4','$mt5')");
if($n>0)
echo "insertion success";
else 
echo "failure";
}
}
?>
<body>

<form style="border:2px solid #ccc">
  <div class="container">
    <h1>ADD PATIENT DETAILS</h1>
    <hr>

    <label for="email" ><b>NAME</b></label>
    <input type="text" placeholder="Enter Name" name="t1" value="<?php if(isset($mt1)) echo $mt1; ?>" required>

    <label for="psw"><b>AGE</b></label>
    <input type="text" placeholder="Enter age" name="t2" value="<?php if(isset($mt2)) echo $mt2; ?>" required>

    <label for="email"><b>GENDER</b></label>
    <input type="text" placeholder="Enter gender" name="t3" value="<?php if(isset($mt3)) echo $mt3; ?>" required>
    <label for="psw-repeat"><b>BLOOD GROUP</b></label>
    <input type="text" placeholder="Enter Blood Group" name="t4" value="<?php if(isset($mt4)) echo $mt4; ?>" required>

    <label for="psw"><b>REQUIRED ORGAN</b></label>
    <input type="text" placeholder="Enter the required organ" name="t5" value="<?php if(isset($mt5)) echo $mt5; ?>" required>
    <div >
      <button type="button" class="cancelbtn">Cancel</button>
      <button name="submit" type="submit" class="signupbtn">ADD PATIENT</button>
    </div>
  </div>
</form>

</body>
</html>

