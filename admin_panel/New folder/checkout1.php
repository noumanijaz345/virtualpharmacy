
<?php
if(empty($_SESSION['Email']))
{
	echo '<script>alert("please enter your email")</script>';
	echo '<script>window.open("my_account.php","_self")</script>';
}
else
{
	$Email=$_SESSION['Email'];
	
	
?>




<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="bootstrap1/js/bootstrap.js"></script>
<script src="bootstrap1/js/jquery-3.2.0.js"></script>


<style>
	.r1{
		
		padding:5px;
		box-shadow: 2px 2px 2px 2px rgba(0,0,0,.25);
}

.gil{
	margin-top:2px;}
li{
	list-style-type: none;
}	


</style>

<script src="bootstrap1/js/bootstrap.js"></script>
<script src="bootstrap1/js/jquery-3.2.0.js"></script>	
<?php require_once('header.php');?>

<br>
<div class="container">

<div class="col-lg-12 r1">
<a href="web.php">Home</a> > Register
 	
</div> 
<br><br><br>  


<div class="col-lg-12 r1">
<center>
<h1>Payment Options For You</h1>
<h4><a href="#">Pay Offline</a></h4>	
<img src="admin_panel/product_image/paypal.png"></center>
<br>
</div>

</div>



<br><br>

<?php require_once('footer.php');?>


<?php 
} 

?>