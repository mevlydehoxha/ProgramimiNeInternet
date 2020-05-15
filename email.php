<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css"/>
</head>
</html>

<?php
if(isset($_REQUEST['email']))
{
$admin="mevlydeihoxha@gmail.com";
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$comment=$_REQUEST['comment'];

mail($admin,"$subject",$comment,"From:".$email);
echo"E-MAIL WAS SEND";
}
else
{
	?>
	 <input type="button" value="GO BACK" class="button" style="width:15%" onclick="history.back(-1)" />
	<form method="post" class="form"><br>  
<input name="email" type="text" class="input" placeholder="E-mail"/><br> 
<input name="subject" type="text" class="input" placeholder="Subject"/><br>  
<br>   <textarea name="comment" rows="15" cols="40" class="input" style="height:100px;width:70%" placeholder="Message"></textarea><br> 
 <input type="submit" value="SEND" class="button" />  
 </form> 
	<?php
}
?>