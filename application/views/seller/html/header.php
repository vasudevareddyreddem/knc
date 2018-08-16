<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
		<title>Order organic seller</title>
		<link rel="icon" href="<?php echo base_url(); ?>assets/seller_admin/images/fav.ico" type="image/x-icon" />
		<!-- jquery-ui css -->
		   <link href="<?php echo base_url(); ?>assets/seller/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
		   <!-- Bootstrap -->
		<link href="<?php echo base_url(); ?>assets/seller/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller/dist/css/seller_dashboard.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller/plugins/bootstrap-toggle/bootstrap-toggle.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller/plugins/emojionearea/emojionearea.min.css" />
		<link href="<?php echo base_url(); ?>assets/seller/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/seller/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/seller/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/seller/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(); ?>assets/seller/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
		<!-- Toastr css -->
        <link href="<?php echo base_url(); ?>assets/seller/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="<?php echo base_url(); ?>assets/seller/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
        <!-- Monthly css -->
        <link href="<?php echo base_url(); ?>assets/seller/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>

		<link href="<?php echo base_url(); ?>assets/seller/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
		<!--style start here -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/seller/css/style.css" /> 

	

		<!-- ./wrapper -->
         <!-- Start Core Plugins
        =====================================================================-->
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/seller/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui --> 
        <script src="<?php echo base_url(); ?>assets/seller/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/seller/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="<?php echo base_url(); ?>assets/seller/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="<?php echo base_url(); ?>assets/seller/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>assets/seller/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/seller/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- Hadmin frame -->
        <script src="<?php echo base_url(); ?>assets/seller/dist/js/custom1.js" type="text/javascript"></script>
		<!-- ChartJs JavaScript -->
        <script src="<?php echo base_url(); ?>assets/seller/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/seller/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
		<script src="<?php echo base_url(); ?>assets/seller/dist/js/custom.js" type="text/javascript"></script>
		<script>
                

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });
			$('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
            
            
        </script>
		 
<!--javascript end here -->
</head>

<!-- container section start -->
<div class="wrapper">

         
         <?php echo isset($header)?$header:''; ?>
         <?php echo isset($sidebar)?$sidebar:''; ?>
         <?php echo isset($content)?$content:''; ?>
         <?php echo isset($footer)?$footer:''; ?>
         
</div>
<!-- container section start --> 


	</html>
