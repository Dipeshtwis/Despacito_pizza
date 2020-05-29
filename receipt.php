<?php include('connection.php');
if(!isset($_SESSION['user']))
{
	header('location:index.php');
	exit;
}
$query="SELECT * FROM userprofile";
$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
$each=$each=mysqli_fetch_array($exec); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Invoice</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Recipe a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

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
						<h1><a href="index.php">π MEMBER</a></h1>
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
										<li><a href="updateuser.php">Edit</a></li>
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
			<h2 class="heading">INVOICE</h2>
			<p class="heading"><font size="5" face="Agency FB"><u>YOU WILL GET DELIVERED BY 30 Minutes...</u></font></p>
<form method="post">
	<table align="right">
		<tr>
			<td><a href="user.php" style="text-decoration: none"><input type="submit" name="print" value="Print"></a></td>
		</tr>
	</table>
</form>
<?php 
if (isset($_POST['print']))
{
$delete_query_string="DELETE FROM status";
	$exec=mysqli_query($connect,$delete_query_string) or die(mysqli_error($connect));
	if($exec==1)
		?><script> alert('Downloaded');window.location.href="user.php";</script><?php
}
	?>

	<?php
	$query="SELECT * FROM status";
	$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if(mysqli_num_rows($exec)>0)
	{
		?>
		<br><br><br><table align="center" width="100%" style="background-color:#f2f2f2">
			<thead align="center" style="background-color: #79d2a6">
				<tr>
					<th>|NAME|</th>
					<th>|TRACK|</th>
					<th>|DATE&TIME|</th>
					<th>|EMAIL|</th>
					<th>|PHONE|</th>
					<th>|ADDRESS|</th>
					<th>|PINCODE|</th>
					<th>|AMOUNT|</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while($each=mysqli_fetch_array($exec))
			{
				?>
				<tr>
					<td><?php echo $each['name']?></td>
					<td align="center"><?php echo $each['track']?></td>
					<td align="center"><?php echo $each['dateandtime']?></td>
					<td align="center"><?php echo $each['email']?></td>
					<td align="center"><?php echo $each['phone']?></td>
					<td align="center"><?php echo $each['address']?></td>
					<td align="center"><?php echo $each['pincode']?></td>
					<td align="center">₹<?php echo $each['amount']?></td>
				</tr>
				<?php
			}?>
		</tbody>
	</table>
	<?php
	}
	?><br><br><br>
</div></div>
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