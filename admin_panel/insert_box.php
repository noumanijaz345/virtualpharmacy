	
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








  <div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard / Insert Box Section</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; Insert Box  
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         <form method="post">




                         		
                                                       			<div class="col-lg-2"><label>Box header:</label></div>

                         		                                <div class="col-lg-10">
                                	                                    <input type="text" name="t1" class="form-control t1">

                                	                                    <br>


                                                                </div>




       							 <div class="col-lg-2"><label>Box descrition:</label></div>
                                 <div class="col-lg-10">
                                  
                                 <textarea rows="5" name="box1" class="form-control t1"></textarea>
                                  
                                    
                                  <br>

                                 </div>
                                



                                
                                





 
            <div class="col-lg-12"><br></div>


            <div class="col-lg-10">	<center><input type="submit" name="b1" value="insert box" class="form-control btn btn-primary t1"></center></div>




  
                                    
                                   
 
 
 
           



                         	</form>






                        

















                     

                     
                   </div>







        </div> 

</div>  <!--  panel claosed -->
</div>






 
<?php



if(isset($_POST['b1'])){
$h1=$_POST['t1'];
$b1=$_POST['box1'];





$sql="Insert into box (box_header1,box_description1) values('$h1','$b1')";
if($conn->query($sql)){
   
echo"<script>alert('your data has been inserted')</script>";
echo"<script>window.open('admin.php?view_box','_self')</script>";


}

else{
	echo $conn->error.$sql->error;
	
	}


}





?>     
 


<?php  
}

?>
