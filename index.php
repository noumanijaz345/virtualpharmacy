<?php
require_once('admin_panel/conn1.php');
require_once('function/function.php');
	
	error_reporting(E_ALL);
	ini_set('display_errors', '0');
	
session_start();


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="front.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/favicon.ico" type="img/ico">
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


<?php require_once('header.php'); ?>

<?php #require_once('home.php'); ?>

<?php
	
	$isFirstTime = false;

if(isset($_GET['cart_items']))
{
	include 'items_in_cart.php';
	$isFirstTime = True;
}

if(isset($_GET['go_to_cart']))
{
	require_once('items_in_cart.php');
	$isFirstTime = True; 
}

if(isset($_GET['shopping_cart']))
{
	require_once('items_in_cart.php');
	 $isFirstTime = True; 
}



if(isset($_GET['checkout']))
{
	include 'checkout.php';
	$isFirstTime = True; 
}


if(isset($_GET['bulk_offer']))
{
	include 'bulk_offer.php';
	$isFirstTime = True; 
}
if(isset($_GET['contact_us']))
{
	include 'contact_us.php';
	$isFirstTime = True;
}


if(isset($_GET['help']))
{
	require_once('help.php');
	 $isFirstTime = True; 
}


if(isset($_GET['view_details']))
{
		$id=$_GET['view_details'];
	require_once('view_details.php'); 
	 $isFirstTime = True;
}


if(isset($_GET['medicine']))
{
	require_once('medicine.php');
	 $isFirstTime = True; 
}

if(isset($_GET['mencare']))
{
	require_once('medicine.php');
	 $isFirstTime = True; 
}


if(isset($_GET['login']))
{
	require_once('login.php');
	$isFirstTime = True; 
}


if(isset($_GET['logout']))
{
	require_once('logout.php');
	$isFirstTime = True;
}


if(isset($_GET['recover_pass']))
{
	require_once('recover_pass.php');
	$isFirstTime = True;
}

if(isset($_GET['diabetes_offer']))
{
	require_once('diabetes_offer.php');
	$isFirstTime = True;
}


if(isset($_GET['pro_id']))
{
	require_once('cart_delete.php');
	$isFirstTime = True; 
	
}



if(isset($_GET['my_account']))
{
	require_once('my_account.php');
	 $isFirstTime = True; 
}


if(isset($_GET['register']))
{
	require_once('register.php');
	$isFirstTime = True;
}



if(isset($_GET['terms_and_conditions']))
{
	require_once('terms_and_conditions.php');
	$isFirstTime = True;
}


if(isset($_GET['track_shippment']))
{
	require_once('track_shippment.php');
	$isFirstTime = True;
}


if(isset($_GET['home']) || !$isFirstTime)
{
         require_once('home.php');
}


?>


<?php require_once('footer.php');  ?>



</body>
</html>