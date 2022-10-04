	
<?php 
require_once('conn1.php');
?>

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








  <div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard / Insert Product</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Insert Product  
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         <form method="post" enctype="multipart/form-data">




                         		
                                                       			<div class="col-lg-2"><label>Product Title</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="title1" class="form-control t1">

                                	                                    <br>


                                                                </div>




                                                            <div class="col-lg-2"><label>Product Company</label></div>

                                                            <div class="col-lg-10">
                                                                      <input type="text" name="comp" class="form-control t1">

                                                                      <br>


                                                                </div>

											                               

											                                





                                          
                                           
                                 			<div class="col-lg-2"><label>Product Url</label></div>

                         		            <div class="col-lg-10">
                                	        <input type="text" name="url1" class="form-control t1">
<br>

                                             </div>



                                


                                
                                 <div class="col-lg-12"><center><strong>Product Url Example: navy-blue-t-shirt </strong></center>
                                 </div>
                                 
                                  <div class="col-lg-2"><label>Select a manufacturer</label></div>
                                 <div class="col-lg-10">
                                  <select name="man1" class="form-control t1">
                                    <option value="#">Select a Manufacturer</option>
                                  	

                                    <!--<option value="a">a</option>
                                  	<option value="s">s</option>
                                  	<option value="d">d</option>
                                  	<option value="f">f</option>
                                    -->

                                    <?php 

                                     $sql="select * from manufacturer";
                                     $result=$conn->query($sql);
                                     while($row=$result->fetch_assoc())
                                     {

                                      $manu_id=$row['MANU_ID'];
                                      $manu_title=$row['manufacturer_name'];
                                      echo "<option value='$manu_id'>$manu_title</option>";
                                      }
                                     

                                    ?>


                                  </select>
<br>

                                 </div>
                                 




                                   <div class="col-lg-2"><label>Select a Product Category</label></div>
                                 <div class="col-lg-10">
                                  <select name="cat1" class="form-control t1">
                                    <option value="#">Select a Product Category</option>
                                  	<!--<option value="q">q</option>
                                  	<option value="w">w</option>
                                  	<option value="e">e</option>
                                  	<option value="r">r</option>

                                  -->

                                  <?php 

                                     $sql="select * from product_category";
                                     $result=$conn->query($sql);
                                     while($row=$result->fetch_assoc())
                                     {

                                      $pcat_id=$row['PC_ID'];
                                      $pcat_title=$row['product_category_name'];
                                      echo "<option value='$pcat_id'>$pcat_title</option>";
                                      }
                                     

                                    ?>











                                  </select>
<br>

                                 </div>
                                 

                                   <div class="col-lg-2"><label>Select a category</label></div>
                                 <div class="col-lg-10">
                                  <select name="cat2" class="form-control t1">
                                    <option value="#">Select a category</option>
                                  	<!--<option value="u">u</option>
                                  	<option value="i">i</option>
                                  	<option value="o">o</option>
                                  	<option value="p">p</option>
                                    -->

                                    <?php 

                                     $sql="select * from category";
                                     $result=$conn->query($sql);
                                     while($row=$result->fetch_assoc())
                                     {

                                      $cat_id=$row['CAT_ID'];
                                      $cat_title=$row['category_title'];
                                      echo "<option value='$cat_id'>$cat_title</option>";
                                      }
                                     

                                    ?>










                                  </select>
<br>

                                 </div>
                                 







	                                   <div class="col-lg-2"><label>Product image 1</label></div>
	                                 <div class="col-lg-10">
	                                 
	                                  <input type="file" name="img1" class="form-control t1">

	                                    
	                                  <br>


	                                 </div>
                                
               





                                   <div class="col-lg-2"><label>Product image 2</label></div>
                                 <div class="col-lg-10">
                                  
                                  <input type="file" name="img2" class="form-control t1">
                                    
                                 <br>

                                 </div>
                                 






       							 <div class="col-lg-2"><label>Product image 3</label></div>
                                 <div class="col-lg-10">
                                  
                                  <input type="file" name="img3" class="form-control t1">
                                    
                                  <br>

                                 </div>
                                





                                  <div class="col-lg-2"><label>Product Price</label></div>
                                 <div class="col-lg-10">
                                  
                                  <input type="text" name="a_price" class="form-control t1">
                                    <br>
                                  


                                 </div>
                                 






                                  <div class="col-lg-2"><label>Product Sale Price</label></div>
                                 <div class="col-lg-10">
                                 
                                  <input type="text" name="s_price" class="form-control t1">
                                    
                                 <br>

                                 </div>
                                




                                  <div class="col-lg-2"><label>Product Keywords</label></div>
                                 
                                 <div class="col-lg-10">
                                  
                                  <input type="text" name="keyword" class="form-control t1">
                                    
                                <br>


                                 </div>
                                 





<label>Product Tabs</label><ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home"> Product Description</a></li>
<li><a data-toggle="tab" href="#about"> Product Features</a></li>


</ul>
<div class="tab-content" >



		<div id="home" class="tab-pane fade in active">
			<textarea name="text1" rows=10 class="form-control">
				

			</textarea>


			


		</div>
				<div id="about" class="tab-pane fade ">
					<textarea name="text2" class="form-control" rows=10>
						

					</textarea>

			




				</div>
			<div id="contact" class="tab-pane fade ">
			<textarea name="text3" class="form-control" rows=10>
					

				</textarea>



			


			</div>
</div>



              <label>Product label</label>
			<input type="text" name="label3" class="form-control">
 
            <div class="col-lg-12"><br>


            	<center><input type="submit" name="b1" value="insert product" class="form-control btn btn-primary t1"></center>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>






 
<?php


$ip=$_SERVER['REMOTE_ADDR'];
if(isset($_POST['b1'])){
$title_name=$_POST['title1'];

$pro_com=$_POST['comp'];

$product_url=$_POST['url1'];
$manufacturer=$_POST['man1'];
$p_cat=$_POST['cat1'];
$cat=$_POST['cat2'];

$image1=$_FILES['img1']['name'];
$temp1=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp1,"product_image/$image1");

$image2=$_FILES['img2']['name'];
$temp2=$_FILES['img2']['tmp_name'];
move_uploaded_file($temp2,"product_image/$image2");

$image3=$_FILES['img3']['name'];
$temp3=$_FILES['img3']['tmp_name'];
move_uploaded_file($temp3,"product_image/$image3");

$pro_price=$_POST['a_price'];
$sale_price=$_POST['s_price'];

$pro_keywords=$_POST['keyword'];
$area1=$_POST['text1'];

$area2=$_POST['text2'];


$area3=$_POST['text3'];
$lab3=$_POST['label3'];



$sql="Insert into insert_product (Product_Title,Product_company,Product_Url,MANU_ID,PC_ID,CAT_ID,Product_image1,Product_image2,Product_image3,Product_price,Product_saleprice,Product_keywords,Product_description,Product_features,sound_videos,Product_label,IP) 
values('$title_name','pro_comp','$product_url','$manufacturer','$p_cat','$cat','$image1','$image2','$image3','$pro_price','$sale_price','$pro_keywords','$area1','$area2','$area3','$lab3','$ip')";
if($conn->query($sql)){
echo"<script>alert('your data has been inserted')</script>";
echo"<script>window.open('admin.php?view_product','_self')</script>";


}

else{
	echo $conn->error.$sql->error;
	
	}


}





?>     
 


<?php  
}

?>
