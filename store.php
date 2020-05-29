<?php include('connection.php');
$query="SELECT * FROM userprofile";
$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
$each=$each=mysqli_fetch_array($exec); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Items</title>
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
	<?php	if(isset($_POST['ok']))
	{
		$name=$_POST['name'];
		$street=$_POST['street'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];
		$number=$_POST['number'];
		$query_string="INSERT INTO store VALUES('0','$name','$street','$state','$pincode','$number')";
		$exec =mysqli_query($connect,$query_string) or die(mysqli_error($connect));
	}
	$query="SELECT * FROM store";
	$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if(mysqli_num_rows($exec)>0)
	{
		?>
		<table align="center" cellpadding="5" border="2" cellspacing="0" border="1" style="background-color:#f2f2f2;border-radius:4px">
			<thead>
				<tr>
					<th>SL.NO</th>
					<th>NAME</th>
					<th>STREET</th>
					<th>STATE</th>
					<th>PINCODE</th>
					<th>PHONE</th>
					<th>DELETE</th>
					<th>EDIT</th>
				</tr>
			</thead>
			<tbody>
			<?php $sl=1;
			while($each=mysqli_fetch_array($exec))
			{
				?>
				<tr>
					<td align="center"><?php echo "$sl."?></td>
					<td><?php echo $each['Name']?></td>
					<td><?php echo $each['Street'] ?></td>
					<td><?php echo $each['State']?></td>
					<td><?php echo $each['Pincode']?></td>
					<td><?php echo $each['MobileNo']?></td>
					<td align="center"><a href="deletestore.php?StoreId=<?php echo $each['StoreId']?>" onClick="return confirm('Are you sure you want to delete')">Delete</a></td>
					<td align='center'><a href="editstore.php?StoreId=<?php echo $each['StoreId']?>" onClick="return confirm('Are you sure you want to update')">Edit</a></td>
				</tr>
				<?php $sl++;
			}?>
		</tbody>
	</table>
	<?php
	}
	else
		echo "<p style='color:red' align='center'><font size='4'><b>***No Data Found</b></font></p>";
	?>
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
</body>
</html>