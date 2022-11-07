<!DOCTYPE html>
<html>
<head>
    <title>ADD ORGANS</title>
    <style type="text/css">
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 50%;
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
<body>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
      <br>
    <h1>ADD ORGAN DETAIL</h1>
    <hr>

    <label for="email" ><b>ORGAN</b></label>
    <br>
    <input type="text" placeholder="Enter the organ to donate" name="name" required>
    <br>
      <button type="submit" class="signupbtn">ADD </button>
    </div>
  </div>
</form>

</body>
</html>

