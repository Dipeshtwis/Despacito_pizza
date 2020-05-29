<?php include('connection.php');
if(isset($_POST['Login']))
{
	$email=$_POST['em'];
	$password=$_POST['pwd'];
	$check="SELECT * FROM userprofile WHERE EmailId='$email' AND Password='$password'";
	$checklink=mysqli_query($connect,$check) or die(mysqli_error($connect));
	if(mysqli_num_rows($checklink)==1)
	{
		if($email=="parag.dashing888@gmail.com" or $email=="vishal.20.2011@gmail.com" or $email=="pulkit.0092013@gmail.com" or $email=="idealdips.0080@gmail.com" )
		{
			$userdata=mysqli_fetch_array($checklink); 
			$_SESSION['user']= NULL;
			$_SESSION['user']=$userdata;  
			?><script> alert('Welcome');window.location.href="admin.php?Userid=<?php echo $userdata['Userid']?>";</script><?php  
		}
		else
		{
			$userdata=mysqli_fetch_array($checklink); 
			$_SESSION['user']= NULL;
			$_SESSION['user']=$userdata;  
			?><script> alert('Welcome');window.location.href="user.php?Userid=<?php echo $userdata['Userid']?>";</script><?php
		}
	}
	else
		echo "<p style='color:red' align='center'><font size='4'><b>***Invalid User. Please Register First</b></font></p>";
}?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style type="text/css">
	body{
		background-image:url("pizza00.jpg");
	}
html { height: 100% }
::-moz-selection { background: #fe57a1; color: #fff; text-shadow: none; }
::selection { background: #fe57a1; color: #fff; text-shadow: none; }
.login {
  background: #eceeee;
  border: 1px solid #42464b;
  border-radius: 6px;
  height: 257px;
  margin: 20px auto 0;
  width: 298px;
}
input[type="password"], input[type="text"] {
  border: 1px solid #a1a3a3;
  border-radius: 4px;
  box-shadow: 0 1px #fff;
  box-sizing: border-box;
  color: #696969;
  height: 39px;
  margin: 31px 0 0 29px;
  padding-left: 37px;
  transition: box-shadow 0.3s;
  width: 240px;
}
input[type="password"]:focus, input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}
.forgot {
  color: #7f7f7f;
  display: inline-block;
  float: right;
  font: 12px/1 sans-serif;
  left: -19px;
  position: relative;
  text-decoration: none;
  top: 5px;
  transition: color .4s;
}
.forgot:hover { color: #3b3b3b }
input[type="submit"] {
  width:240px;
  height:35px;
  display:block;
  font-family:Arial, "Helvetica", sans-serif;
  font-size:16px;
  font-weight:bold;
  color:#fff;
  text-decoration:none;
  text-transform:uppercase;
  text-align:center;
  text-shadow:1px 1px 0px #37a69b;
  padding-top:6px;
  margin: 29px 0 0 29px;
  position:relative;
  cursor:pointer;
  border: none;  
  background-color: #37a69b;
  background-image: linear-gradient(top,#3db0a6,#3111);
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius:5px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}

.shadow {
  background: #000;
  border-radius: 12px 12px 4px 4px;
  box-shadow: 0 0 20px 10px #000;
  height: 12px;
  margin: 30px auto;
  opacity: 0.2;
  width: 270px;
}


input[type="submit"]:active {
  top:3px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
}	ul{
			float:left;
			line-height:35px;
			background-color:grey;
			border-top:solid 1px black;
			border-bottom:solid 1px black;
			border-left:solid 1px black;
			margin-left:43%;
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
	<p align="center"><img src="icon.png" width="190px" height="180px"></p>
	<ul>
		<li><a href="login.php"><font color="white" face="Agency FB">Login</font></a></li>
		<li><a href="registration.php"><font color="white" face="Agency FB">Register</font></a></li>
		<li><a href="index.php"><font color="white">Back</font></a></li>
	</ul>
	<div id='clear'>
	</div>
	<div class="login">
  <form method="post">
    <table>
      <tr>
        <td>
    <input type="text" name="em" placeholder="Email" id="username" required>  
  <input type="password" name="pwd" placeholder="Password" id="password" required> 
  <a href="forgotpwd.php" class="forgot">forgot password?</a>
  <input type="submit" name="Login" value="Sign In">
        </td>
      </tr>
    </table>
    </form>
</div>
<div class="shadow"></div>

</body>
</html>