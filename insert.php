<?php
include 'conn.php';

if (isset($_POST['done'])) {

	$name= $_POST['username'];
	$pws= $_POST['password'];

	$sql="INSERT INTO `table`(username, password) VALUES ('$name','$pws')";

	$result=mysqli_query($con,$sql);

	if ($result) {
		// echo "data inserted";
		header('location:display.php');
	}else{
		die(mysql_error($con));
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Programg</title>
<!-- Bootstrap 4 CDN link -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<div class="col-lg-6 m-auto">
		<form method="post">
		<br><br>
		<div class="card">
		  	<div class="card-header bg-dark text-white text-center">
		  		<h1>Insert Operations</h1>
		  	</div>
		  	<br>
		    <label for="username">Username:</label>
		    <input type="username" class="form-control" placeholder="Enter Username" name="username">
		    <br>
		    <label for="password">Password:</label>
		    <input type="password" class="form-control" placeholder="Enter password" name="password">
		    <br>
		  	<button type="submit" name="done" class="btn btn-primary">Submit</button>
		</div>
		</form>
	</div>
</body>
</html>