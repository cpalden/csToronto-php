<?php
include 'connect406.php';

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user (firstName, lastName, email, password) 
VALUES ('$fname', '$lname', '$email', '$password')";
$result = $conn->query($sql);

header("Location: /cs/login.html");

?>