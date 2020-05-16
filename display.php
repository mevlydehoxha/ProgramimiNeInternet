<html>
<head>
<title>Display cookies</title>
<meta charset="utf8"/>
<link rel="stylesheet" href="style.css"/>
</head>
<input type="button" value="GO BACK" class="button" style="width:15%" onclick="history.back(-1)" />
</html>
<?php
if(isset($_COOKIE['user'])){
    
    echo "<h2>WELCOME </h2><h1>".$_COOKIE['user']."</h1>";

}
else{
    echo "<h2>No Cookie Found</h2>";
}
?>

<br/><br/>
<h2>Delete Cookie</h2> <a href="deletecookie.php" class="link2" style="position:relative;left:620px">Click here&raquo;</a><br/>
<h2>Cookie Set</h2><a href="cookies.php" class="link2" style="position:relative;left:620px">Click here&raquo;</a>

