<?php

session_start();
session_destroy();
echo "<script>alert('Your account has been Logout')</script>";

echo "<script>window.open('login.php','_self')</script>";
?>

