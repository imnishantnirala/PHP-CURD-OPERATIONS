<?php 
include('database_connection.php');

$delete_id = $_REQUEST['delete'];

$delete_contact = "DELETE FROM `contact_list` WHERE `id` = $delete_id ";

$result = mysqli_query($connect,$delete_contact);
if ($result==true) {
	echo "<script> alert('Delete Successfully !'); </script>";
	header('Location: read_and_insert_contact.php');
}else{
	echo "<script> alert('Something went wrong !'); </script>";
}



?>