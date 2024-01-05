<?php


require 'functions.php';

$films = query("SELECT * FROM films");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center bg-dark text-light py-3">Films list</h1>


    <div class="container">
        <div class="accordion" id="filmList">
            <?php foreach ($films as $film): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse<?= $film["id"] ?>" aria-expanded="false"
                            aria-controls="collapse<?= $film["id"] ?>">
                            <?= $film["title"] ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $film["id"] ?>" class="accordion-collapse collapse" data-bs-parent="#filmList">
                        <div class="accordion-body">
                            <ul>
                                <li><img src="../assets/<?= $film["img"] ?>" height="200"></li>
                                <li>
                                    <?= $film["title"] ?>
                                </li>
                                <li>
                                    <?= $film["director"] ?>
                                </li>
                                <li>
                                    <?= $film["genre"] ?>
                                </li>
                                <li>
                                    <?= $film["actor"] ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>