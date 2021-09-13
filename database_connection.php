<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "curd_2021";

$connect = mysqli_connect( $servername,$username,$password,$database );

// if($connect==true){
// 	echo "Database is Connected !";
// }else{
// 	echo "Database is not Connected !";
// }


// Die if connection was not successful
if (!$connect){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful";
}

?>