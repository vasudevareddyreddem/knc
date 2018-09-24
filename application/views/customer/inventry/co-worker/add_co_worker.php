
<div class="content-wrapper">
		<section class="content" style="padding-top:100px;">
		<div class="container">
			<div class="row">
				<?php if($this->session->flashdata('addsuccess')){ ?>

					<div class="alert dark alert-warning alert-dismissible" id="infoMessage">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					 <?php foreach($this->session->flashdata('addsuccess') as $error){?>
					
					<?php echo $error.'<br/>'; ?>
					
					
					<?php } ?></div><?php } ?>
				
						<?php if($this->session->flashdata('updatpassword')): ?>
					<div class="alert dark alert-success alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('updatpassword');?></div>	
					<?php endif; ?>
					<?php if(validation_errors()):?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo validation_errors(); ?></div>	
					<?php  endif;?>
				<form enctype="multipart/form-data" method="post" name="adddeliveryboy" id="adddeliveryboy"  action="<?php echo base_url('inventory/addcoworkerpost'); ?>" class="well col-md-6 col-md-offset-2" style="background-color:#fff;">
				<?php if($this->session->flashdata('error')): ?>
					<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button><?php echo $this->session->flashdata('error');?></div>	
					<?php endif; ?>
			
				<div class=""  style="font-size:20px;font-weight:600;border-bottom:1px solid #ddd;margin-bottom:10px;padding-bottom:10px;">Add Co-Worker</div>
				
				<div class="row">
					<div class="form-group col-md-6">
						<label for="category">First Name</label>
						<input type="text"  class="form-control" id="fname"  name="fname" placeholder="First Name"/>
					</div>
					<div class="form-group col-md-6">
						<label for="category">Last Name</label>
						<input type="text"  class="form-control" id="lname"  name="lname" placeholder="Last Name"/>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="category">Email Id</label>
						<input type="text"  class="form-control" id="email_id"  name="email_id" placeholder="Email Id"/>
					</div>
					<div class="form-group col-md-6">
						<label for="category">Mobile Number</label>
						<input type="text"  class="form-control" id="mobile"  name="mobile" placeholder="Mobile Number"/>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="category">Password</label>
						<input type="password"  class="form-control" id="password"  name="password" placeholder="Password"/>
					</div>
					<div class="form-group col-md-6">
						<label for="category">Confirm Password</label>
						<input type="password"  class="form-control" id="confirmpassword"  name="confirmpassword" placeholder="Confirm Password"/>
					</div>
				</div>
				

				
				
				<div class="btn-group-vertical btn-block text-center" role="group">
				<button type="submit" class="btn btn-danger btn-lg">Add</button>
				
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
            },
			password: {
					validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
			},
			confirmpassword: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Confirm Password  must be at least 6 characters'
                    },
                identical: {
                    field: 'password',
                    message: 'password and confirm Password do not match'
                }
            }
			}
        }
    });
});
</script>