
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="position:fixed;width:230px">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <ul class="sidebar-menu" style="height:600px;overflow-y: scroll;padding-bottom:200px;">
	  <?php if($customerdetails['role_id']==5){ ?>
        <li class="active ">
          <a href="<?php echo base_url('inventory/dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
         
        </li>
		<li class=" ">
          <a href="<?php echo base_url('inventory/overall_category_list'); ?>">
            <i class="fa fa-dashboard"></i> <span>All Category List</span>
            <span class="pull-right-container">
            </span>
          </a>
         
        </li>
     
		<li class="">
          <a href="<?php echo base_url('inventory/sellerlist'); ?>">
             <i class="fa fa-list-ul"></i> <span>Seller Lists</span>
          </a>
        </li>
		<li class="">
          <a href="<?php echo base_url('inventory/sellerpayments'); ?>">
             <i class="fa fa-credit-card"></i> <span>Seller Payments</span>
          </a>
        </li>
     
		<li class="treeview">
          <a href="<?php echo base_url('inventory/sellerservicerequests'); ?>">
		  <i class="fa fa-usb"></i> <span>Service Requests</span>
          </a>
        </li>
        <li class="treeview">
          <a href="">
           <i class="fa fa-modx"></i> <span>Show Ups </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/homepagebanner'); ?>"><i class="fa fa-circle-o"></i> Home Page Banner </a></li>
            <li><a href="<?php echo base_url('inventory/topoffers'); ?>"><i class="fa fa-circle-o"></i> Top Offers</a></li>
            <li><a href="<?php echo base_url('inventory/dealsoftheday'); ?>"><i class="fa fa-circle-o"></i> Deals of the Day</a></li>
            <li><a href="<?php echo base_url('inventory/seasonsales'); ?>"><i class="fa fa-circle-o"></i> Season Sales</a></li>
            
          </ul>
        </li>
		<li class="">
          <a href="<?php echo base_url('inventory/homepagepreview'); ?>">
             <i class="fa fa-home"></i> <span>Customer Home Page Preview</span>
          </a>
        </li>
		
		<li class="treeview">
           <a href="">
           <i class="fa fa-modx"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/totalorders'); ?>"><i class="fa fa-circle-o"></i> Total Orders List</a></li>
            <li><a href="<?php echo base_url('inventory/pendingorders'); ?>"><i class="fa fa-circle-o"></i> Pending order list</a></li>
            <li><a href="<?php echo base_url('inventory/deliveryorders'); ?>"><i class="fa fa-circle-o"></i> Delivery order list</a></li>
           
          </ul>
		 </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Co-worker</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/addcoworker'); ?>"><i class="fa fa-circle-o"></i> Add  </a></li>
            <li><a href="<?php echo base_url('inventory/coworkerlist'); ?>"><i class="fa fa-circle-o"></i>List</a></li>
           </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Delivery Boy</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/adddeliveryboy'); ?>"><i class="fa fa-circle-o"></i> Add  </a></li>
            <li><a href="<?php echo base_url('inventory/deliveryboylist'); ?>"><i class="fa fa-circle-o"></i>List</a></li>
           </ul>
        </li>
		<li class="treeview">
          <a href="<?php echo base_url('inventory/delivery_locations');?>">
            <i class="fa fa-map-marker"></i> <span>Delivery Boy Locations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
		<li class="">
          <a href="<?php echo base_url('inventory/sellernitificationlist'); ?>">
             <i class="fa fa-globe"></i> <span>Seller Notification</span>
          </a>
        </li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/categorieslist'); ?>"><i class="fa fa-circle-o"></i> Add Category </a></li>
            <li><a href="<?php echo base_url('inventory/subcategorieslist'); ?>"><i class="fa fa-circle-o"></i> Add Sub Category & Commission</a></li>
            <li><a href="<?php echo base_url('inventory/subitemslists'); ?>"><i class="fa fa-circle-o"></i> Add Sub Items</a></li>
            <li><a href="<?php echo base_url('inventory/itemlist'); ?>"><i class="fa fa-circle-o"></i> Add Items</a></li>
            <li><a href="<?php echo base_url('inventory/productquantity'); ?>"><i class="fa fa-circle-o"></i>Product Quantity</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="<?php echo base_url('inventory/product_list');?>">
            <i class="fa fa-anchor"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         </li>
		<li class="treeview">
          <a href="<?php echo base_url('inventory/addbannerslist');?>">
            <i class="fa fa-android"></i> <span>App Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
		<li class="treeview">
          <a href="<?php echo base_url('inventory/categorypagebanners');?>">
            <i class="fa fa-picture-o"></i> <span>Sub Category Page Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         </li>
		 <li class="treeview">
          <a href="<?php echo base_url('inventory/homepagebanerrslist');?>">
            <i class="fa fa-align-center"></i> <span>Home Page Middle Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         </li>
		 <li class="treeview">
          <a href="<?php echo base_url('inventory/addbrandlogo');?>">
            <i class="fa fa-anchor"></i> <span>Brand Logos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         </li>
		
		<li class="treeview">
          <a href="<?php echo base_url('inventory/wishlistbanerslist');?>">
            <i class="fa fa-heart"></i> <span>Wishlist Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
	  <?php }else if($customerdetails['role_id']==7){  ?>
			
		<li class="treeview">
           <a href="">
           <i class="fa fa-modx"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('inventory/totalorders'); ?>"><i class="fa fa-circle-o"></i> Total Orders List</a></li>
            <li><a href="<?php echo base_url('inventory/pendingorders'); ?>"><i class="fa fa-circle-o"></i> Pending order list</a></li>
            <li><a href="<?php echo base_url('inventory/deliveryorders'); ?>"><i class="fa fa-circle-o"></i> Delivery order list</a></li>
           
          </ul>
		 </li>
		 <li class="treeview">
          <a href="<?php echo base_url('inventory/product_list');?>">
            <i class="fa fa-anchor"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         </li>
	   <?php } ?>
	  
	  
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  
  

  