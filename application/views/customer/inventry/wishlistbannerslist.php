<div class="content-wrapper pad_t100">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box data_box_wid">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title">Wishlist page Banners List</h3>
              <a class="pull-right btn btn-sm btn-primary" href="<?php echo base_url('inventory/addwishlistbanners'); ?>" class="box-title">Add</a>
            </div>
			
            <div class="box-body">
			<?php if($this->session->flashdata('success')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('success');?></div>	
					<?php endif; ?>
					
		<?php if(count($bannerslist)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Banner Name</th>
					<th>Image</th>
					<th>Type</th>
					<th>Status</th>
					<th>Action</th>
				 </tr>
                </thead>
                <tbody>
                <?php  foreach($bannerslist as $catlist) { ?>
                <tr>                  
                  <td><?php echo $catlist['image']; ?></td>
		          <td><img src="<?php echo base_url();?>assets/middlehomepagebanners/<?php  echo $catlist['image']; ?>" width="80" height="50" /></td>

                  <td><?php if($catlist['type']==1){ echo "We site";}else{ echo "APP";} ?></td>                  
                  <td><?php if($catlist['status']==1){ echo "Active";}else{ echo "Deactive";} ?></td>                  
				   <td><a href="<?php echo base_url('inventory/wishlistbannerstatus/'.base64_encode($catlist['id']).'/'.base64_encode($catlist['status'])); ?>"><?php if($catlist['status']==1){ echo "Active";}else{ echo "Deactive";} ?></a></td>

                 </tr>
				<?php } ?>
                </tbody>              
              </table>
			  <?php }else{ ?>
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

