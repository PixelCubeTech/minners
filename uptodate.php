<?php
include('connection.php'); 
$result = mysqli_query($con,"SELECT * FROM standredvalues");
?>
<!DOCTYPE html>
<html>
 <head>
	 <style>
		 .bg {
  /* The image used */
			 background-image: url("images/bbbbbbb.svg");

  /* Full height */
  height: 730px; 
		width: 100%

  /* Center and scale the image nicely */
  /*background-position: center;*/
  background-repeat: no-repeat;
  background-size: 100%;
	}
	 table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: #9600FF}
		 /* Set a style for all buttons */
button {
  background-color: #9600FF;
  color: white;
  padding: 20px 40px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.6;
}
		 </style>
   <title>Update standred values </title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
	<div class="bg">
	<font face="timesnewroman" size="+3" color="#000000">Update the standred values :</font>
		<font face="timesnewroman" color="white"><p><ul style="align-content: flex-start" type="disc"><li>Disclimer :-</li>⚠️The values will be change it will be effect on the whole standred reading alerts ⚠️</ul></p></font>
<?php
if (mysqli_num_rows($result) > 0) {
?>
	<br>
	<br>
<table border="1" align="center">
	  <tr>
	    <th>Sensor ID</th>
		<th>Sensor property</th>
		<th>Standred values</th>
		  <th>Operation</th>
	  </tr>
			<?php
			$i=0;
			while($rows = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $rows["sensor_ID"]; ?></td>
		<td><?php echo $rows["sensor_name"]; ?></td>
		<td><?php echo $rows["standred"]; ?></td>
		<td><a href="upto-date.php?id=<?php echo $rows["sensor_ID"]; ?>">Update</a></td>
      </tr>
	
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
	<!--<a href="adminpanel.html">previous page</a>-->
		<form align="left">
         <button type="submit" formaction="adminpanel.html" style="width:auto;">Previous page</button>
      </form>
	</div>
 </body>
</html>