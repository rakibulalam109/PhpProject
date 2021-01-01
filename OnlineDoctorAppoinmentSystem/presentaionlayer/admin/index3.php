<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="index3.css" type="text/css">
	
</head>

<header>
	<nav>				
		<ul> 		
			<li><a href="index3.php" style="text-decoration: none;">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php" style="text-decoration: none;">View Doctors</a></li>
			<li><a href=" viewpatients.php" style="text-decoration: none;">View Patients</a></li>
			<li><a href="viewappointments.php" style="text-decoration: none;">View Appointments</a></li>
  			<li><a href="../../applicationlayer/Doctorpatient.php" style="text-decoration: none;">Logout</a></li>			

		</ul>
	</nav>
</header>
<body>

<div>
	<h2>Add Doctor</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="addID" >

	</div><br>


	<div class="input-groupA">
		<label>Doctor Name</label>
		<input type="text" name="addname" >


	</div><br>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div><br>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div><br>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div><br>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div><br>
<div class="input-groupA">
	<label>Category</label>
	   	<select name="addcategory" class="xd">
	   		<option value="bone" >bone</option>
	   		<option value="heart">heart</option>
	   		<option value="Dentistry">Dentistry</option>
	   		<option value="MentalHealth">Mental Health</option>
	   		<option value="Surgery">Surgery</option>
	   	</select>
	   	</div><br>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Doctor</button>
	</div><br>

</form>

<div>
	
	<h2>Delete Doctor</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="deleteID" >

	</div><br>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete Doctor</button>
	</div><br>

</form>
</body>
</html>