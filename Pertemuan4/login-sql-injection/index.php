<?php
$hostname = "localhost";
$username = "root";
$passowrd = "";
$dbname = "test";
$conn = mysqli_connect($hostname,$username,$passowrd,$dbname);
if(!$conn){
    die("Unable to connnect");
}
if($_POST){
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    // Membuat sql injection tidak berjalan
    $uname = mysqli_real_escape_string($conn,$uname); //test' or 1=1#
    $pass = mysqli_real_escape_string($conn,$pass);
    $sql = "SELECT * FROM users_tutorial WHERE username = '$uname' AND password = '$pass'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        echo "Selamat Datang Tuan ",$uname;
    }else {
        echo "Password Salah";
    }
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
    <form action="" method="post" autocomplete="off">
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="LOGIN">
    </form>
</body>
</html>