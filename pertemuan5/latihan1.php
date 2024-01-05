<!-- ARRAY -->

<?php
$students = [
    ['kamal', 'multimedia', 'XII MM 2'],
    ['fadhil', 'multimedia', 'XII MM 2']
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($students as $student): ?>
        <ul>
            <li><?= $student[0]; ?></li>
            <li><?= $student[1]; ?></li>
            <li><?= $student[2]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>