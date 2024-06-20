<?php

include('../config/config.php');

$dsn = "mysql:host=$dbHost;
        dbname=$dbName;
        charset=UTF8";

/**
 * Maak een nieuw PDO object zodat we een verbinding hebben met de database
 */
$pdo = new PDO($dsn, $dbUser, $dbPass);

$sql = "SELECT id
                ,Firstname
                ,Lastname
                ,PhoneNumber
                ,Email 
                ,Question 
         FROM contact
         ORDER BY id asc";


/**
 * Met de method (functie in de klasse PDO) prepare maak je de 
 * query klaar om uitgevoerd te worden
 */
$statement = $pdo->prepare($sql);

/**
 * Voer nu de geprepareerde sql-query uit op de database
 */
$statement->execute();

/**
 * Haal de geselecteerde records binnen als objecten in een array
 * en stop deze in een variabele $result
 */
$result = $statement->fetchAll(PDO::FETCH_OBJ);

// var_dump($result);
/**
 * Maak een variabele aan waarin de rijen komen voor de tabel beneden
 */
$tableRows = "";

/**
 * We doorlopen het $result array met een foreach-loop
 */

 foreach ($result as $row) {
     $tableRows .= "<tr>
                        <td>$row->Firstname</td>
                        <td>$row->Lastname</td>
                        <td>$row->PhoneNumber</td>
                        <td>$row->Email</td>
                        <td>$row->Question</td>
                    </tr>";
 }


 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrijf overzicht</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/overzicht.css">
</head>
<body>
    <main>
<header>
    <nav>
      <div class="container row jc-center">
        <div class="main-menu">
          <ul>
            <li><a href="../index.php">Home</a></li> <!-- Link back to the home page from the "Opleiding" page -->
            <li><a href="../Astronomie/astronomie.php">Astronomie</a></li> <!-- Link to the "Astronomie" page from any other page -->
            <li><a href="../Opleiding/opleiding.php">Opleiding</a></li> <!-- Link to the "Contact" page from any other page -->
            <li><a href="../gamePagina/game.php">Game</a></li> <!-- Link to the "Game" page from any other page -->
            <li><a href="../FAQ/faq.php">FAQ</a></li> <!-- Link to the "FAQ" page from any other page -->
            <li><a href="../ContactP/contact.php">Contact</a></li> <!-- Link to the "Contact" page from any other page -->
            <li><a href="../Inloggen/inlog.php">Inschrijven</a></li> <!-- Link to the "Inschrijven" page from any other page -->
          </ul>
        </div>
      </div>
    </nav>
    </header>

    
    <div id="banner">
    <img src="../img/codeing.png" alt="height-50">
      <div class="content text-center">
        <h1>
        overzicht 
        </h1>
        <p>gegevens </p>
      </div>
      </img>
    </div>
  </header>

  <h3>Beste bezoeker alleen u ziet deze gegevens </h3>

    <section class="overzicht">
    <table class="table table-dark table-striped">
            <table class="">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>PhoneNumber</th>
                    <th>Email</th>
                    <th>Question</th>
                </tr>
                <?php echo $tableRows; ?>
            </table>
        </div>
    </section>
    </main>

    <footer class="footer">
      <div class="rechten">
      <p>Alle rechten voorbehouden</p>
      <p>© 2024</p>
      </div>

      <div class="footer-column">
      <h3>Pagina's</h3>
      <a href="index.php">Home</a><br>
      <a href="Astronomie/astronomie.php">Astronomie</a><br>
      <a href="Opleiding/opleiding.php">Opleiding</a><br>
      <a href="gamePagina/game.php">Game</a><br>
      <a href="FAQ/faq.php">FAQ</a><br>
      <a href="ContactP/contact.php">Contact</a><br>
    </div>

  
  <div class="footer-column">
    <h3>Contactgegevens</h3>
    <p>Australiëlaan 25</p>
    <p>Utrecht 3526AB</p>
    <p><a href="mailto:astronomie@utrecht.nl">astronomie@utrecht.nl</a></p>
    <div class="social-media-links">
      <a href="https://twitter.com/utrecht" class="social-media-link" id="twitter">
        <img src="../img/twitter.png" alt="Twitter">
      </a>
      <a href="https://www.facebook.com/utrecht" class="social-media-link" id="facebook">
        <img src="../img/facebook.png" alt="Facebook">
      </a>
      <a href="https://www.youtube.com/utrecht" class="social-media-link" id="youtube">
        <img src="../img/youtube.png" alt="YouTube">
      </a>
    </div>
  </div>
</footer>
</body>
</html>