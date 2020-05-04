<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Registration</title>
<link rel="stylesheet" href="style1.css"/>
</head>
<body>
<?php 
require('db.php');
if(isset($_REQUEST['username']))
{
	$username=stripslashes($_REQUEST['username']);
	$username=mysqli_real_escape_string($conn,$username);
    $password = stripslashes($_REQUEST['password']);
	$password=mysqli_real_escape_string($conn,$password);
	$query="INSERT INTO `users` (username,password)
	VALUES ('$username','" .md5($password)."')";
	$result =mysqli_query($conn,$query);
	if($result)
	{
		echo "<div class='form'>
		<h3>YOU ARE REGISTRED.</h3></br>
		<p class='link'>CLICK HERE TO <a href='login.php'>LOGIN </a></p>
		</div>";
	}
	else
	{
		echo "<div class='form'>
		<h3>REQUIRED FIELDS ARE MISSING.</h3><br/>
		<p class='link'>CLICK HERE TO <a href='registration.php'>REGISTRATION</a>AGAIN.</p>
		</div>";
		
	}
}
else{
	?>
	<img src="foto1.jpg" class="gif">
	<form class="form" action="" method="post">
	<h1 class="title">REGISTRATION </h1>
	<input type="text" class="input" name="username" placeholder="Username" required/>
	<input type="password" class="input" name="password" placeholder="Password">
	<input type="submit" name="submit" value="Register" class="button">
	<p class="link"><a href="login.php">CLICK HERE TO LOGIN</a></p>
	</form>
	<?php 
}
?>
</body>
</html>
