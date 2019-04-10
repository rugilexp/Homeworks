<?php
    require __DIR__ . '/app/src/app.php';
    session_start();

?>
<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Projektas">
	<title>Projektas | Rugile Voveryte</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Caveat&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bangers&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette&amp;subset=latin-ext" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
</head>
<body>

    <?php include 'top_header.php';?>

				<div class="pavadinimas">
					<h1>Voverytės sodyba</h1>
				</div>
				<div class="trumpasTekstas">
					<h1>Puiki vieta Jūsų šventei ar poilsiui!</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="paslaugos">
		<div class="paslauga">
		<h1>Nuoma:</h1><br>
		<ul>
			<li>Sodybos nuoma vestuvėms</li>
			<li>Sodybos nuoma gimtadieniams</li>
			<li>Sodybos nuoma krikštynoms</li>
			<li>Sodybos nuoma vakarėliams</li>
			<li>Sodybos nuoma konferencijoms</li>
			<li>Ilgalaikė sodybos nuoma</li>
			<li>Poilsio kambarių nuoma</li>
			<li>Pobūvių salės nuoma</li>
		</ul><img alt="interjeras" height="220px" src="images/interjeras.jpg" width="300px"></div>
		<div class="paslauga">
		<h1>Paslaugos:</h1><br>
		<ul>
			<li>Aplinkos puošimas</li>
			<li>Salės puošimas</li>
			<li>Dekoracijų nuoma</li>
			<li>Vestuvinė floristika</li>
			<li>Stalų serviravimas</li>
			<li>Meniu pobūviui sudarymas</li>
			<li>Fotografijos paslaugos</li>
			<li>Filmavimo paslaugos</li>
		</ul><img alt="dekoracijos" height="220px" src="images/dekoracijos.jpg" width="300px"></div>
		<div class="paslauga">
		<h1>Pramogos:</h1><br>
		<ul>
			<li>Rusiška garinė pirtis</li>
			<li>Kubilas</li>
			<li>Karaoke</li>
			<li>Futbolo aikštelė</li>
			<li>Stalo futbolas</li>
			<li>Krepšinio aikštelė</li>
			<li>Tinklinio aikštelė</li>
			<li>Žvejyba</li>
		</ul><img alt="" height="220px" src="images/kubilas.jpg" width="300px"></div>
	</div>
	<div class="formos_pavadinimas">
		<h3>Rezervacija</h3>
		<div class="rezervacija">
			<form id="contact" action="index.php" method="post">
				<h4>Užpildykite formą ir mes su Jumis susisieksime artimiausiu metu</h4>
				<p>Vardas: <input type="text" name="vardas" placeholder="Jūsų vardas" required></p>
				<p>Telefonas: <input type="text" name="telefonas" placeholder="Jūsų telefono nr." required></p>
				<p>El.paštas: <input type="email" name="pastas" placeholder="Jūsų el. pašto adresas" required></p>
				<p>Data: <input type="date" name="rezervacijos_data" placeholder="Pasirinkite datą" required></p>
				<p>Žinutė: <textarea placeholder="Jūsų žinutė..." name="zinute" required></textarea></p>
                <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
			</form>
		</div>
	</div>
    <div class="headeris">
        <p class="key"><a href="action"><i class="fas fa-key"></i></a>ADMIN</p>
<!--        <p class="key"><a href="" target="_blank"><i class="fas fa-key"></i></a>ADMIN</p>-->
        <?php echo '&copy '. date('Y'). ' Visos teisės saugomos.' ?>





            <form class="signup-form" action="includes/login.inc.php" method="post">
                <input type="text" name="vardas" placeholder="Vartotojo vardas">
                <input type="password" name="slaptazodis" placeholder="Slaptažodis">
                <button type="submit" name="submit">Sign Up</button>
            </form>



    </div>
    <?php include 'cookie.php';?>

</body>
</html>
