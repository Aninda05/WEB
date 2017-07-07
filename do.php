<!DOCTYPE html>
<html>
<head>
	<title>Submission Page</title>
</head>
<body>
	<?php
		$server="localhost";
		$user="root";
		$password="";
		$db="myDB";

		$conn=new mysqli($server,$user,$password,$db);	
		
		echo"Welcome ";echo $_POST["fname"]; echo" "; echo $_POST["lname"];echo" "; echo $_POST["ename"];
		$a=$_POST["fname"];
		echo $a;
		$b=$_POST["lname"];
		echo $b;
		$c=$_POST["ename"];
		echo $c;
		$sql="INSERT INTO myguests(firstname,lastname,email) 
		VALUES('$a','$b','$c');";
		if($conn->query($sql)===True){
		echo "INSERT SUCCESSFULL<br/>";
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