<?php
include("user.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Guests</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php 
require('dbguests.php');
if(isset($_REQUEST['firstname']))
{
	$firstname=stripslashes($_REQUEST['firstname']);
	$firstname=mysqli_real_escape_string($conn1,$firstname);
	$lastname=stripslashes($_REQUEST['lastname']);
	$lastname=mysqli_real_escape_string($conn1,$lastname);
	$email=stripslashes($_REQUEST['email']);
	$email=mysqli_real_escape_string($conn1,$email);
	$phonenumber=stripslashes($_REQUEST['phonenumber']);
	$phonenumber=mysqli_real_escape_string($conn1,$phonenumber);
	$room=stripslashes($_REQUEST['room']);
	$room=mysqli_real_escape_string($conn1,$room);
	$roomtype=stripslashes($_REQUEST['roomtype']);
	$roomtype=mysqli_real_escape_string($conn1,$roomtype);
	$arrivaldate=stripslashes($_REQUEST['arrivaldate']);
	$arrivaldate=mysqli_real_escape_string($conn1,$arrivaldate);
	$deperaturedate=stripslashes($_REQUEST['deperaturedate']);
	$deperaturedate=mysqli_real_escape_string($conn1,$deperaturedate);
    $price = stripslashes($_REQUEST['price']);
	$price=mysqli_real_escape_string($conn1,$price);
	$comments=stripslashes($_REQUEST['comments']);
	$comments=mysqli_real_escape_string($conn1,$comments);
	$query1="INSERT INTO guests (firstname,lastname,email,phonenumber,room,roomtype,arrivaldate,deperaturedate,price,comments)
	VALUES ('$firstname','$lastname','$email','$phonenumber','$room','$roomtype','$arrivaldate','$deperaturedate','$price','$comments')";
	$result1 =mysqli_query($conn1,$query1);
	if($result1)
	{
		$_SESSION['firstname']=$firstname;
		header("Location: guestsdatabase.php");
	}
	else
	{
		echo "<div class='form'>
		<h3>REQUIRED FIELDS ARE MISSING.</h3><br/>
		<p class='link'>CLICK HERE TO <a href='guests.php'>REGISTER AGAIN.</a>AGAIN.</p>
		</div>";
		
	}
}
else{
	?>
	<p ><a href="" class="link2">Employ: <?php echo $_SESSION['username'];?></a></p>
<p><a href="login.php" class="link1" >LOGOUT</a></p>
<p><a href="guestsdatabase.php" class="link4" style="width:4.38%">SHOW DATABASE</a></p>
<form class="form" action="" method="post">
	<h1 class="title">GUESTS REGISTRATION</h1>
	<input type="text" class="input" name="firstname" placeholder="First name" required/>
	<input type="text" class="input" name="lastname" placeholder="Last name" required/>
	<input type="text" class="input" name="email" placeholder="E-mail" required/>
	<input type="text" class="input" name="phonenumber" placeholder="Phone number" required/>
	<input type="text" class="input" name="room" placeholder="Room" required/>
	<input type="text" class="input" name="roomtype" placeholder="Room type" required/>
	<input type="date" class="input" name="arrivaldate" placeholder="Arrival date" style="width:65%"  required/>
	<input type="date" class="input" name="deperaturedate" placeholder="Deperature date" style="width:65%" required/>
	<input type="text" class="input" name="price" placeholder="Price" required/>
    <textarea  name="comments" placeholder="Comments" class="input" style="height:100px;width:65%"></textarea>
	<input type="submit" name="submit" value="Send it to the database" class="button">
	
	</form>
	<?php 
}
?>
</body>
</html>

