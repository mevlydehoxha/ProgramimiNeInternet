<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css"/>
<title>Ajax with database</title>
</head>
<body>
<input type="button" value="GO BACK" class="button" style="width:15%" onclick="history.back(-1)" />
<div>
<h1>Show the data</h1>
<div id="records"></div>
<p>

<input type="button" id="id" value="GET RECORDS" class="button" style="width:30%;position:relative;left:490px"/>
</p>
</div>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#id").on('click',function()
	{
		$.ajax({
			method:"GET",
		url:"dbforajax.php",
		}).done(function(data)
		{
			var result=$.parseJSON(data);
			var string='<table class="container"> <tr><th>ID</th> <th>       Name</th> <th>Email</th><th>Phone number</th><th>Comments</th><tr>';
			
			$.each(result,function(key,value)
			{
				string+="<tr><td>"+value['id']+"</td><td>"+value['firstname']+' '+value['lastname']+'</td><td>'+value['email']+"</td><td>"+value['phonenumber']+"</td><td>"+value['comments']+"</td></tr>";
				
			});
			string+='</table>';
			$('#records').html(string);
		});
		});
	});
</script>
</body>

</html>