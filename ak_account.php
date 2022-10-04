 <?php
require_once('admin_panel/conn1.php');
require_once('function/function.php');

session_start();


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="front.css" rel="stylesheet" type="text/css" />

<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>
<script>
	$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});





</script>

<style type="text/css">
	
</style>



</head>

<body>
<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>






<?php require_once('header.php'); ?>
<div class="container">
	<br><br>
	<div class="col-lg-12 col1">
		<a class="pay" href="index.php?home">Home</a><span class="glyphicon glyphicon-arrow-right"></span>Confirm Payment
	</div>
<br><br><br>

	<?php
require_once('ak_sidebar.php'); ?>
<div class="col-lg-1"></div>
	<div class="col-lg-8 col3">
		<h1 class="text-center"><b>Please Confirm Your Payment</b></h1>
		<br>
		<form method="post">
			<?php 
			if(!isset($_GET['on'])){
				echo "<script>alert('there is no parameter')</script>";

 			}
 			else
 				
 			{
				 $on=$_GET['on'];
 			
			?>
			<?php 

			$sql="select * from customer_order where order_id='$on'";
			$res=$conn->query($sql);
			while($row=$res->fetch_assoc()){
				$invoice_no=$row['invoice_no'];
				$due_amount=$row['due_amount'];
			



			 ?>

		<label>Invoice No:</label><br>
        <input type="text" name="n1" value="<?php echo $invoice_no ?>" placeholder="" required="required" class="form-control"><br>
		
		<label>Amount sent:</label><br>
		<input type="number" name="n2" placeholder="" value="<?php echo $due_amount ?>" required="required" class="form-control">
		<br>
		
		<label>Select Payment mode:</label><br>
		<select name="m1" required="required" class="form-control">
			<option selected="selected" disabled="disabled">Select Payment mode</option>
            <option value="bank code">bank code</option>
            <option value="UBL/Omni Paisa">UBL/Omni Paisa</option>
            <option value="Easy Paisa">Easy Paisa</option>
            <option value="Western Union">Western Union</option>

		</select>
		<br>
		
		<label>Transaction/Refrence ID:</label><br>
		<input name="n3" type="text" placeholder="" required="required" class="form-control"><br>
		
		<label>Easy Paisa/Omni code:</label><br>
		<input name="n4" type="text" placeholder="" required="required" class="form-control"><br>
		
		

		<label>Payment Date:</label><br>
		<input name="n6" type="date" placeholder="" required="required" class="form-control"><br>
		
		<center><input name="b1" type="submit" class="btn btn-primary" value="Confirm Payment"></center>
		<br><br>
	</form>
	</div>
</div>

</body>



<?php require_once('footer.php');  ?>

<?php } ?>


	<?php 
	if(isset($_POST['b1'])){
		$invoice_no=$_POST['n1'];
		$amount_sent=$_POST['n2'];
		$payment_mode=$_POST['m1'];
		$transaction_id=$_POST['n3'];
		$easypaisa_code=$_POST['n4'];
		

		$sql="insert into payment (invoice_no,amount_sent,payment_mode,transaction_id,easypaisa_code,payment_date) values('$invoice_no','$amount_sent','$payment_mode','$transaction_id','$easypaisa_code',NOW())";


        if($conn->query($sql)){
			echo "<script>alert('your payment has been confirmed')</script>";
			echo "<script>window.open('confirm.php?myorder','_self')</script>";
		}
		else{
			
			echo $conn->error.$sql->error;
		}
		

		 $updt_cstm_order="update customer_order set order_status='paid' where invoice_no='$invoice_no'";
		$res1=$conn->query($updt_cstm_order);

        $updt_pndg_order="update pending_order set order_status='paid' where invoice_no='$invoice_no'";
        $res2=$conn->query($updt_pndg_order);


	}

}
	?>