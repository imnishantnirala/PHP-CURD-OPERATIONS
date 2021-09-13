<?php
include('database_connection.php');

// Usage of WHERE Clause to fetch data from the database
$sql = "SELECT * FROM `contact_list` WHERE `phone_no`='2147483647' ";
$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);
echo '<br>'.$num.' Recod Found in Database ! <br>';

$i=1;
while($data = mysqli_fetch_array($result) ){ $i++;
	echo $data['name'].'<br>';
}


// Usage of WHERE Clause to Update Data
$update_sql = "UPDATE `contact_list` SET `name` = 'demo' WHERE `phone_no` = 2147483647";
$update_result = mysqli_query($connect,$update_sql);
echo var_dump($update_result);

$aff = mysqli_affected_rows($connect);
echo  '<br>'.$aff.' number of rows affected !';


if ($update_result==true) {
	echo "<br> We Update the record successfully !";
}else{
	echo " <br> We could not update the record successfully !";
}


?>