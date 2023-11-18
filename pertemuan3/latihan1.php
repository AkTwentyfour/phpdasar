<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<style>
    .genap {
        background-color: aqua;
    }
</style>

<body>

    <table cellpadding="10" cellspacing="0" border="1">
        <?php for ($row = 1; $row <= 10; $row++): ?>
            <?php if ($row % 2 == 0): ?>
                <tr class="genap">
                <?php else: ?>
                <tr>
                <?php endif ?>
                <?php for ($col = 1; $col <= 5; $col++): ?>
                    <td>
                        <?= "Baris ke $row, kolom ke $col" ?>
                    </td>
                <?php endfor ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>

</html>