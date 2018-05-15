<div class="content-wrapper pad_t100">
	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title" >Messages List</h3>
              <a class="pull-right btn btn-sm btn-primary" href="<?php echo base_url('inventory/dashboard'); ?>" class="box-title">Back</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<?php if($this->session->flashdata('success')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('success');?></div>	
					<?php endif; ?>
					<?php if($notification_details){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Seller Id</th>
                  <th>Seller Name</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Date</th>
                  <th>Action</th>
				  
                </tr>
                </thead>
                <tbody>
                <?php  
                  foreach($notification_details as $details) { ?>
				  
				<?php if($details['count'][0]['unreadcount']!=0){ ?>
                <tr >                   
                <td><?php echo $details['seller_rand_id']; ?></td>
                <td><?php echo $details['seller_name']; ?><?php if($details['count'][0]['unreadcount']!=0){ ?>&nbsp;<span style="color:darkslateblue;">(<?php  echo $details['count'][0]['unreadcount'];  ?>)</span><?php }  ?></td>
                <td><?php echo $details['lastone']['subject']; ?></td>
                <td><?php echo $details['lastone']['seller_message']; ?></td>
				<td><?php echo Date('d-M-Y',strtotime(htmlentities($details['created_at'])));?></td>
                <td><a href="<?php echo base_url('inventory/notificationview/'.base64_encode($details['seller_id'])); ?>"><?php echo $details['lastone']['message_type']; ?></a></td>
                
                </tr>
				  <?php }else{ ?>
						<tr>                 
						<td><?php echo $details['seller_rand_id']; ?></td>
						<td><?php echo $details['seller_name']; ?><?php if($details['count'][0]['unreadcount']!=0){ ?>&nbsp;(<?php  echo $details['count'][0]['unreadcount'];  ?>)<?php }  ?></td>
						<td><?php echo $details['lastone']['subject']; ?></td>
						<td><?php echo $details['lastone']['seller_message']; ?></td>
						<td><?php echo Date('d-M-Y',strtotime(htmlentities($details['created_at'])));?></td>
						<td><a href="<?php echo base_url('inventory/notificationview/'.base64_encode($details['seller_id'])); ?>"><?php echo $details['lastone']['message_type']; ?></a></td>

						</tr>
				  <?php } ?>
                 <?php }?>
                </tbody>              
                </table> <br><br><br>
				
					<?php }else{ ?>
					<div>No data avaialable</div>
					<?php }?>
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
        "order": [[ 5, "desc" ]]
    } );
} );
</script>
