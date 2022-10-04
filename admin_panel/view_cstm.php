
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
                  
                    <p><span class="glyphicon glyphicon-trash"></span> View Customers </p>  


                   </div>

                   <div class="panel-body">
                        
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover table-condensed">
<thead>
<tr>
<th>Customer ID:</th>
<th>Customer Name:</th>
<th>Customer Email:</th>
<th>Customer Image:</th>
<th>Customer Country:</th>
<th>Customer City:</th>
<th>Customer Number:</th> 
<th>Customer Delete:</th>


</tr>


</thead>

<tbody>
<?php 




  $customer="select * from customer";
  $ress=$conn->query($customer);
  while($roww=$ress->fetch_assoc()){
    
    $cstm_id=$roww['Cstm_id'];
    $cstm_name=$roww['Cstm_name'];
    $cstm_email=$roww['Cstm_email'];
    $cstm_image=$roww['Cstm_image'];
    
    $cstm_country=$roww['Cstm_country'];
    $cstm_city=$roww['Cstm_city'];
    $cstm_number=$roww['Cstm_contact'];
    
 
    





 ?>




<tr>
<td><?php echo $cstm_id ?></td>
<td><?php echo $cstm_name ?></td>

<td><?php echo $cstm_email ?></td>
<td> <img src="../customer_image/<?php echo  $cstm_image ?>" height="100" width="100"  /></td>
<td><?php echo $cstm_country ?></td>
<td><?php echo $cstm_city ?></td>
<td><?php echo $cstm_number ?></td>
<td><a href="del_cstm.php?del_cstm=<?php echo $cstm_id ?>"><span class="glyphicon glyphicon-trash"></span></a></td>


</tr>


<?php   
}

?>





</tbody>

</table>

<button>&times;</button>

</div>						
										




					</div>   <!-- panel body ended-->


        </div>

        <?php } ?>