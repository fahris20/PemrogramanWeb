<?php

include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "SELECT * FROM customer WHERE id=$id");
if (!$result){
    header("Location:index.php");
}

while($customer_data = mysqli_fetch_array($result))
{
    $name = $customer_data['name'];
    $email = $customer_data['email'];
    $phone = $customer_data['phone'];
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
    <div class="container py-5 border ">
    <h1 class="text-center">EDIT DATA</h1>
    <a href="index.php">HOME</a>

    <form action="edit_process.php" name="update_user" method="POST">
        <table border=0>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value=<?= $name ?>>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value=<?= $email ?>  >
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="phone" value=<?= $phone ?>>  
        </div>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    </div>
    
</body>
</html>