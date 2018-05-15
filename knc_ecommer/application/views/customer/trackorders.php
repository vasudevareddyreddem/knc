<style>
.stepwizard-step p {
    margin-top: 10px;    
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;     
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.stepwizard-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
  border:2px solid #fff;

}
.font_span{
	font-size:17px;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
	border:none;
}
tr th:first-child,
tr th:last-child {
    width:40%;
	font-weight:400;
	color:#aaa;
}
</style>

<body >
  <?php if($this->session->flashdata('success')): ?>
			<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_suc"> <?php echo $this->session->flashdata('success');?>&nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>	
			<div class="alt_cus"><div class="alert_msg1 animated slideInUp btn_war"> <?php echo $this->session->flashdata('error');?>&nbsp; <i class="fa fa-check  text-warning ico_bac" aria-hidden="true"></i></div></div>

			<?php endif; ?>
			
			<?php foreach ($customer_all_order_details as $item_details){ ?>
<div class="container mar_res_t150">
		<div class="row">
		<?php //echo base64_decode($this->uri->segment('3'));
		//echo '<pre>';print_r($item_details);exit; ?>
		
	 <!-- track start-->
<div class="row">

	
			<div class="panel panel-default ">
			<div class="panel-heading">
			
			<div class="col-md-4">
					<div class="col-md-4 col-xs-3">
						<img style="width:60px" src="<?php echo base_url('uploads/products/'.$item_details['item_image']);?>" />
					</div>
					<div class="col-md-8 col-xs-9">
						<p><a  style="text-transform: uppercase;" href="<?php echo base_url('category/productview/'.base64_encode($item_details['item_id'])); ?>">  <td><?php echo isset($item_details['item_name'])?$item_details['item_name']:'';  ?></td></a></p>
						<div><p ><?php echo $item_details['return_policy']; ?>  </p></div>
					
					</div>
				</div>
				<div class="col-md-5">
					<div class="stepwizard">
						<div class="stepwizard-row">
							<div class="stepwizard-step">
							
								<?php if($item_details['status_confirmation']==1){ ?>
								<button type="button" class="btn btn-primary btn-circle">1</button>
								<?php }else{ ?>
								<button type="button" class="btn btn-defaultt btn-circle" disabled="disabled">1</button>
								<?php } ?>
								<p>Order Confirmation</p>
							</div>
							<div class="stepwizard-step">
								<?php if($item_details['status_packing']==2){ ?>
								<button type="button" class="btn btn-primary btn-circle">2</button>
								<?php }else{ ?>
								<button type="button" class="btn btn-defaultt btn-circle"disabled="disabled">2</button>
								<?php } ?>
								<p>Packing Order</p>
							</div>
							<div class="stepwizard-step">
								<?php if($item_details['status_road']==3){ ?>
								<button type="button" class="btn btn-primary btn-circle">3</button>
								<?php }else{ ?>
								<button type="button" class="btn btn-defaultt btn-circle" disabled="disabled">3</button>
								<?php } ?>
								<p>Order on Road</p>
							</div> 
							<div class="stepwizard-step">
									<?php if($item_details['status_deliverd']==4){ ?>
								<button type="button" class="btn btn-primary btn-circle">4</button>
								<?php }else{ ?>
								<button type="button" class="btn btn-defaultt btn-circle" disabled="disabled">4</button>
								<?php } ?>
								<p>Delivered</p>
							</div> 
							</div> 
					</div>
				

				</div>
				<div class="col-md-3">
					<div class="col-md-3">
							<span class="font_span">₹<?php echo number_format((isset($item_details['total_price'])?$item_details['total_price']:''), 2);  ?></span>
					</div>
					
				</div>
			<div class="clearfix"></div>
			</div>
				<div class="panel-body">
				<div class="col-md-4" style="border-right:1px solid #45b1b5">
				<table class="table " >
					<div><h5>ORDER DETAILS</h5></div>
					<tbody>
					<tr>
					<th>Order ID</th>
					<td><?php echo isset($item_details['order_item_id'])?$item_details['order_item_id']:'';  ?></td>

					</tr>
					<tr>
					<th>Item Name</th>
					<td style="text-transform: uppercase;"><?php echo isset($item_details['item_name'])?$item_details['item_name']:'';  ?></td>

					</tr>
					<tr>
					<th>Qty</th>
					<td><?php echo isset($item_details['qty'])?$item_details['qty']:'';  ?></td>

					</tr>
					<tr>
					<th>Seller</th>
					<td><?php echo isset($item_details['store_name'])?$item_details['store_name']:'';  ?></td>

					</tr>
					<tr>
					<th>Order Date</th>
					<td><?php echo isset($item_details['create_at'])?Date('M-d-Y h:i:s A',strtotime(htmlentities($item_details['create_at']))):'';  ?></td>

					</tr>
					<tr>
						<th>Amount </th>
						<?php if(isset($item_details['payment_type']) && $item_details['payment_type']==4){ ?>
						<td>₹ <?php echo number_format($item_details['total_price'], 2); ?>   through &nbsp; Paytm</td>
						<?php }else if(isset($item_details['payment_type']) && $item_details['payment_type']==3){ ?>
						<td>₹ <?php echo number_format($item_details['total_price'], 2); ?>   through &nbsp; Swipe on Delivery</td>
						<?php }else if(isset($item_details['payment_type']) && $item_details['payment_type']==2){ ?>
						<td>₹ <?php echo number_format($item_details['total_price'], 2); ?>   through &nbsp; Cash On Delivery</td>
						<?php }else if(isset($item_details['payment_type']) && $item_details['payment_type']==1){ ?>
						<td>₹ <?php echo number_format($item_details['total_price'], 2); ?>  through &nbsp; <?php echo isset($item_details['payment_mode'])?$item_details['payment_mode']:'';  ?></td>
						<?php } ?>
					</tr>
					<tr>
						<th>Amount Status </th>
					<td>
					<?php if($item_details['status_confirmation']==5){ 
							if(isset($item_details['amount_status_paid']) && $item_details['amount_status_paid']==1){
								echo "your payment would be refunded";
							}else{
								echo "order cancelled";
							}
						} else{
							if(isset($item_details['amount_status_paid']) && $item_details['amount_status_paid']==1)
								{
									echo "Paid";
								}else{
									echo "Pending";

								}
						}
						?>
					</td>
				

					</tr>
					<tr>
					<th>Status</th>
					<td>
					<?php if($item_details['status_confirmation']==5){ 
					
					echo "cancelled";
					
					 }else { ?>
					 <?php if($item_details['status_confirmation']==5){ 
					
					echo "cancelled"; 
					}else{ 
					
							if($item_details['status_confirmation']==1 && $item_details['status_packing']==''){
								echo "Order Confirmed ";  
							  }else if($item_details['status_confirmation']==1 && $item_details['status_packing']==2 && $item_details['status_road']==''){
								  echo "Packing Order";
							  }else if($item_details['status_confirmation']==1 && $item_details['status_packing']==2 && $item_details['status_road']==3 && $item_details['status_deliverd']=='' || $item_details['status_deliverd']==0){
								  echo "Order on Road";
							  }else if($item_details['status_confirmation']==1 && $item_details['status_packing']==2 && $item_details['status_road']==3 && $item_details['status_deliverd']==4 && $item_details['status_refund']==''){
								  echo "Delivered";
							  }else if($item_details['status_refund']!=''){
								 echo $item_details['status_refund']; 
							  }
					  
					}
					  ?>
					<?php } ?>
					</td>

					</tr>
					 <?php if(isset($item_details['delivery_amount']) && $item_details['delivery_amount']!='' && $item_details['delivery_amount']!=0){ ?>

					<tr>
					<th>Delivery Amount</th>
					<td>₹<?php echo isset($item_details['delivery_amount'])?$item_details['delivery_amount']:'';  ?></td>

					</tr>
					 <?php } ?>
					
				</tbody>
				</table>
				</div>
				<div class="col-md-4" style="border-right:1px solid #45b1b5">
				<table class="table " >
	<div><h5>Delivery location Address Details</h5></div>
		   <tbody>
			<tr><th>Name </th><td><?php echo isset($item_details['name'])?$item_details['name']:'';  ?></td></tr>
			<tr><th>Email Address </th><td><?php echo isset($item_details['emal_id'])?$item_details['emal_id']:'';  ?></td></tr>
			<tr><th>Address </th><td><?php echo isset($item_details['customer_address'])?$item_details['customer_address']:'';  ?></td></tr>
			<tr><th>Land Mark </th><td><?php echo isset($item_details['landmark'])?$item_details['landmark']:'';  ?></td></tr>
			<tr><th>City </th><td> <?php echo isset($item_details['city'])?$item_details['city']:'';  ?></td></tr>
			<tr><th>State </th><td> <?php echo isset($item_details['state'])?$item_details['state']:'';  ?></td></tr>
			<tr><th>Pincode </th><td> <?php echo isset($item_details['pincode'])?$item_details['pincode']:'';  ?></td></tr>
			
			<tr><th>Phone </th><td> <?php echo isset($item_details['mobile'])?$item_details['mobile']:'';  ?></td></tr>
			<!--<p><strong>Delivery location area :<?php echo isset($item_details['location_name'])?$item_details['location_name']:'';  ?></strong></p>
		-->
		    </tbody>
    </table>

				</div>
				<div class="col-md-4" >
				<?php if($item_details['status_deliverd']==4 && $item_details['order_status']!=5){ ?>
				<div><a class="site_col" href="<?php echo base_url('customer/orderrefund/'.base64_encode($item_details['order_item_id'])); ?>"><h5>Return</h5></a></div>
				<?php } ?>
				</div>

		
					
				<div   class="clearfix">&nbsp;</div>
			
				
			
						<br>
					
					<hr	>
					<div class="col-md-6"><span><img src="<?php echo base_url(); ?>assets/home/images/track.png" /></span> &nbsp; 
					<i class="font_span">
					<?php if(isset($item_details['status_deliverd']) && $item_details['status_deliverd']!=4){ ?>
					Delivery expected by <?php echo isset($item_details['expected_delivery_time'])?$item_details['expected_delivery_time']:'';  ?>
					
					<?php } ?>
					</i>
					</div>
				<div class="col-md-3 col-md-offset-3">
						<span class="font_span"><b>Total</b></span>&nbsp;&nbsp;
						<span class="font_span">₹<?php echo number_format(($item_details['total_price']+$item_details['delivery_amount']), 2); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php if(isset($item_details['discount']) && $item_details['discount']!=''){ ?>
						<span class="font_span site_col">Savings</span>&nbsp;&nbsp;
						<span class="font_span">₹<?php echo isset($item_details['discount'])?$item_details['discount']:'';  ?></span>
						<?php } ?>
				</div>
	<div class="clearfix"></div><br>
			</div>
		</div>
		</div>
		

	 <!-- track end-->
	   
	   </div>
	</div>
	<?php } ?>
	
<script>
var __slice = [].slice;

(function($, window) {
    var Starrr;

    Starrr = (function() {
        Starrr.prototype.defaults = {
            rating: void 0,
            numStars: 5,
            change: function(e, value) {}
        };

        function Starrr($el, options) {
            var i, _, _ref,
                _this = this;

            this.options = $.extend({}, this.defaults, options);
            this.$el = $el;
            _ref = this.defaults;
            for (i in _ref) {
                _ = _ref[i];
                if (this.$el.data(i) != null) {
                    this.options[i] = this.$el.data(i);
                }
            }
            this.createStars();
            this.syncRating();
            this.$el.on('mouseover.starrr', 'i', function(e) {
                return _this.syncRating(_this.$el.find('i').index(e.currentTarget) + 1);
            });
            this.$el.on('mouseout.starrr', function() {
                return _this.syncRating();
            });
            this.$el.on('click.starrr', 'i', function(e) {
                return _this.setRating(_this.$el.find('i').index(e.currentTarget) + 1);
            });
            this.$el.on('starrr:change', this.options.change);
        }

        Starrr.prototype.createStars = function() {
            var _i, _ref, _results;

            _results = [];
            for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                _results.push(this.$el.append("<i class='fa fa-star-o'></i>"));
            }
            return _results;
        };

        Starrr.prototype.setRating = function(rating) {
            if (this.options.rating === rating) {
                rating = void 0;
            }
            this.options.rating = rating;
            this.syncRating();
            return this.$el.trigger('starrr:change', rating);
        };

        Starrr.prototype.syncRating = function(rating) {
            var i, _i, _j, _ref;

            rating || (rating = this.options.rating);
            if (rating) {
                for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                    this.$el.find('i').eq(i).removeClass('fa-star-o').addClass('fa-star');
                }
            }
            if (rating && rating < 5) {
                for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                    this.$el.find('i').eq(i).removeClass('fa-star').addClass('fa-star-o');
                }
            }
            if (!rating) {
                return this.$el.find('i').removeClass('fa-star').addClass('fa-star-o');
            }
        };

        return Starrr;

    })();
    return $.fn.extend({
        starrr: function() {
            var args, option;

            option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
            return this.each(function() {
                var data;

                data = $(this).data('star-rating');
                if (!data) {
                    $(this).data('star-rating', (data = new Starrr($(this), option)));
                }
                if (typeof option === 'string') {
                    return data[option].apply(data, args);
                }
            });
        }
    });
})(window.jQuery, window);

$(function() {
    return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#stars').on('starrr:change', function(e, value){
    $('#count').html(value);
	document.getElementById("count").value=value;
  });

});
$(document).ready(function(){
    $("#review").click(function(){
        $(".rev_form").toggle();
    });
});

$(document).ready(function() {
    $('#addreview').bootstrapValidator({
       
        fields: {
            
			
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
			review: {
               validators: {
					notEmpty: {
						message: 'Please enter a review'
					}
				}
            }
        }
    });
});
</script>

 