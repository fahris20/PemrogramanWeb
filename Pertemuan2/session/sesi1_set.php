<?php
session_start();

$_SESSION['nama'] = "Fahris Hans Alberta";
$_SESSION['absen'] = "07";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Latihan Session</title>
</head>
<body>
    <?php
        echo "Nama Saya : " . $_SESSION['nama'] . "<br>" . "Nomor Absen : " . $_SESSION['absen'];
    ?>
</body>
</html>