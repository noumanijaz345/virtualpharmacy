

<?php 

if(isset($_GET['pro_id']))
{
	$id=$_GET['pro_id'];
	
	$sql="delete from cart where pro_id ='$id'";
	if ($conn->query($sql))
	{
		echo "<script>alert('Deleted')</script>";
		echo "<script>window.open('index.php?cart_items','_self')</script>";
		
		
		}
		
	
}





?>