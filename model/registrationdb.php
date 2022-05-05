<?php
include'../model/dbConnect.php';
  function register($name,$fname,$mname,$gender,$religion,$dob,$phone,$category,$uname,$email,$pass,$image){
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO user(name,fname,mname,gender,religion,dob,phone,category,uname,email,pass,image) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)") ;
     $stmt->bind_param("ssssssssssss",$name,$fname,$mname,$gender,$religion,$dob,$phone,$category,$uname,$email,$pass,$image);
     $res = $stmt->execute();
     return $res;
}
function get($userName){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM user WHERE uname = ?");
    $query->bind_param("s",$userName);
    $query->execute();
    $result = $query->get_result();
    return $result->fetch_assoc();
}

?>