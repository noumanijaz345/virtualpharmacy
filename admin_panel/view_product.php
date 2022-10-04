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
	<div class="col-lg-12"><p class="p1"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard / View Products</p></div>






 <div class="col-lg-12">
             <div class="panel panel-default">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> &nbsp; View Products  
                        
                      

                   </div>
                   <div class="panel-body">
                         
                         <div class="table-responsive">
<table class="table table-bordered table-striped table-hover table-condensed">
<thead>
<tr>
<th>Product ID</th>
<th>Product Title</th>
<th>Product url</th>
<th>Product Image1</th>
<th>Product Image2</th>
<th>Product Image3</th>
<th>Product price</th>
<th>Product Keywords</th>
<th>Product Delete</th>
<th>Product Edit</th>



</tr>


</thead>

<tbody>






<?php

require_once('conn1.php');
 
$sql="select * from insert_product  ";	
	$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
		?>
<tbody>	
            
           <tr>
           <td><?php echo $row["ID"]; ?></td>
           <td><?php  echo $row["Product_Title"];   ?></td>
           <td><?php echo $row["Product_Url"]; ?></td>
           
           <td> <img src="product_image/<?php echo $row["Product_image1"]; ?>" height="100" width="100"  /></td>

          
        
           <td> <img src="product_image/<?php echo $row["Product_image2"]; ?>" height="100" width="100"  /></td>
        
   
          
           
           <td> <img src="product_image/<?php echo $row["Product_image3"]; ?>" height="100" width="100"  /></td>


           <td><?php echo $row["Product_price"]; ?></td>

           
           <td><?php  echo $row["Product_keywords"];   ?></td>
           <td><a href="admin.php?delete_product=<?php echo $row['ID']; ?>"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a></td>
           <td><a href="admin.php?edit_product=<?php echo $row['ID']; ?>"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a></td>
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