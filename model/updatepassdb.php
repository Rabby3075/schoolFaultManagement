<?php
include'../model/dbConnect.php';
  function updatePass($userName,$password){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE user SET pass = ? WHERE uname = ?");
	$stmt->bind_param("ss",$password,$userName);
	$res = $stmt->execute();
	return $res;
}

?>