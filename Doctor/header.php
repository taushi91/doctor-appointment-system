<?php session_start();
if (!isset($_SESSION['id'])) {
	header("Location:../login/index.php");
}
 ?>
<!doctype html>
	<html class="no-js" lang=""> <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Doctor Dashboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
  
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<strong class="tg-logo">
                            <a href=""><img src="../assets/img/final logo.png" alt="image description"></a>
			</strong>
			<div class="tg-rightarea">
				<nav id="tg-nav" class="tg-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="tg-navigation">
						
					</div>
				</nav>
				<nav id="tg-addnav" class="tg-addnav">
					<ul>
						<!-- <li><a href="compare.html" data-count="3">compare</a></li>
						<li><a href="dashboard-addlist.html">add listing</a></li> -->
					</ul>
				</nav>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Banner Start
		*************************************-->
		<div id="tg-banner" class="tg-banner tg-haslayout">
			<div class="tg-banner-parallax parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/img-01.jpg"></div>
			<div class="tg-banner-content">
				<h1>dashboard</h1>
				<ul class="tg-breadcrumb">
<!--					<li><a href="#">home</a></li>-->
					<li><?php echo $_SESSION['doctorName'] ?></li>
				</ul>
			</div>
		</div>
		<!--************************************
				Banner End
		*************************************-->
		<!--************************************
				Dashboard Start
		*************************************-->
		<div class="tg-dashboardslider-area tg-haslayout">
			<div id="tg-dashboardlist-slider" class="tg-dashboard-list tg-dashboardlist-slider tg-haslayout">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
                                            <a href="index.php" class="tg-insight-bg">
							<div class="tg-border-heading">
								<i class="fa fa-home"></i>
							</div>
							<span>HOME</span>
						</a>
					</div>
					<div class="swiper-slide">
                                            <a href="profile.php">
							<div class="tg-border-heading">
								<i class="fa fa-user"></i>
							</div>
							<span>profile</span>
						</a>
					</div>
					<div class="swiper-slide">
                                            <a href="appointment-listing.php" class="tg-insight-bg">
							<div class="tg-border-heading">
								<i class="fa fa-list-ul"></i>
							</div>
							<span>Appointment list</span>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="">
							<div class="tg-border-heading">
								<i class="fa fa-clone"></i>
							</div>
							<span>messages</span>
						</a>
					</div>
					<div class="swiper-slide">
                                            <a href="doctor-security.php" class="tg-insight-bg">
							<div class="tg-border-heading">
								<i class="fa fa-gears"></i>
							</div>
							<span>security settings</span>
						</a>
					</div>
					<div class="swiper-slide">
                                            <a href="doctor-privacy.php">
							<div class="tg-border-heading">
								<i class="fa fa-lock"></i>
							</div>
							<span>privacy settings</span>
						</a>
					</div>
					<div class="swiper-slide">
                                            <a href="doctor-report.php" class="tg-insight-bg">
							<div class="tg-border-heading">
								<i class="fa fa-repeat"></i>
							</div>
							<span>my report</span>
						</a>
					</div>
					<div class="swiper-slide">
						<a href="../login/index.php">
							<div class="tg-border-heading">
								<i class="fa fa-sign-in"></i>
							</div>
							<span>sign out</span>
						</a>
					</div>
					
				</div>
				<div class="tg-prev"><span class="fa fa-angle-left"></span></div>
				<div class="tg-next"><span class="fa fa-angle-right"></span></div>
			</div>
		</div>
