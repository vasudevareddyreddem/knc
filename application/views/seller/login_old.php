<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.forgot {
	    margin-left: 17px;
	
}
.footerdown {
    background: #333333 none repeat scroll 0 0;
    color: #adadad;
    float: left;
    font-size: 14px;
    line-height: 18px;
    padding: 16px 0;
    width: 100%;
    position: absolute;
    bottom: 0px;
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>::CART IN HOUR SELLER::</title>
<link rel="icon" href="<?php echo base_url(); ?>assets/seller_login/images/fav.png" type="image/x-icon" />
<!--css start here -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,800" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller_login/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller_login/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller_login/css/responsive.css" />
<!--java script start here -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/seller_login/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/seller_login/js/bootstrap.min.js"></script>
<!--java script end here -->

<!--css end here -->

</head>

<body>

<!--header part start here -->
<div class="nav-wrapper">
  <div class="container">
    <div class="header">
      <div class="col-md-6 col-xs-12">
        <div class="logo">
          <h3><a href="index.html">Cart In Hour<span> Seller</span></a></h3>
        </div>
      </div>
      <!--<div class="col-md-6 col-xs-12 hidden-xs">
        <div class="loginfields">
          <form action="<?php echo base_url();?>seller_admin/login/do_login" method="post">
            <div class="form-group">
              <div class="col-md-1"> &nbsp </div>
              <div class="col-md-4 hdr-form-input_s paddingRightZero">
                <label for="usr">Email/Mobile Number :</label>
                <input type="text" class="form-control" id="seller_name" name="selleradmin_name">
              </div>
              <div class="col-md-4 hdr-form-input_s paddingRightZero">
                <label for="pwd">Password :</label>
                <input type="password" class="form-control" id="selleradmin_password" name="selleradmin_password">
              </div>
              <div class="col-md-3 paddingRightZero">
                <div class="pswrd text-right"><a href="#">Unable to Login?</a></div>
                <input type="submit" class="btn btn-info san_submit" value="Login">
              </div>
            </div>
          </form>
        </div>
      </div>-->
    </div>
  </div>
</div>

<!--header part end here --> 
<!--navigation start here -->
<div class="header_main">
  <div class="container">
    <nav class="navbar navbar-default san_menu"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand hidden-md hidden-sm hidden-lg" href="#">Infinity Seller</a> </div>
      
      
    </nav>
  </div>
</div>
<!--navigation part end here --> 

<!--banners start here -->
<div class="banner">
  <div class="container">
   
     <div class="col-md-4">&nbsp</div>
	
	<div class="col-md-5">
      <div class="bnr_rgt">
        <h1 align="center"> Seller Login </h1>
        <form action="<?php echo base_url();?>seller_admin/login/do_login" method="post">
          <div class="form-group">
            <div class="col-md-12">
              <div class="row">
              <?php echo $this->session->flashdata('msg'); ?>
                <div class="col-xs-12 inf_cmpy">
                  <label for="ex1"><strong>Username</strong></label>
                   <input type="text" class="form-control" name="seller_name" id="seller_name" value="<?php echo set_value('seller_name'); ?>" placeholder="Username"/>
                 <span class="error" style="color:red"><?php echo form_error('seller_name'); ?></span>
                </div>
                <div class="col-xs-12 inf_cmpy">
                  <label for="ex1"><strong>Password</strong></label>
                    <input type="password" name="seller_password" id="seller_password" class="form-control" placeholder="Password" />
                <span class="error" style="color:red"><?php echo form_error('seller_password'); ?></span>
                </div>
              
                <div class="col-xs-12 inf_cmpy">
                  <input type="submit" class="btn btn-block" value="Login">
                </div>
              </div>
            </div>
          </div>
        </form>
		  <div class="forgot">
                <a href="<?php echo base_url();?>seller_admin/login/forgot" >Forgot Password</a>
              </div>
      </div>
    </div>
	
	
	
	
	
  </div>
</div>
<!--banners end here --> 
<!--header section start here -->


<!--header section start here --> 
<!--footer part start here -->


<!--footer part end here -->
<div class="footerdown">
  <div class="container">
    <div class="row">
      <div class="col-md-12">&copy; <span class="year">2017</span> Infinity Seller. All rights reserved.</div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 10000,
  });
});
</script>
</body>
</html>
