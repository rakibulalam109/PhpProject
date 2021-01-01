<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="doctorapp.css">
</head>

<header>
	<nav>	
		<ul> 		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="doctorappdoctorapp.php">My Appointments</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

		</ul>
	</nav>

</header>

<body>
	<table class="table2">
		<tr>
		<th>AppointmentID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>PatientID</th>
		<th>PatientName</th>
		<th>PatientAddress</th>
		<th>PatientEmail</th>
		<th>PatientContactNumber</th>
		</tr>

		<?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('$doctorprofile') AND  patientID=UserID "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td></tr>";
			}

			echo "</table>";

		}

		?>
		
	</table>
</body>
</html>

