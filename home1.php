<?php
error_reporting(0);
session_start();
include_once 'connect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index1.php");
}
$res=mysqli_query($con, "SELECT * FROM users WHERE user=".$_SESSION['user']);
$userRow=mysqli_fetch_assoc($res);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Genius.com - Login & Registration System</title>
<link rel="stylesheet" href="style1.css" type="text/css" />
</head>
<body>
<div id="header">
	<div id="left">
    <label>Genius Group</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome <?php echo $_SESSION['user'] ?>&nbsp;<a href="logout.php?logout"><b>Logout</b></a>
        </div>
    </div>
</div>

<div id="body">
    <p> THANK YOU </p>
</div>

</body>
</html>
