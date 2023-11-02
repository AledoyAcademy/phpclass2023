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
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="first.css">
</head>

<body>
	<!-- header -->
	<!-- <section class="w3layouts-header py-2"> -->
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
	<section class="banner-1">
	</section>
	<!-- //banner -->
 <!-- contact -->
 <style>
	input[type="text"]
	{
		position: relative;
		display: block;
		margin: 0 auto;
	}
</style>
        <section class="wthree-row py-5 w3-contact">
            <div class="container py-md-4 mt-md-3">
			<h3 class="heading-agileinfo">Careers<span>Complete The Form Blow</span></h3>
			
			

                <div class="row contact-form mt-md-5 pt-5">
                    <div class="col-lg-12 wthree-form-left">
                        <!-- contact form grid -->
					
		
		<!-- <div class="cont " > -->
		<div class="contact-top1"  >
			<!-- <h6 class="text-dark mb-4 text-capitalize"></h6> -->
			<form action="proc-career.php" method="post" class="f-color">
			<?php
			if($error_msg1)
			{
				echo '<div class="alert alert-danger">'.$error_msg1.'</div>';
			}
			
			if($error_msg2)
			{
				echo '<div class="alert alert-danger">'.$error_msg2.'</div>';
			}

			if($correct)
			{
				echo '<div class="alert alert-success">'.$correct.'</div>';
			}
			?>
		
				<div class="form-group">
					<label for="contactusername">Name</label>
					<input  type="text" class="form-control" placeholder="Your Name" id="contactusername" name="name">
				</div>
				<div class="form-group">
					<label for="contactemail">Email</label>
					<input type="email" class="form-control" placeholder="Your Email" id="contactemail" name="email">
				</div>
				<div class="form-group">
					<label for="contactemail">phone Number</label>
					<input type="text" class="form-control" placeholder="Phone Number" id="contactphonenumber" name="phone">
				</div>
				<div class="form-group">
					<label for="contactcomment">Your Message</label>
					<textarea class="form-control" rows="5" placeholder="comments" id="contactcomment" name="message"></textarea>
				</div>
				<!-- <div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" ></input>
					<label class="form-check-input" for="flexRadioDefault1"> Employed </label>
				</div><br><br> -->
				Specify your employment status <br>
				<select name="status" id="course" class="form-control" >
					<!-- <option value="">Choose one</option> -->
					<option>Employed</option>
					<option>Inter</option>
					<option> Unemployed</option>
					<option>NYSC</option>
				</select> <br>
				
				<div class="form-group">
					<label for="contactemail">Username</label>
					<input type="username" class="form-control" placeholder="Username" id="contactemail" name="username">
				</div>
				
				<div class="form-group">
					<label for="contactemail">Password</label>
					<input type="password" class="form-control" placeholder="Password" id="contactemail" name="password">
				</div>
				
				<div class="form-group">
					<label for="contactemail">Confirm Password</label>
					<input type="password" class="form-control" placeholder="Confirm password" id="contactemail" name="confirm">
				</div>
				<div id="course_result"> </div><br><br>
				
				<button type="submit" class="btn btn-info btn-block">Submit</button>
			</form>
		</div>
		</div>   <!--  //contact form grid ends here -->
		
	<!-- </div> -->
	
</section>
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

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="js/bootstrap.js"></script>
</body>

</html>