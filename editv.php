<?php
$student_id=10;

$servername = "localhost";
$username = "root";
$password = "";
$db = "coalmine";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
	die("Connection failed ".$conn->connect_error);
}

$sql = "select * from standredvalues where sensor_ID='$sensor_ID'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$sensor_ID = $row["sensor_ID"];
$sensor = $row["sensor name"];
$standred = $row["standred"];
//$uniform = $row["uniform"];

echo

"<html>
<body>

<form action='editvalues.php' method='post'>
sensor_ID: $sensor_ID<br>
<input type='hidden' name='sensor_ID' value='$sensor_ID'>
<br>
sensor name: <input type='text' name='sensor name' value='$sensor'><br>
standred values: <input type='text' name='standred' value='$standred'><br>

<input type ='submit'>
</form>

</body>
</html>";

} else {
	echo "Not Found";
}
$conn->close();

?>