<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stačiakampio plotas | PHP 10</title>
</head>
    <body>
        <?php
        function plotas($ilgis, $plotis) {
            $staciakampio_plotas = $ilgis * $plotis;
            echo "Stačiakampio plotas: $staciakampio_plotas m2";
        }
        plotas(10, 30);
        ?>
    </body>
</html>
