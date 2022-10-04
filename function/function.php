<?php

function getIP(){
	switch(true){
		case(!empty($_SERVER['HTTP_X_REAL_IP'])):
		return $_SERVER['HTTP_X_REAL_IP'];

		case(!empty($_SERVER['HTTP_CLIENT_IP'])):
		return $_SERVER['HTTP_CLIENT_IP'];

		case(!empty($_SERVER['HTTP_X_FROWARDED_FOR'])):
		return $_SERVER['HTTP_X_FROWARDED_FOR'];

		default:
		return $_SERVER['REMOTE_ADDR'];
	}
}


function items(){
	global $conn;
	$ip=getIP();
	$get_items="select * from cart where IP='$ip' ";
	$res=$conn->query($get_items);
	$count_items=mysqli_num_rows($res);

	echo $count_items ;

}

function pro_items(){

	
	global $conn;
	$get_items="select * from insert_product ";
	$res=$conn->query($get_items);
	$count_pro=mysqli_num_rows($res);

	echo $count_pro ;

}


function customer(){

	
	global $conn;
	$get_items="select * from customer";
	$res1=$conn->query($get_items);
	$count_customers=mysqli_num_rows($res1);

	echo $count_customers ;

}


function pro_cat(){

	
	global $conn;
	$get_cat="select * from product_category";
	$res2=$conn->query($get_cat);
	$count_cat=mysqli_num_rows($res2);

	echo $count_cat ;

}

function order_pending(){

	
	global $conn;
	$get_order="select * from pending_order where order_status='pending'";
	$res3=$conn->query($get_order);
	$count_order=mysqli_num_rows($res3);

	echo $count_order ;

}


function show_pro()

{
global $conn;

$sql2="SELECT DISTINCT catergory FROM insert_product";  // order by DESC
$myCat = $conn->query($sql2);

$you =0 ;
$myList = array();

while($myRow=$myCat->fetch_assoc()){
	$you++;
	$val= $myRow['catergory'];
	array_push($myList,$val);
}
//echo $you;

for ($a=0;$a<$you;$a++)
{
	$catUpper = strtoupper($myList[$a]);
	$pro_category = $myList[$a];
 echo "	<div class= 'col-lg-12'>
 <h2 class='jumbotron text-center'><span class='head1'>$catUpper</span></h2>
 ";

 $myQuery="select * from insert_product where catergory= '$pro_category'";  // order by DESC
 $myRes=$conn->query($myQuery);
   
 
 while($row=$myRes->fetch_assoc()){
	$pro_id=$row['ID'];
	$pro_title=$row['Product_Title'];
	$pro_comp=$row['Product_company'];
	$pro_image1=$row['Product_image1'];
	$pro_salepr=$row['Product_saleprice'];
	$pro_price=$row['Product_price'];
	$pro_key=$row['Product_keywords'];
	$pro_des=$row['Product_description'];
	//$pro_category = $row['catergory'];
	echo "
	<div class='col-lg-3 col-md-3'>      

<div class='thumbnail'>


<img src='admin_panel/product_image/$pro_image1' height='400' width='100%' />


<br />
<center>
<br />
<strong>Company</strong>:$pro_comp
<br /><br />
<a href='index.php?view_details=$pro_id'> 
<strong>
 $pro_title</a><br />
<br />
Price

</strong>:Rs. $pro_salepr | <del>$pro_price</del> <br />
<br />
<a href='index.php?view_details=$pro_id' class='btn btn-default'>View details</a>
<a href='index.php?view_details=$pro_id' class='btn btn-primary'><span class='glyphicon glyphicon-trash'></span> Add to cart</a>

</center>
<br />

</div>
</div>     ";

} 

}

}







function show_detail($pro_id)

{
global $conn;

$sql="select * from insert_product where ID='$pro_id'";  // order by DESC
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
	$pro_id=$row['ID'];
	$pro_title=$row['Product_Title'];
	$pro_comp=$row['Product_company'];

	$pro_image1=$row['Product_image1'];
	$pro_image2=$row['Product_image2']; 
	$pro_image3=$row['Product_image3'];

//	$pro_image4=$row['Product_image1'];
	$pro_salepr=$row['Product_saleprice'];
	$pro_price=$row['Product_price'];

	$pro_key=$row['Product_keywords'];
	$pro_des=$row['Product_description'];
	$pro_feth=$row['Product_features'];
    //$snd_videos=$row['sound_videos'];
	


	echo "
<div class='col-lg-6  col-md-6 r1'>




	  <div id='myCrouser' class='carousel slide' data-ride='carousel'>
                         <ol class='carousel-indicators'>
                                    <li data-target='#myCrouser' data-slide-to='0' class='active'></li>
                                    <li data-target='#myCrouser' data-slide-to='1' ></li>
                                    <li data-target='#myCrouser' data-slide-to='2' ></li>
									
                                   
                         </ol>
                          <div class='carousel-inner'>
                                                           <div class='item active'>
                                                              <img src='admin_panel/product_image/$pro_image1' height='200' width='100%' />
                                                              
                                                              
                                                           </div>
                                                              <div class='item'>
                                                                <img src='admin_panel/product_image/$pro_image2' height='200' width='100%' />
                                                              
                                                              
                                                             </div>

                                                              
                                                              <div class='item'>
                                                                   <img src='admin_panel/product_image/$pro_image3' height='200' width='100%' />
                                                              
                                                             
                                                             </div>
														
														

                                                             
                           </div>                       
                                                             
                                                              
                                                              
                          
                                                            <a class='left carousel-control' href='#myCrouser' data-slide='prev'>                                                            <span class=' glyphicon glyphicon-chevron-left'></span>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                             </a>
                                                              <a class='right carousel-control' href='#myCrouser' data-slide='next'>                                                            <span class='glyphicon glyphicon-chevron-right'></span>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                             </a>
                                                             </div>
                                                                                       



		
	</div>
	<div class='col-lg-1  col-md-1'></div>

	<div class='col-lg-5  col-md-5 r1'>
	 <h2 class='text-center'><b>$pro_title</b></h2>
	<div class='col-lg-1  col-md-1'></div>
	<form method='post'>
	<div class='col-lg-4  col-md-4'>
	<label>Product Quantity</label>
	</div>
	
	<div class='col-lg-6  col-md-6'>

	<select name='quan' class='form-control'>
		<option selected='selected' disabled='disabled'>Select Quantity</option>
		<option value='1'>1</option>
		<option value='2'>2</option>
		<option value='3'>3</option>
		<option value='4'>4</option>
		<option value='5'>5</option>
	</select>
		
	</div><br><br>

    <div class='col-lg-1  col-md-1'></div>
	<div class='col-lg-4  col-md-4'>
	<label>Select Size</label>
	</div>
	<div class='col-lg-6  col-md-6'>

	<select name='size' class='form-control'>
		<option selected='selected' disabled='disabled'>Select Size</option>
		<option>extra small</option>
		<option>small</option>
		<option>medium</option>
		<option>large</option>
		<option>extra large</option>
	</select>
	</div>
	<br><br><br>

	<center>
	<h2>Product price:RS.$pro_salepr | <del>RS.$pro_price</del></h2>
	
	<input type='submit' class='btn btn-primary' value='Add to cart' name='cart'>
	
	<a href='#' class='btn btn-primary'>Add to wishlist </a>

	</center>

	

	

        
</div>

</form>



<div class='col-lg-2  col-md-2'>
<br>
<img src='admin_panel/product_image/$pro_image1' height='100' width='100%' />
</div>



<div class='col-lg-2  col-md-2'>
<br>
<img src='admin_panel/product_image/$pro_image2' height='100' width='100%' />
</div>


<div class='col-lg-2  col-md-2'>
<br>
<img src='admin_panel/product_image/$pro_image3' height='100' width='100%' />
<br><br><br><br>
</div>
<div class='col-lg-12  col-md-12 r1'>

<label>Product Tabs</label><ul class='nav nav-tabs'>
<li class='active'><a data-toggle='tab' href='#home'> Product Description</a></li>
<li><a data-toggle='tab' href='#about'> Product Features</a></li>
<li><a data-toggle='tab' href='#contact'> Expiry Date</a></li>

</ul>
<div class='tab-content' >



		<div id='home' class='tab-pane fade in active'>
			$pro_des
			
		</div>
				<div id='about' class='tab-pane fade'>
				$pro_feth

				</div>
</div>

</div>


";

} 



}


 

















function show_rand()

{
global $conn;


$sql="select * from insert_product order by rand() LIMIT 3 ";  // order by DESC
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
	
	
	$pro_image1=$row['Product_image1'];


	
	


	echo "







<div class='col-lg-3  col-md-3 wid'>


<img src='admin_panel/product_image/$pro_image1' style='height:170px;width:100%' />
<br/><br/>
<center><a href='#' class='btn btn-primary'>Novartis</a>
<br />
<hr />
<a href='#'><strong>ritalin<br/>10mg<br/></strong></a><br/> 
$39<br/>

<a href='#' class='btn btn-default'>View Detail</a><br /><br />
<a href='#' class='btn btn-primary'><span class='glyphicon glyphicon-trash'></span>Add to cart</a>






</center>


</div>



";


}}






function show_rand1()

{
global $conn;


$sql="select * from insert_product order by rand() LIMIT 3 ";  // order by DESC
$res=$conn->query($sql);

while($row=$res->fetch_assoc()){
	$Product_Title=$row['Product_Title'];
	$pro_image=$row['Product_image1'];
	$pro_salepr=$row['Product_saleprice'];
	$pro_price=$row['Product_price'];
	

	echo "





<div class='col-lg-2  col-md-2'>



<img src='admin_panel/product_image/$pro_image'  width='100%'/>
<br/><br />
<center><button class='btn btn-primary'>medicine</button>
<br />
<hr />
<a href='#''><strong>$Product_Title<br/></strong></a><br/> 
$pro_salepr | <del>RS.$pro_price</del>
<br/>

<button class='btn btn-default'>View Detail</button><br /><br />
<button class='btn btn-primary'><span class='glyphicon glyphicon-trash'></span>Add to cart</button>






</center>





</div>


";


}}

















function top_pcat()

{
global $conn;
$sql="select * from product_category";  // order by DESC
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
	
	$pcat_name=$row['product_category_name'];
	;
		echo "
		$pcat_name<br>

	

	";

		
	}




}





function show_box()

{
global $conn;
$sql="select * from box limit 3";  // order by DESC
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
	$box_id=$row['box_id'];
	$box_header=$row['box_header1'];
	$box_des=$row['box_description1'];
	echo "
	<div class='col-lg-4  col-md-4'>

	<div class='box1' style='height:150px'>

<center>
<h2 class='head1'>$box_header</h2>
<p>
$box_des
</p>
</center>

</div> 
</div>      










	";

} 



}





function show_slider()

{
global $conn;
$sql="select * from slider";  // order by DESC
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
	$slider_id=$row['slider_id'];
	$image_name=$row['image_name'];
	
	$image1=$row['image'];
	$image2=$row['image2'];
	$image3=$row['image3'];
	echo "
	        

    <div id='myCrouser' class='carousel slide' data-ride='carousel'>
                         <ol class='carousel-indicators'>
                                    <li data-target='#myCrouser' data-slide-to='0' class='active'></li>
                                    <li data-target='#myCrouser' data-slide-to='1' ></li>
									<li data-target='#myCrouser' data-slide-to='2' ></li>
                                    
                                   
                         </ol>
                          <div class='carousel-inner'>
                                                             <div class='item active'>
                                   <img src='admin_panel/product_image/$image1' width='100%' />
                                                              
                                                              
                                                             </div>
                                                              <div class='item'>
                                   <img src='admin_panel/product_image/$image2' width='100%' />
                                                              
                                                              
                                                             </div>

                                                              <div class='item'>
                                   <img src='admin_panel/product_image/$image3' width='100%' />
                                                              
                                                              
                                                             </div>
                                                              
                                                              
                                                             </div>

                                                             
                                                             
                                                             
                                                              
                                                              
                          
                                                            <a class='left carousel-control' href='#myCrouser' data-slide='prev'>                                                            <span class=' glyphicon glyphicon-chevron-left'></span>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                             </a>
                                                              <a class='right carousel-control' href='#myCrouser' data-slide='next'>                                                            <span class='glyphicon glyphicon-chevron-right'></span>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                             </a>

</div>







	";

} 



}











?>

