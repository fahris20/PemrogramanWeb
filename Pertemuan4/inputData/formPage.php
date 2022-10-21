<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Peserta Didik</h1>
    <div class="kotakForm">
        <form action="form.php" method="POST">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis">
            <label for="nama">NAMA LENGKAP</label>
            <input type="text" name="nama" id="nama" >
            <label for="alamat">ALAMAT</label>
            <input type="text" name="alamat" id="alamat">
            <label for="kelas">KELAS</label>
            <select name="kelas" id="kelas" id="kelas">
                <option value="10">X</option>
                <option value="11">XI</option>
                <option value="12">XII</option>    
            </select>
            <label for="jurusan">JURUSAN</label>
            <select name="jurusan" id="jurusan">
                <option value="mm">MULTIMEDIA</option>
                <option value="rpl">RPL</option>
                <option value="TKJ">TKJ</option>
            </select>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>

