<?php
$koneksi = mysqli_connect("localhost","root","","project1");
if(!$koneksi){
    die("Koneksi gagal : " . mysqli_connect_error());
}echo "Koneksi Berhasil";

// mysqli_query($koneksi, resultmode<optional>)
// $query = "INSERT INTO ..."

$query_insert = mysqli_query($koneksi, "INSERT INTO guru
(id,nama_lengkap,alamat,tanggal,nip,jurusan) VALUES 
('','Fahris Hans A','Banaran Baru rt6 rw5','2005-04-20','A1','RPL')"); 
if(!$query_insert){
    echo ("Error query" . mysqli_error($koneksi));
}
mysqli_close($koneksi)
?>