
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
if(isset($_GET['delete_box']))
{
	$id=$_GET['delete_box'];
	
	$sql="delete from box where box_id ='$id'";
	if ($conn->query($sql))
	{
		echo "<script>alert('Deleted')</script>";
		echo "<script>window.open('admin.php?view_box','_self')</script>";
		
		
		}
		
	
}

}

?>