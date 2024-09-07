<?php

$sensor_ID = $_POST["sensor_ID"];
$sensorname = $_POST["sensor name"];
$standred = $_POST["standred"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "coalmine";

$con = new mysqli($servername, $username, $password, $db);

if ($con->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "update students set sensor_ID='$sensor_ID', sensorname='$sensorname', standred='$standred' where sensor_ID='$sensor_ID'";

if ($con->query($sql) === TRUE) {
	echo "Records updated: ".$sensor_ID."-".$sensorname."-".$standred."-";
} else {
	echo "Error: ".$sql."<br>".$con->error;
}

$con->close();

?>