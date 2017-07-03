<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<?php
	echo "<marquee> Wanna Cry...!!!</marquee>";
?>
<h1>My first PHP page</h1>

<?php 

	echo "<h1> Hello</h1><br>";
	$txt1="learning PHP";
	$txt2="This is ";
	$t=date("H");
	echo $t."<br>";
	$x=5;
	
	var_dump($x);
	$y=4;
	$z=$x+$y;
	
	$dc1= array("Batty"=>"selina"," Joker"=>"Harley"," Riddler"=>"Miss Prinzle");
	$marvel1= array("Iron_man"=>"Miss Potts"," Captain_America"=>"Carter"," Spider"=>"Mary jane");
	$dc= array("Batty","Joker","Riddler");
	
	$dc2= array("B"=>"selina"," J"=>"Harley"," R"=>"Miss Prinzle","Bary"=>"Iris");


	print_r($dc1+$marvel1);
	var_dump($dc1!=$marvel1);
	
	echo "<p class='ss'>$txt2 $txt1 <br>and the sum is $z</p><br>";
	$c=0;
	foreach ($dc as $value) {
		echo "$value<br>";
	}
	for($c=0;$c<3;$c++)
	{
		echo "<p class='ss'>$dc[$c]</p>";
	}

	echo str_replace("learning","despacito","$txt1");
	
	define("Greeting1", "$txt1",true);
	echo"<br>";echo GreEting1;
	$txt2.=$txt1;
	
	if($x!==$y)
		echo "<br>$txt2 type check";
	else
		echo "<br>OK";
	
	switch ($t) {
		case '09':
			echo "<br>Brush up";
			break;
		case '20':
			echo "eat something";
		default:
			echo "Broken girls";	
			break;
	}
	while($y<=10)
	{
		echo "<br><hr>Did you Miss Me?<hr><br>";
		$y++;
	}
	function fam($f="Hello",$s="side"){
		echo "<br> $f from the other $s <br/>";
	}
	fam();
	/*fam("Hello","side");
	if ($t) {
		
	}
	elseif ($t<"20") {
		echo "";
	}
	else*/
		echo $dc1["Batty"]." Luls Bruce<br />";
	foreach ($dc1 as $key => $value) {
	echo "Key=".$key.", Value=".$value;
	echo "<br />";


		}

	$arr=array_diff($dc2, $dc1);
	print_r($arr); //not working analyze

	//array_key_exits("KEY", $array)

	$pop1=array_pop($dc);
	echo "<br/>Mod Arr";
	print_r($dc);
	echo "<br /><br /><br />  <hr> $pop1<br>";
	echo array_search("selina", $dc1);

?> 
</body>
</html>