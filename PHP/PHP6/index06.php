<!--
Sukurk kintamąjį $metai, kurio turinys 1774
- Sukurk if sąlygą, kuri patikrina ar $metai yra daugiau arba lygu už Vašingtono įkūrimo metus (panaudok $cities3 masyvo duomenis)
- Jei atsakymas teigiamas, išvesk tekstą: “Vašingtonas yra JAV sostinė.”
- Sukurk elseif sąlygą patikrinti ar $metai lygu 1774. Jei atsakymas teigiamas, išvesk tekstą: “JAV sostinė vis dar Filadelfijoje.”
- Sukurk else sąlygą, kuri išveda tekstą: “Liko ... metai (-ų) iki Vašingtono įkūrimo.” Vietoj daugtaškio atlik matematinį veiksmą, kuris iš $cities3[‘Vasingtonas’][1] atima $metai.16-->

<?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija']
    ];
    $metai = 1774;
    if ($metai >= $cities3['Vasingtonas'][1]) {
        echo "Vašingtonas yra JAV sostinė.";
    } elseif ($metai == 1774 ) {
        echo "JAV sostinė vis dar Filadelfijoje.";
    } else {
        $ikurimo_metai = $cities3['Vasingtonas'][1];
        $result = $ikurimo_metai-$metai;
        echo "Liko $result metai (-ų) iki Vašingtono įkūrimo.";
    }
?>
