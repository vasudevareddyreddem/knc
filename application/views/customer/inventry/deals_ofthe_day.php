<div class="content-wrapper pad_t100">
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title">Deals of the day Items List</h3>
              <!-- <a class="pull-right btn btn-sm btn-primary" href="<?php echo base_url('inventory/categoryadd'); ?>" class="box-title">Add</a> -->
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
			<?php if($this->session->flashdata('success')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('success');?></div>	
					<?php endif; ?>
          <?php   //echo '<pre>';print_r($season_sales);exit; 
		  if(count($season_sales)>0){?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Seller Id</th>
					<th>Seller Name</th>
					<th>ItemsCount</th>
					<th>Action</th>
				 </tr>
                </thead>
                <tbody>
                <?php   foreach($season_sales as $offer) {?>
                <tr>                  
				  <td><a href="<?php echo base_url('inventory/sellerdetails/'.base64_encode($offer['seller_id']).'/'.'deals'); ?>"><?php echo $offer['seller_rand_id']; ?></a></td>    
                  <td><?php echo $offer['seller_name']; ?></td>
                  <td><a href="<?php echo base_url('inventory/sellerdelasofthedaydetails/'.base64_encode($offer['seller_id'])); ?>"><?php echo $offer['itemscount']; ?><?php if($offer['count'][0]['activecount']!=0){ ?>&nbsp;<span style="color:darkslateblue;">(<?php  echo $offer['count'][0]['activecount'];  ?> &nbsp; Item active)</span><?php }  ?></a></td>
				  <td><a href="<?php echo base_url('inventory/overaall_dealsoftheday_home_page_status/'.base64_encode($offer['seller_id']).'/'.base64_encode(0)); ?>">All Active</a> &nbsp; | &nbsp;
				  <a href="<?php echo base_url('inventory/overaall_dealsoftheday_home_page_status/'.base64_encode($offer['seller_id']).'/'.base64_encode(1)); ?>">All Deactive</a></td>
                 
                </tr>
                 <?php }?>                 
                </tbody>              
              </table>
		  <?php } else{ ?>
		  NO Deals of the day Items List
		  <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>

</div>
</div>
</section>
</div>
