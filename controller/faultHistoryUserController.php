<?php

include'../model/faultdb.php';

session_start();
$filter = "";
$userlist = "";


if ($_SERVER['REQUEST_METHOD']==="GET") {
	    //php validation
	

		$filter = input_data($_GET['filter']);
	     if($filter==="1"){
			 $userlist = getAllFault();
		 }
         elseif ($filter==="2"){
             $userlist = getMyFault($_SESSION['id']);
         }

	}

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../view/css/history.css">
	<title>Document</title>
</head>
<body>
<table >
         <tr>
             <th>ID</th>
             <th>Title</th>
             <th>Description</th>
             <th>Location</th>
             <th>Reporting Time</th>
         </tr>
         <?php
		 if(!empty($userlist)){
         for ($i = 0 ; $i<count($userlist); $i++){
             echo "<tr>";
             echo "<td>".$userlist[$i]['id']."</td>";
             echo "<td>".$userlist[$i]['title']."</td>";
             echo "<td>".$userlist[$i]['description']."</td>";
             echo "<td>".$userlist[$i]['location']."</td>";
             echo "<td>".$userlist[$i]['dtime']."</td>";
             echo "</tr>";
         }
		}
		else{
			echo "<h1> No Record Found </h1>";
		}
         ?>
     </table>
</body>
</html>

