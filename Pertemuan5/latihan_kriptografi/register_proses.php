<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];


    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    include_once("konfig.php");

    $result = mysqli_query($conn, "INSERT INTO users(username,gender,email,password,created_at) VALUES ('$username','$gender','$email','$password','$created')");

    echo "Users " . $username . " added successfuly. <a href = 'login.php'>LOGIN</a>";

    if ($result) {
        header( "refres:5;url=login.php");
        echo 'Succes Register, You will be redirected to login page in 5 secs.';
    }
}

?>