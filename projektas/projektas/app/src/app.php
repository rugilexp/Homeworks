<?php

    if(isset($_POST['submit'])){
    $vardas = trim($_POST['vardas']);
    $telefonas = trim($_POST['telefonas']);
    $pastas = trim($_POST['pastas']);
    $rezervacijos_data = trim($_POST['rezervacijos_data']);
    $zinute = trim($_POST['zinute']);

    if(!empty($vardas) && !empty($telefonas) && !empty($pastas) && !empty($rezervacijos_data) && !empty($zinute)) {
        if (filter_var($pastas, FILTER_VALIDATE_EMAIL)) {
            $from = "$pastas";
            $to = "rugilexp@gmail.com";
            $subject = "Nauja žinutė";
            $autorius = 'Nuo: ' . $vardas . ', ' . $pastas;
            $zinute = htmlspecialchars($zinute);
            mail($to, $subject, $autorius, $zinute, $from);
            echo "<script>alert('Dėkojame. Jūsų žinutė gauta. Netrukus susisieksime.');</script>";
        }
    }
include('db.php');
    }
?>
