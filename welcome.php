
<?php
	if (isset($_POST['fname'])) {
		session_start();
		print "Your Session ID: is".session_id();
		$_SESSION['name']=$_POST['fname'];
		header("location: profile.php");
	}


?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Sign IN</title>
			<head>Enter First Name to Login</head>
		</script>
	</head>
	<body>
		<marquee>
			LogIn Page
		</marquee>
				<hr>
				<p id="para1">
			Enter the contents below to sign up
		</p>
		<form action="" method="POST" id="form1">
			<fieldset>
			<legend>
				<b>LogIn</b>
			</legend><b>
		First name: <input type="text" name="fname"><br><br>
<!--		Last name: <input type="text" name="lname" form="form1"><br><br> -->
		<input type="submit" value="Login">
			</b></fieldset>
		</form>
				<p class="wow" id="demo">
			Having touble?
		</p>
		</body>
		</html>