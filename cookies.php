<html>
<head>
<title>Cookies</title>
<meta charset="utf8"/>
<link rel="stylesheet" href="style.css"/>
</head>
</html>
<?php
if (isset($_POST['submit']))
{
    
    setcookie("user",$_POST['username'],time()+3600);
    //user-eshte variabel e cookies(name) qe tragon se cookie do te fshihet pas nje ore(koha+3600 sekonda)
    //mundemi me perdor kohen sa dojme na,per nje muaj pershembull
    
}
    ?>
<html>
<body>
<input type="button" value="GO BACK" class="button" style="width:15%" onclick="history.back(-1)" />
<h1>Set New PHP Cookie</h1>
<form action="" method="post" class="form">
    <p style="color:black;text-align:center">Enter Username<p>
    <input name="username" type="text" size="10" class="input" style="width:80%"/><br/>
    <input name="submit" type="submit" value="Submit" class="button" /><br />
	 <p style="color:black;text-align:center"> Go to display Cookie Page</p> <a href="display.php" class="link2" style="width:94%">Click here&raquo;</a>
    </form><br/>
  
</body>
</html>
