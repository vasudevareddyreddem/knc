<style>
	.detail_ta th{
		width:40%;
	}
	.detail_ta {
		background-color:#fff;
	}
</style>
<div class="content-wrapper" style="padding-top:80px;">

    <!-- Content Header (Page header) -->
      <div class="container">
         <!-- Main content -->
      <div class="row">
	  <?php //echo '<pre>';print_r($seller_details);exit; ?>
		<div class="col-md-6 well detail_ta col-md-offset-3">
			<div class="pull-left"><h3 style="padding-bottom:10px;margin:0;color:#8bc34a;">Seller Details</h3></div>
		
			<?php if($this->uri->segment(5)=='direct') { ?> 
			<div class="pull-right"><a href="<?php echo base_url('inventory/categorywisesellers/'.$this->uri->segment(4)); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>
			 <?php }else if($this->uri->segment(4)=='season') { ?> 
				<div class="pull-right"><a href="<?php echo base_url('inventory/seasonsales'); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>
				<?php }else if($this->uri->segment(4)=='topoffers') { ?> 
				<div class="pull-right"><a href="<?php echo base_url('inventory/topoffers'); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>
				<?php }else if($this->uri->segment(4)=='deals') { ?> 
				<div class="pull-right"><a href="<?php echo base_url('inventory/dealsoftheday'); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>
				<?php }else if($this->uri->segment(4)=='banner') { ?> 
				<div class="pull-right"><a href="<?php echo base_url('inventory/homepagebanner'); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>
				<?php }else{ ?>
			 <div class="pull-right"><a href="<?php echo base_url('inventory/sellerlist'); ?>" type="button" class="btn btn-primary btn-xs">Back</a></div>

			 <?php } ?>
			 <table class="table table-bordered">
					<tbody>
					  <tr>
						<th >Seller Id</th>
						<td><?php echo isset($seller_details['seller_rand_id'])?$seller_details['seller_rand_id']:''; ?></td>
						
					  </tr>
					   <tr>
						<th >Seller Name</th>
						<td><?php echo isset($seller_details['seller_name'])?$seller_details['seller_name']:''; ?></td>
						
					  </tr>
					  <tr>
						<th >Seller Email</th>
						<td><?php echo isset($seller_details['seller_email'])?$seller_details['seller_email']:''; ?></td>
						
					  </tr> 
					  <tr>
						<th >Seller Mobile</th>
						<td><?php echo isset($seller_details['seller_mobile'])?$seller_details['seller_mobile']:''; ?></td>
						
					  </tr> 
					  <tr>
						<th >Created date</th>
						<td><?php echo Date('d-M-Y',strtotime(htmlentities($seller_details['created_at'])));?></td>
						
					  </tr>
					  <tr>
						<th >Store location</th>
						<td><?php echo isset($seller_details['location_name'])?$seller_details['location_name']:''; ?></td>
						
					  </tr> 
					  <tr>
						<th >Status</th>
						<td><?php if($seller_details['status']==1){ echo "Active";}else{echo "Deactive";} ?></td>
						
					  </tr>
					
					 
					
					</tbody>
			</table>
			
		</div>
     

	  </div>
</div>
</div>
