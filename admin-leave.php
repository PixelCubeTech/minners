<?php
include('connection.php'); 
if(count($_POST)>0) {
mysqli_query($con,"UPDATE leaveapprovel set Emp_ID='" .$_POST['Emp_ID'] . "', Emp_name='" . $_POST['Emp_name'] . "', EMAIL_ID='" . $_POST['EMAIL_ID'] . "',Section='" .$_POST['Section'] ."', Salary='" .$_POST['Salary'] ."', WD_P_Annum='" .$_POST['WD_P_Annum'] ."', ML_P_Mnth='" .$_POST['ML_P_Mnth'] ."', Leave_Percentage	='" .$_POST['Leave_Percentage'] ."', Leave_Apply='" .$_POST['Leave_Apply'] ."',Operation='" .$_POST['Operation'] ."' WHERE Emp_ID='" .$_POST['Emp_ID']. "'");
$message = "Leave applied successfully...!";
}
$result = mysqli_query($con,"SELECT * FROM leaveapprovel ");
$rows= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Leave management form</title>
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
	<div class="container">
Emp_ID : 
	<input type="hidden" name="Emp_ID" class="txtField" value="<?php echo $rows['Emp_ID']; ?>">
	<input type="text" name="Emp_ID"  value="<?php echo $rows['Emp_ID']; ?>"></input>
Emp_name : 
<input type="text" name="Emp_name" class="txtField" value="<?php echo $rows['Emp_name']; ?>">
<br>
EMAIL_ID :
<input type="text" name="EMAIL_ID" class="txtField" value="<?php echo $rows['EMAIL_ID']; ?>">
<br>
	Section :
	<input type="text" name="Section" class="txtField" value="<?php echo $rows['Section']; ?>">
	<br>
	Salary :
	<input type="text" name="Salary" class="txtField" value="<?php echo $rows['Salary']; ?>">
	<br>
	Total working days per Annum :
	<input type="text" name="WD_P_Annum" class="txtField" value="<?php echo $rows['WD_P_Annum']; ?>">
	<br>
	Total leave per month :
	<input type="text" name="ML_P_Mnth" class="txtField" value="<?php echo $rows['ML_P_Mnth']; ?>">
	<br>
	Leave_Percentage :
	<input type="text" name="Leave_Percentage" class="txtField" value="<?php echo $rows['Leave_Percentage']; ?>">
	<br>
	Leave_Apply :
	<input type="text" name="Leave_Apply" class="txtField" value="<?php echo $rows['Leave_Apply']; ?>">
	<br>
	Accept / decline the leave approvel :
	<input type="text" name="Operation" class="txtField" value="<?php echo $rows['Operation']; ?>">
	<br>
	</div>
	<!--<form align="left">
         <button type="submit" formaction="submit" style="width:auto;">Submit</button>
      </form>-->
<input type="submit" name="submit" value="Submit" class="buttom">
<a href="admin-leavemanagement.php">previous page</a>
</form>
	</div>
</body>
</html>