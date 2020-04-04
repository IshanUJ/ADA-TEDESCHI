<?php
require('admin/conn.php');

$result = $mysqli->query("SELECT * FROM about");
$row = mysqli_fetch_assoc($result);

$result2 = $mysqli->query("SELECT * FROM portfolio_images");
// $row_port = mysqli_fetch_assoc($result2);

?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ada Tedeschi</title>
	<meta name="description" content="Ada Tedeschi" />
	<meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
	<meta name="author" content="beingeorge" />
	<meta name="theme-color" content="#2a2d35">

	<!-- Vendor Css-->
	<link rel="stylesheet" href="assets/css/vendor.css" />	

	<!-- BumblebeeTemplate style Css -->
	<link href="assets/css/bumblebee-light.css" rel="stylesheet">
	<!-- <link href="assets/css/bumblebee-dark.css" rel="stylesheet"> -->

	<!-- Custom style Css -->
	<link href="assets/css/custom.css" rel="stylesheet">
	<link rel="shortcut icon" href="/assets/images/circle-cropped.png">
</head>

<body data-spy="scroll" data-target=".navbar">

	<!-- START: Preloader -->
	<div id="preloader" class="preloader">
		<div class="spinner-grow text-dark" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- END: Preloader -->

	<!-- START: Theme Switcher -->

	<div class="switcher">
		<a href="#" data-theme="light" >deed</a>
	</div>

	<!-- END: Theme Switcher -->


	<aside class="aside">
		<!-- START: NAVBAR -->

		<div class="nav-wrapper">

			<div class="navbar-toggler">
				<svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="60">
				  <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
				  <path class="line middle" d="m 30,50 h 40" />
				  <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
				</svg>
			</div>

			<nav class="navbar text-center align-items-center justify-content-center">



                <div class="collapse navbar-collapse show" id="navbarCollapse">
                	<div class="about-avatar mb-4">
						<img src="assets/images/menu.png" alt="" class="img-fluid mx-auto d-block shadow-sm rounded-full">
					</div>
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">CV</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">resume</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#work">Portfolio</a>
                        </li>
                        
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>

                </div>

               	<div class="aside-footer">
                	<ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f" style="color:rgb(0, 0, 0);"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram" style="color:rgb(0, 0, 0);"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp" style="color:rgb(0, 0, 0);"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-vimeo" style="color:rgb(0, 0, 0);"></i></a></li>
                    </ul>
                </div>
	        </nav>
        </div>
        <!-- END: NAVBAR -->
    </aside>

    <div class="page-wrapper">

		<!-- START: HOME -->		
    	<section class="section-home " id="home">
    		<div class="glass">Ada Tedeschi</div>
    		 <img src="assets/images/HOME 2.jpg" /> 
    	</section>	
    	<!-- END: HOME -->

		<!-- START: ABOUT -->
		<section class="section section-about" id="about">
			<div class="container">
				<div class="section-head">
					
					<h2>MY CV</h2>
				</div>

				<div class="row justify-content-center align-items-center">
					<div class="col-md-5">
						<img class="img-fluid img-thumbnail wow fadeInUp" data-wow-duration="1s" src="assets/images/CV.png" alt="About Picture">
					</div>
					<div class="col-md-7">
						<div class="about-desc wow fadeInUp" data-wow-duration="1s"  data-wow-delay="500ms">
							<div class="about-desc-content">
								<h1 class="font-weight-light"><?php echo $row['name'];?></h1>
								<p class="mt-3 font-weight-light"><?php echo $row['description'];?></p>
							</div>

							<div class="about-desc-more text-left b-box mt-3">
								<div class="row">
									
									
									<div class="col-md-6">
										<div class="about-desc-info">
											<b>Phone :</b><br>
											<a href="tel:+33 7 62 82 70 72 ">+33 <?php echo $row['phone'];?></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="about-desc-info">
											<b>Email :</b><br>
											<a href="mailto:contact@adatedeschi.com"><?php echo $row['email'];?></a>
										</div>
									</div>
									
								</div>
							</div>

							<ul class="about-social mb-0 list-inline mt-4">
								<li class="list-inline-item">
									<a href="/assets/cv/ADA TEDESCHI_CV.pdf" class="btn downloadCV hover-state">
										<i class="fas fa-download"></i>
										<span>Télécharger CV</span>
									</a>
									
									
								</li>
							</ul> 
							<ul class="about-social mb-0 list-inline mt-4">
								<li class="list-inline-item">
									
									
									<a href="#" class="btn downloadCV hover-state">
										<i class="fas fa-video"></i>
										<span>Video</span>
									</a>
								</li>
							</ul> 
							
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- END: ABOUT -->

		

		

		<!--START: WORK -->   
		<section class="section section-dark section-work" id="work">
			<div class="container">
				<div class="section-head text-center">
					
					<h2>Portfolio</h2>
				</div>
			</div>
			<div class="container swiper-container swiper-portfolio wow fadeInUp" data-wow-duration="1.5s">
				<div class=" swiper-wrapper mt-5">

				<?php foreach ($result2 as $rows) { ?>
					<div class="portfolio-item swiper-slide " data-groups="all slideshow">
						<a href="assets/images/IMG_5153.jpg" class="portfolio-item--content simple-ajax-popup">
							<div class="portfolio-item--img b-box">
								<img src="admin/<?php echo $rows['file_name'];?>" class="img-fluid mx-auto" alt="work-img">
							</div>
							<div class="portfolio-item--desc d-flex justify-content-center align-items-center">
								<div class="portfolio-item--desc-in">
									<h3 class="mb-2 text-white"></h3>
									<p class="text-white">Slideshow</p>
								</div>
							</div>
						</a>
					</div>
				<?php } ?>

				</div>
				<div class="portfolio-pagination">
					
				</div>
			</div>
		</section>
		<!--END: WORK -->

		

		<!-- START: CTA -->
		<section class="section section-freelance section-light text-center ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- <div class="section-head wow fadeInUp" data-wow-duration="1.5s">
							<h2></h2>
						</div> -->
						<div class="mt-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
							<!-- <a href="#" class="btn hover-state">Contact Me!</a> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: CTA -->

	
		<!-- START: CONTACT -->
		<section class="section section-light section-contact" id="contact">
			<div class="container">
				<div class="section-head">
					<span>say Hello</span>
					<h2>Contact </h2>
				</div>

				<!-- <div class="contact-map mt-5">
					<h5 class="section-subHead mb-4"> My Location</h5>
					<div class="contact-map--container b-box wow fadeInUp" id="map" data-wow-duration="1.5s"></div>
				</div> -->
			</div>

			<div class="contact-Otherdetails section-dark">
				<div class="container">
					<div class="contact-details mt-5">
						<h5 class="section-subHead pt-5 mb-4"> </h5>
						<div class="row">
							<div class="col-sm-6 col-lg-6">
								<!-- <div class="contact-details--panel p-4 b-box text-center hover-state wow fadeInUp" data-wow-duration="1.5s">
									<div class="mb-3">
										<i class="fas fa-mobile-alt  "></i>
									</div>
									<div class="mt-2">
										<a href="tel:+33 7 62 82 70 72" class="">+33 7 62 82 70 72</a>
										<p class="mt-2">Call </p>
									</div>
								</div> -->
							</div>
							<div class="col-sm-6 col-lg-6">
								<!-- <div class="contact-details--panel p-4 b-box text-center hover-state wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
									<div class="mb-3">
										<i class="fas fa-envelope  "></i>
									</div>
									<div class="mt-2">
										<a href="mailto:contact@adatedeschi.com">contact@adatedeschi.com</a>
										<p class="mt-2">Email </p>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<div class="contact-form mt-5">
						<form action="contact-form-handler.php" method="post">
							<h5 class="section-subHead mb-2"> Contact Form</h5>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s">
										<input name="name" id="name" type="text" class="form-control b-box" placeholder="Votre Nom Complet *" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
										<input name="email" id="email" type="email" class="form-control b-box" placeholder="Votre Adresse Mail*" required>
									</div>
								</div>                                
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
										<input type="text" name="subject" class="form-control b-box" id="subject" placeholder="Objet.." required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
										<textarea name="message" id="comments" rows="4" class="form-control b-box" placeholder="Votre Message..."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 text-center mt-4 mb-5  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
									<button name="submit" class="btn hover-state">soumettre</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- END: CONTACT -->

		<!--START: FOOTER-->
		<footer class="footer section section-light">
			<div class="container">
				<p class="copyright text-center mb-0">&copy; Ada Tedeschi | All Right Reserved</p>
			</div>
		</footer>
		<!--END: FOOTER-->
	</div>


	<!-- JAVASCRIPTS -->

	<script src="assets/js/vendor.js"></script>

	<!-- Map -->
	<script src="assets/js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;callback=initMap" async="" defer=""></script>
	
	<!-- Custom Js -->
	<script src="assets/js/custom.js"></script>
</body>


</html>
