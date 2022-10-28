<?php

include_once('config.php');

$query = "SELECT * FROM customer ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);

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
    
    <div class="container py-5">
    <a href="add.php">ADD NEW CUSTOMER</a>
    <table width='80%' border=1 class="align-center table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Join Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($result -> num_rows > 0 ) : ?>
                    <?php while($customer_data = mysqli_fetch_array($result)) :  ?>
                        <tr>
                            <td><?php echo $customer_data['name'] ?></td>
                            <td><?php echo $customer_data['phone'] ?></td>
                            <td><?php echo $customer_data['email'] ?></td>
                            <td><?= $customer_data['created'] ?></td>
                            <td><?= $customer_data['updated'] ?></td>
                            <td>
                                <a href="edit.php?id=<?=$customer_data['id']?>">Edit</a> || <a href="delete.php?id= <?=$customer_data['id']?>">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" rowspan="1" header="" align="center">Data customer tidak di temukan!
                        </td>
                    </tr>
                <?php endif ?>
                <?php mysqli_free_result($result); ?>
            </tbody>
        </table>

        <?php if(isset($_GET["message"])){
            $message = $_GET["message"];
            echo "<script type='text/javascript'>alert('$message');";
            echo "window.location='index.php'</script>";
        }
        ?>
    </div>
        
</body>
</html>