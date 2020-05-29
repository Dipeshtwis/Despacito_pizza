<?php include('connection.php');
error_reporting(0);
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
<title>Item On Cart</title>
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
			<h2 class="heading">CART</h2>

<?php	
if(!empty($_GET['foodId']))
{
	$foodId=$_GET['foodId'];
	$result=mysqli_query($connect,"SELECT * FROM food WHERE foodId='$foodId'");
	if(mysqli_num_rows($result)==0)
		die("Someting went wrong");   
	$row=mysqli_fetch_array($result);
} 
	$update_query_string=mysqli_query($connect,"INSERT INTO cart SELECT * FROM food WHERE foodId='$foodId'") or die(mysqli_error($connect));
	$query="SELECT * FROM cart";
	$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if(mysqli_num_rows($exec)>0)
	{
		?>
		<br><br><br><br><table align="center" width="100%" border="2" style="background-color:#f2f2f2">
			<thead style="background-color: #79d2a6">
				<tr>
					<th>SL.NO</th>
					<th>Pizza</th>
					<th>NAME</th>
					<th>FOOD ID</th>
					<th>TYPE</th>
					<th>SIZE</th>
					<th>QUANTITY</th>
					<th>PRICE</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
			<?php $sl=1;
			$sum=0;
			while($each=mysqli_fetch_array($exec))
			{
				?>
				<tr>
					<td align="center" style="background-color:#79d2a6"><?php echo "$sl."?></td>
					<td align="center"><img src="<?php echo $each['filepath']?>" height="100px" width="100px"/></td>
					<td align="center"><?php echo $each['Name']?></td>
					<td align="center"><?php echo $each['Unique'] ?></td>
					<td align="center"><?php echo $each['Type']?></td>
					<td align="center"><?php echo $each['Size']?></td>
					<td align="center"><input type="number" name="quantity" value="1"></td>
					<td align="center"> ₹<?php echo $each['Price']?></td>
					<td align="center"><a href="deletecart.php?foodId=<?php echo $each['foodId']?>" onClick="return confirm('Are you sure you want to remove')"><img src="remove.jpg" height="50px" width="100px"/></a></td>
				</tr>
				<?php
				$var=$each['Price'];
				$sum=$sum+$var;
				?>
				<?php $sl++;
			}?>
		</tbody>
	</table>
	<br><br><p align="right"><font color="red" face="Agency FB" size="5">Subtotal: ₹<?php echo $sum; ?></font></p>
	<p align="right"><font color="red" face="Agency FB" size="5">GST: +18%</font></p><hr align="right" style="width:25%">
	<p align="right"><font color="red" face="Agency FB" size="5">Total:  ₹<?php echo ($sum*0.18)+$sum;?></font></p>
	<p align="right"><font color="red" face="Agency FB" size="5">Discount: - ₹<?php echo ($sum*0.18);?></font></p>
	<p align="right"><font color="red" face="Agency FB" size="5">Total Payment:  ₹<?php echo ($sum);?></font></p>
	<br><br><br><br><p align="right"><font color="red" face="Agency FB" size="7"><a href="redirect.php">→Proceed to checkout</a></font></p>
	<?php
	}
	else{
		echo "<p style='color:red' align='center'><font size='4'><b><br><br><br>Cart is Empty</b></font></p>"; ?><br><br><br><br>
	<?php }
	
	?>

	<?php 

	?>
</div></div>

<!-- // banner -->


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