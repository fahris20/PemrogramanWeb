<?php
session_start();
// $database = [
//     'username' => 'fhanzz',
//     'password' => '7'
// ];

$username = $_POST['username'];

include_once('config.php');

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // if($username == $database['username'] && $password == $database['password']) {
    
    if($username == $user['username'] && password_verify($_POST['password'],$user['password'])){
        $_SESSION['username'] = $username;
        header("location:admin.php");
    }else {
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