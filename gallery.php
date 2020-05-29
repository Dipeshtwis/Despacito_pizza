<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Menu Card</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Recipe a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- gallery -->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- font-awesome-icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome-icons -->

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->

</head>
	
<body>


<div class="banner-header banner2">
	<div class="banner-dott1">
		<!--header-->
		<div class="header">
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.php">Despacito Pizza</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="services.php">Our Services</a></li>
							<li class="active"><a href="gallery.php">Menu</a></li>
							<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Order Now!<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="login.php">Login</a></li>
										<li><a href="registration.php">Register</a></li>
									</ul>
							  </li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
		<!--//header-->
	</div>
</div>
<!-- // banner -->
<!-- gallery -->
	<div id="gallery" class="gallery_main">
		<div class="container">
			<h2 class="heading">Our <span>Food</span></h2>
				<p class="heading">Our Food recipes</p>
			<div class="w3l_gallery_grids">
				<ul class="w3l_gallery_grid gallery" id="lightGallery">
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery1.png" data-responsive-src="images/1.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery1.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>veggie supreme</h3>
									<p>Onion, Capsicum, Mushroom, Red Paprika, Black Olives</p>
                                    
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery2.png" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery2.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Exotica</h3>
									<p>Red Capsicum, Green Capsicum, Baby Corn</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery3.png" data-responsive-src="images/5.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery3.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>paneer vegorama</h3>
									<p>Paneer, Onion, Capsicum, Black Olives, Red Paprika</p>
                                 
                                    
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery4.png" data-responsive-src="images/6.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery4.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Chicken Supreme</h3>
									<p>Chicken Tikka, Chicken Hot & Chilly, Chicken Meatball</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery5.png" data-responsive-src="images/8.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery5.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Triple Chicken Feast</h3>
									<p>Chicken Keema, Chicken Meatball, Chicken Hot & Chilly</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery6.png" data-responsive-src="images/9.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery6.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Chicken Italiano</h3>
									<p>Chicken Pepperoni, Chicken Sausage, Mushroom</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery7.png" data-responsive-src="images/10.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery7.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Ultimate Chicken</h3>
									<p>Chicken Meatball, Chicken Pepperoni, Chicken Sausage, Chicken Keema</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery8.png" data-responsive-src="images/11.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery8.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Tandoori Paneer</h3>
									<p>Paneer, Onion, Capsicum, Red Paprika & Tomato</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery9.png" data-responsive-src="images/12.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery9.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Veggie Lover</h3>
									<p>Onion, Capsicum, Mushroom, Tomato, Red Paprika</p>
								</div>
							</a>
						</div>
					</li>
                    
                    
                    <li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery10.png" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery10.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Rawalpindi Chana</h3>
									<p>Chole, Onion, Green Capsicum, Tomato</p>
								</div>
							</a>
						</div>
					</li>
                    <li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery11.png" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery11.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Country Feast</h3>
									<p>Onion, Capsicum, Mushroom, Sweet Corn, Tomato</p>
								</div>
							</a>
						</div>
					</li>
                    <li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery12.png" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery12.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Chicken Tikka</h3>
									<p>Chicken Tikka, Onion, Tomato</p>
								</div>
							</a>
						</div>
					</li>
                    <li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery13.png" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery13.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Double Trouble</h3>
									<p>Chicken Sausage, Chicken Tikka, Capsicum, Jalapeno, Red Paprika</p>
								</div>
							</a>
						</div>
					</li>
                    <li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery14.png" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery14.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>EChickeroni (Chicken Pepperoni)</h3>
									<p>Chicken Pepperoni, Cheese</p>
								</div>
							</a>
						</div>
					</li>
                    <li data-title="Healthy Food" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gallery15.png" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/gallery15.png" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>Double Cheese</h3>
									<p>Extra Cheese On Cheese </p>
								</div>
							</a>
						</div>
					</li>
                    
                    
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<!-- News letter -->
<div class="agile-form">
	<div class="container">
		<div class="col-md-4 newsletter">
		<p>Subscribe to our newsletter</p>
		<h4>For our latest updates</h4>
		</div>
		<div class="col-md-8">
			<form action="#" method="get">
				<input type="email" name="email" placeholder="Enter Your Email Address" required>
				<input type="submit" value="">
			</form>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- News letter -->

<!-- Footer -->
<div class="footer w3ls">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 ftr-grid fg1">
					<h3>opening timings</h3>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Mon - friday</span> : 9am to 8pm</p>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Saturday</span> : 9am to 5pm</p>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Sunday</span> : 6am to 11pm</p>
				</div>
				<div class="col-md-4 ftr-grid fg2 mid-gd">
					<h3>Our Address</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>Aamtala Sukanta Pally, Near Saraitikar More, Golapbag.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>(+91) 880 4204 188</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="mailto:info@example.com">despacito.pizza@gmail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>Recent posts</h3>
					<p>SAVE THE PLANET, IT'S THE ONLY PLACE WHERE YOU GET THE DESPACITO PIZZA.</p>
					<div class="more-button">
						<a href="#">Read more</a>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
</div>
 <div class="copyrights">
	<div class="container">
		<div class="copyright">
			<p>&copy; 2017 Despacito Pizza. All Rights Reserved | Design by  <a href="http://www.watercaterpillar.blogspot.com/" target="_blank">Despacito</a> </p>
		</div>
		<div class="social-icons">
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- Footer -->	

	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //gallery -->


<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>

<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>