<?php //echo '<pre>';print_r($orders_lists);exit; ?>
<div class="wrapper"> 
  <!--header part start here -->
  <div class="jain_container mar_res_t150">
				
	
		<div class="container-fluid" style="background:#fff">
		<?php if($this->session->flashdata('successmsg')): ?>
						<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_suc"> <?php echo $this->session->flashdata('successmsg');?>&nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>
			<?php if($this->session->flashdata('permissionerror')): ?>
							<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_war"> <?php echo $this->session->flashdata('permissionerror');?>&nbsp; <i class="fa fa-check  text-warning ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>

			
			
			
			
			<div class="row ">
                          
                           
                            <div class="col-md-12 best-pro">
                                <div class="table-responsive">    
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th colspan="2">Products</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
													<?php foreach ($orders_lists as $orders){  
													//echo '<pre>';print_r($orders);?>

                                            <tr>
                                                <td>
                                                    <?php echo $orders['order_item_id']; ?>
                                                </td>
                                                <td style="width:80px;height:auto;padding-bottom:10px;">
                                                    <a href="<?php echo base_url('category/productview/'.base64_encode($orders['item_id'])); ?>">
                                                        <img width="60px" src="<?php echo base_url('uploads/products/'.$orders['item_image']); ?>" alt="<?php echo $orders['item_image']; ?>">
                                                    </a>
                                                </td>
                                                <td>
                                                    <h6 class="regular"><a href="shop-single-product-v1.html"><?php echo $orders['item_name']; ?></a></h6>
                                                    <p><?php echo $orders['store_name']; ?></p>
                                                </td>
                                                <td>
                                                    <span><?php echo number_format($orders['total_price'], 2 ); ?></span>
                                                </td>
                                                <td>
                                                    <?php echo isset($orders['create_at'])?Date('d-M-Y h:i:s A',strtotime(htmlentities($orders['create_at']))):'';  ?>
                                                </td>
                                                <td>
                                                    <?php if($orders['status_confirmation']==5){  ?>
					
													<span class="label label-danger">cancelled</span>
													 <?php }else{
					
														if($orders['status_confirmation']==1 && $orders['status_packing']==''){  ?>
															<span class="label label-success">Order Confirmed</span>
														 <?php  }else if($orders['status_confirmation']==1 && $orders['status_packing']==2 && $orders['status_road']==''){ ?>
															<span class="label label-warning">Packing Order</span>
														  <?php }else if($orders['status_confirmation']==1 && $orders['status_packing']==2 && $orders['status_road']==3 && $orders['status_deliverd']=='' || $orders['status_deliverd']==0){ ?>
															  <span class="label label-info">Order on Road</span>
														   <?php }else if($orders['status_confirmation']==1 && $orders['status_packing']==2 && $orders['status_road']==3 && $orders['status_deliverd']==4 && $orders['status_refund']==''){ ?>
															    <span class="label label-success">Delivered</span>
														   <?php }else if($orders['status_refund']!=''){?>
															 <span class="label label-primary"><?php echo $orders['status_refund']; ?></span>
														  <?php }
												  
														}
																?>
                                                </td>
												    <td>
                                                    <a href="<?php echo base_url('customer/orederdetails/'.base64_encode($orders['order_item_id'])); ?>"> <span class="btn btn-success btn-xs">View</span></a>
                                                </td>
                                            </tr>
											<?php } ?>
                                            
                                        </tbody>
                                    </table><!-- end table -->
                                </div><!-- end table-responsive -->
                                
                                <hr class="spacer-10 no-border">
                                
                              
                            </div><!-- end col -->
							
							
                        </div>
			
			
			
			<div class="clearfix">&nbsp;</div>
			
		</div>
	</div>
	</div>
	<div class="clearfix"></div>

	

 