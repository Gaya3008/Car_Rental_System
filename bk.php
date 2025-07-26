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
					
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <?php include"nav.php";?><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->
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
						<h2>View Bookings</h2>
					
					</div> <!-- /.theme-title -->



					<div class="clear-fix">
					</br>
					<div class="row">
					<table class="table ">
					<tr style="font-weight:bold">
					<td>S. No.</td>
                    <td>Name</td>
                    <td>mobile</td>
                    <td>Email</td>
                    <td>Date</td>
                    <td>Hour</td>
                    <td>Car name</td>
                    <td>Total Price</td>
                    <td>Driver</td>
                    <td>Image</td>
                    <td>Message</td>
					</tr>
					<?php
				$n=1;
				$result=select("SELECT * FROM `booking` INNER JOIN car_for_rant on booking.carid=car_for_rant.id
where booking.userid='".$_SESSION['login']."' order by booking.id desc");
				while($r=mysqli_fetch_array($result))
				{
					extract($r);
				?>
                  <tr>
                    <td><?=$n;?></td>
                    <td><?=ucwords($name)?></td>
                    <td><?=ucwords($mobile)?></td>
                    <td><?=ucwords($email)?></td>
                    <td><?=$date?></td>
                    <td><?=$hour?></td>
                    <td><?=$car_name?></td>
                    <td><?=$total_price?></td>
                    <td><?php if($driver==1){echo"With Driver";}else{echo"Without Driver";}?></td>
                    <td><img src="admin/images/<?=$image?>" style="height:50px"></td>
                    <td><?=$message?></td>
                    
                   
                    
                    
                  </tr>
				  <?php
				  $n++;
				}
				  ?>
					</table>
						</div>
					
					<?php
					if(isset($_REQUEST['search']))
					{
						extract($_REQUEST);
						
					
					?>
					<?php
					 $q="SELECT * FROM `car_for_rant` WHERE car_name like '%$name%' order by id desc";
					$t=select($q);
					while($y=mysqli_fetch_array($t))
					{extract($y);
				
					?>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="single-news-item">
								<div class="img"><img src="admin/images/<?=$image?>"  style="height:200px;weight:250px" alt="Image">
									<a href="view.php?id=<?=$id?>" class="opacity tran4s"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div> <!-- /.img -->

								<div class="post">
<h6><a href="blog-details.php" class="tran3s"><?=$car_name?></a></h6>
									
<p>Price- <?=$price?> INR Per Hour </br><a href="view.php?id=<?=$id?>" class="tran3s"><button class="btn btn-info">View Detail</button></a></p>
								</div> <!-- /.post -->
							</div> <!-- /.single-news-item -->
						</div> <!-- /.col- -->
<?php
					}
					}
?><!--
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
			
	        



			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
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