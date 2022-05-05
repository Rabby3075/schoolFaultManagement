<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/cpass.css">
    <script src="../view/js/changePass.js"></script>
    <title>Update Profile</title>
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
     <h1>Changing Password</h1>
     <form action="../controller/change_passAction.php" method="post" name="form" onsubmit="ajax(this); return false;">
     <label for="prepass">Current Password : </label>
			<input type="text" name="prepass" id="prepass" >
			<span id="prepassError" style="color: red; ">  </span><br><br>

			<label for="postpass">New Password : </label>
			<input type="Password" name="postpass" id="postpass">
			<span id="postpassError" style="color: red;">  </span><br><br>

			<label for="confirmpass">Confirm New Password : </label>
			<input type="Password" name="confirmpass" id="confirmpass">
			<span id="confirmpassError" style="color: red;"></span><br><br>
            <input class="submit" type="submit" value="Password Change">
            <h2 id="msg"></h2>
     </form>
     
    </div>
</body>
</html>