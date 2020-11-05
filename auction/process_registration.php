<?php include_once("header.php");

// TODO: Extract $_POST variables, check they're OK, and attempt to create
// an account. Notify user of success/failure and redirect/give navigation 
// options.

//$mail = $_POST['email'];
//$pass = $_POST['password'];
$connection = mysqli_connect('localhost','yangzou','123','auction_13');
$query = "INSERT INTO Users (Email, Password) VALUES ('yang@123','1111')";
$result = mysqli_query($connection, $query);
mysqli_close($connection);
