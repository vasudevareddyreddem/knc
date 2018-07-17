<style>
.razorpay-payment-button{
	display:none;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 bhoechie-tab-container bhoechie-tab-container mar_res_t150">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-menu sm_hide">
                <div class="list-group">
                    <div href="<?php echo base_url('customer/cart'); ?>" class="list-group-item text-center step_com col-md-3">

                        <h4 class="glyphicon glyphicon-shopping-cart"></h4>
                        <br/>Check Cart
                      </div>
                    <div href="<?php echo base_url('customer/billing'); ?>" class="list-group-item  text-center step_com col-md-3">
                        <h4 class="glyphicon glyphicon-folder-open"></h4>
                        <br/>Billing Address
                    </div>
                     <div href="#" class="list-group-item active  text-center col-md-3">
                        <h4 class="glyphicon glyphicon-credit-card"></h4>
                        <br/>Payment mode
                    </div>
                    <div href="#" class="list-group-item text-center col-md-3">
                        <h4 class="glyphicon glyphicon-ok"></h4>
                        <br/>Thanks for Shopping
                    </div>

                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab">
			
			
			
			
                <!-- train section -->
         <div class="bhoechie-tab-content active">
                
                <center>
                  
                            <!--SHIPPING METHOD-->
                            <div class="">
                                <div >

                                    <div class="text-center">
                                      
										<img style="width:20%" src="<?php echo base_url(); ?>assets/home/images/payment_img.png" />
                                    </div>
									<div id="online_amt_1" style="">
									<form action="<?php echo base_url('customer/orderpaymenttype'); ?>" method="post" onSubmit="return checkvalidation_payment(this.form);">
									<div class="row" style="margin-top:50px;">
									<span id="paymenterrormsg" style="color:red"></span>
									 <div class="radio">
										<label class="col-md-4" style="font-size:18px">
											<input type="radio" id="radio1"  name="payment" onclick="payment_type(this.value);" value="2"><span >Cash On Delivery</span>
										</label>
								
										<label class="col-md-4" style="font-size:18px">
											<input type="radio" id="radio2" name="payment" onclick="payment_type(this.value);"  value="3"><span >Swipe on Delivery</span>
										</label>
										<label class="col-md-4" style="font-size:18px">
											<input type="radio" id="radio3" name="payment" onclick="payment_type(this.value);" value="1"><span>Online Payment</span>
										</label>
									 </div>
									 
										
										  
										</div>
									
                                    <div class="clearfix"></div>
									
											
									
							<div  style="padding:50px 15px;margin-top:25px;border-top:1px solid #ddd;">
							  <a  href="<?php echo base_url('customer/billing'); ?>" class="btn btn-primary pull-left btn-sm"> Back</a>
							<button class="pull-right btn btn-primary  btn-sm" name="submit_form" type="submit">Proceed to Payment</span><span aria-hidden="true">&rarr;</span></button>
							<?php //echo '<pre>';print_r($details);exit; ?>
							</div>
							</form>
							</div>
							<div id="online_amt" style="display:none;">
							<form action="<?php echo base_url('customer/success'); ?>" method="post" onSubmit="return checkvalidation(this.form);">
									<div class="row" style="margin-top:50px;">
									<span id="paymenterrormsg" style="color:red"></span>
									 <div class="radio">
										<label class="col-md-4" style="font-size:18px">
											<input type="radio" id="radio11"  name="payment" onclick="payment_type(this.value);" value="2"><span >Cash On Delivery</span>
										</label>
								
										<label class="col-md-4" style="font-size:18px">
											<input type="radio" id="radio22" name="payment" onclick="payment_type(this.value);"  value="3"><span >Swipe on Delivery</span>
										</label>
										<label class="col-md-4" style="font-size:18px">
											<input type="radio" id="radio33" name="payment" onclick="payment_type(this.value);" value="1"><span>Online Payment</span>
										</label>
									 </div>
									 
										
										  
										</div>
									
                                    <div class="clearfix"></div>
									 
									<script
												src="https://checkout.razorpay.com/v1/checkout.js"
												data-key="<?php echo $details['key']?>"
												data-amount="<?php echo $details['amount']?>"
												data-currency="INR"
												data-name="<?php echo $details['name']?>"
												data-image="<?php echo $details['image']?>"
												data-description="<?php echo $details['description']?>"
												data-prefill.name="<?php echo $details['prefill']['name']?>"
												data-prefill.email="<?php echo $details['prefill']['email']?>"
												data-prefill.contact="<?php echo $details['prefill']['contact']?>"
												data-notes.shopping_order_id="3456"
												data-order_id="<?php echo $details['order_id']?>"
												<?php if ($details['display_currency'] !== 'INR') { ?> data-display_amount="<?php echo $details['amount']?>" <?php } ?>
												<?php if ($details['display_currency'] !== 'INR') { ?> data-display_currency="<?php echo $details['display_currency']?>" <?php } ?>
											  >
											  </script>
											
									
							<div  style="padding:50px 15px;margin-top:25px;border-top:1px solid #ddd;">
							  <a  href="<?php echo base_url('customer/billing'); ?>" class="btn btn-primary pull-left btn-sm"> Back</a>
							<button class="pull-right btn btn-primary  btn-sm" name="submit_form" type="submit">Proceed to Payment</span><span aria-hidden="true">&rarr;</span></button>
							<?php //echo '<pre>';print_r($details);exit; ?>
							</form>
							<?php //echo '<pre>';print_r($details);exit; ?>
						
							
							<div class="clearfix"></div>
							</div>
							
							</div>
							
								
								
								
								
								
								
								
                            </div>
                            <!--SHIPPING METHOD END-->
                    
                    </center>

               
            </div>
			
        </div>
        </div>
		
		<div class="col-md-4 sm_hide pull-right" style=" border:1px solid #ddd; ;background-color:#fff; width:32%">
			<span><img id="imgdisplaying" src="<?php echo base_url(); ?>assets/home/images/track_lig.png" /></span> &nbsp;
			<span style="font-weight:500;font-size:17px" id="oldmsg">	Delivery within <?php echo $this->session->userdata('time');?></span>
			<span style="font-weight:500;font-size:17px" id="deliverymsg" style="display:none;"></span>
			<div class="clearfix">&nbsp;</div>
			<div style="border:1px solid #ddd;padding:10px " >
				Pincode: &nbsp;&nbsp;<input readonly style="border-top:none;border-right:none;border-left:none;border-bottom:1px solid #ddd;font-size:17px;width:65px;" maxlength="6" onkeyup="delveryerrormsg();" id="checkpincode" name="checkpincode" type="text" value=" <?php echo $this->session->userdata('pincode');?>"><span class="pull-right"><a class="site_col"  style="text-decoration:none;">check</a></span>
			</div>
			<div class="clearfix">&nbsp;</div>
			<div>
				<div class="mar_t10">
				<div class="pull-left">
					Subtotal
				</div>
				<div class="pull-right">
					<span>₹</span>
					<span><?php echo number_format($carttotal_amount['pricetotalvalue'], 2); ?></span>
				</div>
				</div>
			</div>
			<div class="clearfix">&nbsp;</div>
			<div>
				<div class="mar_t10">
				<div class="pull-left">
					Delivery Charges
				</div>
				<div class="pull-right">
					<span>₹</span>
					<span><?php echo number_format($carttotal_amount['delivertamount'], 2); ?></span>
				</div>
				</div>
			</div>
			<div class="clearfix">&nbsp;</div>
			
			<div class="mar_t10" style="border-top:1px solid #ddd;border-bottom:1px solid #ddd;padding:8px 0px; " >
				<div class="" >
				<div class="pull-left">
					<b>Order Total</b>
				</div>
				<div class="pull-right">
					<span>₹</span>
						<?php $amt=$carttotal_amount['pricetotalvalue'] + $carttotal_amount['delivertamount'];
					echo number_format($amt, 2);
					?>
					</div>
				</div>
				<div class="clearfix">&nbsp;</div>
			</div>
			
			
			<div class="clearfix">&nbsp;</div>
	
			
			</div>
		
		
		<div class="clearfix"></div><br>
    </div>
</div>
</div>
<div class="clearfix"></div><br>

<script>
function payment_type(ids){
	$('#paymenterrormsg').html('');
	if(ids==1){
		$('#online_amt').show();
		$('#online_amt_1').hide();
		document.getElementById("radio33").checked = true;
	}else{
		$('#online_amt').hide();
		$('#online_amt_1').show();
		if(ids==1){
			document.getElementById("radio1").checked = true;
			document.getElementById("radio3").checked = false;
		}else if(ids==3){
			document.getElementById("radio2").checked = true;
			document.getElementById("radio3").checked = false;
		}else{
			document.getElementById("radio3").checked = false;
		}
		
	}
}
function checkvalidation(form){
	
if ($("#radio1").prop("checked")) {
	$('#paymenterrormsg').html('');
   return true;
}else if ($("#radio2").prop("checked")) {
	$('#paymenterrormsg').html('');
   return true;
}else if ($("#radio3").prop("checked")) {
	$('#paymenterrormsg').html('');
   return true;
}else{
	$('#paymenterrormsg').html('Please select a payment mode method');
	return false;
}
}
function checkvalidation_payment(form){
	
if ($("#radio11").prop("checked")) {
	$('#paymenterrormsg').html('');
   return true;
}else if ($("#radio22").prop("checked")) {
	$('#paymenterrormsg').html('');
   return true;
}else if ($("#radio33").prop("checked")) {
	$('#paymenterrormsg').html('');
   return true;
}else{
	$('#paymenterrormsg').html('Please select a payment mode method');
	return false;
}
}

</script>
