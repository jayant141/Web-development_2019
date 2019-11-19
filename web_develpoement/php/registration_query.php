<?php
$conn = mysqli_connect("localhost", "root", "", "webproject");
//include('./connect.php');
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$password = $_POST["pass"];
$query = "INSERT INTO `user`(`Fname`, `Lname`, `Email`, `P_number`, `passsword`) VALUES ('$fname','$lname','$email','$contact','$password')";
$run = mysqli_query($conn, $query);
if ($run == true) {
	echo "sucessful";
	header('location:./index2.php');
} else {
	echo "error";
	header("location:registration.php");
}
