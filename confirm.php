<?php
require_once('admin_panel/conn1.php');
require_once('function/function.php');
session_start();
$C_email=$_SESSION['Email'];








?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account</title>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="front.css" rel="stylesheet" type="text/css" />

<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>
<script>
	$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});








</script>

<style type="text/css">
	
</style>



</head>
<body>
	<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>
<?php
require_once('header.php'); ?>
<div class="container">
	<br><br>
	<div class="col-lg-12 col1">
		<a class="pay" href="index.php?home">Home</a><span class="glyphicon glyphicon-arrow-right"></span>Account
	</div>
<br><br><br>

	<?php
require_once('ak_sidebar.php'); ?>

<!--
	<div class="col-lg-3 col3">
		<div class="navbar-default">
		<img src="img/valium.jpg" width="100%" >
		<br><br>
		
			<p class="text-center"><b>Name:Arman</b></p>
			
			<br>
		</div>
		<ul class="l1">
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;My order</a> </li>
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Payoffline</a> </li>
		   <li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Edit Account</a> </li>
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Change Password</a> </li>
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Add to wishlist</a> </li>
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Delete my Account</a> </li>
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Logout</a> </li>
		</ul>
		
		
	</div>
-->


<?php

 
			



if(isset($_GET['akaccount']))
{
	include 'ak_account.php';
}


if(isset($_GET['myorder']))
{
	include 'myorder.php';
}


?>
	
	<!-- <div class="col-lg-1"></div>
	<div class="col-lg-8 col3">
		<h1 class="text-center"><b>Please Confirm Your Payment</b></h1>
		<br>

		<label>Invoice No:</label><br>
        <input type="text" placeholder="" required="required" class="form-control"><br>
		
		<label>Amount sent:</label><br>
		<input type="number" placeholder="" required="required" class="form-control">
		<br>
		
		<label>Select Payment mode:</label><br>
		<select class="form-control">
			<option selected="selected" disabled="disabled">Select Payment mode</option>
            <option>bank transaction</option>
            <option>apne transaction</option>
            <option>apke transaction</option>

		</select>
		<br>
		
		<label>Transaction/Refrence ID:</label><br>
		<input type="text" placeholder="" required="required" class="form-control"><br>
		
		<label>Easy Paisa/Omni code:</label><br>
		<input type="text" placeholder="" required="required" class="form-control"><br>
		
		<label>Payment Code:</label><br>
		<input type="text" placeholder="" required="required" class="form-control"><br>
		
		<center><input type="submit" class="btn btn-primary" value="Confirm Payment"></center>
		<br><br>
	</div>-->


</div>
</body>
<?php
require_once('footer.php'); 
?>