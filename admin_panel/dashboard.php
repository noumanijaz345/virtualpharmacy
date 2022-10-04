<?php 
require_once('../function/function.php');
 
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
	<div class="col-lg-12"><h1>Dashboard</h1></div>
	<div class="col-lg-12"><p><span class="glyphicon glyphicon-dashboard"></span>Dashboard</p></div>
     <div class="col-lg-3">
             <div class="panel panel-primary">
                   <div class="panel-heading panel-primary">
                      <span class="glyphicon glyphicon-dashboard "></span> 

                      <div class="a1"><p class="a"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php pro_items(); ?></p> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products</p>
                      </div>


                   </div>
                   <div class="panel-footer">
						
						
					
                 <p class="v1">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></p>
					



					</div>   <!-- panel body ended-->


        </div> 

</div>  <!--  panel claosed -->



 <div class="col-lg-3">
             <div class="panel  panel-success">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> 

                      <div class="a1"><p class="a"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php customer(); ?></p> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer</p>
                      </div>


                   </div>
                   <div class="panel-footer">
						
						
					
                    <p class="v2">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></p>
					



					</div>   <!-- panel body ended-->


        </div> 

</div>  <!--  panel claosed -->




 <div class="col-lg-3">
             <div class="panel panel-warning">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> 

                      <div class="a1"><p class="a"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php pro_cat(); ?></p> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products&nbsp; Categories</p>
                      </div>


                   </div>
                   <div class="panel-footer">
						
						
					<p class="v3">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></p>
					




					</div>   <!-- panel body ended-->


        </div> 

</div>  <!--  panel claosed -->




 <div class="col-lg-3">
             <div class="panel panel-danger">
                   <div class="panel-heading">
                      <span class="glyphicon glyphicon-dashboard"></span> 

                      <div class="a1"><p class="a"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php order_pending(); ?></p> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orders</p>
                      </div>


                   </div>
                   <div class="panel-footer">
						
						<p class="v4">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></p>
					




					</div>   <!-- panel body ended-->


        </div> 

</div>  <!--  panel claosed -->











<div class="col-lg-7">




 <div class="panel panel-primary">
                   <div class="panel-heading panel-primary">
                  
                    <p><span class="glyphicon glyphicon-trash"></span> View Orders </p>  


                   </div>

                   <div class="panel-body">
                        
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover table-condensed">
<thead>
<tr>
<th>Order No:</th>
<th>Invoice No:</th>
<th>Product ID:</th>
<th>Product Qty:</th>
<th>Product Size:</th>
<th>Amount:</th>

<th>Status:</th>



</tr>


</thead>

<tbody>
<?php 


  $order="select * from pending_order ORDER BY order_id DESC";
  $ress=$conn->query($order);
  
  while($roww=$ress->fetch_assoc())
  {
    $order_id=$roww['order_id'];
    $cstm_id=$roww['Cstm_id'];
    $invoice_no=$roww['invoice_no'];
    $product_id=$roww['product_id'];
    $qty=$roww['qty'];
    $size=$roww['size'];
    $order_status=$roww['order_status'];
 
    $sql="select * from customer where Cstm_id='$cstm_id' ";
    $res=$conn->query($sql);
    $row=$res->fetch_assoc();


    $sql1="select * from customer_order where customer_id='$cstm_id' ";
    $res1=$conn->query($sql1);
    $row1=$res1->fetch_assoc();
    $amount=$row1['due_amount'];
	
 ?>

<tr>
<td><?php echo $order_id ?></td>
<td><?php echo $invoice_no ?></td>
<td><?php echo $product_id ?></td>
<td><?php echo $qty ?></td>
<td><?php echo $size ?></td>
<td><?php echo $amount ?></td>
<td><?php echo $order_status ?></td>

</tr>
<?php   }   ?>



</tbody>

</table>
</div>            

          </div>   <!-- panel body ended-->
          <div class="panel-footer">
           <a href="admin.php?view_order" class="btn btn-primary">view order</a>     
          </div>


        </div>
	

</div>
<div class="col-lg-3"> 



<?php 
require_once('conn1.php');
 
$sql="select * from admin where Email='$email'";  
$res=$conn->query($sql);
    while($row=$res->fetch_assoc())
    {

?> 



<img class="img-rounded" src="product_image/Admin.jpg" <?php echo $row["image"]; ?>"  width="300px" height="300px">
<?php 
}
 ?>
<br>
<br><p><span class="glyphicon glyphicon-dashboard"></span>&nbsp;<label>Email:&nbsp; <a href="#"> <?php echo "$email";  ?></a></label></p>
<p><span class="glyphicon glyphicon-dashboard"></span>&nbsp;<label>Country:&nbsp;</label>Pakistan</p>


</div>

<?php

}


 ?>

















