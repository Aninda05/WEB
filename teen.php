<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
</head>
<body>
	<?php
		$server="localhost";
		$user="root";
		$password="";
		$db="myDB";

		$conn=new mysqli($server,$user,$password,$db);	
		
		echo $_POST["del"];
		$d=$_POST["del"];
		$sql="DELETE FROM `myguests` WHERE `myguests`.`id` = $d;";
		if($conn->query($sql)===True){
		echo "DELETED SUCCESSFULL<br/>";
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