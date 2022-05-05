<?php
include'../model/dbconnect.php';
  function fault($title,$description,$location,$dtime,$uid){
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO faults(title,description,location,dtime,uid) VALUES (?,?,?,?,?)") ;
    $stmt->bind_param("sssss",$title,$description,$location,$dtime,$uid);
    $res = $stmt->execute();
    return $res;
}
function getAllFault(){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM faults");
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}
function getMyFault($uid){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM faults where uid = ?");
    $stmt->bind_param("s",$uid);
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}
?>