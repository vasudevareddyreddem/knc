<div class="content-wrapper pad_t100">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box ">
            <div class="box-header" style="border-bottom:1px solid #ddd;">
              <h3 class="box-title" >Seller Payment List</h3>
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
                  <th>Seller Name</th>
				  <th>Orders Count</th>
                  <th>Transaction Amount</th>                  
                  <th>Commission Amount</th>                  
                  <th>Amount to be Deposited</th>                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                  foreach($seller_payment as $payment) {?>
                <tr>                  
                  <td><a href="<?php echo base_url('inventory/sellerpaymentdetails/'.base64_encode($payment['seller_id'])); ?>"><?php echo $payment['seller_rand_id']; ?></a></td>
                  <td><?php echo $payment['seller_name']; ?></td>
                  <td><a href="<?php echo base_url('inventory/sellerpaymentdetails/'.base64_encode($payment['seller_id'])); ?>"><?php echo $payment['orderscount']; ?></a></td>
                  <td><?php echo $payment['totalamount']; ?></td>
                  <td><?php echo $payment['commissionamount']; ?></td>
                  <td><?php echo ($payment['totalamount']) - ($payment['commissionamount']); ?></td>
                  <td><a href="" class="btn btn-primary">Pay</td>
                </tr>
                 <?php }?>
                </tbody>              
              </table>
             
            </div>
            <!-- /.box-body -->
          </div>
          </div>

</section>
</div>
