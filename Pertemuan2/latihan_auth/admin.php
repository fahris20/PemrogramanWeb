<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <p align=center>
            Hello, Selamat Datang Tuan <?php $_SESSION['username'] ;  ?>!!!
        </p>
    </h1>
    <h2 align=center>Kamu Berada di page <b>Admin</b> </h2><br>
    <h3>
        <p align=center>
            <a href="logout.php">Logout</a>
        </p>
    </h3>
    
</body>
</html>