<div class="content-wrapper pad_t100">
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title">Co-Worker's List</h3>
              <a class="pull-right btn btn-sm btn-primary" href="<?php echo base_url('inventory/addcoworker'); ?>" class="box-title">Add</a>
            </div>
			
            <!-- /.box-header -->
			<?php //echo '<pre>';print_r($category_list);exit;

			?>
            <div class="box-body">
			<?php if($this->session->flashdata('success')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('success');?></div>	
					<?php endif; ?>
					<?php 	if(count($coworker_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Name</th>
					<th>Email Id</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Created Date</th>
					<th>Status</th>
					<th>Action</th>
				 </tr>
                </thead>
                <tbody>
                <?php 
							
                  foreach($coworker_list as $list) { ?>
                <tr>                  
					<td><?php echo $list['cust_firstname']; ?><?php echo $list['cust_lastname']; ?></td>
					<td><?php echo $list['cust_email']; ?></td>
					<td><?php echo $list['cust_mobile']; ?></td>
					<td><?php echo $list['address1']; ?><?php echo $list['address2']; ?></td>
					<td><?php echo Date('d-M-Y',strtotime(htmlentities($list['created_at'])));?></td>
                  <td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive";} ?></td>                  
				<td>
				<a href="<?php echo base_url('inventory/coworkeredit/'.base64_encode($list['customer_id'])); ?>">Edit</a> | &nbsp;
				<a href="<?php echo base_url('inventory/coworkerstatus/'.base64_encode($list['customer_id']).'/'.base64_encode($list['status'])); ?>"><?php if($list['status']==0){ echo "Active";}else{ echo "Deactive";} ?></a> | &nbsp;
				<a href="<?php echo base_url('inventory/coworkerdelete/'.base64_encode($list['customer_id'])); ?>">Delete</a> | &nbsp;
				
				</td>
                 </tr>
				<?php } ?>
                </tbody>              
              </table>
			  <?php } else{?>
				<p>No data available</p>
				<?php } ?>
             
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

