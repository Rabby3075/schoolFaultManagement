<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/rfault.css">
    <script src="../view/js/rfault.js"></script>
    <title>Reporting</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION['uname']))
    {
        header('Location: ../view/login.html');
    }

    
   
    include '../view/header.php';
    ?>
        
<div class="profile">
     <h1>Reporting fault</h1>
     <form action="../controller/rfaultAction.php" method="post" name="form" onsubmit="ajax(this); return false;">
     <label for="title">Title : </label>
			<input type="text" name="title" id="title" >
			<span id="titleError" style="color: red; ">  </span><br><br>

            <label for="description">Description : </label>
            <textarea name="description" id="" cols="60" rows="4" id="description"></textarea>
            <span id="descriptionError" style="color: red;">  </span><br><br>

			<label for="location">Location : </label>
			<input type="text" name="location" id="location">
			<span id="locationError" style="color: red;"></span><br><br>
            <input class="submit" type="submit" value="Report">
            <h2 id="msg"></h2>
     </form>
     
    </div>
</body>
</html>