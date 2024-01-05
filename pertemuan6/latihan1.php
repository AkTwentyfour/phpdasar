<!-- ARRAY ASOCIATIVE -->

<?php
$films = [
    [
        "title" => 'THE CREATOR',
        "director" => "Gareth Edwards",
        "genre" => "Action, Adventure, Drama",
        "imdb" => "7 / 10",
        "actor" => "Gemma Chan, John David Washington, Madeleine Yuna Voyles",
        "img" => "the_creator.jpg"
    ],
    [
        "title" => 'OPPENHEIMER',
        "director" => "Christopher Nolan",
        "genre" => "Biography, Drama, History",
        "imdb" => "8.5 / 10",
        "actor" => "Cillian Murphy, Emily Blunt, Matt Damon",
        "img" => "oppenheimer.jpg"
    ],
    [
        "title" => 'BLUE BEETLE',
        "director" => "Angel Manuel Soto",
        "genre" => "Action, Adventure, Sci-fi",
        "imdb" => "6.7 / 10",
        "actor" => "Becky G, Bruna Marquezine, Xolo Maridueña
        ",
        "img" => "blue_beetle.jpg"
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Associative Array</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>AK_Film</h1>
    <?php foreach($films as $film) : ?>
        <ul>
            <div class="card">
                <img src="../assets/<?= $film['img'] ?>" height="200">
                <li><?= $film["title"] ?></li>
                <li><?= $film["director"] ?></li>
                <li><?= $film["genre"] ?></li>
                <li><?= $film["imdb"] ?></li>
                <li><?= $film["actor"] ?></li>
            </div>
        </ul>
    <?php endforeach; ?>
</body>
</html>