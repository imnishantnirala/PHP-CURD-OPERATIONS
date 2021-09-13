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

$re_id=$_REQUEST['n'];

if (isset($_POST['done'])) {
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email_id = $_POST['email_id'];

	$update_data = mysqli_query( $connect, "UPDATE `contact_list` SET `name` = '$name', `phone_no` = '$phone_no', `email_id`='$email_id' WHERE `id` = '$re_id' " );
	
	if ($update_data==true) {
		echo "<script>alert('Insert Data Successfully !');</script>";
		header("Location: read_and_insert_contact.php");
	}else{
		echo "<script>alert('Not insert Data !');</script>";
	}
}
?>

<!-- Bootstrap Form  -->
<div class="container">
	<div class="row col-sm-6 p-2 mt-2 border border-primary">

		<form method="post">
			<?php 
				$re_id=$_REQUEST['n'];
				$update_data = mysqli_query($connect, "SELECT * FROM `contact_list` where `id`='$re_id' ");
				$update_contact = mysqli_fetch_array($update_data);
			?>
			<div class="mb-3">
			    <label class="form-label">Name</label>
			    <input type="text" class="form-control" name="name" value="<?=$update_contact['name'];?>" placeholder="Enter Your Name Here !">
			</div>

			<div class="mb-3">
				<label class="form-label">Phone Number</label>
				<input type="number" class="form-control" name="phone_no" value="<?=$update_contact['phone_no'];?>"placeholder="Enter Your Phone No Here !">
			</div>

		  <div class="mb-3">
		    <label class="form-label">Email address</label>
		    <input type="email" name="email_id" value="<?=$update_contact['email_id'];?>" class="form-control">
		  </div>

		  <button type="submit" class="btn btn-primary" name="done">Submit</button>
		
		</form>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>


