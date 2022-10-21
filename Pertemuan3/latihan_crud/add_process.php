<?php

// cek jika form telah di submit , lalu memasukkan data dari form ke tabel
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:S");

    // membuat koneksi ke database 
    include_once ("config.php");

    // Memasukkan data customer ke tabel
    $result = mysqli_query($conn_db, "INSERT INTO customer
    (name,email,phone,created) VALUES
    ('$name','$email','$phone','$created')");

    // Menampilkan pesan ketika customer telah di tambahkan
    echo "Customer " . $name . " adden succesfully . <a href='index.php'>View Customer</a>";
}
?>