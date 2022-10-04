
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









if(isset($_GET['edit_pcat']))
{
	$id=$_GET['edit_pcat'];
	
$sql="select * from product_category where PC_ID='$id'";
$res=$conn->query($sql);
while($row=$res->fetch_assoc())
{
	$first1=$row['product_category_name'];
	$first2=$row['image'];
}
}
?>



	











<div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp; Update Product Category</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Update Product Category
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         	<form method="post" enctype="multipart/form-data">
<br><br>



                         		
                                                       			<div class="col-lg-2"><label>Product Category Title</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="title1" value="<?php echo "$first1"  ?>" class="form-control t1">

                                	                                    <br>


                                                                </div>

											                               

											                                





                                          
                                           






	                                   <div class="col-lg-2"><label>Select Product Category Image</label></div>
	                                 <div class="col-lg-10">
	                                 
	                                  <input type="file" name="img1" value="<?php echo "$second2"  ?>" class="form-control t1">

	                                    
	                                  <br>


	                                 </div>
                                
               




 
            <div class="col-lg-12"><br>


            	<center><input type="submit" name="b1" value="Update Now" class="form-control btn btn-primary t1"></center>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>

<?php
$sql1="select * from product_category";
?>



 
<?php

require_once('conn1.php');

if(isset($_POST['b1'])){

$title_name=$_POST['title1'];
$image1=$_POST['img1'];



$sql="update product_category set product_category_name='$title_name',image='$image1' where PC_ID='$id'";
if($conn->query($sql)){
echo"<script>alert('your data has been Updated')</script>";
echo"<script>window.open('admin.php?view_pcat','_self')</script>";


}

else{
	echo $conn->error.$sql->error;
	
	}


}





?>     
 

<?php 
}
 ?>


