<?php

$sensor_ID = $_POST["sensor_ID"];
$sensor = $_POST["sensor name"];
$standred = $_POST["standred"];
//$gender = $_POST["gender"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "coalmine";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "update standredvalues set sensor name='$sensor', standred='$standred' where sensor_ID='$sensor_ID'";

if ($conn->query($sql) === TRUE) 
{
	echo "Records updated: ".$sensor_ID."-".$sensor."-".$standred.
} 
else {
	echo "Error: ".$sql."<br>".$conn->error";
}

$conn->close();

?>