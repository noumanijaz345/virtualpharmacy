
<?php
if(empty($_SESSION['Email']))
{
	echo '<script>alert("Please login your account first")</script>';
	echo '<script>window.open("index.php?login","_self")</script>';
}
else
{
	$email=$_SESSION['Email'];
     //select costumer and get customer id
	$select_cstm="select * from customer where Cstm_email='$email'";
	$res=$conn->query($select_cstm);
	while($row=$res->fetch_assoc())
{
		$Cstm_id=$row['Cstm_id'];	
	}
?>




<div class="body1">


<div class="container">
	<br><br>
	<div class="col-lg-12 col1">
		<a class="pay" href="index.php?home">Home</a><span class="glyphicon glyphicon-arrow-right"></span>Register
	</div>
<br><br><br>
<div class="col-lg-12 col2">
	<h2 class="text-center"><b>Payment Options For You</b></h2>
	<!-- order.php?C_id=echo -->
	<h3 class="text-center"><a class="pay" href="order.php?Cstm_id=<?php echo $Cstm_id?>" onclick="myFunction()">Cash on Delivery</a></h3>
	    <script> 
function myFunction() {
  alert("Make sure you add item in shopping cart then click Cash on Delivery");
}</script>';
        <center><img src="img/payment method.jpg" ></center>
        <br><br>

</div>
</div>

</div>



<?php 

}




 ?>

