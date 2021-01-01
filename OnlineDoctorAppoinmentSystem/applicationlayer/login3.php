<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="adminLogIn.css">
</head>
<body>
<div>
	<h2>Admin Login</h2>
</div>

<form method="post" action="login3.php">

	<?php include ('../datalayer/errors.php')?>

	<div>
		<label>Admin ID</label>
		<input type="text" name="adminID">

	</div><br/>

	<div>
		<label>Password</label>
		<input type="Password" name="adminpassword">
        </div><br/>

	<div>
		<button type="submit" name="Login3" class="btnA"> Login</button>
	</div>

	
	




</form>

</body>
</html>