<?php
$server="localhost";
$user="root";
$password="";
$db="myDB";
$conn=new mysqli($server,$user,$password,$db);
if($conn->connect_error){
	die("Connection failed:<br>".$conn->connect_error);
}
$sql="INSERT INTO myguests(firstname,lastname,email)
VALUES('John','Doe','john@something.com');";
$sql.="INSERT INTO myguests(firstname,lastname,email)
VALUES('John','Donut','johnnew@something.com');";
$sql.="INSERT INTO myguests(firstname,lastname,email)
VALUES('John','Donut2','john2@something.com')";
if($conn->multi_query($sql)===True){
	echo "INSERT SUCCESSFULL<br/>";
	$last_id=$conn->insert_id;
	echo "<br/>Last Id is $last_id";
}
else{
	echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>