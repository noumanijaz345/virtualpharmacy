<div class="col-lg-1  col-md-1"></div>
	<div class="col-lg-8  col-md-8 col3">
		<h1 class="text-center"><b>My Orders</b></h1>
		<br>
		<h4 class="text-muted text-center">Your orders on one place.</h4>
		<p class=" text-center">If you have any question,please feel free to <a href="index.php?contact_us">contact us</a>,our customer service center is working for you 24/7.</p>
		<hr>
		<div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed">
			<thead>
				<th>O.N:</th>
				<th>Due Amount</th>
				<th>Invoice No:</th>
				<th>Qty:</th>
				<th>Size:</th>
				<th>Order Date:</th>
				<th>Paid/Unpaid:</th>
				<th>Status:</th>
			</thead>
			<tbody>
				<?php
				$email=$C_email;
				 $sql="select * from customer where Cstm_email='$email'";
				$res=$conn->query($sql);
				$roww=$res->fetch_assoc();
				$Cstm_id=$roww['Cstm_id'];
				
       
                $order="select * from customer_order where customer_id='$Cstm_id'";//$Cstm_id
                $result=$conn->query($order);
                $i=0;
                while($row=$result->fetch_assoc()){
                	$order_id=$row['order_id'];
                	$due_amount=$row['due_amount'];
                	$invoice_no=$row['invoice_no'];
                    $qty=$row['qty'];
                	$size=$row['size'];
                	$order_date=$row['order_date'];
                	$order_status=$row['order_status'];
                	$i++;
                	if($order_status=='pending'){
                		$order_status="Unpaid";
                	}
                	else {
                		$order_status="Paid";
                	}
                	
               ?>

				<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $due_amount ?></td>
				<td><?php echo $invoice_no ?></td>
				<td><?php echo $qty ?></td>
				<td><?php echo $size ?></td>
				<td><?php echo $order_date ?></td>
				<td><?php echo $order_status ?></td>
				<td><a href='ak_account.php?on=<?php echo $order_id ?>' class='btn btn-primary'>Confirm If Paid</a></td>
			</tr>

			<?php

		}

?>			



			
			</tbody>
		</table>
	</div>

		
		<br><br>
	</div>