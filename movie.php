<?php
	session_start();
/*if(($_POST['user']!='Admin')and($_POST['pass']!='12345')){
		echo "Sorry...!!!";
		exit();
	}*/
?>
<html>
<head>
	<title>Find my favourite movie</title>
</head>
<body>
<div class="menu">
	<?php include 'menu.php';?>
</div>
<?php
	echo "<font face=";echo $_POST['font'];
	echo " size=";echo $_POST['size'];
	echo " color =";echo $_POST['color'];
	echo ">";
	echo " Hello ";echo $_POST['user'];
	echo "</font>";
?>
<?php
	include "footer.php";
	include "test.php";
	//require "testtt.php"; //require terminates with fatal error
	//print_r($s);
	$num=42;
	$guess=0;
	$msg="";

	if(isset($_POST['guess'])){
		
		if($_POST['guess']<$num){
			$msg =$_POST['guess']." is small";
		}
		else if($_POST['guess']>$num){
			$msg=$_POST['guess']." is big";			
		}
		else
			$msg="Well Done";

	}
	else{
		$msg="Welcome <br>";
	}
	if(isset($_POST['tries'])){
		$tries=$_POST['tries'];
	}
	else{
		$tries=0;
	}
	$tries++;
?>
<?php print $msg?>
Number of tries:<?php print $tries?><br>
<form method="POST" action= "<?php print $_SERVER['PHP_SELF']?>">
	<input type="hidden" name="tries" value="<?php print $tries?>"/>
	Type your guess:
	<input type="text" name="guess" value="<?php print $guess ?>"/>
	</form>
		
</body>
</html>