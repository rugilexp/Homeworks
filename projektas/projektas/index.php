<!--Pagrindinis INDEX failas-->
<?php
    require __DIR__ . '/app/src/app.php';
    session_start();
?>

<?php include 'head.php';?>

<body>
    <div>
        <div class="pagrindinisTopBlokas">
            <div>

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
            </ul><img alt="kubilas" height="220px" src="images/kubilas.jpg" width="300px"></div>
	</div>
	<div class="formos_pavadinimas">
		<h3>Rezervacija</h3>
            <div class="rezervacija">
                <h4>Užpildykite formą ir mes su Jumis susisieksime artimiausiu metu</h4>
                    <form id="contact" action="index.php" method="post">
                        <p>Vardas: <input type="text" name="vardas" placeholder="Jūsų vardas" required></p>
                        <p>Telefonas: <input type="text" name="telefonas" placeholder="Jūsų telefono nr." required></p>
                        <p>El.paštas: <input type="email" name="pastas" placeholder="Jūsų el. pašto adresas" required></p>
                        <p>Data: <input type="date" name="rezervacijos_data" placeholder="Pasirinkite datą" required></p>
                        <p>Žinutė: <textarea placeholder="Jūsų žinutė..." name="zinute" required></textarea></p>
                        <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
                    </form>
            </div>
	</div>
    <div class="footeris">
        <button class="adminMygtukas" onclick="adminMeniuAktyvacija()"></button>

        <?php echo '&copy '. date('Y'). ' Visos teisės saugomos.' ?>

        <div id="aktyvuoti" hidden>
            <form class="prisijungti" action="includes/login.inc.php" method="post">
                <input type="text" name="vardas" placeholder="Vartotojo vardas" autofocus>
                <input type="password" name="slaptazodis" placeholder="Slaptažodis">
                <button type="submit" name="submit">Prisijungti</button>
            </form>
        </div>

<!--Aktyvuoja mygtuką, kad būtų išvedama admin prisijungimo forma    -->
    <script>
        function adminMeniuAktyvacija() {
            var x = document.getElementById("aktyvuoti").hasAttribute("hidden");
            document.getElementById("aktyvuoti").removeAttribute("hidden");
        }
    </script>

    </div>

    <?php include 'includes/cookie.php';?>
