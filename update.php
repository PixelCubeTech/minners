<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

include('connection.php'); 

// get the post records
$sensor_ID = $_POST['sensor_ID'];
$sensor = $_POST['sensor_name'];
$standred=$_POST['standred'];

// database insert SQL code
$sql = "UPDATE standredvalues SET  sensor_ID='$sensor_ID'
                sensor_name ='$sensor', 
                standred = '$standred'";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

?>