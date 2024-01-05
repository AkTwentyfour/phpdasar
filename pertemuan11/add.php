<?php

require 'functions.php';

if (isset($_POST["submit"])) {
    if (add($_POST) > 0) {
        echo "
        <script>
            alert('Added successfuly')
            document.location.href = 'index.php'
        </script>
    ";
    } else {
        echo "
        <script>
            alert('Error, adding process unsuccessful')
            document.location.href = 'index.php'
        </script>
    ";
    }

}
;

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <form action="" method="post" class="d-flex flex-column gap-2">
            <input type="text" name="title" placeholder="Title :" class="py-2 px-4" required>
            <input type="text" name="director" placeholder="Director :" class="py-2 px-4" required>
            <input type="text" name="genre" placeholder="Genre :" class="py-2 px-4" required>
            <input type="text" name="actor" placeholder="Actor :" class="py-2 px-4" required>
            <input type="text" name="img" placeholder="Image :" class="py-2 px-4" required>
            <button class="btn btn-info text-light" type="submit" name="submit">Add Films</button>
        </form>
        <a href="index.php" class="btn btn-info text-light mt-5 ms-auto">Back</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>