<?php
include("user.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style8.css"/>
<title>Guests database</title>
</head>
<body>
<p><a href="" class="link2">Employ: <?php echo $_SESSION['username'];?></a></p>
<p><a href="guests.php" class="link3" >CREATE</a></p>
<p><a href="delete.php" class="link4">DELETE</a></p>		
<p><a href="email.php" class="link5">CONTACT</a></p>
<p><a href="ajax.php" class="link6">FIND</a></p>
<p><a href="ajaxdb.php" class="link7">SHOW RECORDS</a></p>
<p><a href="login.php" class="link1" style="position:relative;top:-84px">LOGOUT</a></p>

<h1>CLIENTS DATABASE</h1>
<?php
$link =mysqli_connect("localhost:3307","root",'',"guests");
           

if($link==false){
	die("KONEKTIMI DESHTOJ".mysqli_connect_errno());
}
$sql="SELECT * FROM guests";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0){
		echo "<table class='container'>";
	
	echo"<thead>";
		echo"<tr>";
		
			echo"<th><h1>First name</h1></th>";
			echo "<th><h1>Last name</h1></th>";
			echo "<th><h1>Room</h1></th>";
			echo "<th><h1>Arrival date</h1></th>";
			echo "<th><h1>Deperature date</h1></th>";
			echo "<th><h1>Price</h1></th>";
		echo"</tr>";
	echo"</thead>";
		while($row=mysqli_fetch_array($result)){
			echo"<tbody>";
		echo"<tr>";
		   
			echo"<td>".$row['firstname']."</td>";
			echo"<td>".$row['lastname']."</td>";
			echo"<td>".$row['room']."</td>";
			echo"<td>".$row['arrivaldate']."</td>";
			echo"<td>".$row['deperaturedate']."</td>";
			echo"<td>".$row['price']."</td>";
	
            $file = fopen('data.txt', 'w');
            fwrite($file,$row['id']);"<br>";
			fwrite($file,$row['firstname']);"<br>";
			fwrite($file,$row['lastname']);"<br>";
			fwrite($file,$row['room']);"<br>";
			fwrite($file,$row['arrivaldate']);"<br>";
			fwrite($file,$row['deperaturedate']);"<br>";
			fwrite($file,$row['price']);"<br>";
            fclose($file);
		echo"</tr>";
		}
	echo"</tbody>";
echo"</table>";
mysqli_free_result($result);
}
    else
    {
	echo"NUK KA REKORDE!";
    }
}
else{
	echo"KONEKTIMI KA DESHTUAR".mysqli_error($link);
}
mysqli_close($link);




?>
</body>
</html>
