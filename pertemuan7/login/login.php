<?php
// cek apakah tombol submit sudah di klik atau belum
if(isset($_POST["submit"])) {

    // cek apakah username dan password benar
    if($_POST["username"] == "admin" && $_POST["password"] == "password") {
        header("Location:admin.php");
    }

    // jika salah munculkan pesan kesalahan
    else {
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php if(isset($error)): ?>
        <p style="color: red; font-style: italic;">Username atau password yang anda masukan salah</p>
    <?php endif ?>

    <form action="" method="post">
        Username :
        <input type="text" name="username">
        <br>
        Password :
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>


</body>

</html>