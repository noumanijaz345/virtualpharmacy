
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
                  
                    <p><span class="glyphicon glyphicon-trash"></span> View Payments </p>  


                   </div>

                   <div class="panel-body">
                        
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover table-condensed">
<thead>
<tr>
<th>Payment No:</th>
<th>Invoice No:</th>
<th>Amount Paid:</th>
<th>Payment method:</th>
<th>Refrence No:</th>
<th>Payment code</th>
<th>Payment date:</th>
<th>Delete Payment:</th>





</tr>


</thead>

<tbody>
<?php 


  $order="select * from payment";
  $ress=$conn->query($order);
  while($roww=$ress->fetch_assoc()){
    $Payment_no=$roww['pay_id'];
    $Invoice_no=$roww['invoice_no'];
    $amount_paid=$roww['amount_sent'];
    $payment_method=$roww['payment_mode'];
    $Refernce_no=$roww['transaction_id'];
    $payment_code=$roww['easypaisa_code'];
    $payment_date=$roww['payment_date'];
     ?>
     






<tr>
<td><?php echo $Payment_no ?></td>
<td><?php echo $Invoice_no ?></td>
<td><?php echo $amount_paid ?></td>
<td><?php echo $payment_method ?></td>
<td><?php echo $Refernce_no ?></td>
<td><?php echo $payment_code ?></td>
<td><?php echo $payment_date ?></td>
<td><a href="del_payment.php?pay_no=<?php echo $Payment_no ?>"><center><span class="glyphicon glyphicon-trash"></span></center></a></td>

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