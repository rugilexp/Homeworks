    <?php
        function plotas($aukstis, $plotis) {
        $staciakampio_plotas = $aukstis * $plotis;
        echo "Stačiakampio plotas: $staciakampio_plotas m2";
        }

       if(isset($_POST['submit']) && $_POST['aukstis'] && $_POST['plotis']) {
           plotas($_POST['aukstis'], $_POST['plotis']);
           exit();
       } //else echo "Neįvesti duomenys";
    ?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ploto skaičiuoklė | PHP 11</title>
</head>
<body>
    <?php
        $submitClicked = false;
        if($submitClicked == false)
        { ?>
        <form action="<?php $_PHP_SELF; ?>" method="post">
        Stačiakampio aukštis: <input type="number" name="aukstis" />
        Stačiakampio plotis: <input type="number" name="plotis" />
        <input type="submit" name="submit" value="Skaiciuoti" />
        </form>
    <?php
        };
    ?>
</body>
</html>
