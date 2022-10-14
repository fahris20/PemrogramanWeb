<?php
$koneksi = mysqli_connect("localhost","root","","project1");
if(!$koneksi){
    die("Koneksi gagal : " . mysqli_connect_error());
}echo "Koneksi Berhasil <br>";

// mysqli_fetch_array("query SELECT, result_type");

$query = mysqli_query($koneksi,"SELECT id,nama_lengkap,jurusan FROM guru");

if (!$query){
    echo ("Query Eror : " . mysqli_error($koneksi));
}

// saat menggunakan number
// echo "<br> Hasil Numerik <br>";
// while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
//     print "ID : " . $data[0] . "<br>";
//     print "Nama Lengkap : " . $data[1] . "<br>";
//     print "Jurusan : " . $data[2] . "<br><br>";
// }

// saat menggunakan assoc
echo "<br> Hasil ASSOC <br><BR>";
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    print "ID : " . $row["id"] . "<br>";
    print "Nama Lengkap : " . $row["nama_lengkap"] . "<br>";
    print "Jurusan : " . $row["jurusan"] . "<br><br>";
}

mysqli_close($koneksi);

?>