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
if (isset($_POST['done'])) {
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email_id = $_POST['email_id'];

	$insert_data = mysqli_query( $connect, "INSERT INTO `contact_list`( `name`, `email_id`, `phone_no` ) VALUES ( '$name','$email_id','$phone_no' )" );
	
	if ($insert_data==true) {
		echo "<script>alert('Insert Data Successfully !');</script>";
		header("Location: read_and_insert_contact.php");
	}else{
		echo "<script>alert('Not insert Data !');</script>";
	}
}
?>

<!-- Bootstrap Form  -->

<div class="container col-sm-12 d-flex justify-content-between">
	<div class="row d-flex col-sm-5 mt-5 border border-primary">

		<form method="post">

			<div class="mb-3">
			    <label class="form-label">Name</label>
			    <input type="text" class="form-control" name="name" placeholder="Enter Your Name Here !" required>
			</div>

			<div class="mb-3">
				<label class="form-label">Phone Number</label>
				<input type="number" class="form-control" name="phone_no" placeholder="Enter Your Phone No Here !" required>
			</div>

		  <div class="mb-3">
		    <label class="form-label">Email address</label>
		    <input type="email" name="email_id" class="form-control">
		  </div>

		  <button type="submit" class="btn btn-primary" name="done">Submit</button>
		
		</form>	
	</div>


	<div class="row d-flex mt-5 col-sm-7 border border-primary">
		
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">S.No</th>
		      <th scope="col">Name</th>
		      <th scope="col">Phone Number</th>
		      <th scope="col">Email Id</th>
		      <th scope="col">Operaction</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		$contact_data=mysqli_query($connect,"SELECT * FROM `contact_list` ");
		  		$i=0;
		  		while($contact_list=mysqli_fetch_array($contact_data)){$i++; 
		  	?>
		    <tr>
		      <th scope="row"><?=$i;?></th>
		      <td><?=$contact_list['name'];?></td>
		      <td><?=$contact_list['phone_no'];?></td>
		      <td><?=$contact_list['email_id'];?></td>
		      <td>
		      	<a href="update_contact.php?n=<?=$contact_list['id'];?>">
		      		<button class="btn btn-primary">Update</button>
		      	</a>
		      	<a href="delete_contact.php?delete=<?=$contact_list['id'];?>">
		      		<button class="btn btn-danger">Delete</button>
		      	</a>
		      </td>
		    </tr>
			<?php } ?>
		  </tbody>
		</table>
		
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>


