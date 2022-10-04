<head>
	<title>Medicine Shoppee</title>
</head>



<!-- body start -->



<div class="container">


<div class="col-lg-12 col-md-12">

<a href="index.php?home">Home</a><span class="glyphicon glyphicon-arrow-right"></span> Register

</div>



<div class="col-lg-12 col-md-12">
<h2 class="text-center">Register a New Account</h2>
<hr />
<br /></div>



<div class="col-lg-12 col-md-12">






<form method="post" enctype="multipart/form-data">
<label style="margin-left: 33%;">Name:</label>
<center><input  type="text" required="required" name="t1" class="form-control" style="width: 35%;" /></center>
<label style="margin-left: 33%;">Email:</label>
<center><input  type="email" required="required" name="e1" class="form-control" style="width: 35%;" /></center>
<label style="margin-left: 33%;">Passowrd:</label>
<center><input  type="password" required="required" name="" class="form-control" style="width: 35%;" /></center>
<label style="margin-left: 33%;">Confirm Password:</label>
<center><input  type="password" required="required" name="p1" class="form-control"  style="width: 35%;"/></center>
<label style="margin-left: 33%;">Country:</label>
<center><input  type="text" required="required" name="t3" class="form-control"  style="width: 35%;"/></center>
<label style="margin-left: 33%;">Contact No:</label>
<center><input  type="number" required="required" name="n1" class="form-control" style="width: 35%;"/></center>
<label style="margin-left: 33%;">Address:</label>
<center><input  type="text" required="required" name="t4" class="form-control" style="width: 35%;"/></center>
<label for="birthday" style="margin-left: 33%;">Date Of Birthday:</label>
<center><input class="form-control" type="date" id="birthday" name="birthday" style="width: 35%;"></center>

<br />

<center><button name="b1" class="btn btn-primary btn-small" style="width: 35%;">Register</button></center>

<br />
<center><h4 class="text-center"><a style="color:#337ab7;"  href="index.php?login">Have an account? Login now.</a></h4></center>
</form>
<hr />


















</div>























</div>


<?php  
if(isset($_POST['b1'])){
	$name=$_POST['t1'];
	$email=$_POST['e1'];
	$password=$_POST['p1'];
	$country=$_POST['t3'];

	$contact=$_POST['n1'];
	$address=$_POST['t4'];
	
	
	//$image=$_FILES['image1']['name'];
	//$temp=$_FILES['image1']['tmp_name'];
    //move_uploaded_file($temp,"customer_image/$image");


//  $image=$_FILES['image1']['name']; 
// $temp1=$_FILES['image1']['tmp_name'];

//move_uploaded_file($temp1,"/customer_image/".'$image');


	$sql="insert into customer(Cstm_name,Cstm_email,Cstm_password,Cstm_country,Cstm_contact,Cstm_address) values('$name','$email','$password','$country','$contact','$address')";
	if($conn->query($sql)){
		echo "<script>alert('Your Account has been Registered Successfully !')</script>";
	}
	else{
		echo $conn->error.$sql->error;
	}
}

?> 
















