
<div class="content-wrapper" style="padding-top:80px;">
<section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="col-md-6 well  col-md-offset-3 " style="background:#fff;">
			<div class="pull-left"><h3 style="padding-bottom:10px;margin:0;color:#8bc34a;">Service Request Details</h3></div>
			<div class="pull-right"><a href="<?php echo base_url('inventory/sellerservicerequests'); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>
			 <table class="table table-bordered">
					<tbody>
					  <tr>
						<th >Service Request Id</th>
						<td><?php echo isset($request_details['seller_rand_id'])?$request_details['seller_rand_id']:''; ?></td>
						
					  </tr> 
					  <tr>
						<th >Service Request Purpose</th>
						<td><?php echo isset($request_details['select_plan'])?$request_details['select_plan']:''; ?></td>
						
					  </tr>
					  <?php if(isset($request_details['replymsg']) && $request_details['replymsg']!=''){  ?><tr>
						<th >Service Request Response</th>
						<td><?php echo isset($request_details['replymsg'])?$request_details['replymsg']:''; ?></td>
						
					  </tr>
					  
					  <?php } ?>
					   <tr>
						<th >Seller Name</th>
						<td><?php echo isset($request_details['seller_name'])?$request_details['seller_name']:''; ?></td>
						
					  </tr>
					  <tr>
						<th >Seller Email</th>
						<td><?php echo isset($request_details['seller_email'])?$request_details['seller_email']:''; ?></td>
						
					  </tr> 
					  <tr>
						<th >Seller Mobile</th>
						<td><?php echo isset($request_details['seller_mobile'])?$request_details['seller_mobile']:''; ?></td>
						
					  </tr> 
					  <tr>
						<th >Created date</th>
						<td><?php echo Date('d-M-Y',strtotime(htmlentities($request_details['created_at'])));?></td>

						
					  </tr> 
					  <tr>
						<th>Status</th>
						<td><?php if($request_details['status']==1){ echo "Replied";}else{ echo "Reply";} ?></td>
						
					  </tr>
					
					 
					
					</tbody>
			</table> 
			<?php if($request_details['status']==0) { ?>
			<div class="pull-right"><a href="<?php echo base_url('inventory/servicerequestreply/'.base64_encode($request_details['service_id']).'/'.base64_encode($request_details['seller_id'])); ?>" type="button" class="btn btn-warning btn-xs">Reply</a></div>
			<?php }  ?>
			
		</div>
     

	  </div>
</div>
</section>
</div>
