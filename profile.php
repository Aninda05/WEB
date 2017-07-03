<?php
		session_start();
		print "Your Session ID: is".session_id();
		if (!isset($_SESSION['name'])) {
		header("location: welcome.php");
	}
	$name=$_SESSION['name'];
if (isset($_SESSION['counter'])) {
	$_SESSION['counter']+=1;
}
else {
$_SESSION['counter']=1;
}
		$msg="<br> YOU HAVE VISITED THIS PAGE ".$_SESSION['counter'];
		$msg.= " IN THIS SESSION";
 
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Profile of <?php echo $name; ?></title>
	</head>

	<body>
		<h1>Hello  <?php echo $name; ?> </h1>
		<form action="logout.php" method="POST">
			<input type="Submit" value ="LOGOUT"/>
		</form>
		<?php echo($msg); ?>
	</body>
	</html>