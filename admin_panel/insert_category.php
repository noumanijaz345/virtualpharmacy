	
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








  <div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard / Insert Category</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Insert Product  
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         <form method="post" enctype="multipart/form-data">




                         		
                                                       			<div class="col-lg-2"><label>Category Title</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="title1" class="form-control t1">

                                	                                    <br>


                                                                </div>

											                               

											                                





                                          
                                           
                                 			





       							 <div class="col-lg-2"><label>Select Category Image</label></div>
                                 <div class="col-lg-10">
                                  
                                  <input type="file" name="img1" class="form-control t1">
                                    
                                  <br>

                                 </div>
                                





 
            <div class="col-lg-12"><br>


            <div class="col-lg-10">	<center><input type="submit" name="b1" value="Insert Category" class="form-control btn btn-primary t1"></center></div>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>






 
<?php



if(isset($_POST['b1'])){
$title_name=$_POST['title1'];


$image=$_FILES['img1']['name'];
$temp1=$_FILES['img1']['tmp_name'];
move_uploaded_file($temp1,"product_image/$image");



$sql="Insert into category (category_title,image) values('$title_name','$image')";
if($conn->query($sql)){
   
echo"<script>alert('your data has been inserted')</script>";
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
