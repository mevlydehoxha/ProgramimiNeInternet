<?php

$link=mysqli_connect("localhost:3307","root",'',"guests");
if($link==false)
{
	die("KONEKTIMI KA DESHTUAR:".mysqli_connect_errno());
}
$sql="SELECT * FROM guests";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			$a[]=$row['firstname'];
			
			$q=$_REQUEST["q"];
			
			$hint="";
			
			
			if($q!=="")
			{
				$q=strtolower($q);
				$len=strlen($q);
				foreach($a as $name)
				{
					if(stristr($q,substr($name,0,$len)))
					{
						if($hint==="")
						{
							$hint=$name;
						}
						else
						{
							$hint.=",$name";
						}
					}
				}
			}
		}
	}
}
echo $hint===""?"No suggestion":$hint;

?>