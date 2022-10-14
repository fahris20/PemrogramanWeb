<?php
$koneksi = mysqli_connect("localhost","root","","project1");
if(!$koneksi){
    die("Koneksi gagal : " . mysqli_connect_error());
}echo "Koneksi Berhasil <br>";

// mysqli_fetch_assoc(result);

$query = mysqli_query($koneksi,"SELECT id,nama_lengkap,jurusan FROM guru");

if (!$query){
    echo ("Query Eror : " . mysqli_error($koneksi));
}

$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($koneksi);

?>