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






<?php

require_once('conn1.php');

?>
 

<?php
if(isset($_GET['edit_product']))
{
	$id=$_GET['edit_product'];
	
$select="select * from insert_product where ID='$id'";
$res=$conn->query($select);
while($row=$res->fetch_assoc())
{
	$first1=$row['Product_Title'];
  $pro_comp=$row['Product_company'];
	$first2=$row['Product_Url'];
	$first3=$row['MANU_ID'];
	$first4=$row['PC_ID'];
	
        $second1=$row['CAT_ID'];
	$second2=$row['Product_image1'];
	$second3=$row['Product_image2'];
	$second4=$row['Product_image3'];
       
        $third1=$row['Product_price'];
	$third2=$row['Product_saleprice'];
	$third3=$row['Product_keywords'];
	$third4=$row['Product_description'];

        $fourth1=$row['Product_features'];
	$fourth2=$row['sound_videos'];
	$fourth3=$row['Product_label'];
	
	
	

	

	

	

}
}
?>



	











<div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp; Update Product</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Update Product  
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         	<form method="post" enctype="multipart/form-data">
<br><br>



                         		
                                                       			<div class="col-lg-2"><label>Product Title</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="title1" value="<?php echo "$first1"  ?>" class="form-control t1">

                                	                                    <br>


                                                                </div>

                                                           <div class="col-lg-2"><label>Product Company</label></div>

                                                            <div class="col-lg-10">
                                                                      <input type="text" name="comp" value="<?php echo "$pro_comp" ?>" class="form-control t1">

                                                                      <br>


                                                                </div>

											                               

											                                





                                          
                                           
                                 			<div class="col-lg-2"><label>Product Url</label></div>

                         		            <div class="col-lg-10">
                                	        <input type="text" name="url1" value="<?php echo "$first2"  ?>" class="form-control t1">
<br>

                                             </div>



                                


                                
                                 <div class="col-lg-12"><center><strong>Product Url Example: navy-blue-t-shirt </strong></center>
                                 </div>


                                  <?php
                                  
                                     $sql_manu="select * from manufacturer where MANU_ID='$first3' ";

                                    
                                      $result_manu=$conn->query($sql_manu);
                                      $row_manu=$result_manu->fetch_assoc();
                                    
                                     
                                       $MANU_ID=$row_manu['MANU_ID'];
                                     $manufacturer_name=$row_manu['manufacturer_name'];


                                     
                                     
                                    

                                    


                                      $sql_PC="select * from product_category where PC_ID='$first4' ";

                                    
                                      $result_PC=$conn->query($sql_PC);
                                     $row_PC=$result_PC->fetch_assoc();
                                     
                                       $PC_ID=$row_PC['PC_ID'];
                                     $product_category_name=$row_PC['product_category_name'];


                                     




                                     






                                      $sql_CAT="select * from category where CAT_ID='$second1' ";

                                    
                                      $result_CAT=$conn->query($sql_CAT);
                                     $row_CAT=$result_CAT->fetch_assoc();
                                     
                                       $CAT_ID=$row_CAT['CAT_ID'];
                                     $category_title=$row_CAT['category_title'];



                                     


                                     



                                     ?>
                                 
                                  <div class="col-lg-2"><label>Select a manufacturer</label></div>
                                 <div class="col-lg-10">
                                  <select name="man1"  class="form-control t1">
                                    <option value="<?php echo $MANU_ID; ?>">
                                      <?php echo $manufacturer_name ; ?>

                                    </option>


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
                                  <select name="cat1" value="<?php echo "$first4"  ?>" class="form-control t1">
                                     <option value="<?php echo $PC_ID; ?>">
                                      <?php echo $product_category_name ; ?>
                                    </option>
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
                                  <select name="cat2" value="<?php echo "$second1"  ?>" class="form-control t1">

                                     <option value="<?php echo $CAT_ID; ?>">
                                      <?php echo  $category_title ; ?>
                                    </option>
                                  	
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
	                                 
	                                  <input type="file" name="img1" value="<?php echo $second2 ?>"  class="form-control t1">
                                      <img src="product_image/<?php echo $second2  ?>" height="50" width="50" />
	                                    
	                                  <br>


	                                 </div>
                                
               





                                   <div class="col-lg-2"><label>Product image 2</label></div>
                                 <div class="col-lg-10">
                                  
                                  <input type="file" name="img2"  class="form-control t1">
                                   <img src="product_image/<?php echo $second3  ?>" height="50" width="50" />
                                    
                                 <br>

                                 </div>
                                 






       							 <div class="col-lg-2"><label>Product image 3</label></div>
                                 <div class="col-lg-10">
                                  
                                  <input type="file" name="img3"  class="form-control t1">
                                   <img src="product_image/<?php echo $second4  ?>" height="50" width="50" />
                                    
                                  <br>

                                 </div>
                                





                                  <div class="col-lg-2"><label>Product Price</label></div>
                                 <div class="col-lg-10">
                                  
                                  <input type="text" name="a_price" value="<?php echo "$third1"  ?>" class="form-control t1">
                                    <br>
                                  


                                 </div>
                                 






                                  <div class="col-lg-2"><label>Product Sale Price</label></div>
                                 <div class="col-lg-10">
                                 
                                  <input type="text" name="s_price" value="<?php echo "$third2"  ?>" class="form-control t1">
                                    
                                 <br>

                                 </div>
                                




                                  <div class="col-lg-2"><label>Product Keywords</label></div>
                                 
                                 <div class="col-lg-10">
                                  
                                  <input type="text" name="keyword" value="<?php echo "$third3"  ?>" class="form-control t1">
                                    
                                <br>


                                 </div>
                                 





<label>Product Tabs</label><ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home"> Product Description</a></li>
<li><a data-toggle="tab" href="#about"> Product Feactures</a></li>
<li><a data-toggle="tab" href="#contact"> Sounds and Videos</a></li>

</ul>
<div class="tab-content" >



		<div id="home" class="tab-pane fade in active">
			<textarea name="text1"  rows=10 class="form-control">

				<?php echo "$third4"  ?>

			</textarea>


			


		</div>
				<div id="about" class="tab-pane fade ">
					<textarea name="text2" value="" class="form-control" rows=10>

            <?php echo "$fourth1"  ?>
						

					</textarea>

			




				</div>
			<div id="contact" class="tab-pane fade ">
			<textarea name="text3" value="" class="form-control" rows=10>

        <?php echo "$fourth2"  ?>
					

				</textarea>



			


			</div>
</div>



              <label>Product label</label>
			<input type="text" name="label3" value="<?php echo "$fourth3"  ?>" class="form-control">
 
            <div class="col-lg-12"><br>


            	<center><input type="submit" name="b1" value="Update product" class="form-control btn btn-primary t1"></center>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>




 
<?php

require_once('conn1.php');
$ip=$_SERVER['REMOTE_ADDR'];
if(isset($_POST['b1'])){

$title_name=$_POST['title1'];
$pro_comp=$_POST['comp'];
$product_url=$_POST['url1'];
$manufacturer=$_POST['man1'];
$p_cat=$_POST['cat1'];
$cat=$_POST['cat2'];

$image1=$_FILES['img1']['name'];
$temp1=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp1, "product_image/$image1");

$image2=$_FILES['img2']['name'];
$temp2=$_FILES['img2']['tmp_name'];
move_uploaded_file($temp2, "product_image/$image2");

$image3=$_FILES['img3']['name'];
$temp3=$_FILES['img3']['tmp_name'];
move_uploaded_file($temp3, "product_image/$image3");

$pro_price=$_POST['a_price'];
$sale_price=$_POST['s_price'];

$pro_keywords=$_POST['keyword'];
$area1=$_POST['text1'];

$area2=$_POST['text2'];


$area3=$_POST['text3'];
$lab3=$_POST['label3'];



$sql="update insert_product set Product_Title='$title_name',Product_company='$pro_comp',Product_Url='$product_url',MANU_ID='$manufacturer',PC_ID='$p_cat',CAT_ID='$cat',Product_image1='$image1',Product_image2='$image2',Product_image3='$image3',Product_price='$pro_price',Product_saleprice='$sale_price',Product_keywords='$pro_keywords',Product_description='$area1',Product_features='$area2',sound_videos='$area3',Product_label='$lab3',IP='$ip' where ID='$id'";
if($conn->query($sql)){
echo"<script>alert('your data has been Updated')</script>";
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