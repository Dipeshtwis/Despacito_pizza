<?php include('connection.php');
if(!isset($_SESSION['user']))
{
	header('location:index.php');
	exit;
}
if(!empty($_GET['Userid']))
{
	$Userid=$_GET['Userid'];
	$result=mysqli_query($connect,"SELECT * FROM userprofile WHERE Userid='$Userid'");
	if(mysqli_num_rows($result)==0)
		die("Someting went wrong");   
	$row=mysqli_fetch_array($result);
} 
$query="SELECT * FROM userprofile";
$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
$each=mysqli_fetch_array($exec);
if(isset($_POST['ok']))
{
	$Userid=$_GET['Userid'];
	$fname=$_POST['fname'];
	$sname=$_POST['sname'];
	$dob=$_POST['dob'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$pin=$_POST['pin'];
	$gender=$_POST['gender'];
	$street=$_POST['street'];
	$loc=$_POST['loc'];
	$update_query_string=mysqli_query($connect,"UPDATE userprofile SET Firstname='$fname',Lastname='$sname',Dateofbirth='$dob',Gender='$gender',Street='$street',Location='$loc',City='$city',State='$state',Pincode='$pin',MobileNo='$phone' WHERE Userid='$Userid'") or die(mysqli_error($connect));
	if($update_query_string==1)
	{
		?><script> alert('Update Success');window.location.href="user.php";</script><?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Users pizza</title>
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
						<h1><a href="user.php">π MEMBER</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown"><img src="user.png" width="50px" height="50px"/><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="user.php"><?php echo $_SESSION['user']['Firstname'] ?></a></li>
										<li><a href="updateuser.php?Userid=<?php echo $each['Userid']?>">Edit</a></li>
									</ul>
							  </li>
							<li><a href="changepwduser.php?Userid=<?php echo $each['Userid']?>">Change Password</a></li>
							<li><a href="contact1.php">Contact</a></li>
							<li><a href="user.php">WELCOME <?php echo $_SESSION['user']['Firstname']?> !</a></li>
							<li><a href="logout.php">Sign Out</a></li>
							<li><a href="cart.php"><img src="cart.png" width="50px" height="50px"/></a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
		<!--//header-->
	</div>
</div>
<div id="gallery" class="gallery_main">
		<div class="container">
			<h2 class="heading"><span>EDIT YOUR PROFILE</span></h2>
				<p class="heading"><font size="5" face="Agency FB"><u><?php echo $_SESSION['user']['Firstname'] ?></u></font></p>
			<div class="w3l_gallery_grids">
						<div class="w3_w3l_gallery_grid box">
	<form method="post">
			<table align="center">
			<tr>
				<td><input type="text" name="fname" placeholder="First name*"></td>
				<td><input type="text" name="sname" placeholder="Second name"></td>
			</tr>
			<tr>
				<td><input type="date" name="dob"></td>
				<td><select name="gender"> 
					<option value=''>Select Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Transgender</option>
					</select>
				</td>
			</tr>	
			<tr>
				<td><input type="text" name="street" placeholder="Street"></td>
				<td><input type="text" name="loc" placeholder="Location"></td>
			</tr>
	<tr>
	
		<td><select name="state"> 
		<option value=''>Select State</option>
		<option>Bihar</option>
		<option>Delhi NCR</option>
		<option>Karnataka</option>
		<option>Maharastra</option>
		<option>West Bengal</option>		
		</select>
		</td>
		<td><select name="city"> 
		<option value=''>Select City</option>
		<option>Patna</option>
		<option>Kolkata</option>
		<option>Delhi</option>
		<option>Bengaluru</option>
		<option>Mumbai</option>		
		</select>
		</td>
	</tr>
     <tr>	
		<td><input type="number" name="pin" placeholder="Pincode"></td>
		<td><input type="number" name="phone" placeholder="Phone number*"></td>
	</tr>
	<tr>
		<td align="center" colspan="6"><input type='submit' name='ok' value='Update'>
			<input type='reset'></td>
	</tr>
		</table>
	</form></div></div></div></div>

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
							<p>(+91) 3988 3988</p>
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
			<p>&copy; 2018 Despacito Pizza All Rights Reserved | Design by  <a href="http://www.watercaterpillar.blogspot.com/" target="_blank">Despacito</a> </p>
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