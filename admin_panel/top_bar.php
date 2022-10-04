
<?php
if(empty($_SESSION['Email']))
{
	echo '<script>alert("please enter your email")</script>';
	echo '<script>window.open("login.php","_self")</script>';
}
else
{
	$email=$_SESSION['Email'];
	if(empty($_SESSION['Name']))
		$Name = "New User";
	else
		$Name = $_SESSION['Name'];
?>
<nav class="navbar navbar-inverse">


<div class="navbar-header">
<a class="navbar-brand" href="#">Admin Panel </a> 
</div>
<ul class=" nav navbar-nav pull-right ">

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo "$Name";  ?><span class="caret"></span></a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="#"></a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>    Logout</a></li>
</ul> 
</li>

</ul>
</nav>

<?php

}
?>