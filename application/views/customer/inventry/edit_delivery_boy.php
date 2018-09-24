
<div class="content-wrapper">
		<section class="content" style="padding-top:100px;">
		<div class="container">
			<div class="row">
					
					<?php if($this->session->flashdata('success')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('success');?></div>	
					<?php endif; ?>
					<?php if($this->session->flashdata('error')): ?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('error');?></div>	
					<?php endif; ?>
				<form enctype="multipart/form-data" method="post" name="adddeliveryboy" id="adddeliveryboy"  action="<?php echo base_url('inventory/editdeliveryboypost'); ?>" class="well col-md-6 col-md-offset-2" style="background-color:#fff;">
					<input type="hidden" name="cust_id" id="cust_id" value="<?php echo isset($details['customer_id'])?$details['customer_id']:''; ?>">
			
				<div class=""  style="font-size:20px;font-weight:600;border-bottom:1px solid #ddd;margin-bottom:10px;padding-bottom:10px;">Edit Delivery Boy</div>
				
				<div class="row">
					<div class="form-group col-md-6">
						<label for="category">First Name</label>
						<input type="text"  class="form-control" id="fname"  name="fname" placeholder="First Name" value="<?php echo isset($details['cust_firstname'])?$details['cust_firstname']:''; ?>"/>
					</div>
					<div class="form-group col-md-6">
						<label for="category">Last Name</label>
						<input type="text"  class="form-control" id="lname"  name="lname" placeholder="Last Name" value="<?php echo isset($details['cust_lastname'])?$details['cust_lastname']:''; ?>"/>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="category">Email Id</label>
						<input type="text"  class="form-control" id="email_id"  name="email_id" placeholder="Email Id" value="<?php echo isset($details['cust_email'])?$details['cust_email']:''; ?>"/>
					</div>
					<div class="form-group col-md-6">
						<label for="category">Mobile Number</label>
						<input type="text"  class="form-control" id="mobile"  name="mobile" placeholder="Mobile Number" value="<?php echo isset($details['cust_mobile'])?$details['cust_mobile']:''; ?>"/>
					</div>
				</div>

				
				
				<div class="btn-group-vertical btn-block text-center" role="group">
				<button type="submit" class="btn btn-danger btn-lg">Update</button>
				
				</div>
				</form>
				
			</div>
		</div>
    
		</section>
 </div>
   
<script type="text/javascript">

$(document).ready(function() {
    $('#adddeliveryboy').bootstrapValidator({
       
        fields: {
            fname: {
					validators: {
					notEmpty: {
						message: 'First Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9.,&-_@#$ ]+$/,
					message: ' First Name can only consist of alphanumeric, space and dot'
					}
				}
			}, 
			lname: {
					validators: {
					notEmpty: {
						message: 'Last Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9.,&-_@#$ ]+$/,
					message: 'Last Name can only consist of alphanumeric, space and dot'
					}
				}
			},
			email_id: {
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
			mobile: {
              validators: {
					 notEmpty: {
						message: 'Mobile Number is required'
					},
                    regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Mobile Number must be 10 digits'
					}
                }
            }
        }
    });
});
</script>