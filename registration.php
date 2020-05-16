<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Registration</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php 
require('db.php');
if(isset($_REQUEST['username']))
{
	$username=stripslashes($_REQUEST['username']);
	$username=mysqli_real_escape_string($conn,$username);
	$firstname=stripslashes($_REQUEST['firstname']);
	$firstname=mysqli_real_escape_string($conn,$firstname);
	$lastname=stripslashes($_REQUEST['lastname']);
	$lasename=mysqli_real_escape_string($conn,$lastname);
	$email=stripslashes($_REQUEST['email']);
	$email=mysqli_real_escape_string($conn,$email);
	function regex($email)
    {
    if( !preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+
                     ([a-zA-Z0-9\._-]+)+$/", $email))
    {
        echo"E-MAIL-I ESHTE JO VALID";
    }	
	}
	$phoneno=stripslashes($_REQUEST['phoneno']);
	$phoneno=mysqli_real_escape_string($conn,$phoneno);
	$address=stripslashes($_REQUEST['address']);
	$adrress=mysqli_real_escape_string($conn,$address);
	$birthdate=stripslashes($_REQUEST['birthdate']);
	$birthdate=mysqli_real_escape_string($conn,$birthdate);
	$shift=stripslashes($_REQUEST['shift']);
	$shift=mysqli_real_escape_string($conn,$shift);
    $password = stripslashes($_REQUEST['password']);
	$password=mysqli_real_escape_string($conn,$password);
	$query="INSERT INTO `users` (username,firstname,lastname,email,phoneno,address,birthdate,shift,password)
	VALUES ('$username','$firstname','$lastname','$email','$phoneno','$address','$birthdate','$shift','" .md5($password)."')";
	$result =mysqli_query($conn,$query);
	
	
  
    
	
	
   
	
	if($result)
	{
		echo "USER WITH REGEX-";
		echo str_replace(" ",".",$username);
		echo "<div class='form'>
		<h3>YOU ARE REGISTRED.</h3></br>
		<p class='link'><a href='login.php'>CLICK HERE TO LOGIN </a></p>
		</div>";
		
		
		
	}
	else
	{
		echo "<div class='form'>
		<h3>REQUIRED FIELDS ARE MISSING.</h3><br/>
		<p class='link'><a href='registration.php'>CLICK HERE TO REGISTER </a>AGAIN.</p>
		</div>";
		
	}
}
else{
	?>
	
	<form class="form" action="" method="post">
	<h1 class="title">REGISTRATION FOR EMPLOYEES </h1>
	<input type="text" class="input" name="firstname" placeholder="First name" required/>
	<input type="text" class="input" name="lastname" placeholder="Last name" required/>
	<input type="text" class="input" name="email" placeholder="E-mail" required/>
	<input type="text" class="input" name="phoneno" placeholder="Phone number" required/>
	<input type="text" class="input" name="address" placeholder="Address" required/>
	<input type="date" class="input" name="birthdate" placeholder="Birth date" required/>
    <input type="text" class="input" name="shift" placeholder="Shift" required/>
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
