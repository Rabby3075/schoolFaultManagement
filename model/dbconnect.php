<?php

function connect()
{
	$conn = new mysqli("localhost","root","","school");
	if($conn->connect_errno){
		die("Connection failed due to " .$conn->connect_error);
	}

	return $conn;
}



?>