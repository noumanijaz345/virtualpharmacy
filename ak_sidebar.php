<?php
if(empty($_SESSION['Email']))
{
  echo '<script>alert("please enter your email")</script>';
  echo '<script>window.open("index.php?login","_self")</script>';
}
else
{
  $email=$_SESSION['Email'];
?>


<?php 
		$sql="select * from customer where Cstm_email='$email'";
		$res=$conn->query($sql);
		while($row=$res->fetch_assoc()){
			$Cstm_name=$row['Cstm_name'];
			$Cstm_image=$row['Cstm_image'];
			$email=$row['Cstm_email'];
		}



		?>







<div class="col-lg-3 col3">
		<div class="navbar-default">
		<br><br>
		
		
			<p class="text-center"><b>Name:</b>&nbsp;&nbsp;<?php echo $Cstm_name ?></p>
			
			<br>
		</div>
		<ul class="l1">
			<li><a href="confirm.php?myorder"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;My order</a> </li>
		   <li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Edit Account</a> </li>
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Change Password</a> </li>
			<li><a href=""><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Add to wishlist</a> </li>
			<li><a href="del_cstm.php?del_cstm=<?php echo $email ?>"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Delete my Account</a> </li>
			<li><a href="index.php?logout"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Logout</a> </li>
		</ul>
		
		
	</div>


	<?php } ?>