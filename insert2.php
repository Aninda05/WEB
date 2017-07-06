<?php
$server="localhost";
$user="root";
$password="";
$db="myDB";
$conn=new mysqli($server,$user,$password,$db);

$stmt=$conn->prepare("INSERT INTO myguests(firstname,lastname,email)
VALUES(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);

$firstname="Tony";
$lastname="Stark";
$email="uknowme@stark.com";
$stmt->execute();

$firstname="Alpha";
$lastname="Beta";
$email="g@aaa.com";
$stmt->execute();

$firstname="To";
$lastname="St";
$email="ukn@stark.com";
$stmt->execute();

echo "<br/> New records created";

$sql="SELECT id,firstname,lastname,email from myguests";
$result=$conn->query($sql);
if($result->num_rows>0) {
	echo "<table border=1><tr><th>ID</th><th>NAME</th><th>EMAIL</th></tr>";

	while ($row=$result->fetch_assoc()) {
		echo "<tr><td>" .$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
	}
	echo "</table>";
}
else {
	echo "Table Empty";
}
$conn->close();
?>