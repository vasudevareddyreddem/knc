<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Knc Seller</title>
<link rel="icon" href="<?php echo base_url();?>assets/seller_login/images/fav.ico" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Mogra|Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/font-awesome.min.css" />
<!--style start here -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/style.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/seller_login/css/custom.min.css" />
<!--style end here -->
<!--javascript start here -->
<script src="<?php echo base_url();?>assets/seller_login/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/seller_login/js/custom.js"></script>




<!--javascript end here -->


</head>


<body style="background-color:#ddd;">

      
      
      
<script>
	$(document).ready(function(){
		$("#un_log").click(function(){
			$("#temp_pas_hi").hide();
			$("#temp_pass").show();
		});
		
	});
	$(document).ready(function(){
		$("#log_f").click(function(){
			$("#temp_pass").hide();
			$("#temp_pas_hi").show();
		});
		
	});
</script>
<script>
function IcsLemail(reasontype) {
        var regex = /^[0-9]{10}$/;
        return regex.test(reasontype);
 }
function newregister(){
	    var register = $("#seller_mobile").val();
		var any_refer = $('#any_ref').val();
		if(register=="")
		{
			$("#Emptyforregister").html("Please Enter Mobile Number").css("color", "red");
			$("#seller_mobile").focus();
			return false;
		}else if(register!=''){
			var lcemail = document.getElementById('seller_mobile').value;
            if (!IcsLemail(lcemail)) {
            $("#Emptyforregister").html("Please Enter Correct Mobile Number").css("color", "red");
            jQuery('#seller_mobile').focus();
            return false;;
            }
		}
		 var chkPassport = document.getElementById("check_tac");
        if (chkPassport.checked) {
        } else {
			$("#Emptyforregister").html("Please agree Terms and Conditions").css("color", "red");
			return false;
        }
		$("#Emptyforregister").html('');
		$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>seller/login/insert',
				data: {seller_mobile:register,any_ref:any_refer},
				success:function(data)
					{
						if(data == 0)
						{
						$("#Emptyforregister").html("The Phone Number you entered already exist..").css("color", "red");
						}else if(data == 1)
							{
							document.location.href='<?php echo base_url('seller/adddetails'); ?>'; 
							}
					},
				});
						
	
}
function IsMobile(reasontype) {
        var regex = /^[0-9]{10}$/;
        return regex.test(reasontype);
        }
function emailchecking(reasontype) {
    var regex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    return regex.test(reasontype);
}
 function validationcheckings (){
     
     $("#forgot-response").html("");
     $("#Emptyforregister").html("");
	 
	 var styles=document.getElementById("otp_code").style.display;
	 if(styles==''){
		  var otpval = document.getElementById('otp_number').value;
		  var passwords = document.getElementById('forgot_password').value;
		  var confirmpasswords = document.getElementById('confirm_password').value;
		 if(otpval==''){
             $("#forgoterror").html("Please Enter OTP").css("color", "red");
              return false;
          }
		  if(passwords==''){
             $("#forgoterror").html("Please Enter your password").css("color", "red");
              return false;
          }else if(passwords!=''){
			  if(passwords.length>5){
				  
			  }else{
				 $("#forgoterror").html("Password length must be at least six characters").css("color", "red");
				 return false;
			  }
			  
			  
		  }
		  if(confirmpasswords==''){
             $("#forgoterror").html("Please Enter your Confirmpassword").css("color", "red");
              return false;
          }else if(passwords!=''){
			  if(confirmpasswords.length>5){
				  
			  }else{
				 $("#forgoterror").html("Confirmpassword length must be at least six characters").css("color", "red");
				 return false;
			  }
			  
			  
		  }
	 }
      var radiovalue=$('input[name="unable_login"]:checked').val();
      //alert(radiovalue);
      if(radiovalue==1 || radiovalue==0){
        
      if(radiovalue==0){
          var mobile = document.getElementById('forgot_mobile').value;
          
          if(mobile==''){
              
              $("#forgoterror").html("Please Enter Mobile Number").css("color", "red");
              return false;
          }else{
              
             
             var mobile = document.getElementById('forgot_mobile').value;
            if (!IsMobile(mobile)) {
            $("#forgoterror").html("Please Enter Correct Mobile Number").css("color", "red");
            jQuery('#seller_mobile').focus();
            return false;
            } 
          }
          $("#forgoterror").html("");
            $("#forgot_submit").html("");
            document.getElementById("unableloginfield").disabled = true;
            $.ajax({
              
                    type: 'post',
                    data: {
                    form_key : window.FORM_KEY,
                    mobile_number: jQuery('#forgot_mobile').val(),
                    otp: jQuery('#otp_number').val(),
                    password: jQuery('#forgot_password').val(),
                    conpassword: jQuery('#confirm_password').val(),
                    option: 0,
                    },
                    
                    dataType: 'json',
                    url: '<?php echo base_url("seller/login/forgot"); ?>',
                    success:function(data)
                    {
                    //document.getElementById("unableloginfield").disabled = false;
                    if(data.sendmsg==1){
						$("#otp_code").show();
                            
                            return true;
                        }if(data.sendmsg==0){
							document.getElementById("unableloginfield").disabled = false;
                            $("#forgot-response").html("Some technical problem are occured").css("color", "red");
                        }
                        if(data.nomobile==0){
							document.getElementById("unableloginfield").disabled = false;
                            $("#forgoterror").html("The Mobile you entered is not a registered Mobile. Please try again").css("color", "red");
                            return false;
                        }if(data.pass==1){
							$("#myModal1").fadeOut(1);
							$("#forgoterror").html('');
							$("#forgot_mobile").val('');
							$("#forgot_password").val('');
							$("#confirm_password").val('');
							$("#otp_number").val('');
							$("#otp_code").hide();
							$("#temp_pass").hide();
							$("#temp_pas_hi").show();
                            $("#forgot-response1").html("Password Successfully updated").css("color", "Green").fadeIn().fadeOut(5000);
						}if(data.pass==0){
							document.getElementById("unableloginfield").disabled = false;
                            $("#forgoterror").html("Your entered  OTP code is wrong. Please try again").css("color", "red");
						}if(data.conpass==0){
							document.getElementById("unableloginfield").disabled = false;
                            $("#forgoterror").html("password and confirm password was not matched. Please try again").css("color", "red");
						}
                    }
                    
            });
        
          
      }
        
      if(radiovalue==1){
          var email = document.getElementById('forgot_mobile').value;
          if(email==''){
              $("#forgoterror").html("Please Enter Email").css("color", "red");
              return false;
          }else{
              
              if (!emailchecking(email)) {
            $("#forgoterror").html("Please enter a valid email address. For example johndoe@domain.com").css("color", "red");
            jQuery('#seller_mobile').focus();
            return false;
            }
          }
            $("#forgoterror").html("");
            $("#forgot_submit").html("");
            $("#forgot_submit").html("");
			document.getElementById("unableloginfield").disabled = true;
                $.ajax({
                    type: 'post',
                    data: {
                    form_key : window.FORM_KEY,
                    mobile_number: jQuery('#forgot_mobile').val(),
					otp: jQuery('#otp_number').val(),
					password: jQuery('#forgot_password').val(),
                    conpassword: jQuery('#confirm_password').val(),
                    option: 1,
                    },
                    
                    dataType: 'json',
                    url: '<?php echo base_url("seller/login/forgot"); ?>',
                    success:function(data)
                    {
                         $('#EmptyforError').hide();
						if(data.mailsend==1){
                            $("#otp_code").show();
							document.getElementById("unableloginfield").disabled = false;
                            return true;
                        }
                        if(data.noemail==0){
                            $("#forgot-response").html("The Email you entered is not a registered email. Please try again").css("color", "red").fadeIn().fadeOut(5000);
                            document.getElementById("unableloginfield").disabled = false;
                            return false;
                        }
						if(data.pass==1){
							$("#myModal1").fadeOut(1);
							$("#forgoterror").html('');
							$("#forgot_mobile").val('');
							$("#forgot_password").val('');
							$("#otp_number").val('');
							$("#otp_code").hide();
							$("#temp_pass").hide();
							$("#temp_pas_hi").show();
                            $("#forgot-response1").html("Password Successfully updated").css("color", "Green").fadeIn().fadeOut(5000);
						}if(data.pass==0){
							document.getElementById("unableloginfield").disabled = false;
                            $("#forgoterror").html("Your entered  OTP code is wrong. Please try again").css("color", "red");
						}
                    }
            });
      
      }
        
          
    
 }else{
     $("#forgoterror").html("Please select one option").css("color", "red");
     return false;
 }
 
 }

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 500) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-fixed-top").addClass("mar_t50");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

</script>
<script type="text/javascript" language="javascript">

   
  
   $(window).scroll(function() {
if ($(this).scrollTop() > 100) {
$('.hm_nav').addClass('affix');
$('.hm_nav').addClass('animated fadeInDown');
}
else{
$('.hm_nav').removeClass('affix');
$('.hm_nav').removeClass('animated fadeInDown');
}
 });
</script>

<!--script for scrolling pages-->
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top 
      }, 1500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


</script>




<script type="text/javascript">
$(document).ready(function(){
    $("#login_do").click(function(e){
    e.preventDefault();
    var login_email = $("#login_email").val();
  var login_password = $("#login_password").val();
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(login_email == "" && login_password == "" )
    {
    $("#EmptyforError").html("Please Enter email and password").css("color", "red").fadeIn().fadeOut(5000);
    $("#login_email").focus();
    return false;
    }
    if(login_email == ""){
    $("#EmptyforError").html("Please Enter email").css("color", "red").fadeIn().fadeOut(5000);
    $("#login_email").focus();
    return false;   
    }
    if(login_password == ""){
    $("#EmptyforError").html("Please Enter Password").css("color", "red").fadeIn().fadeOut(5000);
    $("#login_email").focus();
    return false;   
    }
  else{
  $("#EmptyforError").html(""); 
  }
    // if(login_email !="" && login_email .match(mailformat)) 
    //   {
    //     $("#EmptyforError").html("");
    //   }
    //   else if(login_email !="" && !login_email .match(mailformat)){  
    //     $("#EmptyforError").html("Invalid Email Format").css("color", "red");
    //     $("#login_email").focus();
    //     return false;
    //     }
    $.ajax({
    type: "POST",
    url: '<?php echo base_url('seller/login/do_login'); ?>',
    data: {login_email:login_email,login_password:login_password},
    success:function(data)
    {
    if(data == 1)
    {
		$("#login-response").html("Invalid Email / Mobile Number  or password.").css("color", "red").fadeIn().fadeOut(5000);
		$('#login_submit')[0].reset(); 
    }else if(data==2){
		$("#login-response").html("Your account deactivated. Please contact to system admin").css("color", "red").fadeIn().fadeOut(9000);
		$('#login_submit')[0].reset(); 	
	}
    else if(data == 0)
    {
    window.location='<?php echo base_url("seller/dashboard"); ?>'; 
    }
    },
    error:function()
    {
    $("#login-response").html("Oops! Error.  Please try again later!!").fadeIn().fadeOut(5000);
    }
    });
    });
    });
</script>



<!-- register script -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
    $("#togg_menu").click(function(){
        $(".cust_togg_menu").slideToggle("slow");
    });
     $(document).click(function (e) {
        if (!$(e.target).closest('#togg_menu, .cust_togg_menu').length) {
            $('.cust_togg_menu').stop(true).slideUp();
        }
    });
});
</script>