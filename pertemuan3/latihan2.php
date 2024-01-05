<!-- CONTROL FLOW -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>

    <form method="get" action="latihan2.php">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    $name = $_GET['fname'];
    ?>

    <table border="1" cellpadding="10" style="margin-top: 100px;">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <tr>
                <?php if ($name == 'kamal'): ?>
                    <?php for ($col = 1; $col <= 5; $col++): ?>
                        <td>
                            <?= "$name" ?>
                        </td>
                    <?php endfor ?>
                <?php elseif ($name == 'fadhil'): ?>
                    <?php for ($col = 1; $col <= 5; $col++): ?>
                        <td>
                            <?= "$name" ?>
                        </td>
                    <?php endfor ?>
                <?php else: ?>
                    <h1>you pick a wrong name</h1>
                <?php endif; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <?php echo isset($name) ?>

</body>

</html>