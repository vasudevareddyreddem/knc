<div class="content-wrapper pad_t100">
    <!-- Content Header (Page header) -->
      <div class="container">
         <!-- Main content -->
      <div class="row">
	  <?php //echo '<pre>';print_r($seller_order_items);exit; ?>
      <div class="box data_box_wid">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title" >Seller Season sales Items List</h3>
              <a class="pull-right btn btn-sm btn-primary" href="<?php echo base_url('inventory/seasonsales'); ?>" class="box-title">Back</a>
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
					<th>Item Name</th>
					<th>category Name</th>
					<th>Item Amount</th>
					<th>Offer Amount</th>
					<th>Initial Date</th>
					<th>Expiry Date</th>
					<th>Item Status</th>
					<th>Home page Status</th>
				 </tr>
                </thead>
                <tbody>
                <?php  
                  foreach($season_sales_details as $items) {
					$date = new DateTime("now");
					$curr_date = $date->format('Y-m-d h:i:s A');?>
                <tr>                  
                  <td><?php echo $items['seller_rand_id']; ?></td>
                  <td><?php echo $items['item_name']; ?></td>
                  <td><?php echo $items['category_name']; ?></td>
                  <td><?php echo $items['item_price']; ?></td>
				  <td><?php echo $items['offer_amount']; ?></td>    
				  <td><?php echo Date('d-M-Y',strtotime(htmlentities($items['intialdate'])));?></td> 				  
				  <td><?php echo Date('d-M-Y',strtotime(htmlentities($items['expairdate'])));?></td> 				  
                  <td><?php if($items['expairdate']<=$curr_date){
						  
						  echo "expired";
						}else if($items['status']==1){ echo "Active";}else{ echo "Deactive";} ?></td>                  
                  <td>
				  <a href="<?php echo base_url('inventory/seasonsale_home_page_status/'.base64_encode($items['seller_id']).'/'.base64_encode($items['item_id']).'/'.base64_encode($items['home_page_status'])); ?>"><?php if($items['home_page_status']==1){ echo "Active";}else{ echo "Deactive";} ?></a>
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
</div>
<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
} );
</script>