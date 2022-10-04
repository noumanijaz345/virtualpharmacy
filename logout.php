<?php


session_destroy();
echo "<script>alert('Your Account has been Logout')</script>";
echo "<script>window.open('index.php?login','_self')</script>";
echo " Logout";
?>
