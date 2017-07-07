<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
</head>
<body>
	<?php
	//UPDATE `myguests` SET `id`=[value-1],`firstname`=[value-2],`lastname`=[value-3],`email`=[value-4],`reg_date`=[value-5] WHERE 1
		$server="localhost";
		$user="root";
		$password="";
		$db="myDB";

		$conn=new mysqli($server,$user,$password,$db);	
		$a=$_POST["f"];
		echo $a;
		$b=$_POST["l"];
		echo $b;
		$c=$_POST["e"];
		echo $c;
		$d=$_POST["uname"];
		echo $d;
		
		$sql="UPDATE myguests SET firstname='$a',lastname='$b',email='$c' WHERE id = '$d';";
		if($conn->query($sql)===True){
		echo "UPDATED SUCCESSFULLY<br/>";
		$last_id=$conn->insert_id;
		echo "<br/>Last Id is $last_id";
		}
		else{
		echo "Error:".$sql."<br>".$conn->error;
		}

		
		$conn->close();
	?>
</body>
</html>