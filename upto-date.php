<?php
include('connection.php'); 
if(count($_POST)>0) {
mysqli_query($con,"UPDATE standredvalues set sensor_ID='" . $_POST['sensor_ID'] . "', sensor_name='" . $_POST['sensor_name'] . "', standred='" . $_POST['standred'] . "' WHERE sensor_ID='" . $_POST['sensor_ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM standredvalues ");
$rows= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Standred Data</title>
		<style>
		.bg {
  /* The image used */
  background-image: url("images/bg.webp");

  /* Full height */
  height: 730px; 
		width: 100%

  /* Center and scale the image nicely */
  /*background-position: center;*/
  background-repeat: no-repeat;
  background-size: 100%;
	}
	input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 20px 40px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
		.container {
  padding: 12px;
}
	</style>
</head>
<body>
	<div class="bg">
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<!--<div style="padding-bottom:5px;">
<a href="adminstd.php">Standred values List</a>
</div>-->
Sensor ID: <br>
	<input type="hidden" name="sensor_ID" class="txtField" value="<?php echo $rows['sensor_ID']; ?>">
	<input type="text" name="sensor_ID"  value="<?php echo $rows['sensor_ID']; ?>"></input>
<br>
Sensor Name: <br>
<input type="text" name="sensor_name" class="txtField" value="<?php echo $rows['sensor_name']; ?>">
<br>
Standred values :<br>
<input type="text" name="standred" class="txtField" value="<?php echo $rows['standred']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
<a href="uptodate.php">previous page</a>
</form>
	</div>
</body>
</html>