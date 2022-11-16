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
    <div class="container border my-5 bg-primary bg-opacity-75 text-white">
    
    <a class="text-white" href="index.php">GO TO HOME</a>
    <h1 class="bold text-center ">Menambahkan Data</h1>

    <form action="add_process.php" method="POST" name="form1">
        <table width="25%" border="0">
            <tr>
                <!-- <td>Name</td>
                <td><input type="text" name="name"></td> -->
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                </div>
            </tr>
            <tr>
                <!-- <td>Email</td>
                <td><input type="text" name="email"></td> -->
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="email">
                </div>
            </tr>
            <tr>
                <!-- <td>Phone</td>
                <td><input type="text" name="phone"></td> -->
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
                </div>

            </tr>
            <tr>
                <td></td>
                <td class="pb-5">
                <input type="submit" name="submit" value="Add">
                </td>
                
                <!-- <td>
                    <a class="btn btn-primary" href="#"  name="submit" role="button">ADD</a>
                </td> -->
            </tr>
        </table>
    </form>
    </div>
    
</body>
</html>