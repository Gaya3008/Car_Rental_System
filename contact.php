<?php
require_once"admin/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Projecto.in</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
			
	</head>

	<body>
		<div class="main-page-wrapper">



			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-main-header" style="background-color:#8c8b8b">
				<div class="container-fluid" >
					<a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo"></a>
					
					<!-- ========================= Theme Feature Page Menu ======================= -->
					   <?php include"nav.php";?><!-- /.navbar-collapse -->
					<!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Inner page Banner
			=====================================================
			-->
			
			<!--
			=====================================================
				Blog Page Details
			=====================================================
			-->
			</br>
		</br>
	
		
		
		<div id="blog-section">
				<div class="container">
					<div class="theme-title">
						<h2>Details</h2>
</div> <!-- /.theme-title -->

					<div class="clear-fix">
					
						<div id="contact-section">
				<div class="container">
					<div class="clear-fix contact-address-content">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="left-side">
								<h2>Contact Info</h2>
								<p style="text-align:justify">There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a pas of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. <br><br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua.</p>

								<ul>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<h6>Address</h6>
										<p>Freedom Way, Jersey City, NJ 07305, USA</p>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<h6>Phone</h6>
										<p>+88 01911854378</p>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
										<h6>Email</h6>
										<p>backpiper.com@gmail.com</p>
									</li>
								</ul>
							</div> <!-- /.left-side -->
						</div> <!-- /.col- -->


						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="map-area">
								<h2>Our Location</h2>
								<div id="map"></div>
							</div> <!-- /.map-area -->
						</div> <!-- /.col- -->
					</div> <!-- /.contact-address-content -->



					<!-- Contact Form -->
					 <!-- /.send-message -->
				</div> <!-- /.container -->
			</div>  <!-- /.col- -->
<!--
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="single-news-item">
								<div class="img"><img src="images/blog/2.jpg" alt="Image">
									<a href="blog-details.

								<div class="post">
									<h6><a href="blog-details.php" class="tran3s">Playback: Akufo-Addo speaks to business community</a></h6>
									<a href="blog-details.php">Posted by <span class="p-color">admin</span>  at 04 Feb, 2017</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="blog-details.php" class="tran3s">Read More</a></p>
								</div> <!-- /.post 
							</div> <!-- /.single-news-item 
						</div> <!-- /.col- 

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="single-news-item">
								<div class="img"><img src="images/blog/3.jpg" alt="Image">
									<a href="blog-details.php" class="opacity tran4s"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div> <!-- /.img 

								<div class="post">
									<h6><a href="blog-details.php" class="tran3s">Playback: Akufo-Addo speaks to business community</a></h6>
									<a href="blog-details.php">Posted by <span class="p-color">admin</span>  at 04 Feb, 2017</a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna sed accumsan... <a href="blog-details.php" class="tran3s">Read More</a></p>
								</div> <!-- /.post
							</div> <!-- /.single-news-item 
						</div> <!-- /.col-
					</div> <!-- /.clear-fix 
				</div> <!-- /.container -->
			</div>
			</div>
			
	        



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer>
				<div class="container">
					<a href="index.php" class="logo"><img src="images/logo/logo.png" alt="Logo"></a>

					
<p>Copyright 2019 <a href="https://projecto.in" class="tran3s p-color" target="_blank">Projecto.in</a> All rights reserved.</p>
				
				</div>
			</footer>




			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>

			

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>