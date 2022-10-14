<?php
$koneksi = mysqli_connect("localhost","root","","project1");
if(!$koneksi){
    die("Koneksi gagal : " . mysqli_connect_eror());
}echo "Koneksi Berhasil <br>" ;

// mengubah database ke project 2
// mysqli_select_db($koneksi, "db_name") 

$koneksi2 = mysqli_select_db($koneksi, "project2");
if(!$koneksi2){
    die("koneksi gagal " . mysqli_connect_error());
} echo "Koneksi Berhasil";

?>