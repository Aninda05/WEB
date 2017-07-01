<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" >
	<title>Heil Hydra!!</title>
</head>

<body>
	
	<?php
		$str="THIS IS HOW WE SPLIT";
		$num=9;

		print_r(explode(" ", $str, 4));			//third param in explode() determines no of splits
		echo "<br>";
		print_r(str_split($str,3));
		printf("<br> %s %d", $str,$num);
		printf("<br>[%'*25.21s]",$str);			//This is how we pad

		$email="iron555fist@gmail.com";
		 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo"<br> Valid<br>";
		}
		else
			echo "<br> Invalid<br>";
		$splitted=preg_split("/ /", $str);
		print_r($splitted);
		$splitted=preg_replace("/iron555fist/", "<br>aritro01", $email);

		echo $splitted;

		$cars=array(
			array("LAMBO", "IS", "Yellow"),
			array("Jag", "IS", "Brown"),
			array("Merc", "IS", "Steel"),
			);
		echo "<br><hr>";
		for ($i=0; $i <3 ; $i++) {
			for ($j=0; $j <3 ; $j++) { 
			 	print_r($cars[$i][$j]); echo " ";
			 } 
			echo "<br><br>";
		}
		function error1($erno,$erstr,$erf,$erl) {
			echo "<br><b>Error Number: [$erno] Error String: [$erstr]</b>";
			echo "<br><b>Error File: [$erf] Error Line: [$erl]</b>";
		}
		if (!file_exists("welcome1.txt")) {
			
			set_error_handler("error1");
			trigger_error();
			//die("File not found");
		}
		else {
			$file=fopen("welcome1.txt", "r");
			echo "file found";
		}
		

	?>

</body>

</html>