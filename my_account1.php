

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>medicine-Shopee</title>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />

<link rel="icon" href="download.png" type="image" size="16*16">
</head>

<body>

<?php require_once('header.php');?>






<div class="container">
<div class="panel panel_body">	
<form method="post">
<center><h1>Login</h1>
<h3>Already Our Account</h3>
<p>Welcome to The Medicine Shopee store, We inform you to register first if<br> you are a new customer.</p>
</center>


<div class="col-lg-12">
<lable>Email:</lable>
<input  type="text" class="form-control"  required="required" name="email">
<br>
</div>

<div class="col-lg-12">
<lable>Password:</lable>
<input type="Password" class="form-control"  required="required" name="pass">
<br><br>
</div>


<center><h4><a href="#">Forgot Password</a></h4>
<input type="submit" name="sub" value="Login" class="btn btn-primary">

<h4><a href="#">New ? Register Here</a></h4>
</center>
</form>
<br>
</div>
</div>


<br><br><br>



<?php
require_once('admin_panel/conn1.php');
	if (isset($_POST['sub'])) {
		
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		

		$sql="select * from customer where Cstm_email='$email' AND Cstm_password='$pass'";
		$result=$conn->query($sql);
		while ($row=$result->fetch_assoc()) {
			$_SESSION['Email']=$row['Cstm_email'];
			
			
			echo '<script>alert("You are login successfully")</script>';
			echo '<script>window.open("checkout.php","_self")</script>';
		}


	}
?>







<?php require_once('footer.php');?>

<!--
<div class="container-fluid">
<div class="col-lg-3">
<h3>Pages</h3>
<br>
<br>
Shopping Cart<br>
Contact Us<br>
My Account<br>
<br>
<h3>User Section</h3>
Login<br>
Register<br>
Terms And Conditions<br>
Help



</div>
<div class="col-lg-3">

<h3>Top Products Categories</h3>
<br>
<br>
Antipyretics<br>
Antibiotics<br>
Antiseptics<br>
CNS Stimulants<br>
diazepam<br>
pain killer<br>
adderall<br>
wieght loss<br>
pinix<br>



</div>
<div class="col-lg-3">

<h3>Where to find us</h3>
<br>
<br>
The Medicine Shopee<br> 
whoslesale55@yahoo.com <br>
wholesaleritalin@yahoo.com <br>
Wholesaleritalin<br>
<br>
<span style="color:#06F">Go to Contact us page</span><br>



</div>
<div class="col-lg-3">

<h3>Get the news</h3>
<br>
<br>
Our top rated medicine are very popular<br> in our customer that effect the body<br> positively. Get updated with-us:
<input type="text" style="width:150px">
<button class="btn btn-default">Subcribe</button>
</div>



<div class="col-lg-12" style="background-color:#06F; height:70px">

<div class="col-lg-4 pull-left">
<h3 style="color:#FFF; ">@Medicine Shopee</h3>
</div>
<div class="col-lg-5 pull-right">
<h3 style="color:#FFF">Template By <span style="color:#03F">The Medicine Shopee</span></h3>
</div>
</div>




</div>
-->
</body>
</html>
