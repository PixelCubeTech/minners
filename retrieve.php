<?php
include_once 'connection.php';
$result = mysqli_query($con,"SELECT * FROM standredvalues");
?>
<!DOCTYPE html>
<html>
<head>
<title> Standred data</title>
</head>
<body>
<table>
<tr>
<td>Sensor_ID</td>
<td>Sensor name</td>
<td>Standred values</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["sensor_ID"]; ?></td>
<td><?php echo $row["sensor name"]; ?></td>
<td><?php echo $row["standred"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html> 