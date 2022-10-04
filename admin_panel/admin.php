<?php
require_once('conn1.php');

 ?>

<?php
session_start();
if(empty($_SESSION['Email']))
{
	echo '<script>alert("please enter your email")</script>';
	echo "<script>window.open('login.php','_self')</script>";
}
else
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>
</head>

<body>
<script src="bootstrap1/js/bootstrap.js" ></script>
<script src="bootstrap1/js/jquery-3.2.0.js" ></script>






<?php require_once('top_bar.php'); ?>


<?php require_once('side_bar.php');  ?>

<div class="col-lg-10">

<?php

if(isset($_GET['dashboard']))
{
	//include 'dashboard.php';
	/* agr "include" ko file nahi milte ya file ka deya hoa name galt h to "include" error to deta he mgr result show krwa deta he, mgr "require_once" error show krta he mgr result show nahi krta .*/

         require_once('dashboard.php');


}
if(isset($_GET['insert_product']))
{
	include 'insert_product.php';
}



if(isset($_GET['view_product']))
{
	include 'view_product.php';
}
if(isset($_GET['edit_product']))
{
	include 'edit_view.php';
}

if(isset($_GET['delete_product']))
{
	require_once('Del.php');
}


if(isset($_GET['insert_category']))
{
	require_once('insert_category.php');
}



if(isset($_GET['view_category']))
{
	require_once('view_category.php');
}



if(isset($_GET['delete_category']))
{
	require_once('delete_category.php');
}



if(isset($_GET['edit_category']))
{
	require_once('edit_category.php');
}



if(isset($_GET['insert_slider']))
{
	require_once('insert_slider.php');
}



if(isset($_GET['view_slider']))
{
	require_once('view_slider.php');
}


if(isset($_GET['edit_slider']))
{
	require_once('edit_slider.php');
}


if(isset($_GET['delete_slider']))
{
	require_once('delete_slider.php');
}







if(isset($_GET['insert_box']))
{
	require_once('insert_box.php');
}



if(isset($_GET['view_box']))
{
	require_once('view_box.php');
}


if(isset($_GET['edit_box']))
{
	require_once('edit_box.php');
}


if(isset($_GET['delete_box']))
{
	require_once('delete_box.php');
}


if(isset($_GET['view_order']))
{
	require_once('view_order.php');
}


if(isset($_GET['view_pay']))
{
	require_once('view_pay.php');
}

if(isset($_GET['view_cstm']))
{
	require_once('view_cstm.php');
}



if(isset($_GET['insert_manufacturer']))
{
	require_once('insert_manufacturer.php');
}


if(isset($_GET['view_manufacturer']))
{
	require_once('view_manufacturer.php');
}



if(isset($_GET['delete_manufacturer']))
{
	require_once('delete_manufacturer.php');
}



if(isset($_GET['edit_manufacturer']))
{
	require_once('edit_manufacturer.php');
}


if(isset($_GET['view_pcat']))
{
	require_once('view_pcat.php');
}




if(isset($_GET['insert_pcategory']))
{
	require_once('insert_pcat.php');
}




if(isset($_GET['edit_pcat']))
{
	require_once('edit_pcat.php');
}




if(isset($_GET['delete_pcat']))
{
	require_once('delete_pcat.php');
}

















?>
























</div>










</body>
</html>
<?php

}
?>