<html>
<head>
<title>Delete cookies</title>
<meta charset="utf8"/>
<link rel="stylesheet" href="style.css"/>
</head>
<input type="button" value="GO BACK" class="button" style="width:15%" onclick="history.back(-1)" />
</html>
<?php
if(isset($_COOKIE['user'])){
    setcookie("user","",time()-3600);//expiration data-1h=3600s
    //deleting a cookie
    echo "Cookie Deleted successfully";
}
?>
<html>

<br/><br/>
<h2>Go to  Cookie Display Page</h2><a href="display.php" class="link2" style="position:relative;left:620px">Click here&raquo;</a><br/>
<h2>Go to Cookie Set Page</h2><a href="cookies.php" class="link2" style="position:relative;left:620px">Click here&raquo;</a>
</html>
