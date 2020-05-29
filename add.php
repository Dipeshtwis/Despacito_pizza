<?php include('connection.php');
if(!isset($_SESSION['user']))
{
	header('location:index.php');
	exit;
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Items</title>
	<style type="text/css">
.box {
	margin-left: auto;
	margin-right: auto;
	font-family: Arial, Helvetica, sans-serif;
	border: 1px solid #000000;
}
html, body {
  			margin: 0;
  			padding: 0; 
	}
	input[type=text] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 11px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=number] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=email] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=password] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=file] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=date] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
select {
    
    padding: 3px 10px;
    border: 1px solid #a1a3a3;
    border-radius: 4px;
    background-color: #f1f1f1;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  box-shadow: 0 1px #fff;
}
input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 4px 10px;
    text-decoration: none;
    cursor: pointer;
  	height:35px;
  	margin-top:10px;
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

	<p align="center"><font size="6">INSERT HERE</font></p><hr style="width: 25%"><br><br>
	<form method="post" enctype="multipart/form-data">
	<br><table align="center" style="outline-style:solid;background-color: white">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Enter the food name..."></td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><select name="type">
				<option value=" ">Select Type</option>
				<option>Deserts</option>
				<option>Non-Vegeterian</option>
				<option>Vegeterian</option>
				<option>Soft Drinks</option>
				<option>Classic</option>
				<option>Supreme</option>
			</select></td>
		</tr>
		<tr>
			<td>Size:</td>
			<td><select name="size">
				<option value=" ">Select Size</option>
				<option>Personal</option>
				<option>Medium</option>
				<option>Family</option>
			</select></td>
		</tr>
		<tr>
			<td>Quantity:</td>
			<td><input type="number" name="quantity"></td>
		</tr>
		<tr>
			<td>Price (₹):</td>
			<td><input type="text" name="price" placeholder="Enter the price..."></td>
		</tr>
		<tr>
			<td>Choose File</td>
		</tr>
		<tr>
			<td><input type="file" name="img"></td>
		</tr>
		<tr>
			<td align="center" colspan="7"><input type="submit" name="ok" value="Submit"></td>
		</tr>
	</table>
</form><br><br><br><br>
<?php
	if(isset($_POST['ok']))
	{
		$name=$_POST['name'];
		$unique=rand(0000000000,9999999999);
		$type=$_POST['type'];
		$size=$_POST['size'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		$filename=$_FILES['img']['name'];
		$dir="images";
				if(!file_exists($dir)) 
					mkdir($dir);
				$destination_path=$dir.'/'.rand(0000,9999).'_'.$filename;  
				$upload=move_uploaded_file($_FILES['img']['tmp_name'],$destination_path) or die($_FILES['img']['error']);
		$query_string="INSERT INTO food VALUES('0','$name','$unique','$type','$size','$quantity','$price','$filename','$destination_path')";
		$exec =mysqli_query($connect,$query_string) or die(mysqli_error($connect));
	}
	$query="SELECT * FROM food";
	$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if(mysqli_num_rows($exec)>0)
	{
		?>
		<table align="center" cellpadding="5" border="2" cellspacing="0" border="1" style="background-color:#f2f2f2;border-radius:4px">
			<thead style="background-color: #79d2a6">
				<tr>
					<th>SL.NO</th>
					<th>NAME</th>
					<th>FOOD ID</th>
					<th>TYPE</th>
					<th>SIZE</th>
					<th>QUANTITY</th>
					<th>PRICE</th>
					<th>Pizza Photo</th>
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
					<td align="center" style="background-color: #79d2a6"><?php echo "$sl."?></td>
					<td><?php echo $each['Name']?></td>
					<td><?php echo $each['Unique']?></td>
					<td><?php echo $each['Type']?></td>
					<td><?php echo $each['Size']?></td>
					<td><?php echo $each['Quantity']?></td>
					<td><?php echo $each['Price']?></td>
					<td><img src="<?php echo $each['filepath']?>" height="100px" width="100px"/></td>
					<td align="center"><a href="delete.php?foodId=<?php echo $each['foodId']?>" onClick="return confirm('Are you sure you want to delete')">Delete</a></td>
					<td align='center'><a href="edit.php?foodId=<?php echo $each['foodId']?>" onClick="return confirm('Are you sure you want to update')">Edit</a></td>
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
</body>
</html>