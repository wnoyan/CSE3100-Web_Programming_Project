<?php
  include 'header.php';
  include 'navigation.php';
  //include 'body.php';
  //include 'footer.php';
?>

<?php include('server.php') ?>

<?php

//**************************************
//if cookie set
if(isset($_COOKIE["cookie_name"]))
{
  header('Location: welcome.php');
}
else
{
?>


<!DOCTYPE html>
<html>
<head>
  <title>Log-In For Online System</title>
  <link rel="stylesheet" type="text/css" href="styleRegistration.css">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>

    <div>
      <input type="checkbox" name="remember" id="myCheck" onclick="myFunction()"> Remember Me!

      <p id="demo"></p>
    </div>

    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>

  <script>
  function myFunction() {
  var checkBox = document.getElementById("myCheck");

    if (checkBox.checked == true){
      alert("Your Cookie Will Be Set!");
    } else {
      text.style.display = "none";
    }

  }
</script>

</body>
</html>

<?php
}
?>

<?php
  //include 'header.php';
  //include 'navigation.php';
  //include 'body.php';
  include 'footer.php';
?>