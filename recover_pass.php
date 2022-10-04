
<div class="col-lg-1"></div>
	<div class="col-lg-10 col3">
		<h1 class="text-center"><b>Recover Password</b></h1>
		<br>
		<form method="post">

		<label>Enter your email:</label><br>
        <input type="email" name="e1" placeholder="" required="required" class="form-control"><br>
		
		<center><input name="b1" type="submit" class="btn btn-primary" value="Recover Password"></center>
		<br><br>
	</form>
	</div>

<?php 
if(isset($_POST['b1'])){
	$email=$_POST['e1'];
	$sql="select * from customer where Cstm_email='$email'";
	$res=$conn->query($sql);
	if($row=$res->fetch_assoc()){
		$pass=$row['Cstm_password'];
        echo "<script>alert('your password is $pass')</script>";
         echo "<script>window.open('index.php?login','_self')</script>";
	}
	else{
		echo $conn->error.$sql->error;
	}

}







?>