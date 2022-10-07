<?php
session_start();
if(isset($_SESSION['username'])){
    header('Location:menu.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body >

  <div class="container mt-5" >
    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form action="index.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" id="form2Example1" class="form-control" name="username"/>
              <label class="form-label" >Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" name="password" />
              <label class="form-label" >Password</label>
            </div>

            <!-- Submit button --> 
            <div class="d-grid">
               <button type="submit" class="btn btn-primary btn-block mb-4 px-5"  value="login" name="submit">Sign in</button>

            </div>
            
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

  </div>
  
  </body>
</html>

