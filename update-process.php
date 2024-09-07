<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE standredvalues set sensor_ID='" . $_POST['sensor_ID'] . "', sensor name='" . $_POST['sensorn+++++++++++++ame'] . "', standred values='" . $_POST['standred'] . "' WHERE sensor_ID='" . $_POST['sensor_ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM standredvalues WHERE sensor_ID='" . $_GET['sensor_ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Standred Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Standred  List</a>
</div>
sensor_ID: <br>
<input type="hidden" name="sensor_ID" class="txtField" value="<?php echo $row['sensor_ID']; ?>">
<input type="text" name="sensor_ID"  value="<?php echo $row['sensor_ID']; ?>">
<br>
sensor name: <br>
<input type="text" name="sensor name" class="txtField" value="<?php echo $row['sensor name']; ?>">
<br>
standred values:<br>
<input type="text" name="standred values" class="txtField" value="<?php echo $row['standred']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>