<?php

$file = fopen('visitors_count.txt',"r");
$counter = fread($file,100);
$counter+=1;
fclose($file);

$file = fopen('visitors_count.txt',"w");
fwrite($file,$counter);
fclose($file);



?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>COMPASS FACILITY MANAGEMENT</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<meta name="keywords" content="Attainment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	 <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!--banner slider  -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<!-- <section class="w3layouts-header py-2"> -->
	<!-- <div style="background-color: black;"> </div> -->
		<div class="container"> 
		
			  <!-- header -->
        <header>
                <?php include('header.php'); ?>
        </header>
        <!-- //header -->
		</div>
	</section>
	<!-- //header -->
	<!-- banner -->
	<section class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
								<h3>COMPASS FACILITY MANAGEMENT</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<!-- <img src="images/slide1.jpg" alt=""> -->
								<h3>Providing full facility management solutions to companies in Nigeria</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>THE BEST FACILITY MANAGEMENT</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</section>
		<!-- //banner -->
		<!-- banner bottom -->
		<section class="banner-btm">
			<div class="container">
				<div class="row banner-bottom-main bg-white">
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3 class="mt-3"><span class="fas fa-clock pr-3" aria-hidden="true"></span> Address</h3>
								<p class="mt-3 pl-5">Monday - Friday 09.00 - 18.00</p>
								<p class="pl-5">Saturday 09.00 - 14.00</p>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3 class="mt-3"><span class="fas fa-phone pr-3" aria-hidden="true"></span> CALL US ANYTIME</h3>
								<p class="mt-3 pl-5">5-222-434-7923</p>
								<p class="pl-5">5-222-434-7924</p>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3 class="mt-3"><span class="fas fa-envelope pr-3" aria-hidden="true"></span> EMAIL US</h3>
								<p class="mt-3 pl-5">Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
								<p class="pl-5">Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
						</div>
				</div>
			</div>
		</section>
		<!-- //banner bottom -->
	<!-- courses -->
	<section class="wthree-row w3-about  py-5">
		<div class="container py-md-4 mt-md-3">
			<h3 class="heading-agileinfo">Facility Management Services<span>Providing full facility management solutions to companies in Nigeria</span></h3>
			<div class="card-deck mt-md-5 pt-5">
				  <div class="card">
					<img src="images/landscaping.webp" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Land Scaping</h5>
					 
						
					</div>
				  </div>
				  <div class="card">
					<img src="images/Energy Management.webp" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Energy Management</h5>
					 
						
					</div>
				  </div>
				  <div class="card">
					<img src="images/Procurement&Logistics.webp" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Procurement & Logistics</h5>
				</div>
            </div>

			<div class="card-deck mt-md-5 pt-5">
				<div class="card">
				  <img src="images/Remote Site Management.webp" class="img-fluid" alt="Card image cap">
				  <div class="card-body w3ls-card">
					<h5 class="card-title">Remote Site Management</h5>
				   
					  
				  </div>
				</div>
				<div class="card">
				  <img src="images/Janitorial & Custodian Service.webp" class="img-fluid" alt="Card image cap">
				  <div class="card-body w3ls-card">
					<h5 class="card-title">Janitorial & Custodian Service</h5>
				   
					  
				  </div>
				</div>
				<div class="card">
				  <img src="images/Integrated Engineering.webp" class="img-fluid" alt="Card image cap">
				  <div class="card-body w3ls-card">
					<h5 class="card-title">Integrated Engineering</h5>
			  </div>
		  </div>

		  <div class="card-deck mt-md-5 pt-5">
			<div class="card">
			  <img src="images/ICT Solution & Services.webp" class="img-fluid" alt="Card image cap">
			  <div class="card-body w3ls-card">
				<h5 class="card-title">ICT Solution & Services</h5>
			   
				  
			  </div>
			</div>
			<div class="card">
			  <img src="images/Catering & Housekeeping.webp" class="img-fluid" alt="Card image cap">
			  <div class="card-body w3ls-card">
				<h5 class="card-title">Catering & Housekeeping</h5>
			   
				  
			  </div>
			</div>
			<div class="card">
			  <img src="images/Security Service.webp" class="img-fluid" alt="Card image cap">
			  <div class="card-body w3ls-card">
				<h5 class="card-title">Security Service</h5>
		  </div>
	  </div>
        </section>
<!-- //courses -->
	<!-- prepare -->
	<div class="prepare_wthree py-5">
		<div class="container py-md-4 mt-md-3">
			<div class="row prepare_top">
				<div class="col-lg-7 prepare_top_right">
					<!-- <h5 class="mb-3">Integrated Facility Management</h5> -->
					<h5 class="mb-3">Our Mission</h5>
					<!-- <h4>WE PREPARE THE STUDENTS FOR EXAMS AND TESTING</h4> -->
					<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
				</div>
				<div class="col-lg-5 prepare_top_left">
				</div>
				
			</div>
		</div>
	</div>
	<!-- //prepare -->
	<!-- categories -->
	<section class="categories_agile py-5">
		<div class="container py-md-4 mt-md-3">
		<h3 class="heading-agileinfo">Workplace Management Company in Nigeria For these Sectors <span>Providing full facility management solutions to companies in Nigeria</span></h3>
			<div class="row categories-top mt-md-5 pt-5">
				<div class="col-md-4 categories-left1">
				</div>
				<div class="col-md-8 categories-left">
					<div class="row">
						<div class="col-md-6 col-sm-6 categories_sub cats">
							<div class="categories_sub1">
								<h3 class="mt-3">Manufacturing</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub1">
								<h3 class="mt-3"> Education</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub1">
								<h3 class="mt-3">Corporate and Industry</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 categories_sub cats1">
							<div class="categories_sub2">
								<h3 class="mt-3">Real Estate</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub2">
								<h3 class="mt-3">Financial Institutions</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub2">
								<h3 class="mt-3">Aviation</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //categories -->
<!-- stats -->
<section class="stats  py-5">
		<div class="container py-md-4 mt-md-3">
			<h3 class="tittle-w3ls text-center mb-3">LET THE NUMBERS SPEAK FOR US</h3>
			<div class="row inner_w3l_agile_grids-1 pt-4 mt-md-4">
			<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid">
				<p class="counter">546</p>
				<h3>CLIENTS</h3>
			</div>
			<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid1">
				<p class="counter">45</p>
				<h3>STAFFS</h3>
			</div>
			<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
				<p class="counter">5</p>
				<h3>COUNTRY</h3>
			</div>
			<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
				<p class="counter">15</p>
				<h3>BRANCHES</h3>
			</div>
		</div>
   </div>	
</section>
<!-- //stats -->
<!-- Clients -->
<div class="clients bg-white py-5">
		<div class="container py-md-4 mt-md-3">
	
				<h3 class="heading-agileinfo">TESTIMONIALS<span>Providing full facility management solutions to companies in Nigeria</span></h3>
		
			
			<section class="slider mt-md-5 pt-5">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/t1.jpg" alt="" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
								<div class="client">
									<h5>Gerald Roy</h5>
								</div>
						</li>
						<li>
							<img src="images/t2.jpg" alt="" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
								<div class="client">
									<h5>Adam Brandom</h5>
								</div>
						</li>
						<li>
							<img src="images/t3.jpg" alt="" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
								<div class="client">
									<h5>Steve Artur</h5>
								</div>
						</li>
						<li>
							<img src="images/t4.jpg" alt="" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
								<div class="client">
									<h5>Martin Victor</h5>
								</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
</div>
<!-- //Clients -->
<!-- Footer -->
	<footer class="footer-section py-5">
		<?php include('footer.php'); ?>
	</footer>
	<!-- //Footer -->
<!-- copyright -->
	<section class="copyright-w3layouts py-xl-4 py-3">
		<div class="container">
			<p>© 2022 COMPASS FACILITY MANAGEMENT . All Rights Reserved |
				<a href="http://w3layouts.com/">  Design by Aledoy Solutions Limited </a>
			</p>
			<ul class="social-nav footer-social social two text-center mt-2">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-pinterest" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
		</div>
	</section>
	<!-- //copyright -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Attainment</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/bg1.jpg" class="img-fluid" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

	<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="js/bootstrap.js"></script>
</body>

</html>