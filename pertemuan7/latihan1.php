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
    <title>GET</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>AK_Film</h1>
    <?php foreach ($films as $film): ?>
        <ul>
            <li>
                <a
                    href="latihan2.php?title=<?= $film["title"] ?>&director=<?= $film["director"] ?>&genre=<?= $film["genre"] ?>&imdb=<?= $film["imdb"] ?>&actor=<?= $film["actor"] ?>&img=<?= $film["img"] ?>">
                    <?= $film["title"] ?>
                </a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>