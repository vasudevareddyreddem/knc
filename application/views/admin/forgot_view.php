<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Order Organic::</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/home/images/fav.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrapValidator.css" />


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/component.css" />
    <script src="<?php echo base_url(); ?>assets/home/js/jquery.js"></script>

    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrapValidator.js"></script>

</head>
<style>
    .mar_t10per {
        margin-top: 10%;
    }
    .form .form-control {
        margin-bottom: 10px;
    }
		.login-back{
	background-image: url("<?php echo base_url();?>assets/admin/img/login-back.jpg") ;
	 background-repeat: no-repeat;
    background-size: cover;
	
}
</style>

<body class="login-back">
    <div class="container mar_t10per" style="position:relative" >
        <div class="row ">
		<div class="col-md-6 col-md-offset-3" style="background-color:#fff; border-radius:10px;padding:10px 0px; ">
           

            <div class="col-md-10 col-md-offset-1 ">
			<h3 class="">Forgot Password</h3>
			<hr>
				<?php if($this->session->flashdata('error')): ?>	
			<div class="alert dark alert-warning alert-dismissible" id="infoMessage"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button><?php echo $this->session->flashdata('error');?></div>
			<?php endif; ?>	
			<form action="<?php echo base_url('admin/login/forgotpassword'); ?>" method="post" name="forgotpass" id="forgotpass">
			<div class="row">
                        <div class=" col-md-12">
							<div class="form-group">
								<label class="control-label">Email Address</label>
								<input type="text" id="emailaddress" name="emailaddress" value="" class="form-control" placeholder="Email Address" />
							</div>
						</div>
                        
							
                    </div>
				

            </div>
            </div>
        </div>
		<a class="col-md-4 " style="position: absolute;top:0;left: 50%;transform: translate(-50%,-100%);background:#fff;padding:10px;border-radius:20px 20px 0px 0px;">
					<img   style="width:300px;margin:0 auto;padding-left:20%" src="<?php echo base_url();?>assets/home/images/logo.png" />
				</a>
				<div class="col-md-4 text-center" style="position: absolute;left: 50%;transform: translate(-50%,1%);background:#fff;padding:20px;border-radius:0px 0px 20px 20px;">
					 	<div class="col-md-6">
                    <button class="btn btn-lg  btn-block signup-btn" style="background-color:#5cb85c;color:#fff;border-radius:6px;" type="submit">
                        Submit</button>
						</div>
              
				<div class="col-md-6">
				<a  href="<?php echo base_url('admin/login'); ?>"class="btn btn-lg  btn-block signup-btn" style="background-color:#c33c12;color:#fff;border-radius:6px;" type="submit">
                  Cancel</a>
				  </div>
				</div>
				  </form>
    </div>

</body>

</html>
	<script type="text/javascript">

$(document).ready(function() {
    $('#forgotpass').bootstrapValidator({
       
        fields: {
            emailaddress: {
             validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            }
        }
    });
});
</script>
