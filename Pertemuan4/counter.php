<?php

$connection = mysqli_connect("localhost","root","","db_counter");

if (!$connection){
    echo mysqli_connect_error();
}

$query_counting = mysqli_query($connection, "UPDATE tb_counter SET counter = counter + 1");
$query_select = mysqli_query($connection, "SELECT counter FROM tb_counter");
$data = mysqli_fetch_row($query_select);

echo "ANDA ADALAH PENGUNJUNG KE - " . $data[0] . " HARI INI";

mysqli_close($connection);

?>