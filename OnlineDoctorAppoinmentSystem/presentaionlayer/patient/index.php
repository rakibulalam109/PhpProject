<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="index.css">
	
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
<body >
<div style="width: 15%;margin-top: 60px;color: black;text-align: center;border-bottom: none; padding: 10px;margin-left:-4px">
	<h2>About Myself</h2>
</div>

<form method="post" action="index.php" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid black ;">

<div style="font-weight: bold;">

	<label>ID: <?php echo "" .isset($_SESSION['UserID']);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $col['Email']; ?></label>
	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $col['Name']; ?></label>
	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $col['Address']; ?></label>
	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $col['ContactNumber']; ?></label>
	 	   <br>
	 	   <br>
	 	   <label> Blood Type : <?php echo $col['Bloodtype']; ?></label>
	 	   <br>
	 	   <br>
    	 	   </div>
     
</form>	
</div>
</form>
</body>
</html>  