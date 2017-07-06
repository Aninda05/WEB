<?php
$server="localhost";
$user="root";
$password="";
$db="myDB";
$conn=new mysqli($server,$user,$password,$db);
if($conn->connect_error){
	die("Connection failed:<br>".$conn->connect_error);
}
echo "Connected successfully";
/*$sql="create database myDB";
if(mysqli_query($conn,$sql)){
	echo "Database is created successfully";
}
else{
	echo "Error in creation os Database".mysqli_error($conn);
}*/
$sql="CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if($conn->query($sql)===True){
	echo "Table Myguests created successfully";
}
else{
	echo "Error creating table:".$conn->error;
}
$conn->close();
?>