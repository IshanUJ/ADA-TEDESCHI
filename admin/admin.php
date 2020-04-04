<?php
require('conn.php');

$result = $mysqli->query("SELECT * FROM about");
$row = mysqli_fetch_assoc($result);

$result2 = $mysqli->query("SELECT * FROM portfolio_images");

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

	<link rel="stylesheet" type="text/css" href="assets/css/dropzone.css" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<title>Hello, world!</title>
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
		<a href="#" data-theme="light">deed</a>
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
							<a class="nav-link" href="#about">Edit CV</a>
						</li>
						<!-- <li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">resume</a>
                        </li> -->
						<li class="nav-item">
							<a class="nav-link" href="#work">Edit Portfolio</a>
						</li>
					</ul>

				</div>
			</nav>
		</div>
		<!-- END: NAVBAR -->
	</aside>

	<div class="page-wrapper">
	<a href="config.php?logout=1" class="btn btn-danger" style="margin:20px 20px" href="#work">Logout</a>
		<!-- START: ABOUT -->
		<section class="section section-about" id="about">
			<div class="container">
				<div class="section-head">
					<span>Get to know</span>
					<h2>MY CV</h2>
				</div>

				<div class="row justify-content-center align-items-center">
					<div class="col-md-5">
						<img class="img-fluid img-thumbnail wow fadeInUp" data-wow-duration="1s" src="<?php echo $row['image']; ?>" alt="About Picture">
					</div>
					<div class="col-md-7">
						<form action="config.php" method="post" enctype="multipart/form-data">
							<div class="about-desc wow fadeInUp" data-wow-duration="1s" data-wow-delay="500ms">

								<div class="about-desc-content">
									<h1 class="font-weight-light">I'm <input style="padding:5px;text-align: center; font-size:16px" type="text" placeholder="<?php echo $row['name']; ?>" value="<?php echo $row['name']; ?>" name="name" /></h1>
									<p class="mt-3 font-weight-light"><textarea class="form-control" name="description" aria-label="With textarea" placeholder="<?php echo $row['description']; ?>" value=""><?php echo $row['description']; ?></textarea></p>
								</div>

								<div class="about-desc-more text-left b-box mt-3">
									<div class="row">


										<div class="col-md-6">
											<div class="about-desc-info">
												<b>Phone : +33</b>
												<a href="#"><input style="padding:5px;text-align: center; font-size:16px" type="text" placeholder="<?php echo $row['phone']; ?>" value="<?php echo $row['phone']; ?>" name="mobile" /></a>
											</div>
										</div>
										<div class="col-md-6">
											<div class="about-desc-info">
												<b>Email :</b>
												<a href="#"><input style="padding:5px;text-align: center; font-size:16px" type="text" placeholder="<?php echo $row['email']; ?>" value="<?php echo $row['email']; ?>" name="email" /></a>
											</div>
										</div>

									</div>
								</div>
								<br>

								<div>
									<label for="image">Upload Image</label> <br>
									<input type="file" value="<?php echo $row['image']; ?>" name="image">
								</div>

								<ul class="about-social mb-0 list-inline mt-4">
									<li class="list-inline-item">
										<button class="btn btn-primary" name="submit_about">
											<i class="fas fa-pen-alt"></i>
											<span>Update</span>
										</button>

										<!-- <a href="#" class="btn downloadCV hover-state">
										<i class="fas fa-video"></i>
										<span>Video</span>
									</a> -->
									</li>
								</ul>

							</div>
						</form>
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

			<div class="container">
				<h2>Upload Your Images</h2>
				<br>
				<div class="file_upload">
					<form action="upload.php" class="dropzone">
						<div class="dz-message needsclick">
							<strong>Drop files here or click to upload.</strong><br />
							<span class="note needsclick">(Please upload <strong>jpg or png</strong> files
								only.)</span>
						</div>
					</form>
				</div>
				<div style="margin:10px 0px 0px 0px;">
					<a class="btn btn-default read-more" type="button" onClick="window.location.reload();" style="background:#3399ff;color:white" href="#" title="">Apply</a>
				</div>
			</div>
		</section>

		<div class="container" id="portfolio_image">
			<div class="row">
				<?php foreach ($result2 as $images) { ?>
					<div class="col-md-3" style="margin-top: 10px">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" style="max-height: 350px;min-height: 350px;" src="<?php echo $images['file_name']; ?>" alt="Card image cap">
							<div class="card-body">

								<a onClick="slotDelete('<?php echo $images['id']; ?>')" class="btn btn-danger">Delete</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<!--END: WORK -->

		<!--START: FOOTER-->
		<footer class="footer section section-light">
			<div class="container">
				<p class="copyright text-center mb-0">&copy; Ada Tedeschi | All Right Reserved</p>
			</div>
		</footer>
		<!--END: FOOTER-->
	</div>


	<!-- JAVASCRIPTS -->

	<script>
		$(document).ready(function() {
			$("#page_list").sortable({
				placeholder: "ui-state-highlight",
				update: function(event, ui) {
					var page_id_array = new Array();
					$('#page_list tr').each(function() {
						page_id_array.push($(this).attr("id"));
					});
					$.ajax({
						url: "update.php",
						method: "POST",
						data: {
							page_id_array: page_id_array
						},
						success: function(data) {
							// alert(data);
						}
					});
				}
			});

		});
	</script>


	<script>
		function slotDelete(b) {
			var id = b;
			// alert(id);
			if (window.confirm("Do you really want to Delete ?")) {
				window.location.href ="config.php?image_delete=1&id=" + id + " ";
			}
		}
	</script>

	<script src="assets/js/vendor.js"></script>

	<!-- Map -->
	<script src="assets/js/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;callback=initMap" async="" defer=""></script>

	<!-- Custom Js -->
	<script src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/dropzone.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</body>

</html>