                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <body class="bac_img">
<div class="banner_home con_start" style="margin-top:-20px;">
     
      <div id="myCarousel" class="carousel slide"> 
        <!-- Indicators -->

      <div class="carousel-inner">

        
        <?php //echo '<pre>';print_r($homepage_banner);exit; ?>
        <?php $c=0;foreach($homepage_banner as $images){  ?>
        
        <?php if($c==0){  ?>
          <div class="item active"> <img src="<?php echo base_url('uploads/banners/'.$images['file_name']);?>" class="img-responsive">
          <div class="container">
            <div class="carousel-caption"> </div>
          </div>
        </div>
        <?php }else{ ?>
        <div class="item"> <img src="<?php echo base_url('uploads/banners/'.$images['file_name']);?>" class="img-responsive">
        <div class="container">
          <div class="carousel-caption"> </div>
        </div>
        </div>
        <?php } $c++;} ?>

        
    </div>
  
      
    
        
        <!-- Controls --> 
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <i class="glyphicon glyphicon-chevron-left"></i> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <i class="glyphicon glyphicon-chevron-right"></i> </a> </div>
      <!-- /.carousel --> 
      
    </div>
  </div>
  <!--header part end here --> 
  <!--body part start here -->
  
  <div class="cart_bdy" style="display:none;" id="location_seacrh_result"></div>
  <div class="" id="location_seacrh">
    <!--Top Category slider Start-->
    <div class="top-cate" style="margin-top:30px;">
      <div class="featured-pro container_main">
        <div class="row">
          <div class="slider-items-products">
            <div class="new_title">
              <h2>Top Offers </h2>
            </div>
            <div id="top-categories" class="product-flexslider hidden-buttons">
				<div class="slider-items slider-width-col4 products-grid">
					<?php foreach ($topoffers as $tops){  ?>
					<a href="<?php echo base_url('category/productview/'.base64_encode($tops['item_id'])); ?>">
					<div class="item" style="border: 1px #ddd solid;">
					<div class="pro-img img-wrapper  img_hover"><img src="<?php echo base_url('uploads/products/'.$tops['item_image']); ?>" alt="<?php echo $tops['item_name']; ?>">
					</div>
					<div class="pro-info" style="border-top:1px solid #ddd;"><?php echo $tops['item_name']; ?></div>
					</div>
					</a>
					<?php } ?>
				</div>
            </div>
      <div class="clearfix"></div>
        <a href="<?php echo base_url('customer/seemore'); ?>"><button class="btn btn-primary " style="position:absolute;top:15px;right:10px"> See More</button></a>
          </div>
        </div>
      </div>
    </div>
    <!--Top Category silder End--> 
    <!-- best Pro Slider -->
    
    <section>
      <div class="best-pro slider-items-products container_main">
        <div class="new_title">
          <h2>Treding Products</h2>
        </div>
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
       <?php foreach ($trending_products as $topslist){  ?>
             <form action="<?php echo base_url('customer/addcart'); ?>" method="Post" name="addtocart" id="addtocart" >
			<input type="hidden" name="producr_id" id="producr_id" value="<?php echo $topslist['item_id']; ?>" >
			<input type="hidden" name="category_id" id="category_id" value="<?php echo $topslist['category_id']; ?>" >
			<!--<div class="item">
          <div class=" box-product-outer" >
            <div class="box-product">
              <div class="img-wrapper  img_hover">
                <a href="<?php echo base_url('category/productview/'.base64_encode($topslist['item_id'])); ?>">
               <img class="thumbnail"src="<?php echo base_url('uploads/products/'.$topslist['item_image']); ?>"> 
				 
           
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>
				<div class="option">
				<button type="submit" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
				<a href="#" id="compare" onclick="compare(<?php echo $topslist['item_id']; ?>);" data-toggle="tooltip" title="Add to Compare" value="<?php echo $topslist['item_name']; ?>"><i class="fa fa-align-left"></i></a>
				<?php if($topslist['yes']==1){ ?>
				<a href="javascript:void(0);" data-toggle="tooltip" style="color:yellow;" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $topslist['item_id']; ?>);" id="addwhish" ><i class="fa fa-heart"></i></a>  
				<?php }else{ ?> 
				<a href="javascript:void(0);" data-toggle="tooltip" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $topslist['item_id']; ?>);" id="addwhish"><i class="fa fa-heart"></i></a>  
				<?php } ?>
				</div>
              </div>
              <h6><a href="<?php echo base_url('category/productview/'.base64_encode($topslist['item_id'])); ?>"><?php echo $topslist['item_name']; ?></a></h6>

              
             <div class="price">
           <?php 
		   $current_date=date('m/d/Y h:ia');
			$offerexpirydate=$topslist['offer_expairdate'].' '.$topslist['offer_time'];
			if($current_date <= $offerexpirydate) {?>
				<div class="pull-left" ><?php echo ($topslist['item_cost'])-($topslist['offer_amount']); ?> 
				<span class="label-tags"><span class="label label-default">-<?php echo $topslist['offer_percentage']; ?>%</span></span>
				</div>
				<span class="price-old"><?php echo $topslist['item_cost']; ?></span>
            <?php } else{?> 
				   <span><?php echo $topslist['item_cost']; ?></span>
              <?php  } ?>
              </div>
              
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div>
            </div>-->
			<div class="item">
          <div class=" box-product-outer" >
            <div class="box-product">
              <div class="img-wrapper  img_hover">
                <a href="<?php echo base_url('category/productview/'.base64_encode($topslist['item_id'])); ?>">
                  <!-- <img class="thumbnail"src="<?php echo base_url('uploads/products/'.$topslist['item_image']); ?>">  -->
				  <img src="<?php echo base_url(); ?>assets/home/images/test.png" />
           
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>
				<div style="background:#45b1b5;color:#fff;padding:2px;">
					<div style="z-index:1026"><h4>out of stock</h4></div>
				</div>
              </div>
              <h6><a href="<?php echo base_url('category/productview/'.base64_encode($topslist['item_id'])); ?>"><?php echo $topslist['item_name']; ?></a></h6>

              
             <div class="price">
           <?php 
		   $current_date=date('m/d/Y h:ia');
			$offerexpirydate=$topslist['offer_expairdate'].' '.$topslist['offer_time'];
			if($current_date <= $offerexpirydate) {?>
				<div class="pull-left" ><?php echo ($topslist['item_cost'])-($topslist['offer_amount']); ?> 
				<span class="label-tags"><span class="label label-default">-<?php echo $topslist['offer_percentage']; ?>%</span></span>
				</div>
				<span class="price-old"><?php echo $topslist['item_cost']; ?></span>
            <?php } else{?> 
				   <span><?php echo $topslist['item_cost']; ?></span>
              <?php  } ?>
              </div>
              
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div>
            </div>
			
			</form>
      
       <?php } ?>
            
           
            <!-- End Item --> 
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="best-pro slider-items-products container_main">
        <div class="new_title">
          <h2>Offers for You</h2>
        </div>
        <!--<div class="cate-banner-img"><img src="images/category-banner.jpg" alt="Retis lapen casen"></div>-->
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
            <?php foreach ($offer_for_you as $topslist){  ?>
           
				<form action="<?php echo base_url('customer/addcart'); ?>" method="Post" name="addtocart" id="addtocart" >
			<input type="hidden" name="producr_id" id="producr_id" value="<?php echo $topslist['item_id']; ?>" >
			<input type="hidden" name="category_id" id="category_id" value="<?php echo $topslist['category_id']; ?>" >
			
		   <div class="item">
          <div class=" box-product-outer">
            <div class="box-product">
              <div class="img-wrapper  img_hover">
                <a href="<?php echo base_url('category/productview/'.base64_encode($topslist['item_id'])); ?>">
                   <img class="thumbnail"src="<?php echo base_url('uploads/products/'.$topslist['item_image']); ?>">
           
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>
                <div class="option">
                  <button type="submit" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                  <a href="#" id="compare" onclick="compare(<?php echo $topslist['item_id']; ?>);" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
					<?php if($topslist['yes']==1){ ?>
					<a href="javascript:void(0);" data-toggle="tooltip" style="color:yellow;" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $topslist['item_id']; ?>);" id="addwhish" ><i class="fa fa-heart"></i></a>  
					<?php }else{ ?> 
					<a href="javascript:void(0);" data-toggle="tooltip" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $topslist['item_id']; ?>);" id="addwhish"><i class="fa fa-heart"></i></a>  
					<?php } ?>
                </div>
              </div>
              <h6><a href="<?php echo base_url('category/productview/'.base64_encode($topslist['item_id'])); ?>"><?php echo $topslist['item_name']; ?></a></h6>
               <div class="price">
           <?php 
		   $current_date=date('m/d/Y h:ia');
			$offerexpirydate=$topslist['offer_expairdate'].' '.$topslist['offer_time'];
			if($current_date <= $offerexpirydate) {?>
				<div class="pull-left" ><?php echo ($topslist['item_cost'])-($topslist['offer_amount']); ?> 
				<span class="label-tags"><span class="label label-default">-<?php echo $topslist['offer_percentage']; ?>%</span></span>
				</div>
				<span class="price-old"><?php echo $topslist['item_cost']; ?></span>
            <?php } else{?> 
				   <span><?php echo $topslist['item_cost']; ?></span>
              <?php  } ?>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div>
            </div>
			
			</form>
      
       <?php } ?>
            
           
            
          </div>
        </div>
      </div>
    </section>

     <section>
      <div class="best-pro slider-items-products container_main">
        <div class="new_title">
          <h2> Deals of the Day </h2>
        </div>
        <!--<div class="cate-banner-img"><img src="images/category-banner.jpg" alt="Retis lapen casen"></div>-->
    
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
      
      <?php //echo '<pre>';print_r($deals_of_the_day);exit; ?>
      <?php foreach($deals_of_the_day as $items)  {    ?>
	    <form action="<?php echo base_url('customer/addcart'); ?>" method="Post" name="addtocart" id="addtocart" >
			<input type="hidden" name="producr_id" id="producr_id" value="<?php echo $items['item_id']; ?>" >
			<input type="hidden" name="category_id" id="category_id" value="<?php echo $items['category_id']; ?>" >
			
           <div class="item">
          <div class=" box-product-outer">
            <div class="box-product">
              <div class="img-wrapper  img_hover">
                <a href="<?php echo base_url('category/productview/'.base64_encode($items['item_id'])); ?>">
                   <img class="thumbnail"src="<?php echo base_url('uploads/products/'.$items['item_image']); ?>">
           
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>
                <div class="option">
                  <button type="submit" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                   <a href="#" id="compare"  id="compare" onclick="compare(<?php echo $items['item_id']; ?>);" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left"></i></a>
					<?php if($items['yes']==1){ ?>
					<a href="javascript:void(0);" data-toggle="tooltip" style="color:yellow;" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $items['item_id']; ?>);" id="addwhish" ><i class="fa fa-heart"></i></a>  
					<?php }else{ ?> 
					<a href="javascript:void(0);" data-toggle="tooltip" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $items['item_id']; ?>);" id="addwhish"><i class="fa fa-heart"></i></a>  
					<?php } ?> 
				</div>
              </div>
              <h6><a href="<?php echo base_url('category/productview/'.base64_encode($items['item_id'])); ?>"><?php echo $items['item_name']; ?></a></h6>
               <div class="price">
           <?php 
		   $current_date=date('m/d/Y h:ia');
			$offerexpirydate=$items['offer_expairdate'].' '.$items['offer_time'];
			if($current_date <= $offerexpirydate) {?>
				<div class="pull-left" ><?php echo ($items['item_cost'])-($items['offer_amount']); ?> 
				<span class="label-tags"><span class="label label-default">-<?php echo $items['offer_percentage']; ?>%</span></span>
				</div>
				<span class="price-old"><?php echo $items['item_cost']; ?></span>
            <?php } else{?> 
				   <span><?php echo $items['item_cost']; ?></span>
              <?php  } ?>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div>
            </div>
			</form>
            
      <?php  } ?>
          </div>
        </div>
      </div>
    </section>
   <section>
      <div class="best-pro slider-items-products container_main">
        <div class="new_title">
          <h2>Season Sales</h2>
        </div>
        <!--<div class="cate-banner-img"><img src="images/category-banner.jpg" alt="Retis lapen casen"></div>-->
    
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
      <?php foreach($season_sales as $items)  {    ?>
	    <form action="<?php echo base_url('customer/addcart'); ?>" method="Post" name="addtocart" id="addtocart" >
			<input type="hidden" name="producr_id" id="producr_id" value="<?php echo $items['item_id']; ?>" >
			<input type="hidden" name="category_id" id="category_id" value="<?php echo $items['category_id']; ?>" >
			
               <div class="item">
          <div class=" box-product-outer">
            <div class="box-product">
              <div class="img-wrapper  img_hover">
                <a href="<?php echo base_url('category/productview/'.base64_encode($items['item_id'])); ?>">
                   <img class="thumbnail"src="<?php echo base_url('uploads/products/'.$items['item_image']); ?>">
                </a>
                <div class="tags">
                  <span class="label-tags"><span class="label label-default arrowed">Featured</span></span>
                </div>
                <div class="tags tags-left">
                  <span class="label-tags"><span class="label label-danger arrowed-right">Sale</span></span>
                </div>
                <div class="option">
                  <button type="submit" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>                  
                  <a href="#" id="compare" onclick="compare(<?php echo $items['item_id']; ?>);" data-toggle="tooltip" title="Add to Compare"><i class="fa fa-align-left" ></i></a>
					<?php if($items['yes']==1){ ?>
					<a href="javascript:void(0);" data-toggle="tooltip" style="color:yellow;" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $items['item_id']; ?>);" id="addwhish" ><i class="fa fa-heart"></i></a>  
					<?php }else{ ?> 
					<a href="javascript:void(0);" data-toggle="tooltip" title="Add to Wishlist" class="wishlist" onclick="addwhishlidt(<?php echo $items['item_id']; ?>);" id="addwhish"><i class="fa fa-heart"></i></a>  
					<?php } ?>
					</div>
              </div>
              <h6><a href="<?php echo base_url('category/productview/'.base64_encode($items['item_id'])); ?>"><?php echo $items['item_name']; ?></a></h6>
              <div class="price">
                 <?php $current_date=date('m/d/Y h:ia');
			$offerexpirydate=$items['offer_expairdate'].' '.$items['offer_time'];
			if($current_date <= $offerexpirydate) {?>
				<div class="pull-left" ><?php echo ($items['item_cost'])-($items['offer_amount']); ?> 
				<span class="label-tags"><span class="label label-default">-<?php echo $items['offer_percentage']; ?>%</span></span>
				</div>
				<span class="price-old"><?php echo $items['item_cost']; ?></span>
            <?php } else{?> 
				   <span><?php echo $items['item_cost']; ?></span>
              <?php  } ?>
              </div>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <a href="#">(5 reviews)</a>
              </div>
            </div>
          </div>
            </div>
			</form>
            
      <?php  } ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- <div class="compar_btn" id="compar_btn">
   <div class="btn-group show-on-hover">
          <a href="" class="btn btn-primary" ><?php echo $topslist['item_name'];?>&nbsp;<span><?php echo count($topslist['item_id']) ?></span> 
          </a>
          <ul class="dropdown-menu" role="menu" style="position: absolute;top:-100px;height:150px;width:10px;left:-50px;opacity: 0.8;">
        <li>
          <img src="<?php echo base_url('uploads/products/'.$products_list['item_image3']); ?>" style="width: 80%;height: 80%">
        </li>
          </ul>
        </div>
      
    </div> -->
  
    <?php if($this->session->userdata('location_area') == "")   {?>

  <!--<div class="popup1" style="display: block;">
  <div class="newsletter-sign-box">
    <div class="newsletter"> <img src="<?php echo base_url(); ?>assets/home/images/close-icon.ico" alt="close" class="x" onClick="HideMe();">
      <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
        <h3>Select Your Delivery Location</h3>
        <div class="newsletter-form">
         

      <div class="input-box">
        <select name="locationid" id="locationid" class="validate-select sel_are">
        <option value="">Select Area </option>
        <?php foreach($locationdata as $location_data) {?>
        <option value="<?php echo $location_data['location_id']; ?>"><?php echo $location_data['location_name']; ?></option>

        <?php } ?>
        </select>
        <div style="display:none;" class="alert alert-danger alert-dismissible" id="address1errormsg"></div>

            <button type="button" onclick="searchlocation();" id="location_submit" class="button subscribe" name="location_submit"><span>SUBMIT</span></button>
          </div>
  
        </div>
        
        
      </form>
    </div>
 
    
  </div>

</div>-->
<div class="popup1" style="display: block;">

  <div class=" bac_loc_img  animated fadeInDown" 
						style="
						left: 0;
						margin: auto;
						min-height: 50px;
						position: fixed;
						top: 0;
						width: 100%;
						z-index: 10000;
						
						">
    <div class="newsletter"> 
		<div style="position:absolute;left:4%;top:0%">
			<img class="" style="width:60%" src="<?php echo base_url(); ?>assets/home/images/loc_logo.png" />
		</div>
		<div style="position:absolute;right:5%;top:30%">
			<span class="" style="font-size:25px;color:#187a7d;background:#fff;padding:8px;border-radius:50%"> cartinhour</span>
		</div>
      <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
      
        <div class="newsletter-form">
		<div class="row">
		<div class="col-md-3  col-md-offset-1 " style="padding-right:1px">
			<div class="box_sh_la pull-right" style="background-color:#fff;padding:8px 10px;">Select Your Delivery Location</div>
		</div>
		<div class="col-md-6 " style="padding-left:0px">
        <select style="height:37px;" name="locationid" id="locationid" class="validate-select sel_are box_sh form-control">
        <option value="">Select Area </option>
        <?php foreach($locationdata as $location_data) {?>
        <option value="<?php echo $location_data['location_id']; ?>"><?php echo $location_data['location_name']; ?></option>

        <?php } ?>
        </select>
		</div>
        <div style="display:none;" class="alert alert-danger alert-dismissible" id="address1errormsg"></div>
		<!--<div class="col-md-2 " >
            <button style="margin-top:0" type="button" onclick="searchlocation();" id="location_submit" class="button subscribe" name="location_submit"><span>SUBMIT</span></button>
          </div>-->
  
        </div>
        
        
      </form>
    </div>
    </div>
 
    
  </div>

</div>
<div id="fade" style="display: block;"></div>

  <?php } ?>
</body>
<script type="text/javascript" language="javascript">

 function searchlocation(){
   
   jQuery('#address1errormsg').show();
  
     var area=jQuery('#locationid').val();
     if(area==''){
        jQuery('#address1errormsg').html('Please Select Area');
        return false;
     }
    jQuery('#address1errormsg').html(''); 
    jQuery('#address1errormsg').hide();
    $("#location_seacrh_result").empty();
    jQuery.ajax({
        url: "<?php echo site_url('home/search_location_offers');?>",
        type: 'post',
        data: {
          form_key : window.FORM_KEY,
          address1: jQuery("#address1").val(),
          area: jQuery("#locationid").val(),
          },
        dataType: 'html',
        success: function (data) {
          jQuery('.popup1').hide();
          jQuery('#fade').hide();
          $("#location_seacrh").hide();
          $("#location_seacrh_result").show();
          $("#location_seacrh_result").append(data);

        }
      });

 }
  
  
</script>
<script type="text/javascript">
function addwhishlidt(id){
jQuery.ajax({
      url: "<?php echo site_url('customer/addwhishlist');?>",
      type: 'post',
      data: {
        form_key : window.FORM_KEY,
        item_id: id,
        },
      dataType: 'JSON',
      success: function (data) {
        jQuery('#sucessmsg').show();
        //alert(data.msg);
        if(data.msg==2){
        $('#addwhish').css("color", "");
        $('#sucessmsg').html('Product Successfully removed to Whishlist');  
        }
        if(data.msg==1){
        $('#addwhish').css("color", "yellow");
        $('#sucessmsg').html('Product Successfully added to Whishlist');  
        }
      

      }
    });
  
  
}

 function compare(id){
   //alert(id);
   //$("#compar_btn").css("display", "block");
     $.ajax({
        type: "POST",
        url: "<?php echo site_url('home/addtocompare/');?>",
        data: {id:id},
        dataType: 'html',
        success: function(data){
          //alert(data);
          $("#compar_btn").show();
          //alert( "Data Saved: " + msg );
        }
      });
     
   
 }
 $(document).ready(compare);

</script>


