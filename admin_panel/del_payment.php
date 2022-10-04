<?php 










require_once('conn1.php');
if(isset($_GET['pay_no']))
{
	$id=$_GET['pay_no'];
	
	$sql="delete from payment where pay_id ='$id'";
	if ($conn->query($sql))
	{
		echo "<script>alert('Deleted')</script>";
		echo "<script>window.open('admin.php?view_pay','_self')</script>";
		
		
		}
		
	
}



?>