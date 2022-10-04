
<?php
if(empty($_SESSION['Email']))
{
	echo '<script>alert("please enter your email")</script>';
	echo '<script>window.open("login.php","_self")</script>';
}
else
{
	$email=$_SESSION['Email'];










require_once('conn1.php');
if(isset($_GET['delete_pcat']))
{
	$id=$_GET['delete_pcat'];
	
	$sql="delete from product_category where PC_ID ='$id'";
	if ($conn->query($sql))
	{
		echo "<script>alert('Deleted')</script>";
		echo "<script>window.open('admin.php?view_pcat','_self')</script>";
		
		
		}
		
	
}

}

?>