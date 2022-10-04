<?php
session_start();
?>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css">
<style>
.div_color{
	background-color:#FF9;
	border-radius:20px;
	margin-left:470px;
	margin-top:220px;
	box-shadow: 10px 25px 25px 10px rgba(0,0,0,.25);}

.a{
	background-color:#033;
	opacity:}


</style>
<div class="a" style="height:100%; width:100%;">


<div class="col-lg-3 div_color">


<form method="post">
<center>
<h1>Admin Login</h1>

<input type="Email" name="email" placeholder="Enter Your Email" class="form-control"><br>
<input type="Password" name="pass" placeholder="Enter Your Password" class="form-control"><br>

<input type="submit" name="sub" class="btn btn-primary form-control">


</center>
</form>
</div>
</div>

<?php
require_once('conn1.php');
	if (isset($_POST['sub'])) {
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		
		$sql="select * from admin where Email='$email' AND password='$pass'";
		$result=$conn->query($sql);
		while ($row=$result->fetch_assoc()) {
			 
			$_SESSION['Email']=$row['Email'];
			$_SESSION['Name']=$row['Name'];
			echo '<script>alert("You are login successfully")</script>';
			echo '<script>window.open("admin.php?dashboard","_self")</script>';
		}
	}
?>






