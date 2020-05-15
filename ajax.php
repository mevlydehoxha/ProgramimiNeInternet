<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css"/>
<script>
function ajax(str) {
  if (str.length == 0) {
    document.getElementById("id").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("id").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "lista.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>
<form action="" class="form">
  <p style="color:#000033;font-size:18px;"><b>Type the name of the client here:</b></p>
  <label for="fname" style="color:#000033;">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="ajax(this.value)" class="input" style="width:180px;">
  <p style="color:#000033;">Result:<span id="id"></span></p>
</form>
</body>
</html>