<?php


require 'functions.php';

$films = query("SELECT * FROM films");

$notFound = '';

if (isset($_POST["submit"])) {
    $films = search($_POST["keyword"]);
    if ($films == []) {
        $keyword = $_POST['keyword'];
        $notFound = "FILM WITH TITLE : '$keyword' NOT FOUND";
        $films = query("SELECT * FROM films");
    }
}


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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fs-3" href="#">Film List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-light" href="add.php">Add films</a>
                    </li>
                </ul>
                <form action="" method="post" class="d-flex">
                    <input type="text" name="keyword" placeholder="Search Film" autocomplete="off" autofocus
                        class="form-control me-2">
                    <button type="submit" name="submit" class="btn btn-outline-primary">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" style="height: 110vh;">
        <h1 class="text-danger fw-bold text-center">
            <?= $notFound ?>
        </h1>
        <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php foreach ($films as $film): ?>
                        <div class="card border bg-transparent">
                            <img src="../assets/<?= $film["img"] ?>" height="200">
                            <div class="card-body p-4">
                                <h4 class="mb-3">
                                    <?= $film["title"] ?>
                                </h4>
                                <div class="fs-6">Director :
                                    <?= $film["director"] ?>
                                </div>
                                <div class="fs-6">Genre :
                                    <?= $film["genre"] ?>
                                </div>
                                <div class="fs-6">Actor :
                                    <?= $film["actor"] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> -->

    

        <div class="row">
            <?php foreach ($films as $film): ?>
                <div class="col-md-3">
                    <div class="card border bg-transparent">
                        <img src="../assets/<?= $film["img"] ?>" class="img-fluid">
                        <div class="card-body p-4">
                            <h4 class="mb-3">
                                <?= $film["title"] ?>
                            </h4>
                            <div class="fs-6">Director :
                                <?= $film["director"] ?>
                            </div>
                            <div class="fs-6">Genre :
                                <?= $film["genre"] ?>
                            </div>
                            <div class="fs-6">Actor :
                                <?= $film["actor"] ?>
                            </div>
                            <div class="mt-5 d-flex gap-2 p-2">
                                <a href="delete.php?id=<?= $film["id"] ?>" class="btn btn-danger text-light"
                                    onclick="return confirm('Are you sure want to delete this film ?')">Delete</a>
                                <a href="update.php?id=<?= $film["id"] ?>" class="btn btn-success text-light">Edit</a>
                            </div>
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