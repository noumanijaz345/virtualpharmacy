


<div class="container">
	
	<div class="col-lg-12  col-md-12 r1">
		<a href="home.php">Home</a>&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>&nbsp;<a href="shop.php">Shop</a>&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>&nbsp;
	</div>
	<br><br><br>
	<?php 
if(isset($_GET['view_details']))
{
		$id=$_GET['view_details'];
		show_detail($id); 


		$sql="select * from insert_product where ID='$id'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$price=$row['Product_saleprice'];
		
	?>



	<?php 
	if(isset($_POST['cart'])){
		$ip=getIP();
		
		$hello = $_POST['size'];
		if($hello!="")
		{
			$size=$_POST['size'];
		}	
		else
		{
			$size = small;
		}
		if($_POST['quan']!="")
		{
			$quan=$_POST['quan'];
		}	
		else
		{
			$quan = 1;
		}
		
			
		$pro_id=$id;
		
		$sql="insert into cart (pro_id,quantity,size,product_price,IP) values('$pro_id','$quan','$size','$price','$ip')";
		
		// KAL LAAZMI DEKHNA HAI
		if($conn->query($sql))
		{
			echo"<script>window.open('index.php?view_details',_self)</script>";
		}

		else{
			//echo $conn->error.$sql->error;
	    }

	}

	?>



<br><br>
<div class="col-lg-12  col-md-12">
<br><br>
</div>

<br><br>
	<div class="col-lg-3  col-md-3 wid">


<h2>You also like these Products</h2>

</div>




<?php

 show_rand();

?>


</div> <!-- container ends -->

<?php
}
?>