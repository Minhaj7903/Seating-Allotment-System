
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Exam Hall Seating Allotment System</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+9530123654896">
							<span class="lnr lnr-phone"></span>
							<span class="text">
								<span class="text">+88 0000 0000 0000</span>
							</span>
						</a>
						<a href="mailto:support@colorlib.com">
							<span class="lnr lnr-envelope"></span>
							<span class="text">
								<span class="text">diu.edu.bd</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="main_menu">
			
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" style="height: 40px; width: 40px"> Exam Hall Seating Allotment System</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="AdminLogin.php">Adminastration</a></li>
							<li class="nav-item"><a class="nav-link" href="StudentLogin.php">Student</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>


	<!--================ Start Department Area =================-->
	<div class="department_area section_gap">
		<div class="container">
			<center><h1>Student Log In</h1></center>
			<form action="studentauthentication.php" method="POST">
				 <div class="form-group">
				    <label for="exampleInputEmail1">Student's Registration No</label>
				    <input type="number" class="form-control" name="reg_no" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter Student's Registration No">
				 </div>
				 <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
				 </div>
				 <button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<!-- <a href="Student.php"><button type="submit" class="btn btn-primary">Submit</button></a> -->
		</div>
	</div>
	<!--================ End Department Area =================-->

	
	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<center><h2>Campuses</h2><br></center>
			<div class="row">
				<div class="col">
					<h4>Parmanent Campus</h4>
					<img src="img/DIU.JPG" alt="" style="width: 50%; height: 50%"><br>
					<p>DIU Permanent Campus is a Green Campus, the first of its kind in Bangladesh, which was launched in 2002 by (DIU)</p><br>
					<p>Khagan Bazar, Ashulia, Savar, Dhaka</p>
				</div>
				<div class="col">
					<h4>Main Campus</h4>
					<img src="img/DIU2.JPG" alt="" style="width: 50%; height: 50%"><br>
					<p>We have lucrative City Campus as a Main Campus. Its situated at Shobhanbag, Dhaka-1207. which was launched in 2002 by (DIU)</p><br>
					<p>102-Shukrabad, Mirpur Road, Dhaka-1207</p>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright ?? 2018</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>