<style>
 .billing_active {
       pointer-events: none;
       cursor: default;
    } 
.mat-label{
		display: block;
    font-size: 16px;
    transform: translateY(25px);
    color: #d32134;
	}
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 bhoechie-tab-container mar_res_t150 ">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu sm_hide">
                <div class="list-group">
                    <div href="#" class="list-group-item text-center step_com " >

                        <h4 class="glyphicon glyphicon-shopping-cart "></h4>
                        <br/>Check Cart
                    </div>
                    <div href="#" class="list-group-item active step_com text-center">
                        <h4 class="glyphicon glyphicon-folder-open"></h4>
                        <br/>Billing Address
                     </div>
                    <div href="#" class="list-group-item text-center">
                        <h4 class="glyphicon glyphicon-credit-card "></h4>
                        <br/>Payment mode
                     </div>
                    <div href="#" class="list-group-item text-center">
                        <h4 class="glyphicon glyphicon-ok "></h4>
                        <br/>Thanks for Shopping
                     </div>

                </div>
            </div>
			
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 bhoechie-tab">
			<div id="sucessmsg" style="display:none;"></div>
			
			
			
                <!-- train section -->
         <div class="bhoechie-tab-content active">
                    <center>
		<div class="col-sm-12 col-xs-12 login-register-form m-b-3 text-left">
		<?php 
		if(count($billingaddresslis)>0){ ?>
		<div class="row">
		 <div class="title"><span>Saved address</span></div>
		 
		 <?php $cnt=1;foreach($billingaddresslis as $addlist) { ?>
		 
		 <?php if($cnt<=4){ ?>
			<div class="col-md-6"  id="hide_add<?php echo $cnt; ?>">
				<div style="background:#fff;border:1px solid #ddd;border-radius:4px;padding:5px 20px;">
				<div style="padding-bottom:10px;">
					<div class="checkbox pull-left">
					  <label>
							<input type="checkbox" name="billingadress" id="billingadress<?php echo $addlist['address_id']; ?>" onclick="getbillingaddress_id(this.value);" value="<?php echo $addlist['address_id']; ?>" >
							<span style="font-weight:500"> &nbsp; <?php if(isset($addlist['title']) && $addlist['title']!=''){ echo $addlist['title']; }else{ echo $addlist['name'];}; ?></span>
					  </label>
					</div>
					<span id="billingadress<?php echo $addlist['address_id']; ?>" class="">			
			
					<div class="pull-right" >
						<a onclick="changebillingaddress('<?php echo $addlist['address_id']; ?>','<?php echo $cnt;?>')" style="cursor:pointer;line-height:35px;font-size:13px;padding-right:15px;"><span class=" site_col"> Change</span></a>
					</div>
					<i id="hide_add_btn<?php echo $cnt; ?>" onclick="removebillingaddress('<?php echo $addlist['address_id']; ?>','<?php echo $cnt;?>');" style="position:absolute;top:5px; right:20px;background:#f5f5f5;border-radius:25px; padding:5px;opacity:0.5;cursor:pointer" class="fa fa-times" aria-hidden="true"></i>
				</span>
				</div>
				<div class="clearfix"> &nbsp;	</div>
				<div class="" style="border-top:1px solid #ddd;"> &nbsp;</div>
					<div><b><?php echo $addlist['name']; ?></b></div>	
					<div><?php echo $addlist['address1']; ?></div>	
					<div><?php echo $addlist['address2']; ?>,</div>	
					<div><?php echo $addlist['landmark']; ?>,</div>	
					<div><?php echo $addlist['city']; ?>-<?php echo $addlist['pincode']; ?></div>	
					<div><?php echo $addlist['state']; ?></div>
					<br>					
					<div><?php echo $addlist['mobile']; ?></div>	
				</div>
			</div>
			
		 <?php } ?>
		
			<div class="col-md-6 moreadd"  id="hide_add<?php echo $cnt; ?>" style="display:none;">
				<div style="background:#fff;border:1px solid #ddd;border-radius:4px;padding:5px 20px;">
				<div style="padding-bottom:10px;">
					<div class="checkbox pull-left">
					  <label>
							<input type="checkbox" name="billingadress" id="billingadress<?php echo $addlist['address_id']; ?>" onclick="getbillingaddress_id(this.value);" value="<?php echo $addlist['address_id']; ?>" >
							<span style="font-weight:500"> &nbsp; <?php if(isset($addlist['title']) && $addlist['title']!=''){ echo $addlist['title']; }else{ echo $addlist['name'];}; ?></span>
					  </label>
					</div>
					<div class="pull-right" >
						<a onclick="changebillingaddress('<?php echo $addlist['address_id']; ?>','<?php echo $cnt;?>')" style="cursor:pointer;line-height:35px;font-size:13px;padding-right:15px;"><span class=" site_col"> Change</span></a>
					</div>
					<i id="hide_add_btn<?php echo $cnt; ?>" onclick="removebillingaddress('<?php echo $addlist['address_id']; ?>','<?php echo $cnt;?>');" style="position:absolute;top:5px; right:20px;background:#f5f5f5;border-radius:25px; padding:5px;opacity:0.5;cursor:pointer" class="fa fa-times" aria-hidden="true"></i>
				</div>
				<div class="clearfix"> &nbsp;	</div>
				<div class="" style="border-top:1px solid #ddd;"> &nbsp;</div>
					<div><b><?php echo $addlist['name']; ?></b></div>	
					<div><?php echo $addlist['address1']; ?></div>	
					<div><?php echo $addlist['address2']; ?>,</div>	
					<div><?php echo $addlist['city']; ?>-<?php echo $addlist['pincode']; ?></div>	
					<div><?php echo $addlist['state']; ?></div>
					<br>					
					<div><?php echo $addlist['mobile']; ?></div>	
				</div>
			</div>
		
		 <?php $cnt++;} ?>
		 <?php 
		if(count($billingaddresslis)>4){ ?>
		<div class="clearfix"></div>
		<br>
		<span class="btn btn-primary btn-sm pull-right" id="changeslable" onclick="showmoreaddress(); ">See more</span>
		<span class="btn btn-primary btn-sm pull-right" id="changeslableless" style="display:none;" onclick="showmoreaddress1(); ">See Less</span>
		<?php } ?>
		</div>
		
		<?php } ?>
		<div class="clearfix"> &nbsp;</div>
		<div id="newbillingaddress" >
         <div class="title"><span>Add New Address</span></div>
		<form  onsubmit="return Formvalidations()"  action="<?php echo base_url('customer/billingaddresspost'); ?>" method="post" name="billingaddress" id="billingaddress">
			<input type="hidden" id="addressid" name="addressid" value="0">
			<div class="mat-div form-group">
				 <label for="first-name" class="mat-label">Address Title</label>
					 <input type="text" id="title" name="title" class="mat-input" value="">
		    </div>
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="mat-div form-group">
						 <label for="first-name" class="mat-label">Name</label>
							 <input type="text" id="name" name="name" class="mat-input" value="<?php echo isset($customerdetail['cust_firstname'])?$customerdetail['cust_firstname']:'';?>">
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="mat-div form-group">
						 <label for="first-name" class="mat-label">Mobile</label>
						 <input type="text" id="mobile" name="mobile" class="mat-input" value="<?php echo isset($customerdetail['cust_mobile'])?$customerdetail['cust_mobile']:'';?>" >
					</div>
				</div>
		    </div>
			<div class="mat-div form-group">
				 <label for="first-name" class="mat-label">Address1</label>
				<input type="text" id="address1" name="address1" class="mat-input" value="<?php echo isset($customerdetail['address1'])?$customerdetail['address1']:'';?>"  >
		    </div>
			<div class="mat-div form-group ">
				 <label for="first-name" class="mat-label">Address2</label>
				<input type="text" class="mat-input" id="address2" name="address2" value="<?php echo isset($customerdetail['address2'])?$customerdetail['address2']:'';?>" >
		    </div>
			<div class="row">
				<div class="col-md-6 col-xs-12">
				<div class="mat-div form-group ">
					 <label for="first-name" class="mat-label">Land Mark</label>
					<input type="text" class="mat-input" id="landmark" name="landmark" value="<?php echo isset($customerdetail['landmark'])?$customerdetail['landmark']:'';?>" >
				</div>
				</div>
				<div class="col-md-6 col-xs-12">
				<div class="mat-div form-group ">
					 <label for="first-name" class="mat-label">Pincode</label>
					<input type="text" class="mat-input" onkeyup="getpinvalidation(this.value)" id="pincode" name="pincode" value="" autocomplete="off" >
					<input type="hidden" class="mat-input" id="pinvalu" name="pinvalu" value="" >
				</div>
				</div>
		    </div>
		<div class="row">
			<div class="col-md-6 col-xs-12">
			<div class="mat-div form-group ">
				 <label for="first-name" class="mat-label">City</label>
				<input type="text" class="mat-input" id="city" name="city" value="" >
		    </div>
		    </div>
			<div class="col-md-6 col-xs-12">
			<div class="mat-div form-group ">
				 <label for="first-name" class="mat-label">State</label>
				<input type="text" class="mat-input" id="state" name="state" value="" >
		    </div>
		    </div>
		    </div>
			
			<div class="">
			<label>
				<input type="radio" name="featurepurpose" id="featurepurpose">
				<span style="font-weight:500"> &nbsp; Save this Address</span>
			</label>
			</div>
			
			
             <a href="<?php echo base_url('customer/cart'); ?>" class="btn btn-primary btn-sm sm_hide"> Back</a>
          <button  class="pull-right btn btn-primary btn-sm sm_hide"  id="addbillingadd" type="submit">Proceed to Checkout</span><span aria-hidden="true">&rarr;</span></button>
         
          

			<!--mobile responsive-->
			<div  class="md_hide proeed_chec_btn" style="">
				 
				<button type="submit" class="btn btn-lg btn-primary btn-block col-xs-12  " ><i class="fa fa-bolt" aria-hidden="true"></i>  Proceed to Checkout</button>
			</div>
		<!--mobile responsive-->
		</form>
        </div>
      
           </center>
		   
      </div>
	  
               

               
            </div>
			
        </div>
		
		<div class="col-md-4 sm_hide pull-right" style=" border:1px solid #ddd; ;background-color:#fff;padding:5px; width:32%" >
				<span><img id="" src="<?php echo base_url(); ?>assets/home/images/track_lig.png" /></span> &nbsp;
			<span style="font-weight:500;font-size:17px" id="">	Check your delivery Status</span><br>
			<div class="text-center">
			<span style="font-weight:500;font-size:17px" id="deliverymsg" style="display:none;"></span>
			<span id="deliverymsg" style="hight:50px;">&nbsp;</span>
			<span id="sesssionmsg"><?php if($this->session->userdata('time')!==''){ ?>
			<?php echo $this->session->userdata('time');?>
			
			<?php } ?>
			</span>
			</div>
			<div class="clearfix">&nbsp;</div>
			<div style="border:1px solid #ddd;padding:10px">
				Pincode: &nbsp;&nbsp;<input style="border-top:none;border-right:none;border-left:none;border-bottom:1px solid #ddd;font-size:17px;width:65px;" maxlength="6" onkeyup="delveryerrormsg();" id="checkpincode" name="checkpincode" type="text" value="<?php echo $this->session->userdata('pincode');?>"><span class="pull-right"><a class="site_col" onclick="getareapincode();" style="cursor:pointer">check</a></span>
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
			
			<div class="mar_t10" style="border-top:1px solid #ddd;padding:8px 0px; " >
				<div class="" >
				<div class="pull-left">
					<b>Order Total</b>
				</div>
				<div class="pull-right">
					<span>₹</span>
						<?php $amt=$carttotal_amount['pricetotalvalue'] + $carttotal_amount['delivertamount'];
					echo number_format($amt, 2);
					?>				</div>
				</div>
				<div class="clearfix">&nbsp;</div>
				<div id="skipdeliveraddress" style="display:none;padding:20px 0px;">
				<form action="<?php echo base_url('customer/billingaddresspost/'); ?>" method="post">
				<input type="hidden" name="billingaddressid" id="billingaddressid" value="">
					<a href="<?php echo base_url('customer/cart'); ?>" class="btn btn-warning col-md-6 btn-sm " style="width:48%;" >Back</a> 
					<button  type="submit"  class="btn btn-sm btn-primary col-md-6 pull-right"  style="width: 48%;" ><i class="fa fa-bolt" aria-hidden="true"></i>  Proceed to Payment</button>
				</form>
				</div>
			</div>
			
			
			<div class="clearfix">&nbsp;</div>
			
			<div class="clearfix">&nbsp;</div>
	
			
			</div>
		
		
		
    </div>
	<div  class="md_hide ">
	<div  class=" proeed_chec_btn" id="skipdeliveraddress1" style="display:none">
		<form action="<?php echo base_url('customer/billingaddresspost/'); ?>" method="post">
		<input type="hidden" name="billingaddressid" id="billingaddressid1" value="">
			 
			<button  type="submit"  class="btn btn-lg btn-primary btn-block col-xs-12 "   ><i class="fa fa-bolt" aria-hidden="true"></i>  Proceed to Payment</button>
		</form>
	</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>

<script>
function Formvalidations(){
	var pincode=$('#pinvalu').val();
	var pin=$('#pincode').val();
	if(pincode==0 && pin!=''){
		$('#sucessmsg').show();
		$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1  btn_war"> We do not have service in your pincode <i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
		return false;
		 document.getElementById('addbillingadd').disabled = false;
	}else{
		return true;
	}
	
	  
	 
	
}

function getpinvalidation(id){
	if(id.length>5){
	jQuery.ajax({
        url: "<?php echo site_url('category/billingcheckpincodes');?>",
        type: 'post',
          data: {
          form_key : window.FORM_KEY,
          pincode: id,
          },
        dataType: 'json',
        success: function (data) {
			if(data.msg==0){
				$('#pinvalu').val(0);
			}else{
				$('#pinvalu').val(1);
			}
			 
		}
      });
	}
	
}
function showmoreaddress(){
	$('.moreadd').toggle();
	$('#changeslableless').show();
	$('#changeslable').hide();
}
function showmoreaddress1(){
	$('.moreadd').toggle();
	$('#changeslableless').hide();
	$('#changeslable').show();
}
$("input:checkbox").on('click', function() {
	
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    var group1 = $box.attr("id");
    $(group).prop("checked", false);
    $box.prop("checked", true);
	$('#newbillingaddress').hide();
	$('#skipdeliveraddress').show();
	$('#skipdeliveraddress1').show();
  } else {
	 $('#newbillingaddress').show();
	 $('#skipdeliveraddress').hide();
	 $('#skipdeliveraddress1').hide();
    $box.prop("checked", false);
  }
});
var pincodeformat =/^[0-9]+$/;
function delveryerrormsg(){
$('#imgdisplaying').show();
$('#oldmsg').hide();
}
function getareapincode(val){
	$('#sesssionmsg').hide();
	$('#oldmsg').hide();
	var pin=$('#checkpincode').val();
	$('#imgdisplaying').hide();
	$('#deliverymsg').html('');
	
	if(pin==''){
		$('#deliverymsg').html('Pincode is required.').css("color", "red");
		return false;
	}
	
	if(pin.length ==6){
		if(!pin.match(pincodeformat)) 
			{
			$('#deliverymsg').html('Please enter correct pincode.').css("color", "red");
			return false;
			}

		jQuery.ajax({
        url: "<?php echo site_url('category/checkpincodes');?>",
        type: 'post',
          data: {
          form_key : window.FORM_KEY,
          pincode: pin,
          },
        dataType: 'json',
        success: function (data) {
			$('#imgdisplaying').show();
			if(data.msg==1){
				
				$('#deliverymsg').html('Delivery within ' +data.time).css("color", "green");
				
			}else{
				$('#deliverymsg').html("We don't have service in your pincode").css("color", "red");
			}
         

        }
      });
	}else{
		$('#deliverymsg').html('Pincode length must be 6 digits only.').css("color", "red");
		
	}
}

function getbillingaddress_id(id){
	$('#billingaddressid').val(id);
	$('#billingaddressid1').val(id);
	
}
function removebillingaddress(aid,cnt){
	 $('#newbillingaddress').show();
	 $('#skipdeliveraddress').hide();
	 $('#skipdeliveraddress1').hide();
	jQuery.ajax({
        url: "<?php echo site_url('customer/removebillingaddress');?>",
        type: 'post',
          data: {
          form_key : window.FORM_KEY,
          addid: aid,
          },
        dataType: 'json',
        success: function (data) {
			if(data.msg==1){
			$('#sucessmsg').show();
			$('#hide_add'+cnt).hide();
			$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_suc"> Saved  Address successfully deleted. <i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
			}else if(data.msg==0){
			$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_suc"> Please try again after some time. <i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  

			}
		}
      });
	
}
function changebillingaddress(aid,cnt){
	jQuery.ajax({
        url: "<?php echo site_url('customer/getbillingaddress');?>",
        type: 'post',
          data: {
          form_key : window.FORM_KEY,
          addid: aid,
          },
        dataType: 'json',
        success: function (data) {
			if(data.msg=1){
				$('#addressid').val(data.address_id);
				$('#title').val(data.title);
				$('#title').focus();
				$('#name').val(data.name);
				$('#mobile').val(data.mobile);
				$('#address1').val(data.address1);
				$('#address2').val(data.address2);
				$('#pincode').val(data.pincode);
				$('#city').val(data.city);
				$('#state').val(data.state);
				$('#landmark').val(data.landmark);
				$('#pinvalu').val(1);
				
			}else{
				
			}
           

        }
      });
	
}


	$(document).ready(function() {
    $('#billingaddress').bootstrapValidator({
       
        fields: {
            
             title: {
              validators: {
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Title can only consist of alphanumaric, space and dot'
					}
                }
            },
			name: {
              validators: {
					notEmpty: {
						message: 'Name is required'
					},
                   regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumaric, space and dot'
					}
                }
            },
			mobile: {
              validators: {
					 notEmpty: {
						message: 'Mobile Number is required'
					},
                    regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Mobile Number must be 10 digits'
					}
                }
            },
			
			address1: {
				validators: {
					notEmpty: {
						message: 'Address1 is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'Address1 wont allow <> [] = % '
					}
				
				}
			},
			address2: {
				validators: {
					notEmpty: {
						message: 'Address2 is required'
					},
					
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'Address2 wont allow <> [] = % '
					}
				
				}
			},
			landmark: {
				validators: {
					notEmpty: {
						message: 'Land Mark is required'
					},
					
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'Land Mark wont allow <> [] = % '
					}
				
				}
			},
			
			pincode: {
               validators: {
				notEmpty: {
						message: 'Pincode is required'
					},
					regexp: {
					regexp:  /^[0-9]{6}$/,
					message:'Pincode must be 6 digits'
					}
            
				}
            },
			city: {
				validators: {
					notEmpty: {
						message: 'city is required'
					},
					
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'city wont allow <> [] = % '
					}
				
				}
			},
			state: {
				validators: {
					notEmpty: {
						message: 'State is required'
					},
					
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message: 'State wont allow <> [] = % '
					}
				
				}
			}
			
			
        }
    });
});


    $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });
</script>
<script>
    //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function(e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function() {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function(e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
<script>
    function pincodechange(val) {
        $("#hide_loc").hide();
        $("#show_loc").show();
    }
</script>
<script>

function checkOffset() {
  var a=$(document).scrollTop()+window.innerHeight;
  var b=$('#footer-start').offset().top;
  if (a<b) {
    $('#social-float').css('bottom', '150px');
  } else {
    $('#social-float').css('bottom', (10+'px');
  }
}
$(document).ready(checkOffset);
$(document).scroll(checkOffset);

</script>
<script>
$(document).ready(function(){
    $("#hide_add_btn").click(function(){
        $("#hide_add").hide();
    });
});
</script>
<script>
$(".mat-input").focus(function(){
  $(this).parent().addClass("is-active is-completed");
});

$(".mat-input").focusout(function(){
  if($(this).val() === "")
    $(this).parent().removeClass("is-completed");
  $(this).parent().removeClass("is-active");
})
</script>
<script>

function checkOffset() {
  var a=$(document).scrollTop()+window.innerHeight;
  var b=$('#footer-start').offset().top;
  if (a<b) {
    $('#social-float').css('bottom', '160px');
  } else {
    $('#social-float').css('bottom', (160+(a-b))+'px');
  }
}
$(document).ready(checkOffset);
$(document).scroll(checkOffset);

</script>