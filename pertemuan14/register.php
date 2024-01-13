<?php

require 'functions.php';

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo
            "<script>
            alert('Registration Success')
        </script>";
    } else {
        echo "<script>
        alert('Registration Failed')
    </script>";
    }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <form action="" method="post" class="d-flex flex-column gap-2">
            <input type="text" name="username" placeholder="Username :" class="py-2 px-4" required>
            <input type="email" name="email" placeholder="Email :" class="py-2 px-4" required>
            <input type="password" name="password" placeholder="Password :" class="py-2 px-4" required>
            <input type="password" name="confirmPassword" placeholder="Confim Password :" class="py-2 px-4" required>
            <button class="btn btn-info text-light" type="submit" name="register">Register</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>