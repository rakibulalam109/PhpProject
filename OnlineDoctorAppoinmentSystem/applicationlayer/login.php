<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="patientLogIn.css">
</head>
<body>
<div>
	<h2>Patient Login</h2>
</div>

<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div>
		<label>User ID</label>
		<input type="text" name="UserID">

	</div><br/>

	<div>
		<label>Password</label>
		<input type="Password" name="password">

         </div><br/>

	<div>
		<button type="submit" name="Login"> Login</button>
	</div><br/>

	<p>
		If you are not a member yet <a href="1st.php">Sign Up </a> here
	</p>
	




</form>

</body>
</html>