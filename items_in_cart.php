

<head>
	<title>Medicine Shoppee</title>
</head>


<!-- body start -->

<?php 



 ?>

<div class="container">


<div class="col-lg-12 box1">

<a href="index.php?home">Home</a><span class="glyphicon glyphicon-arrow-right"></span> Cart

</div>





<div class="col-lg-9">

<br /><br />
<h2>Shopping Cart</h2>
<p class="text-muted">You currently have <?php items() ?> item(s) in your cart.</p>
<div class="table-responsive">
<table class="table table-hover table-condensed">
	<thead>
		<tr>
			<th>Product_image</th>
			<th>Title</th>
			<th>Quantity</th>
			<th>Unit Price</th>
			<th>Size</th>
			<th>Delete</th>
			<th>Sub Total</th>
		</tr>
	</thead>
	<tbody>
		<?php  
		$total=0;
		$Subtotal=0;
		$ip=getIP(); 
       $sql="select * from cart where IP='$ip'";
       $result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
			$pro_id=$row['pro_id'];
			$pro_qty=$row['quantity'];
			$pro_size=$row['size'];
			$pro_price=$row['product_price'];
			


			$getpro="select * from insert_product where ID='$pro_id'";
			$res=$conn->query($getpro);
			while ($roww=$res->fetch_assoc()) {
				$title=$roww['Product_Title'];
				$img=$roww['Product_image1'];
			}

			$total = (int)$pro_qty * (int)$pro_price;
			$Subtotal+=$total;
		?>
		<tr>
			<td><img src="admin_panel/product_image/<?php echo $img; ?>" height="50" width="50"></td>
			<td><?php echo $title; ?></td>
			<td><input type="text" name="Quantity" value="<?php echo $pro_qty; ?>"></td>
			<td><?php echo "RS.$pro_price"; ?></td>
			<td><?php echo $pro_size; ?></td>
			<td><a href="index.php?pro_id=<?php echo $pro_id; ?>"><span class="glyphicon glyphicon-trash"></span></td>
			<td><?php echo "RS.$total"; ?></td>
		</tr>
		<?php
}
		?>
	</tbody>
</table>
</div>
<!--
<strong>Product</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Quantity</strong>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Unit Price</strong>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Size</strong>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Delete</strong>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sub Total</strong>

-->

<br/>
<br />



<h4 class="carthead2">Total</h4>
<h4 class="carthead3"><?php echo "RS.$Subtotal"; ?></h4>
<br />
<br />
<div class="cartlabel1">
<label>Coupon Code:</label>
<input type="text"/> <button class="btn btn-primary">Appy Coupon Code</button>

</div>
<br/><br/><br/><hr /><br/>
<button class="btn btn-default"><span class="glyphicon glyphicon-arrow-left" ></span>Continue Shopping</button>
<div class="div2">
<a href="#" class="btn btn-default">Update Cart</a>
<a href="index.php?checkout" class="btn btn-primary">Proceed to Checkout<span class="glyphicon glyphicon-arrow-right" ></span></a>
</div>








</div>
<div class="col-lg-3">
<br /><br />
<h2>Order Summary</h2><br />
<hr/>

Shipping and additional costs are<br/> calculated based on the values<br/> you have entered. <hr/>
<p>Order Subtotal:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "RS.$Subtotal"; ?>
<br/>
<hr/>
<?php 
$tax=2/100*$Subtotal;
$shipping=0.00;
$total=$tax+$shipping+$Subtotal;
//$_SESSION['total']=$total;
$sql="insert into cart where Total_price='$total' ";
$res=$conn->query($sql);

?>
shipping and handling:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "RS.$shipping"; ?>

<br/>
<hr/>
Tax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "RS.$tax"; ?>


<br/>
<hr/>
<strong>TOTAL</strong>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "RS.$total"; ?>




</p>

<br><br><br><br><br><br><br>

</div>




<div class="col-lg-2">
<h2>You also <br />like these<br /> Products</h2>

</div>

<?php 
show_rand1();
?>

<!--
<div class="col-lg-2">

<img src="img/IMG-20180814-WA0020.jpg" style="width:100%;height:180px" />
<br/><br/>
<center><button class="btn btn-primary">novartis</button>
<br />
<hr />
<a href="#"><strong>Ritalin 10mg</strong></a><br/> 
$39<br/>

<a href="#"><button class="btn btn-default">View Detail</button><br /><br /></a>
<a href="#"><button class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span>Add to cart</button></a>






</center>

</div>
<div class="col-lg-2">



<img src="img/IMG-20180814-WA0013.jpg"  style="width:100%;height:180px"/>
<br/><br/>
<center><button class="btn btn-primary">valium</button>
<br />
<hr />
<a href="#"><strong>valium 10mg<br/></strong></a><br/> 
$4<br/>

<a href="#"><button class="btn btn-default">View Detail</button><br /><br /></a>
<a href="#"><button class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span>Add to cart</button></a>






</center>





</div>
<div class="col-lg-2">




<img src="img/IMG-20180814-WA0033.jpg" style="width:100%;height:180px"/>
<br/><br />
<center><button class="btn btn-primary">valium</button>

<hr />
<a href="#"><strong>valium by 1*strip<br/></strong></a><br/> 
$4<br/>
<a href="#"><button class="btn btn-default">View Detail</button><br /><br /></a>
<a href="#"><button class="btn btn-primary"><span class="glyphicon glyphicon-trash"></span>Add to cart</button></a>






</center>


</div>

-->
</div>



<br><br><br><br>