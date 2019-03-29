<?php
    class Zmogus {
        public $vardas;
        public $pavarde;

        public function labas() {
            return 'Labas ' .$this -> vardas . ' ' . $this -> pavarde . '<br>';
        }
    }
$saulius = new Zmogus();
$lina = new Zmogus();

$saulius -> vardas = "Saulius";
$saulius -> pavarde = "Saulevičius";

$lina -> vardas = "Lina";
$lina -> pavarde = "Linavičienė";

echo $saulius -> labas();
echo $lina -> labas();
?>
