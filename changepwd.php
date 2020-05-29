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
	if(isset($_POST['submit']))
	{
		$password1=$_POST['Password'];
		if($password1==$row['Password'])
		{
			$new=$_POST['new'];
			$cfnew=$_POST['cnew'];
			if($new!=$cfnew)
				echo "<p style='color:red' align='center'><font size='4'>***Password is not matching</font></p>";
			else
			{
				$update_query_string=mysqli_query($connect,"UPDATE userprofile SET Password='$new' WHERE Userid='$Userid'") or die(mysqli_error($connect));
				if($update_query_string==1){
					?><script>alert('Updated');window.location.href="admin.php";</script><?php				
				}
			}
		}
		else
			echo "<p style='color:red' align='center'><font size='4'>***Incorrect Password</font></p>";
	}?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
	<style type='text/css'>
	html, body {
  			margin: 0;
  			padding: 0; 
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
input[type=submit] {
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
	<p align="center"><img src="pass.png" height="200px" width="200px"/></p>

	<br><br><form method="post">
		<table align='center' border='0' cellpadding="10" cellspacing="0" style="outline-style:solid;background-color:white">
			<tr>
				<td><input type="password" name="Password" required placeholder="Old Password"></td>
			</tr>
			<tr>
				<td><input type="password" name="new" required placeholder="New Password"></td>
			</tr>
			<tr>
				<td><input type="password" name="cnew" required placeholder="Confirm Password"></td>
			</tr>
			<tr>
				<td align="center" colspan="4"><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>