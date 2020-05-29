<?php include('connection.php');
$query="SELECT * FROM userprofile";
$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
$each=$each=mysqli_fetch_array($exec);
if(!empty($_GET['StoreId']))
{
	$StoreId=$_GET['StoreId'];
	$getPrevData=mysqli_query($connect, "SELECT * FROM store WHERE StoreId='$StoreId'");
	if(mysqli_num_rows($getPrevData)==1)
		$row=mysqli_fetch_array($getPrevData);
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Stores</title>
	<style type="text/css">
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
<body>
	<ul>
		<li><a href="admin.php"><font color="white">My Profile</font></a></li>
		<li><a href="update.php"><font color="white">Edit Profile</font></a></li>
		<li><a href="changepwd.php?Userid=<?php echo $each['Userid']?>"><font color="white">Change Password</font></a></li>
		<li><a href="add.php"><font color="white">Add Items to Menu</font></a></li>
		<li><a href="store.php"><font color="white">Edit Stores</font></a></li>
		<li><a href="http://localhost/phpmyadmin/"><font color="white">Manage Users</font></a></li>
		<li><a href="logout.php"><font color="white">Logout</font></a></li>
	</ul>
	<div id='clear'>
	</div><br/>
	<p>INSERT HERE</p>
	<form method="post">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Enter the Store name..."></td>
		</tr>
		<tr>
			<td>Street:</td>
			<td><input type="text" name="street" placeholder="Enter the street name..."></td>
		</tr>
		<tr>
			<td>State:</td>
			<td><select name="state">
				<option value=" ">Select State</option>
				<option>Andhra Pradesh</option>
				<option>Arunachal Pradesh</option>
				<option>Assam</option>
				<option>Bihar</option>
				<option>Chandigarh</option>
				<option>Chattisgarh</option>
				<option>Delhi (NCR)</option>
				<option>Goa</option>
				<option>Gujarat</option>
				<option>Haryana</option>
				<option>Himachal Pardesh</option>
				<option>Jammu and Kashmir</option>
				<option>Jharkhand</option>
				<option>Karnataka</option>
				<option>Kerala</option>
				<option>Madhya Pradesh</option>
				<option>Maharashtra</option>
				<option>Manipur</option>
				<option>Punjab</option>
				<option>Rajasthan</option>
				<option>Sikkim</option>
				<option>Tamil Nadu</option>
				<option>Telangana</option>
				<option>Uttar Pradesh</option>
				<option>Uttrakhand</option>
				<option>West Bengal</option>
			</select></td>
		</tr>
		<tr>
			<td>Pincode:</td>
			<td><input type="number" name="pincode"></td>
		</tr>
		<tr>
			<td>Mobile Number:</td>
			<td><input type="number" name="number"></td>
		</tr>
		<tr>
			<td><input type="submit" name="ok" value="Submit"></td>
		</tr>
	</table>
</form>	
<a href="store.php">Back</a>
<?php
if(isset($_POST['ok']))
{
	$name=$_POST['name'];
	$street=$_POST['street'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$number=$_POST['number'];
	$update_query_string=mysqli_query($connect,"UPDATE store SET Name='$name',Street='$street',State='$state',Pincode='$pincode',MobileNo='$number' WHERE StoreId='$StoreId'") or die(mysqli_error($connect));
	if($update_query_string==1)
	{
		?><script> alert('Update Success');window.location.href="store.php";</script><?php
	}
}
?>
</body>
</html>
