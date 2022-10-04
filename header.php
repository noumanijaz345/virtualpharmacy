<?php
	if($_SESSION['user']!="")
	{
	$username = $_SESSION['user'];
	}

 ?>



<!DOCTYPE html>
<html>
<head>
<title>Font Awesome 5 Icons</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="icon" href="img/favicon.ico" type="image/ico">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->
</head>
<body>

<div class="merenav">

<nav class="navbar navbar1">
<div class="container-fluid">

<div class="navbar-header">


<a href="http://localhost/www/index.php?home"><button class="btn  btn-success b2">WELCOME TO VIRTUAL PHARMACY</button></a>

	<?php 
	$getip=getIP();
    $sql="select * from cart where IP='$getip'";
    $res=$conn->query($sql);
    if($row=$res->fetch_assoc()){
    	$total=$row['Total_price'];
    }
   


 echo' 
 <?php items(); ?></a>
</div>
';

?>
<?php
	 if($username)
	 { ?>
	 
		<ul class="nav navbar-nav pull-right">
		<li><i class='fas fa-user-circle' style="margin-top:10px;  color:white; font-size:30px;"></i>&nbsp;&nbsp;</li>
		<li><b><p style="margin-top:15px; color:white;"><?php echo $username?></p></b></li>
		<li><a href="index.php?logout">Log out</a></li>
		</ul>
<?php }	 
	 else 
	 {
		 ?>
		<ul class="nav navbar-nav pull-right">
		<li><a  href="index.php?register"> Register</a></li>
		<li><a href="index.php?login">Login </a></li>
		</ul>

<?php	 }  ?>

</a>

<!--<li><a href="index.php?logout">Log out</a>-->
</ul>

</div>
</nav>
</div>






<nav class="navbar navbar-default">
<div class="container-fluid">

<div class="navbar-header">

 <button class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>

<img src="img/2.jpg" height="50px" width="150px" /> 
</div>
<div class="collapse navbar-collapse" id="mynavbar">
<ul class="nav navbar-nav pull-right">
<li><a href="index.php?home">Home</a></li>

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Medicines<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="index.php?medicine">Allergy</a></li>
<li><a href="index.php?medicine">Fever</a></li>
<li><a href="index.php?diabetes_offer">Diabetes</a></li>
<li><a href="index.php?medicine">Digestive Disorder</a></li>
<li><a href="index.php?medicine">Cardiac Arrest</a></li>
<li><a href="index.php?medicine">Blood Pressure</a></li>
<li><a href="index.php?medicine">Cancer</a></li>
<li><a href="index.php?medicine">Mental issues </a></li>
</ul> 
</li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Men’s Care<span class="caret"></a>
<ul class="dropdown-menu">
<li><a href="index.php">Shaving Essentials</a></li>
<li><a href="index.php?medicine">Face/Skin Care</a></li>
<li><a href="index.php?medicine">Beard Growth Oil</a></li>
</ul> 
</li>

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Women’s Care<span class="caret"></a>
<ul class="dropdown-menu">
<li><a href="index.php">Skin Tone Essentials</a></li>
<li><a href="index.php?medicine">Facial Hair Grow Cream</a></li>
<li><a href="index.php?medicine">Pimples Care</a></li>
<li><a href="index.php?medicine">Skin Care Beauty Cream</a></li>
<li><a href="index.php?medicine">Lip Glosses</a></li>
<li><a href="index.php?medicine">Face Lotions/Oils</a></li>
<li><a href="index.php?medicine">Face Wash</a></li>
<li><a href="index.php?medicine">Chap Sticks</a></li>
</ul> 
</li>


<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Baby’s Care<span class="caret"></a>
<ul class="dropdown-menu">
<li><a href="index.php">Baby Diapers & Wipes</a></li>
<li><a href="index.php?medicine">Baby Milk</a></li>
<li><a href="index.php?medicine">Baby - Bath & Body</a></li>
<li><a href="index.php?medicine">Baby Diapers - Junior</a></li>
<li><a href="index.php?medicine">Baby Diapers - XL/XXL</a></li>
</ul> 


<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Dental Care<span class="caret"></a>
<ul class="dropdown-menu">
<li><a href="index.php">Toothpastes/Powder</a></li>
<li><a href="index.php?medicine">Mouth Washes/Fresheners</a></li>
<li><a href="index.php?medicine">Medicated Toothpastes</a></li>
</ul> 
</li>

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Gym & Fitness<span class="caret"></a>
<ul class="dropdown-menu">
<li><a href="index.php?medicine">Skin & Anti Oxidants</a></li>
<li><a href="index.php">Immunity Medicine</a></li>
<li><a href="index.php">Fitness Tracker Watch</a></li>
</ul> 
</li>


<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Nutrition & Vitamins<span class="caret"></a>
<ul class="dropdown-menu">
<li><a href="index.php?medicine">Calcium D 1000</a></li>
<li><a href="index.php?medicine">Natural Supplements</a></li>
<li><a href="index.php?medicine">Health Products</a></li>
</ul> 
</li>

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Surgical Accessories<span class="caret"></a>
<ul class="dropdown-menu">
<li><a href="index.php">Gloves</a></li>
<li><a href="index.php">Body Suits</a></li>
<li><a href="index.php">Cotton Rolls/Swabs</a></li>
<li><a href="index.php">Doctor Tapes</a></li>
<li><a href="index.php">Syringes</a></li>
<li><a href="index.php">Masks</a></li>
</ul> 
</li>



<li><a href="index.php?track_shippment">Track Shipment</a></li>
<li > <a href="index.php?contact_us">Contact Us</a></li>


<!-- Search Query -->
<li>
<form action="filters.php" method="GET">
<input type="text" name="query" placeholder="Search..." style="margin-top:12px; padding: 2px"></input>
<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
</form>
</li>







&nbsp;
<a href="index.php?cart_items" ><button class="btn btn-primary" style="
  border: none;
  color: white;
  margin-top: 12px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;">
 <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span><?php items();?>  items</button></a>




</ul>

</div>
</div>
</nav>



<!-- header ends    -->



</body>
</html>

