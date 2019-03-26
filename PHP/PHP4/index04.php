<!--
 Sukurk masyvą $cities ir priskirk ‘Berlynas’, ‘Roma’, ‘Londonas’
- Panaudok print_r funkciją taip, kad ji išvestų masyvo $cities duomenis
- HTML dalyje sukurk vieną <ul> ir pirmąjame <li> išvesk masyvo $cities antrąjį miestą.
- Eilutėje, kuri yra iškart po masyvo deklaracijos, pridėk naują miestą “Tokijas”
- Sukurk ir išvesk asociatyvų masyvą cities2: tokijas - 13.6, vasingtonas - 0.6, maskva - 11.5
- Pridėk: londonas - 8.6
- HTML dalyje sukurk <ul>, kuriame išvesk duomenis tokiu formatu: “Gyventojų skaičius: 13.6 mln.”
- Sprendimą įkelk į GitHub-->

<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';
    print_r($cities);
    echo "<br>";

    $cities2 = [
        'tokijas' => 13.6,
        'vasingtonas' => 0.6,
        'maskva' => 11.5
    ];
    print_r($cities2);
    $cities2[] = "londonas => 8.6";
    echo "<br>";
    print_r($cities2);
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 užduotis | PHP4</title>
</head>
<body>
    <ul>
        <li><?php echo $cities[1]; ?> </li>
    </ul>
    <p><?php echo "Gyventojų skaičius 13.6 mln."; ?> </p>
</body>
</html>
