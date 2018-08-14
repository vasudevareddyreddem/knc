<style>
.navbar-nav {
   
    padding-top: 10px;
}

</style>


          
          <div class="container">
		  
            <div class="col-md-8 col-md-offset-2" style="background-color:#fff;padding:20px;margin-top:100px;border-radius:10px;">
            <div class="row">
				<div class="col-md-4 col-md-offset-5">
					<img  class="img-responsive widt_img_lo" src="<?php echo base_url();?>assets/seller_login/images/logo.png" />
				</div>

			</div>
			<hr>
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
  
 


<script type="text/javascript">
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

	
</script>
