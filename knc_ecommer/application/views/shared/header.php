<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/jquery-ui.css">
<script src="<?php echo base_url(); ?>assets/home/js/jquery-auto.js"></script>

 <div class="topBar inverse">
            <div class="container">
                <ul class="list-inline pull-left hidden-sm hidden-xs">
                  <li><a href="https://www.facebook.com/shofusdotcom/" target="_blank" class=""><span class=""><i class="" aria-hidden="true"><img src="<?php echo base_url(); ?>assets/home/images/fb.png" /></i></span></a></li>
                  &nbsp;
                  <li><a href="https://twitter.com/shofus" target="_blank" class=""><span class=""><i class="" aria-hidden="true"><img src="<?php echo base_url(); ?>assets/home/images/tiw.png" /></i></span></a></li>
                  &nbsp;
                  <li><a href="https://plus.google.com/u/0/106334687276812209130"  target="_blank" class=""><span class=""><i class="" aria-hidden="true"><img src="<?php echo base_url(); ?>assets/home/images/gmai.png" /></i></span></a></li>
                </ul>
                
                <ul class="topBarNav pull-right">
                    <li class="linkdown">
                  
                     <a  class="tel" target="_blank" href="http://seller.shofus.com/seller/login"><span class=""></span> &nbsp; Sell on KNC </a>
                  </li>
                  &nbsp;
                  <li>
                     <a class="tel" href="<?php echo base_url('customer/trackorders');?>"><span class=""><img src="<?php echo base_url(); ?>assets/home/images/track.png" /></span> &nbsp; Track your order </a>
                  </li>
                 
                   
                    <li class="linkdown">
                        <a href="javascript:void(0);">
                            <i class="fa fa-user mr-5"></i>
                            <span class="hidden-xs">
                                My Account 
                                <i class="fa fa-angle-down ml-5"></i>
                            </span>
                        </a>
                        <ul class="w-150">
                            <li><a data-toggle="modal" data-target="#loginmodal">Login</a></li>
                            <li><a href="register.html">Create Account</a></li>
                            <li class="divider"></li>
                            <li><a href="wishlist.html">Wishlist (5)</a></li>
                            <li><a href="cart.html">My Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="linkdown">
                        <a href="javascript:void(0);">
                            <i class="fa fa-shopping-basket mr-5"></i>
                            <span class="hidden-xs">
                                Cart<sup class="text-primary">(3)</sup>
                                <i class="fa fa-angle-down ml-5"></i>
                            </span>    
                        </a>
                        <ul class="cart w-250">
                            <li>
                                <div class="cart-items">
                                    <ol class="items">
                                        <li> 
                                            <a href="shop-single-product-v1.html" class="product-image">
                                                <img src="https://Static05.Jockeyindia.com/uploads/dealimages/7594/listimages/ub14_ink_blue_mel_1.jpg" alt="Sample Product ">
                                            </a>
                                            <div class="product-details">
                                                <div class="close-icon"> 
                                                    <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                                </div>
                                                <p class="product-name"> 
                                                    <a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a> 
                                                </p>
                                                <strong>1</strong> x <span class="price text-primary">$59.99</span>
                                            </div><!-- end product-details -->
                                        </li><!-- end item -->
                                        <li> 
                                            <a href="shop-single-product-v1.html" class="product-image">
                                                <img src="https://Static05.Jockeyindia.com/uploads/dealimages/7594/listimages/ub14_ink_blue_mel_1.jpg" alt="Sample Product ">
                                            </a>
                                            <div class="product-details">
                                                <div class="close-icon"> 
                                                    <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                                </div>
                                                <p class="product-name"> 
                                                    <a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a> 
                                                </p>
                                                <strong>1</strong> x <span class="price text-primary">$39.99</span>
                                            </div><!-- end product-details -->
                                        </li><!-- end item -->
                                        <li> 
                                            <a href="shop-single-product-v1.html" class="product-image">
                                                <img src="https://Static05.Jockeyindia.com/uploads/dealimages/7594/listimages/ub14_ink_blue_mel_1.jpg" alt="Sample Product ">
                                            </a>
                                            <div class="product-details">
                                                <div class="close-icon"> 
                                                    <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                                </div>
                                                <p class="product-name"> 
                                                    <a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a> 
                                                </p>
                                                <strong>1</strong> x <span class="price text-primary">$29.99</span>
                                            </div><!-- end product-details -->
                                        </li><!-- end item -->
                                    </ol>
                                </div>
                            </li>
                            <li>
                                <div class="cart-footer">
                                    <a href="cart.html" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View Cart</a>
                                    <a href="checkout.html" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a>
                                </div>
                            </li>
                        </ul>
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
                                <div class="col-sm-6">
                                     <div class="form-horizontal ">
                        <div class=" smallsearch">
                           <div class="cart_search">
                              <form id="searchform" action="<?php echo base_url('home/seraching'); ?>" method="post">
                                 <input type="text" name="serachvalues" id="tags"  onfocus="searchfunction(this.value);" onkeyup="searchfunction(this.value);" class="flipkart-navbar-input form-control input-lg"  placeholder="Search for Products, Brands and more" autocomplete="off" spellcheck="false">
                                
                              </form>
                           </div>
                        </div>
                     </div>
                                </div><!-- end col -->
                                <div class="col-sm-3">
                                    <select class="form-control input-lg" name="category">
                                        <option value="all">All Categories</option>
                                        <optgroup label="Mens">
                                            <option value="shirts">Shirts</option>
                                            <option value="coats-jackets">Coats & Jackets</option>
                                            <option value="underwear">Underwear</option>
                                            <option value="sunglasses">Sunglasses</option>
                                            <option value="socks">Socks</option>
                                            <option value="belts">Belts</option>
                                        </optgroup>
                                        <optgroup label="Womens">
                                            <option value="bresses">Bresses</option>
                                            <option value="t-shirts">T-shirts</option>
                                            <option value="skirts">Skirts</option>
                                            <option value="jeans">Jeans</option>
                                            <option value="pullover">Pullover</option>
                                        </optgroup>
                                        <option value="kids">Kids</option>
                                        <option value="fashion">Fashion</option>
                                        <optgroup label="Sportwear">
                                            <option value="shoes">Shoes</option>
                                            <option value="bags">Bags</option>
                                            <option value="pants">Pants</option>
                                            <option value="swimwear">Swimwear</option>
                                            <option value="bicycles">Bicycles</option>
                                        </optgroup>
                                        <option value="bags">Bags</option>
                                        <option value="shoes">Shoes</option>
                                        <option value="hoseholds">HoseHolds</option>
                                        <optgroup label="Technology">
                                            <option value="tv">TV</option>
                                            <option value="camera">Camera</option>
                                            <option value="speakers">Speakers</option>
                                            <option value="mobile">Mobile</option>
                                            <option value="pc">PC</option>
                                        </optgroup>
                                    </select>
                                </div><!-- end col -->
                                <div class="col-sm-3">
                                    <input type="submit"  class="btn btn-default btn-block btn-lg" value="Search">
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end col -->
                    <div class="col-sm-2 vertical-align header-items hidden-xs">
                        <div class="header-item mr-5">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                <i class="fa fa-heart-o"></i>
                                <sub>32</sub>
                            </a>
                        </div>
                        <div class="header-item">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Compare">
                                <i class="fa fa-refresh"></i>
                                <sub>2</sub>
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
                        <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Electronics<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Shop Pages</h6>
                                                </li>
                                                <li><a href="shop-sidebar-left.html">Sidebar Left</a></li>
                                                <li><a href="shop-sidebar-right.html">Sidebar Right</a></li>
                                                <li><a href="shop-filter-top.html">Filters Top</a></li>
                                                <li><a href="shop-full-width-sidebar-left.html">Full Width Sidebar Left</a></li>
                                                <li><a href="shop-full-width-sidebar-right.html">Full Width Sidebar Right</a></li>
                                                <li><a href="shop-full-width-filter-top.html">Full Width Filters Top</a></li>
                                                <li><a href="category.html">Category <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="shop-single-product-v1.html">Single product</a></li>
                                                <li><a href="shop-single-product-v2.html">Single product <span class="label primary-background">1.3</span></a></li>
                                                <li class="title">
                                                    <h6>Contact Pages</h6>
                                                </li>
                                                <li><a href="contact-v1.html">Contact Us Version 1</a></li>
                                                <li><a href="contact-v2.html">Contact Us Version 2</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>About us Pages</h6>
                                                </li>
                                                <li><a href="about-us-v1.html">About Us Version 1</a></li>
                                                <li><a href="about-us-v2.html">About Us Version 2</a></li>
                                                <li><a href="about-us-v3.html">About Us Version 3</a></li>
                                                <li class="title">
                                                    <h6>Blog Pages</h6>
                                                </li>
                                                <li><a href="blog-v1.html">Blog Version 1</a></li>
                                                <li><a href="blog-v2.html">Blog Version 2</a></li>
                                                <li><a href="blog-v3.html">Blog Version 3</a></li>
                                                <li><a href="blog-article-v1.html">Blog article</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>User account</h6>
                                                </li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="login-register.html">Login or Register</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="user-information.html">User Information</a></li>
                                                <li><a href="order-list.html">Order List</a></li>
                                                <li><a href="order-confirmation.html">Order Confirmation <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Other Pages</h6>
                                                </li>
                                                <li><a href="help.html">Help</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="blank-page.html">Blank Page <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="404-error.html">404 Error</a></li>
                                                <li><a href="500-error.html">500 Error</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="subscribe.html">Subscribe</a></li>
                                            </ul><!-- end ul col -->
                                        </div><!-- end row -->
                                    </div><!-- end yamn-content -->
                                </li><!-- end li -->
                           </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home & Furniture<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Shop Pages</h6>
                                                </li>
                                                <li><a href="shop-sidebar-left.html">Sidebar Left</a></li>
                                                <li><a href="shop-sidebar-right.html">Sidebar Right</a></li>
                                                <li><a href="shop-filter-top.html">Filters Top</a></li>
                                                <li><a href="shop-full-width-sidebar-left.html">Full Width Sidebar Left</a></li>
                                                <li><a href="shop-full-width-sidebar-right.html">Full Width Sidebar Right</a></li>
                                                <li><a href="shop-full-width-filter-top.html">Full Width Filters Top</a></li>
                                                <li><a href="category.html">Category <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="shop-single-product-v1.html">Single product</a></li>
                                                <li><a href="shop-single-product-v2.html">Single product <span class="label primary-background">1.3</span></a></li>
                                                <li class="title">
                                                    <h6>Contact Pages</h6>
                                                </li>
                                                <li><a href="contact-v1.html">Contact Us Version 1</a></li>
                                                <li><a href="contact-v2.html">Contact Us Version 2</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>About us Pages</h6>
                                                </li>
                                                <li><a href="about-us-v1.html">About Us Version 1</a></li>
                                                <li><a href="about-us-v2.html">About Us Version 2</a></li>
                                                <li><a href="about-us-v3.html">About Us Version 3</a></li>
                                                <li class="title">
                                                    <h6>Blog Pages</h6>
                                                </li>
                                                <li><a href="blog-v1.html">Blog Version 1</a></li>
                                                <li><a href="blog-v2.html">Blog Version 2</a></li>
                                                <li><a href="blog-v3.html">Blog Version 3</a></li>
                                                <li><a href="blog-article-v1.html">Blog article</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>User account</h6>
                                                </li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="login-register.html">Login or Register</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="user-information.html">User Information</a></li>
                                                <li><a href="order-list.html">Order List</a></li>
                                                <li><a href="order-confirmation.html">Order Confirmation <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Other Pages</h6>
                                                </li>
                                                <li><a href="help.html">Help</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="blank-page.html">Blank Page <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="404-error.html">404 Error</a></li>
                                                <li><a href="500-error.html">500 Error</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="subscribe.html">Subscribe</a></li>
                                            </ul><!-- end ul col -->
                                        </div><!-- end row -->
                                    </div><!-- end yamn-content -->
                                </li><!-- end li -->
                           </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mens<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Shop Pages</h6>
                                                </li>
                                                <li><a href="shop-sidebar-left.html">Sidebar Left</a></li>
                                                <li><a href="shop-sidebar-right.html">Sidebar Right</a></li>
                                                <li><a href="shop-filter-top.html">Filters Top</a></li>
                                                <li><a href="shop-full-width-sidebar-left.html">Full Width Sidebar Left</a></li>
                                                <li><a href="shop-full-width-sidebar-right.html">Full Width Sidebar Right</a></li>
                                                <li><a href="shop-full-width-filter-top.html">Full Width Filters Top</a></li>
                                                <li><a href="category.html">Category <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="shop-single-product-v1.html">Single product</a></li>
                                                <li><a href="shop-single-product-v2.html">Single product <span class="label primary-background">1.3</span></a></li>
                                                <li class="title">
                                                    <h6>Contact Pages</h6>
                                                </li>
                                                <li><a href="contact-v1.html">Contact Us Version 1</a></li>
                                                <li><a href="contact-v2.html">Contact Us Version 2</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>About us Pages</h6>
                                                </li>
                                                <li><a href="about-us-v1.html">About Us Version 1</a></li>
                                                <li><a href="about-us-v2.html">About Us Version 2</a></li>
                                                <li><a href="about-us-v3.html">About Us Version 3</a></li>
                                                <li class="title">
                                                    <h6>Blog Pages</h6>
                                                </li>
                                                <li><a href="blog-v1.html">Blog Version 1</a></li>
                                                <li><a href="blog-v2.html">Blog Version 2</a></li>
                                                <li><a href="blog-v3.html">Blog Version 3</a></li>
                                                <li><a href="blog-article-v1.html">Blog article</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>User account</h6>
                                                </li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="login-register.html">Login or Register</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="user-information.html">User Information</a></li>
                                                <li><a href="order-list.html">Order List</a></li>
                                                <li><a href="order-confirmation.html">Order Confirmation <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Other Pages</h6>
                                                </li>
                                                <li><a href="help.html">Help</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="blank-page.html">Blank Page <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="404-error.html">404 Error</a></li>
                                                <li><a href="500-error.html">500 Error</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="subscribe.html">Subscribe</a></li>
                                            </ul><!-- end ul col -->
                                        </div><!-- end row -->
                                    </div><!-- end yamn-content -->
                                </li><!-- end li -->
                           </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Womens<i class="fa fa-angle-down ml-5"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Shop Pages</h6>
                                                </li>
                                                <li><a href="shop-sidebar-left.html">Sidebar Left</a></li>
                                                <li><a href="shop-sidebar-right.html">Sidebar Right</a></li>
                                                <li><a href="shop-filter-top.html">Filters Top</a></li>
                                                <li><a href="shop-full-width-sidebar-left.html">Full Width Sidebar Left</a></li>
                                                <li><a href="shop-full-width-sidebar-right.html">Full Width Sidebar Right</a></li>
                                                <li><a href="shop-full-width-filter-top.html">Full Width Filters Top</a></li>
                                                <li><a href="category.html">Category <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="shop-single-product-v1.html">Single product</a></li>
                                                <li><a href="shop-single-product-v2.html">Single product <span class="label primary-background">1.3</span></a></li>
                                                <li class="title">
                                                    <h6>Contact Pages</h6>
                                                </li>
                                                <li><a href="contact-v1.html">Contact Us Version 1</a></li>
                                                <li><a href="contact-v2.html">Contact Us Version 2</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>About us Pages</h6>
                                                </li>
                                                <li><a href="about-us-v1.html">About Us Version 1</a></li>
                                                <li><a href="about-us-v2.html">About Us Version 2</a></li>
                                                <li><a href="about-us-v3.html">About Us Version 3</a></li>
                                                <li class="title">
                                                    <h6>Blog Pages</h6>
                                                </li>
                                                <li><a href="blog-v1.html">Blog Version 1</a></li>
                                                <li><a href="blog-v2.html">Blog Version 2</a></li>
                                                <li><a href="blog-v3.html">Blog Version 3</a></li>
                                                <li><a href="blog-article-v1.html">Blog article</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>User account</h6>
                                                </li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="login-register.html">Login or Register</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="user-information.html">User Information</a></li>
                                                <li><a href="order-list.html">Order List</a></li>
                                                <li><a href="order-confirmation.html">Order Confirmation <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                            </ul><!-- end ul col -->
                                            <ul class="col-sm-3">
                                                <li class="title">
                                                    <h6>Other Pages</h6>
                                                </li>
                                                <li><a href="help.html">Help</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="blank-page.html">Blank Page <span class="label primary-background">1.1</span></a></li>
                                                <li><a href="404-error.html">404 Error</a></li>
                                                <li><a href="500-error.html">500 Error</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="subscribe.html">Subscribe</a></li>
                                            </ul><!-- end ul col -->
                                        </div><!-- end row -->
                                    </div><!-- end yamn-content -->
                                </li><!-- end li -->
                           </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                        
                            </ul><!-- end dropdown-menu -->
                        </li><!-- end dropdown -->
                    </ul><!-- end navbar-nav -->
					</div>
					</div>
					</div>
					
	  <div class="modal animated zoomIn" id="loginmodal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login / Register</h4>
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
</script>
<script src="<?php echo base_url(); ?>assets/home/js/classie.js"></script> 
<script src="<?php echo base_url(); ?>assets/home/js/modalEffects.js"></script> 
<script src="<?php echo base_url(); ?>assets/home/js/chosen.js"></script> 
<script>
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
</script>
<script type="text/javascript">
function addtabactive(id)
{
	//$("#tabs"+id).empty();
	
	$("#tabs"+id).show();
	$("#tabs"+id).addClass("active");
	$("#tabs"+id).removeClass("tab_hide");
	var cnt;
    var nt =<?php echo count($catehorywiselist); ?>;
	//var cnt='';
	for(cnt = 1; cnt <= nt; cnt++){
		if(cnt!=id){
			$("#tabs"+cnt).hide();
			$("#tabs"+cnt).removeClass("active");
			$("#tabs"+cnt).addClass("tab_hide");
		}             
	}
			

}
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
     
</script> 
<!-- Login popup end here -->
<script>
   function registershow(){
   	
   $("#modal-8").show();	
   } 
</script>
<script type="text/javascript" language="javascript">
   $(document).ready(function(){
       $(".user_log").click(function(){
           $("#user_sow").fadeToggle();
       });
   });
   
</script>
<script>
   $(document).ready(function(){
       $("#hide_btn").click(function(){
           $("#hide_loc").hide();
       });
       $("#show_loc").click(function(){
           $("#show_loc").show();
       });
   });
</script>
<script>
   $("#hover_li").hover(function(){
       $('#left_box').fadeToggle();
   });
</script>
<script>
   $("#hover_li1").hover(function(){
       $('#left_box1').fadeToggle();
   });
</script>
<script type="text/javascript" language="javascript">
   $(window).scroll(function() {
   if ($(this).scrollTop() > 30) {
   $('.hm_nav').addClass('affix');
  
   }
   else{
   $('.hm_nav').removeClass('affix');
   
   }
   });
</script>
<script>
   function openNav() {
      document.getElementById("mySidenav").style.width = "70%";
      // document.getElementById("flipkart-navbar").style.width = "50%";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
   }
   
   function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "rgba(0,0,0,0)";
   }
</script>
<script type="text/javascript">
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

