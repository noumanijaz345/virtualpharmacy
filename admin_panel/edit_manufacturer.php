
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
  









if(isset($_GET['edit_manufacturer']))
{
	$id=$_GET['edit_manufacturer'];
	
$sql="select * from manufacturer where MANU_ID='$id'";
$res=$conn->query($sql);
while($row=$res->fetch_assoc())
{
  
	$first1=$row['manufacturer_name'];
	$first2=$row['image'];
}
}
?>



	











<div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp; Update Staff</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Update Staff
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         	<form method="post" enctype="multipart/form-data">
<br><br>



                         		
                                                       			<div class="col-lg-2"><label>Staff Name</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="title1" value="<?php echo "$first1"  ?>" class="form-control t1">

                                	                                    <br>


                                                                </div>

											                               

											                                





                                          
                                           






	                                   <div class="col-lg-2"><label>Select Staff Image</label></div>
	                                 <div class="col-lg-10">
	                                 
	                                  <input type="file" name="img1" value="<?php echo "$second2"  ?>" class="form-control t1">

	                                    
	                                  <br>


	                                 </div>
                                
               




 
            <div class="col-lg-12"><br>


            	<center><input type="submit" name="b1" value="Update Manufacturer" class="form-control btn btn-primary t1"></center>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>

<?php
$sql1="select * from manufacturer";
?>



 
<?php

require_once('conn1.php');

if(isset($_POST['b1'])){

$title_name=$_POST['title1'];




$image1=$_FILES['img1']['name'];
$temp1=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp1,"product_image/$image1");




$sql="update manufacturer set manufacturer_name='$title_name',image='$image1' where MANU_ID='$id'";
if($conn->query($sql)){
echo"<script>alert('your data has been Updated')</script>";
echo"<script>window.open('admin.php?view_manufacturer','_self')</script>";


}

else{
	echo $conn->error.$sql->error;
	
	}


}





?>     
 

<?php 
}
 ?>


