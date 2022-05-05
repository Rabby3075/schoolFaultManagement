<?php
include'../model/updateprofiledb.php';
$name = $fname = $mname = $phone = $email = $userName = $password="";
  $nameErr =  $fnameErr = $mnameErr = $phoneErr = $emailErr = "";
   $success = $error = "";
   $flag = false;
   session_start();

   if($_SERVER['REQUEST_METHOD']==="POST")
   {
    //php validation
    if(empty($_POST['name'])){
        echo "Name can't be empty";
        $flag = true;
    }
   	if(empty($_POST['fname'])){
   		echo "Fathers name can't be empty";
   		$flag = true;
   	}

   	if(empty($_POST['mname'])){
   		echo "Mother name can't be empty";
   		$flag = true;
   	}

         if(empty($_POST['email'])){
         echo "Email can't be empty";
         $flag = true;
      }
   	if(empty($_POST['phone'])){
   		echo "Phone can't be empty";
   		$flag = true;
   	}
       if (strlen($_POST['phone'])!=11) {
        echo "Invalid Phone Number";
        echo "<br>";
        $flag = true;
    }
    
   	

   	if(!$flag){
        $name = input_data($_POST['name']);
   		$fname = input_data($_POST['fname']);
   		$mname = input_data($_POST['mname']);
   		$phone = input_data($_POST['phone']);
   		$email = input_data($_POST['email']);
 if(isset($_SESSION['uname'])) {
    $userName = $_SESSION['uname'];
    }
    if(isset($_SESSION['pass'])) {
    $password = $_SESSION['pass'];
    }
   // sleep(10);
    $result = updateProfile($name,$fname,$mname,$phone,$email,$userName,$password);
    if($result){
        
      
      echo "<span style='color: green;''><b>Profile Updated Successfully</b> </span>";
      $_SESSION['name']=$name;
      $_SESSION['fname']=$fname;
      $_SESSION['mname']=$mname;
      $_SESSION['phone']=$phone;
      $_SESSION['email']=$email;


    }
    else{
       echo " <span style='color: red;''><b>Updating failed</b> </span>";

    }
       
 
   	}

   }
   function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
?>