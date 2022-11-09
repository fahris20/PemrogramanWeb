<?php
session_start();
// $database = [
//     'username' => 'fhanzz',
//     'password' => '7'
// ];

// mengambil data username dari form
$username = $_POST['username'];

// mengimport konfig
include_once('konfig.php');

//mengambil data dari database
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

// kode untuk mengecek submit jika di klik
if(isset($_POST['submit'])){
    // mengambil data dari form 
    $username = $_POST['username'];
    $password = $_POST['password'];

    // if($username == $database['username'] && $password == $database['password']) {
    
    //Mengecek data dari form & database apakah sudah benar lalu pindahkan ke admin
    if($username == $user['username'] && password_verify($_POST['password'],$user['password'])){
        $_SESSION['username'] = $username;
        header("location:admin.php");
    }else {
        //menampilkan alert gagal
        echo '<script>
            alert("Username atau password salah!")
            window.location="login.php";
        </script>';
    }
} else {
    echo '<script>
    window.location="login.php";
</script>';
}

?>