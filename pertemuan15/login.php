<?php

require 'functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");


    if (mysqli_num_rows($result) === 1) {
        $rows = mysqli_fetch_assoc($result);

        if ($email === $rows["email"]) {
            if (password_verify($password, $rows["password"])) {
                header("Location: index.php");
                exit;
            } else {
                $errorPassword = true;
            }
        } else {
            $errorEmail = true;
        }
    } else {
        $errorUsername = true;
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <form action="" method="post" class="d-flex flex-column gap-2 w-25">
            <h1 class="text-center">Login</h1>
            <?php if (isset($errorUsername)) : ?>
                <i class="text-danger">Wrong Username</i>
            <?php endif; ?>
            <input type="text" name="username" placeholder="Username :" class="py-2 px-4" required>
            <?php if (isset($errorEmail)) : ?>
                <i class="text-danger">Wrong Email</i>
            <?php endif; ?>
            <input type="email" name="email" placeholder="Email :" class="py-2 px-4" required>
            <?php if (isset($errorPassword)) : ?>
                <i class="text-danger">Wrong Password</i>
            <?php endif; ?>
            <input type="password" name="password" placeholder="Password :" class="py-2 px-4" required>
            <button class="btn btn-info text-light" type="submit" name="login">Login</button>
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-info">
                    Don't have an account ?
                </div>
                <a href="register.php" class="text-info">Register</a>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>