<?php
  include 'header.php';
  include 'navigation.php';
  //include 'body.php';
  //include 'footer.php';
?>

<?php

//**************************************
//session destroy
 session_start();
 session_destroy();
 unset($_SESSION['username']);

 header("location: login.php");
 
 //**************************************
//cookie destroy
 setcookie('cookie_name', "", time() - 3600);
 ?>


<?php
  //include 'header.php';
  //include 'navigation.php';
  //include 'body.php';
  include 'footer.php';
?>


</body>

</html>