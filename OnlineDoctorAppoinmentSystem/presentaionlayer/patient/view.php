<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="view.css">

</head>

<header>
	
	<nav>		
		<ul> 		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href=" searchdoctor.php">Search Doctor</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
		</ul>
	</nav>
</header>

<body>
	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>
		</tr>

		<?php $sql3="SELECT  * FROM bookapp , doctor   WHERE patientID=('$userprofile') AND  docID=DoctorID "  ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3["docID"]."</td><td>".$row3['Doctorname']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["categorey"]."</td></tr>";
			}

			echo "</table";
	
		}
		?>
		
	</table>


<!--	<table class="table3">
		<tr>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>
		doctor.Doctorname , doctor.Address,doctor.ContactNumber,doctor.category
,doctor
AND docID= ('$userprofile')
.$row3["Doctorname"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3["category"]

		</tr>
		<?php $sql4="SELECT doctor.Doctorname,doctor.Address,doctor.ContactNumber,doctor.category FROM doctor " ;
		$result4=$mysqli->query($sql4);
		if(mysqli_num_rows($result4)>1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["Doctorname"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["category"]."</td></tr>";
			}
			echo "</table";


	


		}

		?>
		
	</table>


-->


</body>
</html>

