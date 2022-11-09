<?php

$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "belajar_kriptografi";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn){
    die("Connection Failed : " . mysqli_connect_error() );
}

?>
