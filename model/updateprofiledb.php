<?php
include'../model/dbConnect.php';
  function updateProfile($name,$fname,$mname,$phone,$email,$userName,$password){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE user SET name  =?, fname = ? ,mname = ? ,phone = ? ,email = ? WHERE uname = ? and pass = ?");
	$stmt->bind_param("sssssss",$name,$fname,$mname,$phone,$email,$userName,$password);
	$res = $stmt->execute();
	return $res;
}

?>