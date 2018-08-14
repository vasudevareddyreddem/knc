<div class="content-wrapper mar_t_con" >
<section class="content-header">
		<div class="header-icon">
			<i class="pe-7s-note2"></i>
		</div>
		<div class="header-title">
			<form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>  
			<h1>OUR SERVICES</h1>
			<small>Services</small>
			<ol class="breadcrumb hidden-xs">
				<li><a href="<?php echo base_url('seller/dashboard');?>"><i class="pe-7s-home"></i> Home</a></li>
				<li class="active">OUR SERVICES</li>
			</ol>
		</div>
	</section>
  <section class="content ">
  
  <div class="faq_main">
   
<section id="ourservices_scr">

 
<div class="srvices_main1 ">
<div class="row">
    <div class="col-lg-6  col-md-6 col-sm-4">
      <div class="service_first ">
      <img  class="img-responsive thumbnail" src="<?php echo base_url();?>assets/seller/images/inv_m.png" />
          <h1 class="heading">Inventory management</h1>
          <p>We provide complete product listing to inventory update & order process</p>
          
      
           <br>
          <!-- <button class="btn btn-primary btn-sm"onclick="myFunction()" >Know more</button> -->
           
      </div>
    </div>
                            
     <div class="col-lg-6  col-md-6 col-sm-4">
      <div class="service_first wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
        <img  class="img-responsive thumbnail" src="<?php echo base_url();?>assets/seller/images/cat_m.png" />
      <h1 class="heading">Catalog Management</h1>
      
        <p>We have expert team to make proper product digital catalog which provide good customer experience increase </p><br>
        
         
         
    </div>
    </div>
              <div class="clearfix"></div><p>&nbsp;</p>
  
  <div class="clearfix"></div>
  

       
 <div class="clearfix">   </div>  


 <button id ="bnt" type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal_ser">Pricing details</button>


                            
</div>
</div>
</section>


   
  
 
  </div>
     </section>
  </div>
  
  	<div class="modal animated  zoomIn" id="myModal_ser" role="dialog">
    <div class="modal-dialog modal-lg " style="width: 1200px;">
    
      <!-- Modal content-->
     <div class="modal-content"  >
   
        <div class="modal-body" style="padding:0px;margin-top:-22px;">
		<span type="button" class="close " data-dismiss="modal" style="position:absolute;top:12px;right:12px">&times;</span>
		<img style="width:100%;" class="img-responsive" src="<?php echo base_url();?>assets/seller/images/price_hide.png" />
		<div style="position: absolute;top:50%;color:#ddd;right:36%; background:#ed4916;border-radius:5px;padding:15px;">
			<p style="font-size:30px;"><b>Limited period offer</b></p>		
			<p style="font-size:20px;margin-left:72px;">Free for 1 month</p>		<br>
			<span id="bntt" style="background:#006a99;padding:5px 10px ;border-radius:5px;font-size:18px;margin-left: 85px;cursor: pointer;" class="" data-dismiss="modal"  data-toggle="modal"
			data-target="#myModal_sel_mod_en">Enquiry form</span>
		</div>
     
</div>
        </div>
        
      </div>
      
    </div>
	<!--Just fill form to Select plan modal -->
  <div class="modal fade" id="myModal_sel_mod_en" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     <div class="modal-content">
   
        <div class="modal-header " style="background-color:#006a99;color:#fff;padding:10px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Enquiry form</h4>
        </div>
        <div class="modal-body">
          <div class="container">
  <div class="row">
    <div class="col-md-6">
                
<div class=" orm-horizontal" >
  <div class="form-group">
      <label class="control-label col-sm-4" for="">Mobile Number</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" maxlength="10" id="phone_number" placeholder="Enter Mobile Number" name="Mobile_number" required>
	<span id="Emptyforregister"></span>     
	 </div>
	  
    </div> 
	  </br></br></br><div class="clearfix"></div>
  <div class="form-group">
      <label class="control-label col-sm-4" for="">Select Plan :</label>
      <div class="col-sm-8">   
      <div id="register-response"></div>
            
        <select class="form-control" id="plan" name="plan" required="required">
        <option>Select Plan</option>
        <option value="Both">Both</option>
        <option value="Inventory management">Inventory management</option>
        <option value="Catalog Management">Catalog Management</option>
      </select>
	  <div id="selecrpalnerror"></div> 
      </div>
	   
   </div>
  </br></br>
  
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button  name="enquery_form" id="enquery_form" onclick="validation();" class="btn btn-primary" value="Send">Send</button>
      </div>
    </div>
	</div>
  
      </div>
      <div class="col-md-3">&nbsp;</div>
      
  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

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
  <!--body end here --> 
  <script type="text/javascript">
  
  
  function IsLcemail(reasontype) {
        var regex = /^[0-9]{10}$/;
        return regex.test(reasontype);
		}
  function validation(){
	  var mobile = $("#phone_number").val();
	  if(mobile==''){
		$("#Emptyforregister").html("Please Enter Mobile Number").css("color", "red");
		$("#phone_number").focus();
		return false;
	  }else {
		  $("#Emptyforregister").html("");
		 }
	  if(mobile!=''){
		  var lcemail = document.getElementById('phone_number').value;
		if (!IsLcemail(lcemail)) {
			$("#Emptyforregister").html("Please Enter Correct Mobile Number").css("color", "red");
			jQuery('#seller_mobile').focus();
			return false;
			}else{
			$("#Emptyforregister").html("");	
			}
		}
		var plans = $("#plan").val();
		if(plans=="Select Plan"){
			$("#selecrpalnerror").html("Please Select a Plan").css("color", "red");
			return false;
		}else{
			$("#selecrpalnerror").html("");
		} 
		$.ajax({
			type: "POST",
			url: '<?php echo base_url('seller/services/details'); ?>',
			data: {phone_number:mobile,plan:plans},
				success:function(data)
				{
						  //alert(data);
						if(data == 0)
						{
					   $("#Emptyforregister").html("The Phone Number you entered already exist..").css("color", "red");
						 $('#enquery_form')[0].reset(); 
						}
						else if(data == 1)
						{
							$("#Emptyforregister").html("Success..").css("color", "green");
						document.location.href='<?php echo base_url('seller/services'); ?>'; 
					 }
				},
    });
	  
			 
  }
 
</script>
