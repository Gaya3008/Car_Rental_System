<?php
include"dbconfig.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Projecto.in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <?php include"nav.php";?>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include"header.php";?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Add Car</h2>
					
					
					<div class="form-two widget-shadow" style="height:500px">
						<div class="form-title">
							<h4>Add Car:</h4>
						</div>
						
						<div class="form-body" >
							<form method="post" method="post" enctype="multipart/form-data"> 
						
							<div class="form-group col-lg-4"> 
							<label for="exampleInputName">Car Name</label>
							<input type="text" class="form-control " name="car_name" id="exampleInputName" placeholder="Hotel Name"> 
							</div>
                            <div class="form-group col-lg-4"> 
							<label for="exampleInputName2">Model</label>
							<input type="text" class="form-control " name="model" id="exampleInputName2" placeholder="Location"> 
							</div>
                            <!--<div class="form-group col-lg-4"> 
							<label for="exampleInputName2">Room Type</label>
							<select class="form-control" name="room_type" > 
							<option value="Single">Single Room</option>
		  <option value="Couple" >Couple Room</option>
		  <option value="Deluxe">Deluxe Room</option>
		  <option value="Luxury">Luxury Room</option>
		  <option value="Guest">Guest Room</option>
		  </select>
							</div>-->
                            <div class="form-group col-lg-4"> 
							<label for="exampleInputName2">Car Image</label>
			<input type="file" class="form-control " name="myfile" id="exampleInputName2" > 
							</div>
							
							<div class="form-group col-lg-4"> 
							<label for="exampleInputName2">Price Per Hour</label>
			<input type="text" class="form-control " name="price" id="exampleInputName2" > 
							</div>
							<div class="form-group col-lg-4"> 
							<label for="exampleInputName2">Mobile Number</label>
			<input type="text" class="form-control " name="mobile" id="exampleInputName2" > 
							</div>
							<div class="form-group col-lg-4"> 
							<label for="exampleInputName">Description</label>
							<textarea class="form-control " name="description" ></textarea> 
							</div>
                            
		  
							<div class="form-group col-lg-4"> 
							<label for="exampleInputName2"></label>
							<button type="submit" name="add" class="btn btn-default">Add</button> </form> 
							<?php
		if(isset($_REQUEST['add']))
		{
			extract($_REQUEST);
			$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	move_uploaded_file($tmp_name,"images/$name");
	
	 $query="INSERT INTO `car_for_rant`( `car_name`, `modal`, `image`, `price`, `mobile`, `description`) VALUES 
			('$car_name','$model','$name','$price','$mobile','$description')";
			
			$n=iud($query);
			
			if($n==1)
			{
				echo"<script>alert('Added');
		 window.location='view_book.php';
		 </script>";
			}
			else
			{
				echo"<script>alert('Something Went Wrong');
		 window.location='view_book.php';
		 </script>";
			}
			
		}
		
		?>
							
							</div>
							
							
							
							
							
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include"footer.php";?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
	
</body>
</html>