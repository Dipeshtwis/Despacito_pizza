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
		?><script> alert('Update Success');window.location.href="admin.php";</script><?php
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Information</title>
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
</style>
</head>

<body bgcolor="#e0e0d1">
	<ul>
		<li><a href="admin.php?Userid=<?php echo $_SESSION['user']['Userid']?>"><font color="white">My Profile</font></a></li>
		<li><a href="update.php"><font color="white">Edit Profile</font></a></li>
		<li><a href="changepwd.php?Userid=<?php echo $each['Userid']?>"><font color="white">Change Password</font></a></li>
		<li><a href="add.php"><font color="white">Add Items to Menu</font></a></li>
		<li><a href="http://localhost/phpmyadmin/"><font color="white">Manage Users</font></a></li>
		<li><a href="logout.php"><font color="white">Logout</font></a></li>
	</ul>
	<div id='clear'>
	</div><br/>
	<p style="margin-left: 20px"><font size="5"><b>EDIT YOUR PROFILE:</b></font><font color="red" size="5"><?php echo $_SESSION['user']['Firstname'] ?></font></p><br>
	<hr style="width: 25%">
	<p align="center"><img src="editadmin.png" height="200px" width="200px"/></p>
	<form method="post">
			<br><table align="center" width="30%" cellpadding="6" style="outline-style:solid;background-color:white">
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
	</form>
    </body>
    </html>