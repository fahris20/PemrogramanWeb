<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESI 2</title>
</head>
<body>
    <?php
        echo "Hello, Nama Saya Adalah : " . $_SESSION['nama'] . "<br>";
        echo "Nomor Absen Saya Adalah : " . $_SESSION['absen'];
    ?>
</body>
</html>