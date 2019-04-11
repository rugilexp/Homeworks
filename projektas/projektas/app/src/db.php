<!--Rezervacijos formoje suvestų duomenų įrašymas į DB-->
<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "rezervacija");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }
    mysqli_query($mysqli, "INSERT INTO rezervacija (vardas, telefonas, pastas, rezervacijos_data, zinute)
    VALUES('$_POST[vardas]', '$_POST[telefonas]', '$_POST[pastas]', '$_POST[rezervacijos_data]', '$_POST[zinute]')");
