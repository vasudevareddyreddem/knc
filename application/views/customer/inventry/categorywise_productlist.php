<div class="content-wrapper pad_t100">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title" >Category Wise Product List</h3>
              <a class="pull-right btn btn-sm btn-primary" href="<?php echo base_url('inventory/categorywisequantity/'.$seller_id); ?>" class="box-title">Back</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php if(count($product_details)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				  <tr>
					<th>Product Name</th>
					<th>Category Name</th>
					<th>Qty</th>
					<th>Product Code</th>
					<th>Status</th>
					
				 </tr>
                </thead>
                <tbody>
                <?php  
                  foreach($product_details as $list) {?>
                <tr>  
                  <td><?php echo $list['item_name'] ?></td>
                  <td><?php echo $list['category_name'] ?></td>
                  <td><?php echo $list['item_quantity'] ?></td>
                  <td><?php echo $list['product_code'] ?></td>
                  <td><?php if($list['item_status']==1){ echo "Active";}else{ echo "Deactive";} ?></td>                  
                </tr>
                 <?php }?>
                </tbody>              
              </table>
			<?php }else{ ?>
			<div>No data available</div>
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