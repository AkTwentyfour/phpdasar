<!-- FUNCTION -->

<?php

$user = $_POST ["username"] ?? '.....';
function welcome($nama)
{
    $hours = date('H');
    if ($hours <= 5 && $hours <= 12) {
        return "Selamat Pagi, $nama";
    }
    elseif ($hours <= 12 && $hours <=17 ) {
        return "Selamat Siang, $nama";
    }
    else {
        return "Selamat Malam, $nama";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        input {
            padding: 10px;
            border: 1px solid grey;
            border-radius: 10px;
        }

        h1 {
            font-family: 'Gill Sans', sans-serif;
            background-color: whitesmoke;
            padding: 15px;
            border-radius: 10px;
            color: black;
        }

        .d-none {
            display: none;
        }
    </style>

    <form action="function.php" method="post" class="<?= (empty($user)) ? 'd-none' : '' ?>">
        <input type="text" name="username" placeholder="Tell me your name">
        <input type="submit">
    </form>

    <?php if (isset($user)): ?>
        <h1>
            <?= welcome($user) ?>
        </h1>
    <?php endif; ?>

</body>

</html>