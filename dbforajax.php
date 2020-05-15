<?php

$link=new mysqli("localhost:3307","root",'',"guests");
$result_array=array();
if($link->connect_error)
{
	die("KONEKTIMI ME DATABAZEN KA DESHTUAR:".$link->connect_error);
}
$sql="SELECT id,firstname,lastname,email,phonenumber,comments FROM guests";
$result=$link->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		array_push($result_array,$row);
	}
}
echo json_encode($result_array);
$link->close();

?>