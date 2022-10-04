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
	<div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard / View Slider Images</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; View Slider Images
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         <div class="table-responsive">
<table class="table table-bordered table-striped table-hover table-condensed">
<thead>
<tr>
<th>Image id:</th>
<th>Image Title:</th>
<th>Delete Image</th>
<th>Edit Image</th>



</tr>


</thead>

<tbody>






<?php

require_once('conn1.php');
 
$sql="select * from slider  ";	
	$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
		?>
<tbody>	
            
           <tr>
           <td><?php echo $row["slider_id"]; ?></td>
           <td><?php  echo $row["image_name"];   ?></td>
           
           
         

          
        
          



           
           
           <td><a href="admin.php?delete_slider=<?php echo $row['slider_id']; ?>"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a></td>
           <td><a href="admin.php?edit_slider=<?php echo $row['slider_id']; ?>"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a></td>
           </tr> 
		
</tbody>		
        <?php
		}

?>






























































</tbody>

</table>
</div>            

                     

                     
                   </div>






                   <div class="panel-footer">
            
           
          




          </div>   <!-- panel body ended-->


        </div> 

</div>  <!--  panel claosed -->

     

























































</div>






<?php
}
?>