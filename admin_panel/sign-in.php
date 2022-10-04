<!DOCTYPE html>
<html>
<head>
	<title>Signin page</title>
	<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<style>
.div_color{
	background-color:#FF9;
	border-radius:20px;
	margin-left:470px;
	margin-top:220px;
	box-shadow: 10px 25px 25px 10px rgba(0,0,0,.25);}

body{
	background-color:#033;
	opacity:}
</style>
<body>


<div class="col-lg-3 div_color">

	<form method="post" enctype="multipart/form-data">
		<h1 class="text-center">SIGNUP</h1>
		<input type="text" placeholder="enter your name" name="t1" class=" form-control"><br>
        
		<input type="email" placeholder="enter your email" name="e1" class=" form-control"><br>
        <input type="password" placeholder="enter your password" name="p1" class=" form-control"><br>
        <input type="file" name="img1" class="form-control">
        <input type="submit" name="b1" value="sigin" class="btn btn-primary form-control"><br>



	</form><br>
</div>
</body>
</html>


<?php
require_once('conn1.php');
if(isset($_POST['b1'])){
$user=$_POST['t1'];	

$pass=$_POST['p1'];

$image=$_FILES['img1']['name'];
$temp=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp,"product_image/$image");
$email=$_POST['e1'];


$sql1="select * from admin where Email='$email'";

$res=$conn->query($sql1);
$a=0;


while($row=$res->fetch_assoc()){
	$email1=$row['Email'];
	if($email1==$email){
		//echo "<script>alert('this email is already register, plz try another one.')</script>";
		$a++;
	}
}


if($a>0){
	echo "<script>alert('this email is already register, plz try another one.')</script>";
	echo "<script>window.open('sign-in.php','_self')</script>";

}


else{

$sql="insert into admin (Name,Email,password,image) values('$user','$email','$pass','$image')";
if($conn->query($sql)){
  echo "<script>alert('your account has been registered sucessfully')</script>";



}

else{
	?>
<p style="color:yellow"> <?php echo $conn->error.$sql->error;?> </p>
<?php
}

}


}


?>