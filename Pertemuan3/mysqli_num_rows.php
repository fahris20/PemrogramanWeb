<?php
$koneksi = mysqli_connect("localhost","root","","project1");
if(!$koneksi){
    die("Koneksi gagal : " . mysqli_connect_error());
}echo "Koneksi Berhasil <br>";

// mysqli_num_rows(result);
$query = mysqli_query($koneksi, "SELECT * FROM guru");
if(!$query){
    echo ("Query Eror : " . mysqli_error($koneksi));
} else {
    $num_of_rec = mysqli_num_rows($query);
    echo "Isi Data Berjumlah = " . $num_of_rec;
}
mysqli_close($koneksi);
?>