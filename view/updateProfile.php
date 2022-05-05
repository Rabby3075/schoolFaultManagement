<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/uprofile.css">
    <script src="../view/js/profileUpdate.js"></script>
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
     <h1>View & Update Profile</h1>
     <form action="../controller/updateProfileAction.php" method="post" name="form" onsubmit="ajax(this); return false;">
     <img class="image" src="../upload/<?php echo $_SESSION['image']; ?>"><br>
     <label for="id">ID</label>
    <input id="id" type="text" name="id" value="<?php echo $_SESSION['id']; ?>" disabled><br><br>
     <span>*</span>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="<?php echo $_SESSION['name']; ?>">
            <span id="nameError"></span> <br><br>
            <span>*</span>
            <label for="fname">Father's Name</label>
            <input id="fname" type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>">
            <span id="fnameError"></span> <br><br>
            <span>*</span>
            <label for="mname">Mother's Name</label>
            <input id="mname" type="text" name="mname" value="<?php echo $_SESSION['mname']; ?>"> <br><br>
            <span>*</span>
            <label for="phone">Phone No</label>
            <input type="number" name="phone" id="phone" value="<?php echo $_SESSION['phone']; ?>">
            <span id="phoneError"></span><br><br>
            <span>*</span>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
            <span id="emailError"></span><br><br>
            <input class="submit" type="submit" value="Update Profile">
            <h2 id="msg"></h2>
     </form>
     
    </div>
</body>
</html>