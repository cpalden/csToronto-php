<?php
session_start();
include 'connect406.php';

$uid = $_POST['id'];
$pwd = $_POST['password'];

$sql = "SELECT * FROM user WHERE id='$uid' AND password='$pwd'";
$result = $conn->query($sql);

if(!$row = mysqli_fetch_assoc($result))
{
	header("Location: /cs/login.html");
	//echo "Your username or password is incorrect!";
}else{
	$_SESSION['userid'] = $row['id'];
	header("Location: /cs/index.html");
}
?>




