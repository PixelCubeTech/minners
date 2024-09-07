<?php
include('connection.php'); 
$result = mysqli_query($con,"SELECT * FROM leaveapprovel");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	.bg {
  /* The image used */
  background-image: url("images/a.jpg");

  /* Full height */
  height: 730px; 
		width: 100%

  /* Center and scale the image nicely */
  /*background-position: center;*/
  background-repeat: no-repeat;
  background-size: 100%;
	}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
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

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="bg" align="center">
	<br>
	<br>
	<br>
	<br>
	<br>
<?php
if (mysqli_num_rows($result) > 0) {
?>
	<br>
<h1 color="black"><font face="timesnewroman">Our leave management system </font></h1>
	<br>
<table border="1" align="center">
	  <tr>
	    <th bgcolor="#96F6FF">Employee ID</th>
		<th bgcolor="#96F6FF">Employee name</th>
		<th bgcolor="#96F6FF">Email id</th>
		  <th bgcolor="#96F6FF">Section</th>
		  <th bgcolor="#96F6FF">Salary</th>
		  <th bgcolor="#96F6FF">Total working days per Annum</th>
		  <th bgcolor="#96F6FF">Total leave per month</th>
		  <th bgcolor="#96F6FF">Total leave percentage</th>
		  <th bgcolor="#96F6FF">leave applied or not</th>
		  <th bgcolor="#96F6FF">Permission Accepted / Declined</th>
		  <th bgcolor="#96F6FF">Apply for leave</th>
	  </tr>
			<?php
			$i=0;
			while($rows = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $rows["Emp_ID"]; ?></td>
		<td><?php echo $rows["Emp_name"]; ?></td>
		<td><?php echo $rows["EMAIL_ID"]; ?></td>
		<td><?php echo $rows["Section"]; ?></td>
		  <td><?php echo $rows["Salary"]; ?></td>
		  <td><?php echo $rows["WD_P_Annum"]; ?></td>
		  <td><?php echo $rows["ML_P_Mnth"]; ?></td>
		  <td><?php echo $rows["Leave_Percentage"]; ?></td>
		  <td><?php echo $rows["Leave_Apply"]; ?></td>
		  <td><?php echo $rows["Operation"]; ?></td>
		<td><a href="leave-update.php?id=<?php echo $rows["Emp_ID"]; ?>">Apply</a></td>
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
	<form align="left">
         <button type="submit" formaction="abc.html" style="width:auto;">Previous page</button>
      </form>
</body>
</html>
