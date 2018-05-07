<?php
include '/includes/connect406.php';

$prob = $_POST['problem'];
$loc = $_POST['loc'];
$p=implode(", ",$prob);

$sql = "INSERT INTO problems (problems, location) VALUES ('$p', '$loc')";
$result = $conn->query($sql);
if($result){
	header("Location: /cs/index.html");
	}
	
?>