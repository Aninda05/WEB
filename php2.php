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
			echo "file found<br />";
		}
		
		/*$date=date_create("2013-03-15");
		$date1=date_create("2016-03-20");
		echo date_format($date,"Y/m/d H:i:s");

		var_dump(checkdate(12, 31, -400));
		echo "<br />";
		var_dump(checkdate(2, 29, 2004));
		$diff=date_diff($date,$date1);
		echo $diff->format("%R%a days");;		//R is the sign
*/
		$datetime1= new DateTime('2 Jan 2018');
		$datetime2= new DateTime('2 Jan 2030');

		$interval=$datetime1->diff($datetime2);
		echo "<br/>";
		echo $interval->format("%y Years %m Months %d Days")."<br />";
		echo $interval->format("%a Days")."<br />";
	?>

</body>

</html>