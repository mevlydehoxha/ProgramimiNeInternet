<?php

$conn=mysqli_connect("localhost:3307","root",'',"users");
if(mysqli_connect_errno())
{
	echo "KONEKTIMI ME DATABAZEN KA DESHTUAR".mysqli_connect_error();
}

?>
