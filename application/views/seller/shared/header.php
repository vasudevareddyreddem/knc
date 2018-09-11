 
<style>
.navbar-nav>li>a{
	padding:0px;
}
.navbar-nav {
    float: left;
    margin: 0;
    padding-top: 12px;
}
.main-header .logo .logo-lg img {
    height: 42px;
    margin-right: 70px;
}
</style>

<link href="<?php echo base_url(); ?>assets/seller/dist/css/app.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/seller/dist/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>


  <body class="hold-transition sidebar-mini" >
        <!-- Site wrapper -->
        
            <header class="main-header hm_nav" style="position: fixed;top:0px;width:100%; ">
                <a href="<?php echo base_url('seller/dashboard');?>" class="logo"> <!-- Logo -->
                    <span class="logo-mini">
                        <!--<b>A</b>H-admin-->
                        <img src="<?php echo base_url(); ?>assets/home/images/logo.png" alt="Order organic">
                    </span>
                    <span class="logo-lg">                        
                        <img src="<?php echo base_url(); ?>assets/home/images/logo.png" alt="Order organic">
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top ">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">                            
												<!-- order notifications -->
								<li class="pad_l50">
								<ul class="nav navbar-nav pad_li">  
								
								<li class="active"><a href="<?php echo base_url('seller/dashboard');?>">Home</a></li>
								
								<?php if($bank_link['bank_complete']==0) { ?>
								<li>
								<a href="javascript:void(0)" class="pull-right"   id="view2" data-toggle="modal"  data-target="#bankpopup" >Add Listing
								</a>
								<?php }else{  ?>
								</li>
								<li><a href="<?php echo base_url();?>seller/products/create" class="pull-right">Add Listing</a>  </li>
								<?php }?>
								<li><a href="<?php echo base_url();?>seller/contactus">Contact Us</a></li>
								</ul>
								
                            <li class="dropdown notifications-menu">
                                <a href="#" onclick="getnotifycount();" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="pe-7s-bell"></i><span id="notify"><?php if($notification[0]['unreadcouont']>0){ echo $notification[0]['unreadcouont']; } ?></span>
                                    <span class="label label-warning"></span>
                                </a>
                                <ul class="dropdown-menu">
								
                                    <li class="header"><i class="fa fa-bell"></i> &nbsp; Admin Notifications</li>
                                    <li>
                                        <ul class="menu">
                                        <?php foreach($allnotification as $list){ ?>
                                            <li>
                                            <a href="<?php echo base_url('seller/services/notications'); ?>" class="border-gray"><i class="fa fa-inbox"></i><?php  echo $list['seller_message']; ?></a></li>
											                 <?php } ?>
                                       <?php foreach($servicerequest as $service){ ?>
                                            <li id="service">
                                            <a onclick="getservic();" class="border-gray"><i class="fa fa-inbox" ></i><?php  echo $service['replymsg']; ?></a></li>
                                       <?php } ?>                                           
                                        </ul>
                                    </li>
                                   <li class="footer">
                                   <a href="<?php echo base_url('seller/services/notications'); ?>"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </li>


                            <!-- user -->
                            <li class="dropdown dropdown-user admin-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php foreach($profiles as $profile){ ?>
                                <?php if($profile['profile_pic'] == "") {  ?>
                                <div class="user-image">
                                <img src="<?php echo base_url();?>uploads/profile/default.jpg" class="img-circle" height="40" width="40" alt="User Image">
                                </div>
                          <?php } else {?>
                          <div class="user-image">
                                <img src="<?php echo base_url();?>uploads/profile/<?php  echo $profile['profile_pic']; ?>" class="img-circle" height="40" width="40" alt="User Image">
                                </div>
                                <?php } ?>
                                <?php } ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url();?>seller/personnel_details"><i class="fa fa-users"></i> Update Profile</a></li>
                                    <li><a href="<?php echo base_url();?>seller/user_profile"><i class="fa fa-gear"></i> User Profile</a></li>
                                    <!-- <li><a href="<?php echo base_url();?>seller/user_profile/profile_pic"><i class="fa fa-picture-o"></i> Change ProfilePic</a></li> --> 
                                    <li><a href="<?php echo base_url() ; ?>seller/login/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
   
 <div class="modal fade" id="bankpopup" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Please Link your Account</h4>
        </div>
        <div class="modal-body">
          <h3 class="text-center">Click Here <a href="<?php echo base_url('seller/dashboard/linkaccout');?>"> Link your Account</a></h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--end Just fill form to Select plan Modal -->
  <?php if($notification[0]['unreadcouont']>0){ ?>
  <script>
  function getnotifycount(){
	  
	  jQuery.ajax({
			   url: "<?php echo base_url('seller/dashboard/readcount'); ?>",
			   data:'',
			   type: "POST",
			   dataType:"JSON",
			   success:function(data){
				   if(data.msg==1){
					   $('#notify').hide();
					   
				   }
			    }
		 }); 
  }
  </script>
  <?php } ?>

  <script>
  function getservic(){
    
    jQuery.ajax({
         url: "<?php echo base_url('seller/dashboard/getservice'); ?>",
         data:'',
         type: "POST",
         dataType:"JSON",
         success:function(data){
           if(data.msg==1){
             $('#service').hide();
             
           }
          }
     }); 
  }
  </script>
  