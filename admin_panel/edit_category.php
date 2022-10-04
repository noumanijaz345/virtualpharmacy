
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









if(isset($_GET['edit_category']))
{
	$id=$_GET['edit_category'];
	
$sql="select * from category where CAT_ID='$id'";
$res=$conn->query($sql);
while($row=$res->fetch_assoc())
{
	$first1=$row['category_title'];
	$first2=$row['image'];
}
}
?>



	











<div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp; Update Category</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Update Category
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         	<form method="post" enctype="multipart/form-data">
<br><br>



                         		
                                                       			<div class="col-lg-2"><label>Category Title</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="title1" value="<?php echo "$first1"  ?>" class="form-control t1">

                                	                                    <br>


                                                                </div>

											                               

											                                





                                          
                                           






	                                   <div class="col-lg-2"><label>Select Category Image</label></div>
	                                 <div class="col-lg-10">
	                                 
	                                  <input type="file" name="img1" value="<?php echo "$second2"  ?>" class="form-control t1">

	                                    
	                                  <br>


	                                 </div>
                                
               




 
            <div class="col-lg-12"><br>


            	<center><input type="submit" name="b1" value="Update product" class="form-control btn btn-primary t1"></center>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>

<?php
$sql1="select * from category";
?>



 
<?php

require_once('conn1.php');

if(isset($_POST['b1'])){

$title_name=$_POST['title1'];
$image1=$_POST['img1'];



$sql="update category set category_title='$title_name',image='$image1' where CAT_ID='$id'";
if($conn->query($sql)){
echo"<script>alert('your data has been Updated')</script>";
echo"<script>window.open('admin.php?view_category','_self')</script>";


}

else{
	echo $conn->error.$sql->error;
	
	}


}





?>     
 

<?php 
}
 ?>


