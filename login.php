
<?php
session_start();
?>
<head>
	<title>Medicine Shoppee</title>
</head>



<!-- body start -->



<div class="container">


<div class="col-lg-12  col-md-12">

<a href="index.php?home" style="color:#337ab7;" >Home</a><span class="glyphicon glyphicon-arrow-right"></span> My Account

</div>


<div class="col-lg-12 col-md-12">
<center>
<h2 >Login</h2><br />
<p class="text-muted account_p2">Wellcome to the Medicine Shopee store,We inform you to <a style="color:#337ab7;" href="index.php?register">register</a> first if you are a new members.</p>
</center>
<hr />
</div>









<form method="post">

<label style="margin-left: 33%;">Email:</label>

<center><input type="email" name="e1" class="form-control" style="width: 35%;"><center>
<br />


<label style="margin-left: -29%;">Password:</label>




<input type="password" name="p1" class="form-control"  style="width: 35%;">

<br />
<br />

<center><input type="submit" name="b1" value="Log in" class="btn btn-primary" style="width: 35%;"></center><br />
<h4 class="text-center "><a style="color:#337ab7;" href="index.php?recover_pass">Forgot Password</a></h4><br />
<h4 class="text-center"><a style="color:#337ab7;"  href="index.php?register">New ? Register Here</a></h4>


</form>





</div>
<?php
if(isset($_POST['b1'])) {
		$email=$_POST['e1'];
		$pass=$_POST['p1'];
		
		$sql="select * from customer where Cstm_email='$email' AND Cstm_password='$pass'";
		$result=$conn->query($sql);
		while ($row=$result->fetch_assoc()) {
			$_SESSION['Email']=$row['Cstm_email'];
			$_SESSION['user']=$row['Cstm_name'];
			
			echo "<script>alert('You are login successfully !')</script>";
			echo "<script>window.open('index.php?checkout','_self')</script>";
		}

	}




?>








<br /><br /><br /><br />


