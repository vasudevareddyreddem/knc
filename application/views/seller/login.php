<style>
.navbar-nav {
   
    padding-top: 10px;
}

</style>

<html>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

     <div class="form-body">
          
          <div class="tab-content">
            <div id="sectionA" class="tab-pane fade in active">
            <div class="row">
            <div class="col-xs-6 bor_lef">
            <div class="innter-form" id="temp_pas_hi" >
              <form method="post"  name="login_form" id="login_submit">
              <div id="login-response"></div>
                <div id="EmptyforError"></div><div id="forgot-response1"></div>
            <div class="form-group">
              <label >Email Address / Mobile Number</label>
              <input  name="login_email" id="login_email" class="form-control" type="text" name="username" autofocus>
            </div>
            <div class="form-group" >
              
              <label >Password</label>
              <input  id="login_password" name="login_password" class="form-control" type="password" name="password">
              </div>
              <div class="col-md-6 paddingRightZero">
                <div class="pswrd ">
                    <a href="#" tabindex="5" class="forgot-password" id="un_log" >Unable to Login?</a>
                </div>
              </div>
              <button class="btn btn-primary pull-right  btn-block " type="submit" id="login_do">Sign In</button>
                    
              </form>
            </div>
			<div class="clearfix"></div>
			
			<div class=" pass_list" style="display:none" id="temp_pass">
			<h4 class="text-primary" > Temporary Password </h4> 
		
                      <label style="font-size:15px;margin-bottom:10px">How do you want temporary password to be send:</label>  
						<div class="clearfix"> </div>                    
                        <form id="login_pass" name="login_pass" method="post"> 
                        <input type="radio" name="unable_login" id="unable_login" value="1" > E-Mail 
                        <input type="radio" name="unable_login" id="unable_login" value="0" > Mobile
                        <div id="forgoterror"></div>
                        <div id="forgot-response"></div>
                        <input type="text" class="form-control" id="forgot_mobile" name="forgot_mobile">
                         <span id="MobileforErr"></span>
						<span id="otp_code" style="display:none;">
						  <div style="font-size:15px;margin-bottom:10px;">OTP CODE:
							<input type="text" class="form-control" id="otp_number" name="otp_number">
						 </div>
						  <div style="font-size:15px;margin-bottom:10px">Password:
							<input type="password" class="form-control" id="forgot_password" name="forgot_password">
						 </div>
						 <div style="font-size:15px;margin-bottom:10px">Confirm Password:
							<input type="password" class="form-control" id="confirm_password" name="confirm_password">
						 </div>
						</span>
						
                      <a id="log_f" class="pull-right" style="margin:3px 0px;cursor: pointer;text-decoration: none;">Login</a>
					  <div class="clearfix"></div>
                     
                      <a href="javascript:void(0)"  onclick="validationcheckings();"   id="unableloginfield" class="btn btn-success btn-block">Submit</a>
					  <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-xs-6 ">
              <div class="innter-form">
              <div id="register-response"></div>
                <div id="Emptyforregister"></div>
                <form  name="register_form" id="register_submit" method="POST">
                <label>Enter your Mobile Number</label>
                <input   class="form-control" type="text" maxlength="10" id="seller_mobile" name="seller_mobile" autofocus>
                <input type="checkbox" name="check_tac" id="check_tac" >
              <a href="<?php echo base_url('seller/login/termsandconditions'); ?>">Terms and Conditions</a>
              <label>Enter Refer Code</label>
              <input   class="form-control" type="text" maxlength="6" id="any_ref" name="any_ref" value="">
              </div>
              <div class="clearfix"></div>
			  <label>&nbsp;</label>
              <input type="button" onclick="newregister();" class="btn btn-primary  btn-block  " name="register_do" id="register_do" value="Register">
              <!-- <button class="btn btn-primary btn-sm mar_t10" type="submit">Get OTP</button> -->
              </form>
            </div>
            </div>
           
          </div>
        </div>
          </div>

<div class="clearfix"></div>

 
 </body>
  
  <!--body end here --> 

<script>

function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function myFunction1() {
    var x = document.getElementById('myDIV1');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
function myFunction2() {
    var x = document.getElementById('myDIV2');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>
  
  
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
  
  
  <script type="text/javascript">
$(document).ready(function()
{
$("#cih_id").change(function()
{
var id=$(this).val();
//alert(id);
var dataString = 'cih_id='+ id;
$.ajax
({
type: "POST",
 url: "<?php echo base_url();?>seller/pricing_calculator/getajaxcih",
data: dataString,
cache: false,
success: function(data)
{
  //alert(data);
$("#cihfee").html(data);
} 
});

});
});
</script>




<script type="text/javascript">
$(document).ready(function()
{
$("#cih1_id").change(function()
{
var id=$(this).val();
//alert(id);
var dataString = 'cih1_id='+ id;
$.ajax
({
type: "POST",
 url: "<?php echo base_url();?>seller/pricing_calculator/getajaxcih1",
data: dataString,
cache: false,
success: function(data)
{
  //alert(data);
$("#cihfee1").html(data);
} 
});

});
});
</script>




<script type="text/javascript" language="javascript">
      $(document).ready(function(){
    $('#calfee_submit').click(function(e){
    e.preventDefault();
 

   var cih1_id =  $("#cih1_id").val();
     var product_price = $("#product_price").val();
     var re = /^[+]?([0-9]+)$/;
    var text = $("#product_price").val();
  var isValid = (text.match(re) == null);
  //alert(isValid);
   var cih_fee1 = $("#cih_fee1").val();

  
  if (cih1_id == "")
    {
    $("#CatErr").html("Please Select Category").css("color", "#006a99").fadeIn().fadeOut(5000);
    return false;
    }
    else{
      $("#CatErr").html("");
    }
  if (product_price == "")
    {
    $("#prdErr").html("Please Enter your Product Selling Price").css("color", "#006a99").fadeIn().fadeOut(5000);
    return false;
    }
    else{
      $("#prdErr").html("");
    }
  if (isValid)
    {
    $("#TermsErr").html("Please Enter Price only +ve Numbers").css("color", "#006a99").fadeIn().fadeOut(5000);
    return false;
    }
    else{
      $("#TermsErr").html("");
    }
    
 
    $.ajax({
    type: "POST",
    url: '<?php echo base_url() ?>seller/pricing_calculator/getreferalfee',
    data: {product_price:product_price,cih_fee1:cih_fee1},
    success:function(data)
    {
	$("#refclose").html(data);
	$('#demo3').show();
    $('#demoki').show();
  
    }
    });
    });
    
    });
  

</script>





<script type="text/javascript" language="javascript">
      $(document).ready(function(){
    $('#profit_submit').click(function(e){
    e.preventDefault();

    var youmake = $("#you_make").val();
    //alert(youmake);
    var re = /^[+]?([0-9]+)$/;
    var text = $("#actual_price").val();
  var isValid = (text.match(re) == null);
    //alert(isValid);
  
  var actual_price = $("#actual_price").val();

  
  if (actual_price == "")
    {
    $("#TermsErr15").html("Please Enter Product Price").css("color", "#006a99").fadeIn().fadeOut(5000);
    return false;
    }
    else{
      $("#TermsErr15").html("");
    }
    if (product_price == "")
    {
    $("#TermsErr15").html("Please Enter your Product Selling Price").css("color", "#006a99").fadeIn().fadeOut(5000);
    return false;
    }
    else{
      $("#TermsErr15").html("");
    }
    if (isValid)
    {
    $("#TermsErr15").html("Please Enter Price only +ve Numbers").css("color", "#006a99").fadeIn().fadeOut(5000);
    return false;
    }
    else{
      $("#TermsErr15").html("");
    }
    
  
 
    $.ajax({
    type: "POST",
    url: '<?php echo base_url() ?>seller/pricing_calculator/getajaxprofit',
    data: {you_make:youmake,actual_price:actual_price},
    success:function(data)
    {
      
   $("#total_cal").html(data);
   
    
    }
    });
    });
    });
  

</script>
<script>
	new WOW().init();
</script>

<script src="<?php echo base_url(); ?>assets/dist/js/bootstrapValidator.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#contact').bootstrapValidator({
            fields: {
                fname: {
                    validators: {
                        notEmpty: {
                            message: 'First Name is required'
                        },
                        regexp: {
                            regexp:/^[a-zA-Z. ]+$/,
                            message: 'First Name can only consist of alphanumaric, space and dot'
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
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Phone Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10}$/,
                            message: 'Phone Number consist only Numbers and must be 10 digits'
                        }
                    }
                },
                message: {
                    validators: {
                        notEmpty: {
                            message: 'Message is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9,. ]{6,250}$/,
                            message: 'Message Between 6 to 250 Characters'
                        }
                    }
                }
            }
        });
    });
</script>