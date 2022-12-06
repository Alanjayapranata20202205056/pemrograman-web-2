<?php

if (isset($_POST['login'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";


    if ($username == "alan" && $password == "jaya123") {
        session_start();
        $_SESSION['nama'] = "ALANJAYAPRANATA";
        $_SESSION['nim'] = "20202205056";

        header('Location: dashboard.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        button{
            margin-left: 390px;
        }
    </style>
    <title>cookie</title>
</head>
<body>
    <h1 class="text-center">Form Login</h1>
    </div>
    <form action="" method="post">
        <div class="mt-5 mb-3 row">
        <div class="col-sm-3"></div>
        <label for="nim" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-4">
        <input type="text" name="username" class="form-control" id="username">
    </div>
    </div>
        <div class="mb-3 row">
        <div class="col-sm-3"></div>
        <label for="nim" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-4">
        <input type="password" name="password" class="form-control" id="password">
        <br>
    </div>
    </div>
    <div>
    <button class="btn btn-success" name="login" type="submit">Login</button>
    </div>
    </form>
</body>
</html>

