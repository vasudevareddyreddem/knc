<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Meta -->
		  <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>KNC & Associates </title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">				
		<!-- venobox CSS -->		
		<link rel="stylesheet" href="assets/css/venobox.css">				
		<!-- animate CSS -->		
		<link rel="stylesheet" href="assets/css/animate.css">		
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">	
		<link rel="stylesheet" href="assets/css/custom.css">	
			
		
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"><h4>KNC & Associates </h4></div>
			</div>
		</div>
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
		<div class="navbar navbar-default navbar-fixed-top menu-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <nav>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="page-scroll" href="#home">Home</a></li>
							<li><a class="page-scroll" href="#about">About</a></li>
							
							<li class="dropdown">
							  <a href="#service" class="dropdown-toggle page-scroll " >Services <b class="caret"></b></a>
							  <ul class="dropdown-menu servi">
								<li><a href="#">Business Setup in India</a></li>
								<li><a href="#">Setup Outside India</a></li>
								<li><a href="#">Corporate Law Compliance</a></li>
							
								<li><a href="#">XBRL Data Conversion Service</a></li>
						
								<li><a href="#">Restructuring Services</a></li>
							  </ul>
							</li>
							
							<li><a class="page-scroll" href="#">Careers</a></li>
							<li><a class="page-scroll" href="#latestnew">Latest updates</a></li>
							<li><a class="page-scroll"   data-toggle="modal" data-target="#squarespaceModal">Book Appointment</a></li>
							<li><a class="page-scroll" href="#contact">Contact</a></li>
						</ul>
					</nav>
                </div> 
            </div><!--- END CONTAINER -->
        </div> 
		<!-- END NAVBAR -->	
		
		<!-- START HOME DESIGN -->
	
		<!-- START HOME -->
		<section id="home" class="welcome-area">
		<div class="modal-body text-left">
		<div class="col-md-8">
			<form action="appointment.php" method="post">
			
			<div class="form-group">
			  <label for="email">Email:</label>
			  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
			</div>
			<div class="form-group">
			  <label for="email">Password:</label>
			  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
			</div>
			
			<div class="" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-warning" data-dismiss="modal"  role="button">Close</button>
				</div>
			
				<div class="btn-group" role="group">
					<button type="submit" id="saveImage" class="btn btn-success " data-action="save" role="button">Submit</button>
				</div>
			</div>
				
		  </form>
		</div>
		
		
	
		</div>
		</section>
		
	
		<!-- book endappintment -->
		<!-- START FOOTER -->
		<footer class="footer section-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center wow zoomIn">
						<div class="footer_content">
							<a href="index.php"><img class="img-responsive" src="assets/img/logo.png" alt="" style="margin:0 auto;"></a>
							<div class="footer_social">
								<ul>
									<li><a class="f_facebook  wow bounceInDown" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="f_twitter wow bounceInDown" data-wow-delay=".1s" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="f_google wow bounceInDown" data-wow-delay=".2s" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="f_linkedin wow bounceInDown" data-wow-delay=".3s" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="f_youtube wow bounceInDown" data-wow-delay=".4s" href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a class="f_skype wow bounceInDown" data-wow-delay=".5s" href="#"><i class="fa fa-skype"></i></a></li>
								</ul>
							</div>	
							<p>Greatway &copy; 2016 All Rights Reserved.</p>
						</div>
												
					</div><!--- END COL -->
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->	
		</footer>
		<!-- END FOOTER -->						 

		
		<script>
				 $(document).ready(function() {
			$('#myCarousel').carousel({
			interval: 10000
			})
			
			$('#myCarousel').on('slid.bs.carousel', function() {
				//alert("slid");
			});
			
			
		});
		</script>
		<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizr JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>			
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>		
		<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>		
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>		
		<!-- jquery mixitup min js -->
			<script src="assets/js/jquery.mixitup.js"></script>		
		<!-- jquery venobox min js -->
			<script src="assets/js/venobox.min.js"></script>		
		<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>
		<!-- form-contact js -->
			<script src="assets/js/form-contact.js"></script>
		<!-- map js -->
					
		<!-- jquery appear js -->			
			<script src="assets/js/jquery.appear.js"></script>			
		<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>
		<!-- switcher js -->
        <script src="assets/js/switcher.js"></script>			
		<!-- scripts js -->
		<script src="assets/js/scripts.js"></script>
    </body>


</html>