<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/jquery-ui.css">
<script src="<?php echo base_url(); ?>assets/home/js/jquery-auto.js"></script>

 <div class="topBar inverse">
            <div class="container">
                <ul class="list-inline pull-left hidden-sm hidden-xs">
                  <li><a href="https://www.facebook.com/Order-Organic-1711447655640783/" target="_blank" class=""><span class=""><i class="" aria-hidden="true"><img alt="fb" src="<?php echo base_url(); ?>assets/home/images/fb.png" /></i></span></a></li>
                  &nbsp;
                  <li><a href="https://twitter.com/Orderorganicon" target="_blank" class=""><span class=""><i class="" aria-hidden="true"><img src="<?php echo base_url(); ?>assets/home/images/tiw.png" /></i></span></a></li>
                  &nbsp;
                  <li><a href="https://plus.google.com/115472759965484848637"  target="_blank" class=""><span class=""><i class="" aria-hidden="true"><img src="<?php echo base_url(); ?>assets/home/images/gmai.png" /></i></span></a></li>
                </ul>
                
                <ul class="topBarNav pull-right">
                    <li class="linkdown">
                  
                     <a style="color:#fff" class="tel " target="_blank" href="<?php echo base_url('seller/login'); ?>"><span class=""></span> &nbsp; Sell on Order Organic </a>
                  </li>
                 <!-- &nbsp;
                  <li>
                     <a style="color:#fff" class="tel" href="<?php echo base_url('customer/trackorders');?>"><span class=""><img src="<?php echo base_url(); ?>assets/home/images/track.png" /></span> &nbsp; Track your order </a>
                  </li>-->
                 
                   
                    <li class="linkdown">
					<?php if($this->session->userdata('userdetails')){ ?>
                        <a href="<?php echo base_url('customer/account');?>">
                            <i class="fa fa-user mr-5"></i>
                            <span class="hidden-xs text-white" >
								<?php echo 'welcome '.$details['cust_firstname'].' '.$details['cust_lastname']; ?>
								<i class="fa fa-angle-down ml-5"></i>
                            </span>
                        </a>
						<?php }else{ ?>
						<a href="javascript:void(0);">
                            <i class="fa fa-user mr-5"></i>
                            <span class="hidden-xs text-white" >
							My Account
                             <i class="fa fa-angle-down ml-5"></i>
                            </span>
                        </a>
						<?php } ?>
                        <ul class="w-150">
						 <?php if(!$this->session->userdata('userdetails')){ ?>
                            <li><a data-toggle="modal" data-target="#loginmodal">Login</a></li>
                            <li><a href="<?php echo base_url('customer'); ?>">Create Account</a></li>
						 <?php } ?>
							<li class="divider"></li>
                            <li><a href="<?php echo base_url('customer/wishlist'); ?>">Wishlist <?php if(isset($whishlist) && count($whishlist)>0){ ?>( <?php echo count($whishlist);  ?>) <?php } ?></a></li>
                            <li><a href="<?php echo base_url('customer/cart');?>">My Cart <?php if(isset($cartitemcount) && count($cartitemcount)>0){ ?>( <?php echo count($cartitemcount);  ?>) <?php } ?></a></li>
                            <li><a href="<?php echo base_url('customer/billing');?>">Checkout</a></li>
							<?php if($this->session->userdata('userdetails')){ ?>
                           <li><a href="<?php echo base_url('customer/logout'); ?>">Logout</a></li>
							<?php } ?>
                        </ul>
                    </li>
                    <li class="linkdown">
                        <a href="javascript:void(0);">
                            <i class="fa fa-shopping-basket mr-5"></i>
                            <span class="hidden-xs text-white" >
                                Cart<sup class="text-white"><span id="supcount"> <?php if(isset($cartitemcount) && count($cartitemcount)>0){ ?>( <?php echo count($cartitemcount);  ?>) <?php } ?> </span></sup>
                                <i class="fa fa-angle-down ml-5"></i>
                            </span>    
                        </a>
							<?php if(isset($cartitemcount) && count($cartitemcount)>0){ ?>
                        <ul class="cart w-250">
                            <li>
                                <div class="cart-items">
                                    <ol class="items">
								
										<?php foreach($cartitemcount as $lis){ ?>
											<li> 
												<a href="<?php echo base_url('category/productview/'.base64_encode($lis['item_id'])); ?>" class="product-image">
													<img src="<?php echo base_url('uploads/products/'.$lis['item_image']); ?>" alt="<?php echo htmlentities($lis['item_name']); ?>">
												</a>
												<div class="product-details">
													<div class="close-icon"> 
														<a href="javascript:void(0);"><i class="fa fa-close"></i></a>
													</div>
													<p class="product-name"> 
														<a href="<?php echo base_url('category/productview/'.base64_encode($lis['item_id'])); ?>"><?php echo htmlentities($lis['item_name']); ?></a> 
													</p>
													<strong><?php echo htmlentities($lis['qty']); ?></strong> x <span class="price text-primary">$ <?php echo htmlentities($lis['item_price']); ?></span>
												</div><!-- end product-details -->
											</li><!-- end item -->
										<?php } ?>
									
                                     </ol>
                                </div>
                            </li>
                            <li>
                                <div class="cart-footer">
                                    <a href="<?php echo base_url('customer/cart');?>" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View Cart</a>
                                    <a href="<?php echo base_url('customer/billing');?>" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a>
                                </div>
                            </li>
                        </ul>
						<?php } ?>
                    </li>
                </ul>
            </div><!-- end container -->
        </div>
        <!-- end topBar -->
        
        <div class="middleBar hm_nav affix_sm ">
            <div class="container">
                <div class="row display-table">
                    <div class="col-sm-3 vertical-align text-left hidden-xs">
                        <a href="<?php echo base_url(); ?>">
                            <img width="160" src="<?php echo base_url(); ?>assets/home/images/logo.png"/>
                        </a>
                    </div><!-- end col -->
                    <div class="col-sm-7 vertical-align text-center">
                        <form>
                            <div class="row grid-space-1">
                                <div class="col-sm-8">
                                     <div class="form-horizontal ">
										<div class=" smallsearch">
										   <div class="cart_search">
											  <form id="searchform" action="<?php echo base_url('home/seraching'); ?>" method="post">
												 <input type="text" name="serachvalues" id="tags"  onfocus="searchfunction(this.value);" onkeyup="searchfunction(this.value);" class="flipkart-navbar-input form-control input-lg"  placeholder="Search for Products, Brands and More" autocomplete="off" spellcheck="false">
												
											  </form>
										   </div>
										</div>
								</div>
                                </div><!-- end col -->
								<form action="<?php echo base_url('category/subcategory_search/'); ?>" method="post" id="sub_category_search_action">
                                <div class="col-sm-4">
                                    <select onchange="submit_sub_cate(this.value);" class="form-control input-lg" name="category_name_list">
                                        <option value="all">All Categories</option>
											<?php foreach($cat_list as $lists){ ?>
												<optgroup label="<?php echo $lists['category_name']; ?>">
													<?php foreach($lists['subcat'] as $li){ ?>
														<option value="<?php echo 'category/subcategory/'.base64_encode($lists['category_id']).'/'.base64_encode($li['subcategory_id']); ?>"><?php echo $li['subcategory_name']; ?></option>
													<?php } ?>
												</optgroup>
											<?php } ?>
                                       
                                    </select>
									
                                </div><!-- end col -->
								</form>
                            </div><!-- end row -->
                        </form>
                    </div><!-- end col -->
                    <div class="col-sm-2 vertical-align header-items hidden-xs">
                        <div class="header-item mr-5">
                            <a href="<?php echo base_url('customer/wishlist'); ?>" data-toggle="tooltip" title="Wishlist">
                                <i class="fa fa-heart-o"></i>
                               <?php if(isset($whishlist) && count($whishlist)>0){ ?> <sub> <span id="wish_supcount">  <?php echo count($whishlist); ?></span></sub><?php  }else { ?> <sub> <span id="wish_supcount">  </span></sub> <?php } ?>
                            </a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end  row -->
            </div><!-- end container -->
        </div><!-- end middleBar -->
        
        <!-- start navbar -->
        <div class="navbar yamm navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="javascript:void(0);" class="navbar-brand visible-xs">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="navbar-collapse-3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        <!-- Pages -->
						<?php if(isset($cat_list) && count($cat_list)>0){ ?>
						<?php $cnt=1;foreach($cat_list as $lists){ ?>
						 <?php if($cnt<=5){ ?>
                        <li class="dropdown yamm-fw"><a href="<?php echo base_url('category/subcategorys/'.base64_encode($lists['category_id'])); ?>"  class="dropdown-toggle"><?php echo $lists['category_name']; ?><i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu" >
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content" style="z-index:2000">
                                        <div class="row">
										<?php foreach($lists['subcat'] as $li){ ?>
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <a href="<?php echo base_url('category/subcategory/'.base64_encode($lists['category_id']).'/'.base64_encode($li['subcategory_id'])); ?>"><h6><?php echo $li['subcategory_name']; ?></h6></a>
                                                </li>
													<?php foreach($li['subitem_list'] as $l){ ?>
														<li style="padding-left:15px;"> <a href="<?php echo base_url('category/subitemwise/'.base64_encode($l['subitem_id']).'/'.base64_encode($li['subcategory_id']).'/'.base64_encode($lists['category_id'])); ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> &nbsp; <?php echo $l['subitem_name']; ?></a></li>
													<?php } ?>
                                            </ul><!-- end ul col -->
										<?php } ?>
                                        
                                        </div><!-- end row -->
                                    </div><!-- end yamn-content -->
                                </li><!-- end li -->
                           </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
						 <?php } ?>
					
                        <?php $cnt++;} ?> 
						<?php } ?>
						<?php if(isset($cat_list) && count($cat_list)>5){ ?>
						<li class="dropdown left"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                              <?php $cnt=1;foreach($cat_list as $lists){ ?>
								 <?php if($cnt >5){ ?>
								<li><a href="<?php echo base_url('category/subcategorys/'.base64_encode($lists['category_id'])); ?>"><?php echo $lists['category_name']; ?></a></li>
								 <?php } ?>
							  <?php $cnt++;} ?>
                                
                           
                            </ul><!-- end ul dropdown-menu -->
                        </li>
						<?php } ?>
                            </ul><!-- end dropdown-menu -->
                       
					</div>
					</div>
					</div>
					
	  <div class="modal animated zoomIn" id="loginmodal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <a class="text-center"   href="<?php echo base_url(); ?>" >
			<img style="width:300px; height:auto; margin: 0 auto;" class="img-responsive" src="<?php echo base_url(); ?>assets/home/images/logo.png" />
		</a>
          
        </div>
        <div class="modal-body">
           <div class="row res_log" >
		<div class="col-md-10 col-md-offset-1 log_bac_col">
            <div class="col-md-6 bor_ri1" >
			<div class="" style="padding:0px 15px;">
			<h3 class="text-center">Sign in</h3>
			<hr>
			
			<?php if(isset($_GET['social']) && $_GET['social']='error'){ ?>
					<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_war"> You cancelled social login. please try again&nbsp; <i class="fa fa-check  text-warning ico_bac" aria-hidden="true"></i></div></div>

			<?php } ?>
                <div id="loginbox" class="mainbox ">
					<?php if($this->session->flashdata('loginerror')): ?>	
				<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_war"> <?php echo $this->session->flashdata('loginerror');?>&nbsp; <i class="fa fa-check  text-warning ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>	
			<?php if($this->session->flashdata('forsuccess')): ?>
							<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_war"> <?php echo $this->session->flashdata('forsuccess');?>&nbsp; <i class="fa fa-check  text-warning ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>
                    <form id="loginform" name="loginform" method="post" action="<?php echo base_url('customer/loginpost');?>" class="form-horizontal" role="form">
                        <div class=" mat-div form-group">
                            <label class="mat-label">Email id / Mobile Number</label>
                            <input type="text" class="mat-input  mat-input1" id="email" name="email"   value="<?php echo isset($username)?$username:''; ?>">
                        </div>

                        <div  class="mat-div form-group">
                           <label class="mat-label">Password</label>
                            <input id="password" type="password" class=" mat-input  mat-input1" name="password" value="<?php echo isset($password)?$password:''; ?>">
                        </div>

                        <div class="">
                            <div class="checkbox pull-left">
                                <label>
								<?php if(isset($remember) && $remember!=''){ ?>
                                    <input  id="login-remember" type="checkbox" checked="checked" name="remember" value="1"><span class="fo_forg"> Remember me</span>
								<?php } else{ ?>
								          <input  id="login-remember" type="checkbox" name="remember" value="1"> <span class="fo_forg">Remember me</span>

								<?php } ?>
                                </label>
                            </div>
							<div class="pull-right">
                                <p class="mar_t8">
                                    <a class="forg_pas fo_forg" href="<?php echo base_url('customer/forgotpassword');?>" >Forgot Password?</a>
                                </p>
                            </div>
                        </div>


                        <div class="log_mar_t10"  class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12  "> &nbsp; </div>
                                <button class="btn  btn-primary btn-block signup-btn semi-circle " type="submit">
                                    Login</button>

                          
                        </div>
										  
				<!--<div class="or-text">
					<div class="or-text-row">
						<div class="or-text-line">
							<button type="button" class="btn btn-default btn-circle" disabled="disabled">or</button>
						</div>
					</div>
				</div>
				<div class="row">	
					<div class="col-sm-5">
						<div class="btn-group">
							<a href="<?php echo base_url('hauth/login/Facebook'); ?>" type="button" class="btn btn-primary_org"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
						</div>
					</div>
					<div class="col-sm-1">&nbsp;</div>
					<div class="col-sm-5">
						<div class="btn-group">
							<a  href="<?php echo base_url('hauth/login/LinkedIn'); ?>" type="button" class="btn btn-danger"><i class="fa fa-linkedin" aria-hidden="true"></i></i>Sign in with linkedin</a>
						</div>
					</div>
					
					
				</div>_-->
				</form>
  


                </div>

            </div>
            </div>



            <div class="col-md-6 ">
			<h3 class="text-center">Sign up</h3>
			<hr>
			<?php if($this->session->flashdata('addcus')): ?>
						<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_suc"> <?php echo $this->session->flashdata('addcus');?>&nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>	
							<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_war"> <?php echo $this->session->flashdata('error');?>&nbsp; <i class="fa fa-check  text-warning ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>
			
			<?php 
			$registervalues=$this->session->userdata('registervalues');
			//echo '<pre>';print_r($registervalues);exit; ?>
				<form id="customerregister" name="customerregister" action="<?php echo base_url('customer/registerpost');?>" method="post" accept-charset="utf-8" class="form" role="form" style="padding:0px 15px;">

                    <div class="row">
                        <div class="col-xs-6 col-md-6">
						<div class="mat-div form-group">
							<label class="mat-label">First Name</label>
                            <input type="text" id="firstname" name="firstname" value="<?php echo isset($registervalues['firstname'])?$registervalues['firstname']:'' ; ?>" class="mat-input  mat-input1" />
							</div>
							</div>
                        <div class="col-xs-6 col-md-6">
							<div class="mat-div form-group">
							<label class="mat-label">Last Name</label>
							<input type="text" id="lastname" name="lastname" value="<?php echo isset($registervalues['lastname'])?$registervalues['lastname']:'' ; ?>" class="mat-input  mat-input1"  />
							</div> 
							</div>
							
                    </div>
					<div class=" mat-div form-group">
					<label class="mat-label">Email Address</label>
					<input type="text" id="email" name="email" value="<?php echo isset($registervalues['email'])?$registervalues['email']:'' ; ?>" class="mat-input  mat-input1"  />
					</div>
					<div class=" mat-div form-group">
					<label class="mat-label">Mobile Number</label>
					<input type="text" id="mobile" name="mobile" value="<?php echo isset($registervalues['mobile'])?$registervalues['mobile']:'' ; ?>" class="mat-input  mat-input1" />
					</div>         
					<div class="mat-div form-group">
					<label class="mat-label">Password</label>
                    <input type="password" id="password" name="password" value="" class="mat-input  mat-input1"  />
					</div>
					<div class="mat-div form-group">
					<label class="mat-label">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" value="" class="mat-input  mat-input1"  />
					</div>
					<div class="row">
					<div>

                    <button class="btn  btn-primary btn-block signup-btn semi-circle" type="submit">
                        Create my account</button>
                </form>

            </div>
            </div>
        </div>
	
    </div>
    </div>
        </div>
      
      </div>
    </div>
  </div>			


 <!-- side top scroll-->
	<span class="scrolltotop"><i class="fa fa-arrow-up"></i></span>

<!-- the overlay element --> 
<script src="<?php echo base_url(); ?>assets/customer/js/select.js"></script>
<script>
   $(function() {
     $('.chosen-select').chosen();
     $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
   });
   $('#category_name_list').on('change', function(){
   window.location = $(this).val();
});
</script>
<script src="<?php echo base_url(); ?>assets/home/js/classie.js"></script> 
<script src="<?php echo base_url(); ?>assets/home/js/modalEffects.js"></script> 
<script src="<?php echo base_url(); ?>assets/home/js/chosen.js"></script> 
<script>
function submit_sub_cate(){
	 $("#sub_category_search_action").submit();
}
$('.scrolltotop').on('click', function() {
          $('html, body').animate({ scrollTop: 0 }, 800);
          return false;
      });

      $(document).scroll(function() {
          var y = $(this).scrollTop();
          if (y > 300) {
              $('.scrolltotop').fadeIn();
          } else {
              $('.scrolltotop').fadeOut();
          }
      });

$("#supcounts").hide();
   $("#fademaskpurpose").addClass("mask_hide");
   function locationopenpopup (){
   $('#removepopuplocation').show();
   $("#fademaskpurpose").removeClass("mask_hide");
   }
    $(document).ready(function(){
   	closepopup (); 
    });
   function closepopup (){
   	$('#location_seacrh').hide();
   }
   function validations(){
   	var areaids=document.getElementById('locationarea').value;
   	if(areaids==''){
   		$("#locationmsg").html("Please select a Shop location").css("color", "red");
   		return false;
   	}else{
   		$("#locationmsg").html("");
   		return true;
   	}
   
   }
   
   //searchfunction('v');
   function searchfunction(val){
   	jQuery.ajax({
   			url: "<?php echo site_url('home/search_functionality');?>",
   			type: 'post',
   			data: {
   				form_key : window.FORM_KEY,
   				searchvalue: val,
   				},
   			dataType: 'json',
   			success: function (data) {
   					 var availableTags = data;
   					 $( "#tags" ).autocomplete({
   						source: availableTags,
   						select: function(event, ui) { 
   						$("input#tags").val(ui.item.value);
   						$("#searchform").submit();
   						}
   					});
   					
   			}
   		});
   	}
   function searchfunctionss(val){
   	
   	$('#addingdropdown').hide();
   	$('#addingdropdown').empty();
   	var length=val.length;
   	if(length >=1){
   	
   		jQuery.ajax({
   			url: "<?php echo site_url('home/search_functionality');?>",
   			type: 'post',
   			data: {
   				form_key : window.FORM_KEY,
   				searchvalue: val,
   				},
   			dataType: 'json',
   			success: function (data) {
   				
   					 var availableTags = data;
   					 $( "#tags1" ).autocomplete({
   						 
   					   source: availableTags,
   						select: function(event, ui) { 
   						$("input#tags1").val(ui.item.value);
   						$("#searchform1").submit();
   						}
   					});
   					
   			}
   		});
   		
   	}
   	
   }
    $(document).ready(function(){
         $('#frgt_pass').click(function(){
             $('#log_sign').hide();
             $('#show_pass').show();
   
         });
          $('.md-close').click(function(){
               $('#modal-8').hide();
               $('.md-overlay').hide();
             });
          $('#show_login').click(function(){
             $('#log_sign').show();
             $('#show_pass').hide();
          })
       });
     

   function registershow(){
   	
   $("#modal-8").show();	
   } 

   $(document).ready(function(){
       $(".user_log").click(function(){
           $("#user_sow").fadeToggle();
       });
   });
   

   $(document).ready(function(){
       $("#hide_btn").click(function(){
           $("#hide_loc").hide();
       });
       $("#show_loc").click(function(){
           $("#show_loc").show();
       });
   });

   $("#hover_li").hover(function(){
       $('#left_box').fadeToggle();
   });

   $("#hover_li1").hover(function(){
       $('#left_box1').fadeToggle();
   });
   
$(window).scroll(function() {
   if ($(this).scrollTop() > 30) {
   $('.hm_nav').addClass('affix');
  
   }
   else{
   $('.hm_nav').removeClass('affix');
   
   }
   });

   function openNav() {
      document.getElementById("mySidenav").style.width = "70%";
      // document.getElementById("flipkart-navbar").style.width = "50%";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
   }
   
   function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "rgba(0,0,0,0)";
   }

	$(".alert_msg1").fadeOut(5000);
$(document).ready(function() {
    $('#customerregister').bootstrapValidator({
       
        fields: {
            
             firstname: {
              validators: {
					notEmpty: {
						message: 'First Name is required'
					},
                   regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Last Name can only consist of alphanumaric, space and dot'
					}
                }
            },
			lastname: {
              validators: {
					notEmpty: {
						message: 'Last Name is required'
					},
                   regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: ' Last Name can only consist of alphanumaric, space and dot'
					}
                }
            },
			
			email: {
             validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
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
			password: {
					validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
			},
			confirm_password: {
					 validators: {
                identical: {
                    field: 'password',
                    message: 'password and confirm Password do not match'
                }
            }
			}
        }
    });
});

$(document).ready(function() {
    $('#loginform').bootstrapValidator({
       
        fields: {
            
           
			
			email: {
             validators: {
					notEmpty: {
						message: 'Email id / Mobile number is required'
					}
				}
            },
			
			password: {
					validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
			}
        }
    });
});

$(".mat-input").focus(function(){
  $(this).parent().addClass("is-active is-completed");
});

$(".mat-input").focusout(function(){
  if($(this).val() === "")
    $(this).parent().removeClass("is-completed");
  $(this).parent().removeClass("is-active");
})
</script>


