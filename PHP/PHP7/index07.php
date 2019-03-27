<!--
Sukurk ir išvesk masyvą $cities4, kurio turinys yra Tokijas, Vašingtonas, Maskva, Londonas.
- Sukurk <ul> ir panaudok for ciklą, kuris pereis visą $cities4 masyvą. Naudok count( ) funkciją, kad nustatytum masyvo elementų kiekį.
- for ciklo viduje, sukurk <li>, kad galėtum išvesti miestų pavadinimus.
- Atskirame <ul>, panaudok foreach ciklą, kad galėtum išvesti miestų pavadinimus.-->

<?php
    $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 užduotis | PHP 7</title>
</head>
<body>
    <ul>
        <?php
            for($x = 0; $x < count($cities4); $x++){
                echo "<li>$cities4[$x]</li>";
            }
        ?>
    </ul>
    <ul>
        <?php
            foreach ($cities4 as $city) {
                echo "<li>$city .</li>";
            }
        ?>
    </ul>
</body>
</html>
