<?php
if(empty($_SESSION['Email']))
{
	echo '<script>alert("please enter your email")</script>';
	echo '<script>window.open("login.php","_self")</script>';
}
else
{
	$email=$_SESSION['Email'];
?>

<div class="col-lg-2">
	<ul class="ul1">
		<li><a href="admin.php?dashboard">Dashboard</a></li>
		

         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Staff<span class="caret"></span></a>

           <ul class="dropdown-menu">

              <li><a href="admin.php?insert_manufacturer">Insert Staff</a></li>
              <li><a href="admin.php?view_manufacturer">View Staff</a></li>  
              

           </ul>





    </li>

		
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>

           <ul class="dropdown-menu">
              <li><a href="admin.php?insert_product">Insert Product</a></li>
              <li><a href="admin.php?view_product">View Product</a></li>  
              

           </ul>





    </li>
		


		



 
		

		<!--<li><a><span class="glyhicon glyphicon-dashboard"></span>Product Cartegories<span class="caret"></span></a></li>-->

         
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Categories<span class="caret"></span></a>

           <ul class="dropdown-menu">

              <li><a href="admin.php?insert_pcategory">Insert product cateogry</a></li>
              <li><a href="admin.php?view_pcategory">View product cateogry</a></li>  
              

           </ul>





    </li>
         




         

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>

           <ul class="dropdown-menu">

              <li><a href="admin.php?insert_category">Insert Cateogry</a></li>
              <li><a href="admin.php?view_category">View Cateogry</a></li>  
              

           </ul>





    </li>






        



          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"></span>Slider images<span class="caret"></span></a>

           <ul class="dropdown-menu">

              <li><a href="admin.php?insert_slider">Insert slider image</a></li>
              <li><a href="admin.php?view_slider">View Slider image</a></li>  
              

           </ul>





    </li>








<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"></span>Box Section<span class="caret"></span></a>

           <ul class="dropdown-menu">

              <li><a href="admin.php?insert_box">Insert Box Section</a></li>
              <li><a href="admin.php?view_box">View Box Section</a></li>  
              

           </ul>





    </li>




    <li><a href="admin.php?view_cstm"></span>View Customers</a></li>
    
		<li><a href="admin.php?view_order">View orders</a></li>
    <li><a href="admin.php?view_pay"></span>View Payment</a></li>
		<li><a>Services</a></li>
		<li><a>Contact Us Section</a></li>
		<li><a>Edit About Us page</a></li>
		


	</ul>
</div>



<?php  

}

?>