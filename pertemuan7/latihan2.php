<?php

if (!isset($_GET["title"])) {
    header("Location:latihan1.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    

    <ul>
        <li><img src="../assets/<?= $_GET["img"] ?>" height="200"></li>
        <li><?= $_GET["title"] ?></li>
        <li><?= $_GET["director"] ?></li>
        <li><?= $_GET["genre"] ?></li>
        <li><?= $_GET["actor"] ?></li>
        <li><?= $_GET["imdb"] ?></li>
    </ul>
    <a href="latihan1.php">back</a>


</body>
</html>