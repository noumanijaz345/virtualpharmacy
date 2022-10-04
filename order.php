

<?php
//incude files function,db;
require_once('admin_panel/conn1.php');
require_once('function/function.php');

 

 ?>
 <?php
 
 // get costomer id

if(isset($_GET['Cstm_id'])){
	$Cstm_id=$_GET['Cstm_id'];
}


  ?>

<?php
 // <!-- get ipfunction call store in variable -->

$get_ip=getIP();
 $status="pending";
 $invoice=mt_rand();


 //selct cart using ip(qty,size,price,pro_id)

$cart="select * from cart where IP='$get_ip'";
$res=$conn->query($cart);
while($row=$res->fetch_assoc()){
	$qty=$row['quantity'];
	$price=$row['product_price'];
	$size=$row['size'];
	$pro_id=$row['pro_id'];
	
	$sub_total=(int)$price*(int)$qty;
	
	$sql="insert into customer_order(customer_id,due_amount,invoice_no,qty,size,order_date,order_status) values('$Cstm_id','$sub_total','$invoice','$qty','$size',NOW(),'$status')";
	$ress=$conn->query($sql);


	$pending_order="insert into pending_order(Cstm_id,invoice_no,product_id,qty,size,order_status) values('$Cstm_id','$invoice','$pro_id','$qty','$size','$status')";
	$resss=$conn->query($pending_order);


	$delete_cart="delete from cart where IP='$get_ip'";
	$result=$conn->query($delete_cart);


	echo "<script>alert('Your order has been submitted Sucessfully')</script>";
	echo "<script>window.open('confirm.php?myorder','_self')</script>";

	//costmoer order table get into my ortder




}



?>











 