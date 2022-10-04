
<?php











require_once('conn1.php');
if(isset($_GET['del_cstm']))
{
	$id=$_GET['del_cstm'];
	
	$sql="delete from customer where Cstm_id ='$id'";
	if ($conn->query($sql))
	{
		echo "<script>alert('Deleted')</script>";
		echo "<script>window.open('admin.php?view_cstm','_self')</script>";
		
		
		}
		
	
}



?>