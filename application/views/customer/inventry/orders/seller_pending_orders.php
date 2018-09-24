<div class="content-wrapper pad_t100">
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title">Total Pending Orders List (<?php if(isset($orderslists) && count($orderslists)>0){echo count($orderslists); } ?>)</h3>
			  <div class="pull-right"><a href="<?php echo base_url('inventory/sellerlist'); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>

              
            </div>
			
            <!-- /.box-header -->
			<?php //echo '<pre>';print_r($orderslists);exit;

			?>
            <div class="box-body">
			<?php if($this->session->flashdata('success')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('success');?></div>	
					<?php endif; ?>
					<?php 	if(count($orderslists)>0){ ?>
					<div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Order Item Id</th>
					<th>Qty</th>
					<th>Amount</th>
					<th>Customer Name</th>
					<th>Customer Mobile Number</th>
					<th>Billing Name</th>
					<th>Billing Mobile Number</th>
					<th>Payment Type</th>
					<th>Store Name</th>
					<th>Order Status</th>
					<th>Delivery Boy assign Status</th>
					<th>Delivery Boy Name</th>
					<th>Delivery Boy Mobile</th>
					<th>Ordered Date & Time</th>
				 </tr>
                </thead>
                <tbody>
                <?php 
							
                  foreach($orderslists as $list) { ?>
                <tr>                  
                 <td><?php echo isset($list['order_item_id'])?$list['order_item_id']:''; ?></td>
                 <td><?php echo isset($list['qty'])?$list['qty']:''; ?></td>
                 <td><?php echo isset($list['total_price'])?$list['total_price']:''; ?></td>
				 <td><?php echo isset($list['cust_firstname'])?$list['cust_firstname']:''; ?>&nbsp;<?php echo isset($list['cust_lastname'])?$list['cust_lastname']:''; ?></td>
				<td><?php echo isset($list['cust_mobile'])?$list['cust_mobile']:''; ?></td>
				<td><?php echo isset($list['billingname'])?$list['billingname']:''; ?></td>
				<td><?php echo isset($list['billingmobile'])?$list['billingmobile']:''; ?></td>
				<td>
				<?php if($list['payment_type']==1){
					echo "Payment Mode";
					
				}else if($list['payment_type']==2){
					echo "Cash On Delivery";
					
				}else if($list['payment_type']==3){
					echo "Swipe On Delivery";
					
				}else if($list['payment_type']==4){
					echo "Paytm";
					
				}
					?>
				</td>
				<td><?php echo isset($list['store_name'])?$list['store_name']:''; ?></td>
				<td>
					<span class="btn btn-sm btn-success pull-right " disabled>
							<?php if($list['status_confirmation']==5){ 
								echo "cancelled";
									
									 }else { ?>
									 <?php if($list['status_confirmation']==5){ 
									
									echo "cancelled"; 
									}else{ 
									
											if($list['status_confirmation']==1 && $list['status_packing']==''){
												echo "Order Confirmed ";  
											  }else if($list['status_confirmation']==1 && $list['status_packing']==2 && $list['status_road']==''){
												  echo "Packing Order";
											  }else if($list['status_confirmation']==1 && $list['status_packing']==2 && $list['status_road']==3 && $list['status_deliverd']=='' || $list['status_deliverd']==0){
												  echo "Order on Road";
											  }else if($list['status_confirmation']==1 && $list['status_packing']==2 && $list['status_road']==3 && $list['status_deliverd']==4 && $list['status_refund']==''){
												  echo "Delivered";
											  }else if($list['status_refund']!=''){
												 echo $list['status_refund']; 
											  }
									  
									}
									  ?>
									<?php } ?>
							</span>
				</td>
			
				
				<td><?php if($list['delivery_boy_assign']==0){ echo "Not  assign"; }else{ echo "Assigned";} ?></td>
				<td><?php echo isset($list['d_name'])?$list['d_name']:''; ?></td>
				<td><?php echo isset($list['d_mob'])?$list['d_mob']:''; ?></td>
				<td><?php echo isset($list['create_at'])?$list['create_at']:''; ?></td>
				 </tr>
				<?php } ?>
                </tbody>              
              </table>
			  <?php } else{?>
			 
				<p>No data available</p>
				<?php } ?>
              </div>
            </div>
            <!-- /.box-body -->
          

</div>
</div>
</div>
</section>
</div>
<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 2, "desc" ]]
    } );
} );
</script>

