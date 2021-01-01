<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="doctorLogIn.css">
</head>
<body>
<div>
	<h2>Doctor Login</h2>
</div>

<form method="post" action="login2.php">

	<?php include ('../datalayer/errors.php')?>

	<div>
		<label>Doctor ID</label>
		<input type="text" name="doctorID">

	</div><br/>

	<div>
		<label>Password</label>
		<input type="Password" name="doctorpassword">
        </div><br/>

	<div>
		<button type="submit" name="Login2"> Login</button>
	</div>

</form>

</body>
</html>