<?php

$db_hostname = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'elektro_store';

$conn_db = mysqli_connect($db_hostname,$db_user,$db_password,$db_name);

if(!$conn_db){
    die("CONNECTION FAILED : " . mysqli_connect_error());
}

?>