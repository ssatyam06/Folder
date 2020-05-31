<!DOCTYPE html>
<html>
<head>
<title> PAGE 1 </title>
</head>
<body>
<center>
	<h1> Enter the details </h1>
	<hr>
	<?php
		/*if(isset($_GET['submit']))
		{
			$name = $_GET['name'];
			$city = $_GET['city'];
		}*/
	
	echo " 
	<form action = 'page2.php' method = 'get'>
		Enter Name : <input type='text' name='name'><br>
		Enter City : <input type='text' name='city'><br>
		<input type='submit' name='submit' value='Submit'>
	</form> ";
	?>
</center>
</body>
</html>