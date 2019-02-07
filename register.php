<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home1.php");
}
include_once 'connect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysqli_real_escape_string($con, $_POST['uname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$upass = mysqli_real_escape_string($con, $_POST['pass']);
	
	if(mysqli_query($con, "INSERT INTO users(username,email,password) VALUES('".$uname."','".$email."','".$upass."')"))
	{
            $msg = 'Congratulation you have successfully registered.';
		
        
       
	}
	else
	{
            $msg = 'Error while registering you...';     
	}
}
?>

<html>
<head>
<meta >
<title>Login & Registration System</title>
<link rel="stylesheet" href="style1.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form onsubmit="return check()" method="post">
    <?php echo @$msg;?>
<table align="center" width="30%" border="0" bgcolor="">
<tr><b><h1>Regristration Form</h1></b>
<td><b>User Name:</b><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><b>email id:</b><input type="email" name="email" id="2" placeholder="Your Email" required /><span id="1" style="color:red"> </span></td></td>
</tr>
<tr>
<td><b>Password:</b><input type="password" name="pass" id="3" placeholder="Your Password" required /><span id="4" style="color:red"> </span></td></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Submit</button></td>
</tr>
<tr>
<td><a href="index1.php"> Goto Login>>>>>></a></td>
</tr>
</table>
</form>
	<script  src="gmail.js"></script>
</div>
</center>
</body>
</html>
