<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/history.css">
    <script src="../view/js/historyUser.js"></script>
    <title>History</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION['uname']))
    {
        header('Location: ../view/login.html');
    }
    include '../view/header.php';
    include '../model/faultdb.php';
    $userlist = getAllFault();
    ?>
   <div class="profile">
     <h1> Fault Reporting History</h1>
     <form action="../controller/faultHistoryUserController.php" method="get" name="form">

            <select id="filter" name="filter" onchange="showCustomer(this.value)">
                <option value="1">All Fault report</option>
                <option value="2">My report</option>
            </select>

            
     </form>
     <div class="table" id="table">

     
     <table >
         <tr>
             <th>ID</th>
             <th>Title</th>
             <th>Description</th>
             <th>Location</th>
             <th>Reporting Time</th>
         </tr>
         <?php
         for ($i = 0 ; $i<count($userlist); $i++){
             echo "<tr>";
             echo "<td>".$userlist[$i]['id']."</td>";
             echo "<td>".$userlist[$i]['title']."</td>";
             echo "<td>".$userlist[$i]['description']."</td>";
             echo "<td>".$userlist[$i]['location']."</td>";
             echo "<td>".$userlist[$i]['dtime']."</td>";
             echo "</tr>";
         }
         ?>
     </table>
     </div>
    </div>
</body>
</html>