<!--Prisijungusio administratoriaus langas-->
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf8">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Rezervacijų DB</title>
</head>
    <body>
        <div class="admin">
            <form>
                <input type="button" value="Grįžti!" onclick="history.back()">
            </form>
            <h3>Sodybos užsakymai:</h3>
            <td></td>
                <table style width:100% >
                    <tr>
                        <th><?php echo "Vardas:"; ?> </th>
                        <th><?php echo "Telefonas:"; ?> </th>
                        <th><?php echo "El. paštas:"; ?></th>
                        <th><?php echo "Data:"; ?></th>
                        <th><?php echo "Žinutė:"; ?></th>
                    </tr>
                    <?php foreach ($rezervacija as $uzsakovas) : ?>
                    <tr>
                        <td><?= $uzsakovas->vardas; ?></td>
                        <td><?= $uzsakovas->telefonas; ?></td>
                        <td><?= $uzsakovas->pastas; ?></td>
                        <td><?= $uzsakovas->rezervacijos_data; ?></td>
                        <td><?= $uzsakovas->zinute; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
        </div>
    </body>
</html>
