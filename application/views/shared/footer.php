 
<style>
.links li>a{
	font-size:14px !important;
	font-weight:400 !important;
	padding:5px;
	
}

</style>
  <!--footer start here -->
  <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-truck text-gray"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="alt-font text-light text-uppercase">Free Shipping</h6>
                                <p class="text-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->
                    <div class="col-sm-3">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-life-ring text-gray"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="alt-font text-light text-uppercase">Support 24/7</h6>
                                <p class="text-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->
                    <div class="col-sm-3">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-gift text-gray"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="alt-font text-light text-uppercase">Gift cards</h6>
                                <p class="text-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->
                    <div class="col-sm-3">
                        <div class="icon-boxes style1">
                            <div class="icon">
                                <i class="fa fa-credit-card text-gray"></i>
                            </div><!-- end icon -->
                            <div class="box-content">
                                <h6 class="alt-font text-light text-uppercase">Payment 100% Secure</h6>
                                <p class="text-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div><!-- icon-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
                
                <hr class="spacer-30">
                
                <div class="row">
                    <div class="col-sm-3">
                        <h5 class="title">Plus</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        
                        <hr class="spacer-10 no-border">
                        
                        <ul class="social-icons">
                            <li class="facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li class="dribbble"><a href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
                            <li class="linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a href="javascript:void(0);"><i class="fa fa-youtube"></i></a></li>
                            <li class="behance"><a href="javascript:void(0);"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div><!-- end col -->
                    <div class="col-sm-3">
                        <h5 class="title">My Account</h5>
                        <ul class="list alt-list">
                            <li><a href="<?php echo base_url('customer/account');?>"><i class="fa fa-angle-right"></i>My Account</a></li>
                            <li><a href="<?php echo base_url('customer/wishlist'); ?>"><i class="fa fa-angle-right"></i>Wishlist</a></li>
                            <li><a href="<?php echo base_url('customer/cart');?>"><i class="fa fa-angle-right"></i>My Cart</a></li>
                            <li><a href="<?php echo base_url('customer/orders');?>"><i class="fa fa-angle-right"></i>My Orders</a></li>
                        </ul>
                    </div><!-- end col -->
                    <div class="col-sm-3">
                        <h5 class="title">Information</h5>
                        <ul class="list alt-list">
                            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-right"></i>About Us</a></li>
                            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-angle-right"></i>Careers</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Sell on Order Organic</a></li>
                            <li><a href="<?php echo base_url('customer/contactus'); ?>"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                        </ul>
                    </div><!-- end col -->
                    <div class="col-sm-3">
                        <h5 class="title">Payment Methods</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <ul class="list list-inline">
                            <li class="text-white"><i class="fa fa-cc-visa fa-2x"></i></li>
                            <li class="text-white"><i class="fa fa-cc-paypal fa-2x"></i></li>
                            <li class="text-white"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                            <li class="text-white"><i class="fa fa-cc-discover fa-2x"></i></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
                
                <hr class="spacer-30">
                
                <div class="row text-center">
                    <div class="col-sm-12">
                        <p class="text-sm">&COPY; 2018.   by <a href="javascript:void(0);">Order Organic eCommerce.</a></p>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>
  
</div>


<script src="<?php echo base_url(); ?>assets/home/js/classie.js"></script> 
<script src="<?php echo base_url(); ?>assets/home/js/modalEffects.js"></script> 
<script type="text/javascript">
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
	$(document).ready(function() {
    $('#subscribe').bootstrapValidator({
       
        fields: {
            newsletter1: {
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
			
        }
    });
});
  </script> 

<!-- Login popup end here -->

