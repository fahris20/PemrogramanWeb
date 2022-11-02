<?php
$msg = "";

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $password = $_POST['password'];
    $kpassword = $_POST['kpassword'];

    if(empty($nama) || empty($email) || empty($url) || empty($password) || empty($kpassword)){
        $msg = "MINIMAL MASUKKAN DATA NYA SEMUA";
    }else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $msg = "EMAILMU ENDI";
        }else {
            if(!filter_var($url,FILTER_VALIDATE_URL)){
                $msg = "NULIS URL SENG BENER";
            }else {
                if($password !== $kpassword){
                    $msg = "PASSWOR KARO KONFIRMASI MU BEDO DICEK SEK!";
                }else {
                    $msg = "DAFTAR BERHASIL";
                    $full_name = "";
                    $email = "";
                    $url = "";
                    $password = "";
                    $kpassword = "";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper container text-center py-5">
        <h2>DAFTAR</h2>
        <?php echo $msg; ?>
        <form action="" method="post">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="<?php if(isset($_POST['submit'])){echo $nama;} ?>"><br><br>
            <label for="Email">Email</label>
            <input type="text" name="email" value="<?php if(isset($_POST["submit"])){echo $email;} ?>"><br><br>
            <label for="website">Website</label>
            <input type="text" name="url" value="<?php if(isset($_POST["submit"])){echo $url;} ?>"><br><br>
            <label for="password">Password</label>
            <input type="password" name="password" value="<?php if(isset($_POST["submit"])){echo $password;} ?>"><br><br>
            <label for="kpassword">Konfirmasi Password</label>
            <input type="password" name="kpassword" value="<?php if(isset($_POST["submit"])){echo $kpassword;} ?>"><br><br>
            <button type="submit" name="submit">Register</button>

        </form>
    </div>
</body>
</html>