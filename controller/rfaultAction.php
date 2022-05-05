<?php

include'../model/faultdb.php';

session_start();
$title = $description = $location = $dtime= "";

$success = $error = "";
$flag = false;
if ($_SERVER['REQUEST_METHOD']==="POST") {
	    //php validation
	if(empty($_POST['title'])){
		echo "Field can't be empty";
		$flag = true;
	}
	if(empty($_POST['description'])){
		echo "Field can't be empty";
		$flag = true;
	}
	if(empty($_POST['location'])){
		echo "Field can't be empty";
		$flag = true;
	}

	if(!$flag){

		$title = input_data($_POST['title']);
		$description = input_data($_POST['description']);
		$location = input_data($_POST['location']);

        date_default_timezone_set("Asia/Dhaka");
        $dtime = date("Y-m-d h:i:sa");

       $result = fault($title,$description,$location,$dtime,$_SESSION['id']);
       if ($result)
       {
           echo "<h2 style='color: green'>Reporting Done Successfully</h2>";
       }
       else{
           echo "<h2 style='color: red'>Reporting Failed</h2>";
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