<div class="content-wrapper pad_t100">
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title" >Home page banner images List</h3>
              <a class="pull-right btn btn-sm btn-primary" href="<?php echo base_url('inventory/homepagebanner'); ?>" class="box-title">Back</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body"><?php if($this->session->flashdata('success')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('success');?></div>	
					<?php endif; ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				  <tr>
					<th>Seller Id</th>
					<th>File Name</th>
					<th>Image</th>
					<th>Status</th>
					<th>Home page Status</th>
				 </tr>
                </thead>
                <tbody>
                <?php  
                  //echo '<pre>';print_r($homepage_banner_details);exit;
				  foreach($homepage_banner_details as $items) {
					  $date = new DateTime("now");
				$curr_date = $date->format('Y-m-d h:i:s A');?>
                <tr>                  
                  <td><?php echo $items['seller_rand_id']; ?></td>
                  <td><?php echo $items['file_name']; ?></td>
		          <td><img src="<?php echo base_url();?>uploads/banners/<?php  echo $items['file_name']; ?>" width="80" height="50" /></td>
                  <td><?php if($items['expairydate']<=$curr_date){
						  
						  echo "expired";
						}else if($items['status']==1){ echo "Active";}else{ echo "Deactive";} ?></td>                  
                  <td>
				  <a href="<?php echo base_url('inventory/home_page_banner_status/'.base64_encode($items['seller_id']).'/'.base64_encode($items['image_id']).'/'.base64_encode($items['home_page_status'])); ?>"><?php if($items['home_page_status']==1 && $items['expairydate']<=$curr_date){ echo "expired";}else if($items['home_page_status']==1){ echo "Active";}else{ echo "Deactive";} ?></a>
				 </td>                  
				
                 </tr>
                 <?php }?>
                </tbody>              
              </table>
             
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
        "order": [[ 1, "desc" ]]
    } );
} );
</script>