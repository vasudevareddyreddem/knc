<div class="content-wrapper pad_t100">
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title">Total Product List (<?php if(isset($orderslists) && count($orderslists)>0){echo count($orderslists); } ?>)</h3>

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
					<?php 	if(count($product_list)>0){ ?>
					<div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Product Id</th>
					<th>Name</th>
					<th>Category Name</th>
					<th>Sub Category Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Special Price</th>
					<th>Store Name</th>
					<th>Store Address</th>
					<th>Created Date & Time</th>
				 </tr>
                </thead>
                <tbody>
                <?php 
							
                  foreach($product_list as $list) { ?>
                <tr>                  
					<td><?php echo isset($list['item_id'])?$list['item_id']:''; ?></td>
					<td><?php echo isset($list['item_name'])?$list['item_name']:''; ?></td>
					<td><?php echo isset($list['category_name'])?$list['category_name']:''; ?></td>
					<td><?php echo isset($list['subcategory_name'])?$list['subcategory_name']:''; ?></td>
					<td><?php echo isset($list['item_quantity'])?$list['item_quantity']:''; ?></td>
					<td><?php echo isset($list['item_cost'])?$list['item_cost']:''; ?></td>
					<td><?php echo isset($list['special_price'])?$list['special_price']:''; ?></td>
					<td><?php echo isset($list['s_name'])?$list['s_name']:''; ?></td>
					<td><?php echo isset($list['s_address'])?$list['s_address']:''; ?></td>
					<td><?php echo isset($list['created_at'])?$list['created_at']:''; ?></td>
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

