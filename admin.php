<?php include('connection.php'); 
if(!isset($_SESSION['user']))
{
	header('location:index.php');
	exit;
}?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
<style type='text/css'>
	html, body {
  			margin: 0;
  			padding: 0; 
	}
		ul{
			float:left;
			line-height:35px;
			background-color:#b9191c;
			border-top:solid 1px #9c0205;
			border-bottom:solid 1px #9c0205;
			margin:0;
			width:100%;
			padding:0;
	}
	li{
		float:left;
		list-style: none;
		cursor: pointer;
		display:block;
		border-right:1px solid #262626;
	}
	li:hover{
		background-color:#b30000;
	}
	li a{
		text-decoration:none;
		text-align:center;
		padding: 14px 16px;
		color:white;
	}
	#clear{
		clear:both;
	}
</style>
</head>
<body bgcolor="#e0e0d1">
	<ul>
		<li><a href="admin.php?Userid=<?php echo $_SESSION['user']['Userid']?>"><font color="white">My Profile</font></a></li>
		<li><a href="update.php?Userid=<?php echo $_SESSION['user']['Userid']?>">Edit Profile</font></a></li>
		<li><a href="changepwd.php?Userid=<?php echo $_SESSION['user']['Userid']?>"><font color="white">Change Password</font></a></li>
		<li><a href="add.php"><font color="white">Add Items to Menu</font></a></li>
		<li><a href="http://localhost/phpmyadmin/"><font color="white">Manage Users</font></a></li>
		<li><a href="logout.php"><font color="white">Logout</font></a></li>
	</ul>
	<div id='clear'>
	</div><br/>
	<p style="margin-left: 20px"><font size="5"><b>Welcome: </b><font color="red"><u><b><?php echo $_SESSION['user']['Firstname'] ?></b></u></font> (ADMIN)</font></p>
	<?php if(!empty($_GET['Userid']))
{
	$Userid=$_GET['Userid'];
	$getPrevData=mysqli_query($connect, "SELECT * FROM userprofile WHERE Userid='$Userid'");
	if(mysqli_num_rows($getPrevData)==1)
		$row=mysqli_fetch_array($getPrevData);
}
?><br><hr style="width: 25%">
<p align="center"><img src="admin.png" height="200px" width="200px"/></p>
	<br><table align="center" width="30%" cellpadding="6" style="outline-style:solid;background-color:white">
		<tr>
			<td><b>Your Name<hr></b></td>
			<td style="width: 10px"><b>:</b><?php echo $row['Firstname'].$row['Lastname']?><hr></td>
		</tr>
		<tr>
			<td><b>Date of Birth</b></td>
			<td><b>:</b><?php echo $row['Dateofbirth']?></td>
		</tr>
		<tr>
			<td><b>Gender</b></td>
			<td><b>:</b><?php echo $row['Gender']?></td>
		</tr>
		<tr>
			<td><b>Street</b></td>
			<td><b>:</b><?php echo $row['Street'] ?></td>
		</tr>
		<tr>
			<td><b>Location</b></td>
			<td><b>:</b><?php echo $row['Location'] ?></td>
		</tr>
		<tr>
			<td><b>City</b></td>
			<td><b>:</b><?php echo $row['City'] ?></td>
		</tr>
		<tr>
			<td><b>State</b></td>
			<td><b>:</b><?php echo $row['State'] ?></td>
		</tr>
		<tr>
			<td><b>Pincode</b></td>
			<td><b>:</b><?php echo $row['Pincode'] ?></td>
		</tr>
		<tr>
			<td><b>Mob. Number<hr></b></td>
			<td><b>:</b><?php echo $row['MobileNo'] ?><hr></td>
		</tr>
		<tr>
			<td><b>Email ID</b></td>
			<td><b>:</b><?php echo $row['EmailId'] ?></td>
		</tr>
	</table><br><br><br>

</body>
</html>