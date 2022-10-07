<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script>
    alert("Anda Berhasil Logout");
    window.location="index.php";
</script>';
} else {
    header("location:login.php");
}