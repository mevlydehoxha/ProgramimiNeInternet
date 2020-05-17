<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" href="style.css"/></head>
<body>
<?php
require('db.php');
require "head.php";
session_start();
if(isset($_POST['username']))
{
	$username=stripslashes($_REQUEST['username']);
	$username=mysqli_real_escape_string($conn,$username);
	$password=stripslashes($_REQUEST['password']);
	$password=mysqli_real_escape_string($conn,$password);
	$query="SELECT*from `users` WHERE username='$username'
	AND password='".md5($password)."'";
	$result=mysqli_query($conn,$query) or die(mysql_error());
	$rows=mysqli_num_rows($result);
	if($rows==1)
	{
		$_SESSION['username']=$username;
		header("Location: guests.php");
		
	}
	else
	{
		echo "<div class='form'>
		<h3>INCORRECT USERNAME OR PASSWORD.</h3><br/>
		<p class='link'>CLICK HERE TO <a href='login.php'>LOGIN </a>AGAIN.</p>
		</div>";
	}
}
else{
	?>
	
	<form class="form" method="post" name="login">
	<h1 class="title">LOGIN</h1>
	<input type="text" class="input" name="username" placeholder="Username" autofocus="true"/>
	<input type="password" class="input" name="password" placeholder="Password"/>
	<input type="submit" value="Login" name="submit" class="button"/>
	<p class="link"><a href="registration.php">CLICK HERE TO REGISTER MORE EMPLOYEES</a></p>
	</form>
	
<?php
}
?>
</body>
</html>


