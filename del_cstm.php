

<?php 
require_once('admin_panel/conn1.php');
?>

<?php


if(isset($_GET['del_cstm']))
{
	$email=$_GET['del_cstm'];
	
	$sql="delete from customer where Cstm_email ='$email'";
	if ($conn->query($sql))
	{
		echo "<script>alert('Your account has been deleted Successfully!')</script>";
		echo "<script>window.open('index.php?register','_self')</script>";
		
		
		}
		
	
}



?>