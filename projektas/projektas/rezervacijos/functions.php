<!--Prisijungimas prie db rezervacijų info paėmimui-->
<?php
    function dbJungtis() {
        try {
            return $pdo = new PDO('mysql:host=127.0.0.1; dbname=rezervacija', 'root', '');
        } catch (PDOException $e){
            die($e->getMessage());
          }
    }

function sodybosRezervacija($pdo) {
    $teiginys = $pdo->prepare('select * from rezervacija');
    $teiginys->execute();
    return $teiginys->fetchAll(PDO::FETCH_CLASS, 'rezervacija');
}
