<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/datatable/jquery.dataTables.min.css">

<script src="<?php echo base_url();?>assets/vendor/datatable/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/datatable/base/jquery-ui.css">
<script src="<?php echo base_url();?>assets/vendor/datatable/jquery-ui.js"></script>
<div class="content-wrapper mar_t_con" >
<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>  
			<h1>Seller Payments</h1>
			<small>Payments</small>
			<ol class="breadcrumb hidden-xs">
				<li><a href="<?php echo base_url('seller/dashboard');?>"><i class="pe-7s-home"></i> Home</a></li>
				<li class="active">Seller Payments</li>
			</ol>
		</div>
	</section>
  <section class="content ">
  <section id="main-content">
    <section class="wrapper">
        
     <div class="row">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              <h3>Seller Payments</h3>
            </header>
            <div class="panel-body">
              <!-- <a href="<?php echo base_url(); ?>seller/payments/create"  class="add_item"><button class="btn btn-primary" type="submit">Add Seller Payment</button></a>-->
             <div class="clearfix"></div>
              <div><?php echo $this->session->flashdata('message');?></div>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                 <th>S.No</th>
               <!--  <th>Seller Id</th>-->
                <th>Order Id</th>
                <th>CIH Comission</th>
                <!-- <th>Net Profit</th> -->
                <th>Amount</th>
                <th>Status</th>
				<th>Invoice</th>
               <!-- <th>Date & Time</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>-->
                    </tr>
                  </thead>
                  <?php if(!empty($paymentsdata)): ?>

              <tbody>
                <?php $count = $this->uri->segment(4, 0);

   foreach($paymentsdata as $payments_data){

     $total = 0;

     ?>

                <tr>

                  <td><?= ++$count ?></td>

                <!--  <td><a href="<?php //echo base_url(); ?>seller/payments/seller_details/<?php  //echo $payments_data->seller_id; ?>"><?php  //echo $payments_data->seller_id; ?></a></td>-->
                  <td><?php  echo $payments_data->order_id; ?></td>
                  <td><?php  echo $payments_data->cih_comission; ?></td>
                   <!-- <td><?php  echo $payments_data->net_profit; ?></td> -->
                   <td><?php  echo $payments_data->order_amount; ?></td>
                    <td><?php if($payments_data->amount_status == 0) {echo "Pending"; } else { echo "Deposited";}?></td>
                    <td><a href="<?php echo site_url(); ?>uploads/invoice/<?php echo $payments_data->invoice;  ?>" download ><?php  echo $payments_data->invoice; ?></a></td>
               <!--  <td><?php  //echo $payments_data->date_time; ?></td>
                   <td><?php  //echo $payments_data->status; ?></td>
                  <td><a href="<?php //echo base_url(); ?>seller/payments/edit/<?php  //echo $payments_data->seller_payment_id; ?>"><i class="fa fa-pencil-square-o" style="font-size:18px"></i></a></td>

                   <td>  <a href="<?php //echo base_url(); ?>seller/payments/seller_delete/<?php  //echo $payments_data->seller_payment_id; ?>" onclick="return checkDelete('<?php  //echo $payments_data->seller_payment_id; ?>')"><i class="fa fa-trash-o" style="font-size:18px"></i></a></td>-->

                
                </tr>
                <?php } ?>

              </tbody>

              <?php else: ?>

              <center>

                <strong>No Records Found</strong>

              </center>

              <?php endif; ?>
                </table>
                <center><?= $this->pagination->create_links(); ?></center>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- page start--> 
      <!-- page end--> 
    </section>
  </section>
  </section>
  </div>
  <!--main content end--> 

<script language="JavaScript" type="text/javascript">

function checkDelete(id)
{
return confirm('Are you sure want to delete "'+id +'" payment?');
}

    $(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 2, "desc" ]]
    } );
} );
  </script> 



     