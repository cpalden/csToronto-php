<?php
	$conn = mysqli_connect("localhost", "root", "chime", "406");
	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
?>