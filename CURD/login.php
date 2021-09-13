<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Operaction in PHP. </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<?php 
require('database_connection.php');
if (isset($_POST['login'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$insert_data = mysqli_query( $connect, "INSERT INTO `contact_list`( `name`, `email_id`, `phone_no` ) VALUES ( '$name','$email_id','$phone_no' )" );
	
	if ($insert_data==true) {
		echo "<script>alert('Insert Data Successfully !');</script>";
		header("Location: insert_contact.php");
	}else{
		echo "<script>alert('Not insert Data !');</script>";
	}
}
?>

<!-- Bootstrap Form  -->
<div class="container">
	<div class="row col-sm-6 p-2 mt-2 border border-primary">
		<h1 class="text-primary "> Login </h1>
		<form method="post">

			<div class="mb-3">
			    <label class="form-label">Email</label>
			    <input type="text" class="form-control" name="email" placeholder="Enter Your Email Here !">
			</div>

			<div class="mb-3">
				<label class="form-label">Password</label>
				<input type="text" class="form-control" name="password" placeholder="Enter Your Password Here !">
			</div>

		  <button type="submit" class="btn btn-primary" name="login">Submit</button>
		
		</form>	
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>