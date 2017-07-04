<?php
	session_unset();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/anitro/style.css">
	<title></title>
</head>
<body>
	<form method="post" action="movie.php">
		<p>Enter user name:
		<input type="text" name="user"></p>
		<p>Enter Password:
		<input type="Password" name="pass"></p>
		<p>
			Enter your font choice:
			<select name="font">
				<option value="Verdana">Verdana</option>
				<option value="Arial">Arial</option>
				<option value="Times New Roman">Times New Roman</option>
			</select>
		</p>
		<p>
			Enter your font size:
			<select name="size">
				<option value="10">10</option>
				<option value="15">15</option>
				<option value="20">20</option>
			</select>
		</p>
		<p>Enter Color Choice:
		<select name="color">
				<option value="black">Black</option>
				<option value="powderblue">Powderblue</option>
				<option value="crimson">Crimson</option>
			</select>
			</p>
		<p>
			<input type="submit" name="submit" value="Submit">
		</p>
		<?php
			include "footer.php";
		?>

	</form>

</body>
</html>