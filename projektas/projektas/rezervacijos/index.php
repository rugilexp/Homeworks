<!--Rezervacijos suvestų duomenų iš db paėmimas-->
<?php
    require 'functions.php';
    require 'rezervacijuDb.php';

    $pdo = dbJungtis();
    $rezervacija = sodybosRezervacija($pdo);

    require 'vaizdas.php';
