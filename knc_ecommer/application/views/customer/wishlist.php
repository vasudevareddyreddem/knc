<body >
<style>
.carousel .item{
	height:450px;
	
}</style>
<div class="container mar_res_t150w" >
<?php if($this->session->flashdata('adderror')): ?>
		<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_war"> <?php echo $this->session->flashdata('adderror');?>&nbsp; <i class="fa fa-check  text-warning ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>
			<?php if($this->session->flashdata('productsuccess')): ?>
			<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_suc"> <?php echo $this->session->flashdata('productsuccess');?>&nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div></div>


			<?php endif; ?>
			<div class="row" style="min-height:500px;">
				<div class="col-md-8">
					 <?php 
			  //echo '<pre>';print_r($whistlist_items);exit;
			  $w=0;foreach($whistlist_items as $items){ ?>
			  
			   <input type="hidden" name="orginalqty" id="orginalqty<?php echo $w; ?>" value="<?php echo $items['item_quantity']; ?>" >
			  <form action="<?php echo base_url('customer/addcart'); ?>" method="Post" name="addtocart" id="addtocart" >
				<input type="hidden" name="producr_id" id="producr_id" value="<?php echo $items['item_id']; ?>" >
				<input type="hidden" name="wishlist" id="wishlist" value="1" >
				<input type="hidden" name="qty" id="qty" readonly class="form-control text-center" value="1">

         
	
            <div class="well well-sm" style="background:#fff;">
                <div class="row" style="position:relative">
				
				<div style="position:absolute;top:10px;right:50px">
					<?php if($items['item_status']==1 && $items['item_quantity']!=0 ){ ?>
                   <button style="background:none;position:relative;z-index:1024;border:none;" type="submit" ><span class="glyphicon glyphicon-shopping-cart tras_col" aria-hidden="true"></span></button>&nbsp;
                    <?php } ?> &nbsp;&nbsp;
					<a href="<?php echo base_url('customer/deletewishlist/'.base64_encode($items['id'])); ?>"><span class="glyphicon glyphicon-trash tras_col" ></span></a>
				</div>
				<div class="sm_mart_25">
                    <div class="col-xs-2 col-md-2 text-center">
                        <img class="	 whis_img" src="<?php echo base_url('uploads/products/'.$items['item_image']); ?>" alt="<?php echo $items['item_name']; ?>"
                            class="img-rounded img-responsive" />
                    </div>
                    <div class="col-xs-9 col-md-9 section-box">
                        <div  class="pull-left whish_head">

                            <?php echo $items['item_name']; ?></div>
							<div class="clearfix">&nbsp;</div>
							<div class="pad_m_320">
							
						<?php 
								$currentdate=date('Y-m-d h:i:s A');
										if($items['offer_expairdate']>=$currentdate){
											$item_price= ($items['item_cost']-$items['offer_amount']);
											$percentage= $items['offer_percentage'];
											$orginal_price=$items['item_cost'];
										}else{
											$item_price= $items['special_price'];
											$prices= ($items['item_cost']-$items['special_price']);
											$percentage= (($prices) /$items['item_cost'])*100;
											$orginal_price=$items['item_cost'];
										}
									?>
								<span style="font-size:20px;font-weight:500">₹<?php echo number_format($item_price, 2) ; ?></span> &nbsp;&nbsp;
								<span class="price-old"style="font-size:16px;color:#bbb">₹ <?php echo number_format($orginal_price, 2); ?></span>&nbsp;&nbsp;
								<span class="site_col" style="font-size:16px;"><?php echo number_format($percentage, 2, '.', ''); ?>% off</span>&nbsp;&nbsp;
							</div>
                        
                    </div>
                    </div>
				</div>
			</div>
      
	  </form>
			  
			  
			  
			  <?php $w++;} ?>
			  </div>
			  <div class="col-md-4" style="background:#fff;padding:5px 25px;">
			  <div class="">
                        <div class="widget">
                            <h3 class="subtitle">Account Navigation</h3>
                            
                            <ul class="list list-unstyled list-group list-sty-whish">
                               <a href="#"> <li class="list-group-item">
                                    My Account
                                </li>
								</a>
                                <a href="#"><li class="list-group-item">
                                    My Cart <span class="text-primary"> &nbsp; (3)</span>
                                </li>
								</a>
                                 <a href="#"><li class="list-group-item">
                                   My Order
                                </li>
								</a>
                                <a href="#"> <li class="list-group-item">
                                   Wishlist <span class="text-primary">&nbsp; (5)</span>
                                </li>
								</a>
                                <a href="#"><li class="list-group-item">
                                    Settings
                                </li></a>
                            </ul>
                        </div><!-- end widget -->
                        <hr >
                       <div class="widget ">
                            <h3 class="subtitle">New Collection</h3>
                            <div class="img_size">
                                <a href="javascript:void(0);" class="">
                                   <img class="img-responsive" src="http://localhost/knc_ecommerce/uploads/products/0.63536400 151179303271ukXERt2BL._SL1500_.jpg" alt="Featured ">
                                </a>
                            </div>
                        </div><!-- end widget -->
                        
                        <div class="widget">
                            <h3 class="subtitle">Featured</h3>
                            
                         
                                   <div class="row mar-t10">
                                   <div class="col-md-3">
								   <a href="#" class="product-image">
                                        <img src="https://rukminim1.flixcart.com/image/400/400/jatym4w0/backpack/p/y/8/historage-elt-backpack-billion-original-imafybuxynbmhghv.jpeg?q=70" alt="Sample Product ">
                                    </a>
									</div>
                                    <div class="product-details">
                                    <div class="col-md-9">
                                        <p class="product-name"> 
                                            <a href="shop-single-product-v1.html">Product name</a> 
                                        </p>
                                        <span class="price text-primary">$19.99</span>
                                        <div class="rate text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
									<div class="row mar-t10">
                                   <div class="col-md-3">
								   <a href="#" class="product-image">
                                        <img src="https://rukminim1.flixcart.com/image/400/400/jatym4w0/backpack/p/y/8/historage-elt-backpack-billion-original-imafybuxynbmhghv.jpeg?q=70" alt="Sample Product ">
                                    </a>
									</div>
                                    <div class="product-details">
                                    <div class="col-md-9">
                                        <p class="product-name"> 
                                            <a href="shop-single-product-v1.html">Product name</a> 
                                        </p>
                                        <span class="price text-primary">$19.99</span>
                                        <div class="rate text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
								<div class="mar-t10">
								<a href="#" class="btn btn-success btn-block semi-circle btn-md">All Products</a>
							</div>
                        </div><!-- end widget -->
                    </div>
			  </div>
			  
			  
		<?php if(isset($whistlist_banners) && count($whistlist_banners)>0){ ?>	  
		<div class="col-md-4 sm_hide" style=" position:fixed;top:20;right:5% ;background-color:#fff;padding:5px;width:30%" id="social-float">
			<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
			<div class='carousel-outer'>
				<!-- me art lab slider -->
				<div class='carousel-inner '>
					
					 <?php $c=0;foreach($whistlist_banners as $images){  ?>
				  
				  <?php if($c==0){  ?>
					<div class='item active'>
						<img class="img-responsive" src='<?php echo base_url('assets/wishlistpagebanners/'.$images['image']);?>' alt=''id="zoom_05"  data-zoom-image="<?php echo base_url('assets/wishlistpagebanners/'.$images['image']);?>"/>
					</div>
					  <?php }else{ ?>
						<div class='item'  id="zoom_05">
							<img class="img-responsive" src='<?php echo base_url('assets/wishlistpagebanners/'.$images['image']);?>' alt='' data-zoom-image="<?php echo base_url('assets/wishlistpagebanners/'.$images['image']);?>" />
						</div>
					  <?php  }$c++;} ?>
					
				</div>
					
				<!-- sag sol -->
				<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
					<span class='glyphicon glyphicon-chevron-left'></span>
				</a>
				<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
					<span class='glyphicon glyphicon-chevron-right'></span>
				</a>
			</div>
			
			
			</div>
		</div>
		
		
		<?php } ?>
			</div>
		
		
	 <!-- track start-->
</div>
	

<script>
function qtyincrease(id){
	var qty=document.getElementById("qty"+id).value;
	var orginalqty=document.getElementById("orginalqty"+id).value;
	if(qty==orginalqty){
		$("#maxqtyerror"+id).html("available qty is "+orginalqty).fadeIn().fadeOut(5000);
	}else{
		if(qty>10){
			$("#maxqtyerror"+id).html("Maximum allowed qty is 10 ").fadeIn().fadeOut(5000);
			document.getElementById("qty"+id).value=10;
			
		}
		
	}
	
	
}
</script>
<script>
function checkOffset() {
  var a=$(document).scrollTop()+window.innerHeight;
  var b=$('#footer-start').offset().top;
  if (a<b) {
    $('#social-float').css('bottom', '10px');
  } else {
    $('#social-float').css('bottom', (10+(a-b))+'px');
  }
}
$(document).ready(checkOffset);
$(document).scroll(checkOffset);

</script>
	