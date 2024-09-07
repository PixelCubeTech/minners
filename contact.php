<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

include('connection.php'); 

// get the post records
$name = $_POST['name'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `userlogin` (`username`, `password`) VALUES ( '$name', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>