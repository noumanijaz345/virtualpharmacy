
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
<th>Product Image:</th>
<th>Product Qty:</th>
<th>Product Size:</th>
<th>Order date:</th>
<th>amount:</th>

<th>Status:</th>



</tr>


</thead>

<tbody>
<?php 


  $order="select * from pending_order ORDER BY order_id DESC";
  $ress=$conn->query($order);
  while($roww=$ress->fetch_assoc()){
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
    $date=$row1['order_date'];
    $amount=$row1['due_amount'];

    $sql2="select * from insert_product where ID='$product_id' ";
    $res2=$conn->query($sql2);
    $row2=$res2->fetch_assoc();
    $product_img=$row2['Product_image1'];
   







 ?>




<tr>
<td><?php echo $order_id ?></td>
<td><?php echo $invoice_no ?></td>
<td> <img src="product_image/<?php echo $product_img ?>" height="100" width="100"  /></td>
<td><?php echo $qty ?></td>
<td><?php echo $size ?></td>
<td><?php echo $date ?></td>
<td><?php echo $amount ?></td>
<td><?php echo $order_status ?></td>

</tr>


<?php   
}
?>





</tbody>

</table>
</div>						
										




					</div>   <!-- panel body ended-->


        </div>

        <?php } ?>