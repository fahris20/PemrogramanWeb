<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:admin.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-image: url(img/bgDaftar.jpg); background-size: cover;">
    <div class="container rounded-4 border my-5">
    <div class="containerDaftarDalam">
        <h1 style="text-align:center" >DAFTAR</h1>
    <form class="row g-3" action="register_proses.php" method="post">
        <div class="col-md-12">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
          <select name="gender" id="gender">
            <option value="pria">pria</option>
            <option value="wanita">wanita</option>
          </select>
        </div>
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
              <!-- <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 250px;">Daftar</button> -->
              <input type="submit" name="submit" value="Register" >
            </label>
          </div>
        </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
</div>
  </body>
</html>