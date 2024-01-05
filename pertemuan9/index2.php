<?php
// koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($connection, "SELECT * FROM films");

// ambil data (fetch) films dari object result
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array assosiatif
// mysqli_fetch_array() // mengembsliksn kedunya
// mysqli_fetch_object() // mengembalikan object
$films = mysqli_fetch_assoc($result);


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
    <!-- <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table> -->


    <!-- <?php foreach ($films as $film): ?>
        <div class="accordion-item accordion-content-2 mt-2">
            <h2 class="accordion-header" id="accordion-<?= $film[0] ?>">
                <button class="accordion-button accordion-button-content-2 collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#accordion-<?= $film[0] ?>" aria-expanded="false"
                    aria-controls="accordion-<?= $film[0] ?>">
                    <div class="d-flex justify-content-start align-items-center">
                        <div style="width: 45px; height: max-content;">
                            <i class="fa-solid fa-coffee" style="color: #30c2fd; font-size: 30px;"></i>
                        </div>
                        <div class="fw-bold fs-6 ms-2">
                            <?= $film[1] ?>
                        </div>
                    </div>
                </button>
            </h2>
            <div id="accordion-<?= $film[0] ?>" class="accordion-collapse collapse show"
                aria-labelledby="accordion-<?= $film[0] ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <img src="aset/used/photo (43).jpg" class="img-fluid rounded" style="border-radius: 3px;">
                    <div class="smaller-text mt-3">
                        <ul>
                            <li>
                                <?= $film[2] ?>
                            </li>
                            <li>
                                <?= $film[3] ?>
                            </li>
                            <li>
                                <?= $film["img"] ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?> -->


    <?php foreach ($films as $film): ?>
        <ul style="margin-top: 20px;">
            <img src="../assets/<?= $film["img"] ?>" height="200">
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
    <?php endforeach; ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>