<!--
Sukurk masyvą temp ir patalpink jame Vilniaus balandžio mėnesio oro temperatūras:
- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21.
- Rask ir išvesk vidutinę mėnesio temperatūrą, penkias šilčiausias ir penkias šalčiausias temperatūras.
- Patarimai:
1. Naudok foreach ciklą.
2. Naudok round( ), kad suapvalintum vidutinę temperatūrą.
3. Naudok rsort( ), kad surūšiuoti ciklą žemėjančia tvarka.
4. Naudok array_slice( ), kad surastum penkias šilčiausias ir penkias šalčiausias temperatūras.-->

<?php
    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

    $suma = 0;
    for($i = 0; $i < count($temp); $i++){
        $suma = $suma + $temp[$i];
    }

    $vidutine_temperatura = $suma / count($temp);
    echo 'Vidutinė balandžio mėn. temperatūra Vilniuje: '. round($vidutine_temperatura). ' laipsnių<br>';
    rsort($temp);
    $silciausios_temperaturos = array_slice($temp, 0, 5);
        echo 'Šilčiausių temperatūrų top 5: ';
        foreach ($silciausios_temperaturos as $silčiausios) {
            echo $silčiausios. ' ';
        }
    $salciausios_temperaturos = array_slice($temp, -5, 5);
        echo '<br>Šalčiausių temperatūrų top 5: ';
        foreach ($salciausios_temperaturos as $salciausios) {
            echo $salciausios. ' ';
        }
?>
