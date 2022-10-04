
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
  









if(isset($_GET['edit_slider']))
{
	$id=$_GET['edit_slider'];
	
$sql="select * from slider where slider_id='$id'";
$res=$conn->query($sql);
while($row=$res->fetch_assoc())
{
 
  
	$image_name=$row['image_name'];
	$image1=$row['image2'];
  $image=$row['image'];
}
}
?>



	











<div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp; Update Slider Image</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Update Slider Image
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         	<form method="post" enctype="multipart/form-data">
<br><br>



                         		
                                                       			<div class="col-lg-2"><label>Image Name</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="t1" value="<?php echo "$image_name"  ?>" class="form-control t1">

                                	                                    <br>


                                                                </div>

											                               

											                                





                                          
                                           






	                                   <div class="col-lg-2"><label>Select Slider Image1</label></div>
	                                 <div class="col-lg-10">
	                                 
	                                  <input type="file" name="img1"  class="form-control t1">
                                    <img src="product_image/<?php echo $image  ?>" height="50" width="50" />

	                                    
	                                  <br>


	                                 </div>


                                    <div class="col-lg-2"><label>Select Slider Image2</label></div>
                                   <div class="col-lg-10">
                                   
                                    <input type="file" name="img2"  class="form-control t1">
                                    <img src="product_image/<?php echo $image1  ?>" height="50" width="50" />

                                      
                                    <br>


                                   </div>
                                
               




 
            <div class="col-lg-12"><br>


            	<center><input type="submit" name="b1" value="Update image" class="form-control btn btn-primary t1"></center>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>




 
<?php

require_once('conn1.php');

if(isset($_POST['b1'])){

$image_name=$_POST['t1'];
$image=$_FILES['img1']['name'];
$temp=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp,"product_image/$image");


$image1=$_FILES['img2']['name'];
$temp2=$_FILES['img2']['tmp_name'];
move_uploaded_file($temp2,"product_image/$image");


$sql="update slider set image_name='$image_name',image='$image',image2='$image1' where slider_id='$id'";
if($conn->query($sql)){
echo"<script>alert('your image has been Updated')</script>";
echo"<script>window.open('admin.php?view_slider','_self')</script>";


}

else{
	echo $conn->error.$sql->error;
	
	}


}





?>     
 

<?php 
}
 ?>


