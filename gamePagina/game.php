<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomie</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/game.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
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
    <main>
      <section class="game-class">
        <div class="container">
        <div id="gamearea">
            <div class="game_top_menu">
                <div class="time">
                  <p id="day"></p>
                  <p id="hour"></p>
                  <p id=":">:</p>
                  <p id="minute"></p>
                </div>
                <!--Doe basis tikkers en persoonlijke tikkers in een apart vak-->
                <!--Komt op zn minst een meer tikkers waarschijnlijk-->
                <div id="base_tickers">
                    <img src="" alt=""><p id="fuel" class="ticker"></p>
                </div>
                <div id="personal_tickers">
                    <img src="" alt=""><p class="ticker" id="hunger"></p>
                </div>
            </div>
            <div class="screen">
                <h2 id="title">The Milkyway</h2>
                <p id="event_text">Het universum te kijken van ver en je plaats daarin te begrijpen.</p>
                <p class="option" id="option1">Begin</p>
                <p class="option" id="option2"></p>
                <p class="option" id="option3"></p>
                <p class="option" id="option4"></p>
                <p class="option" id="option5"></p>

                <img src=" " alt="" id="game_img"> <!--Doe dit naast alles anders in screen -->
            </div>
        </div>
        </div>
        </section>
    </main>
    <script src="scripts/engine.js"></script>
    <script src="scripts/screens.js"></script>
    
    <footer class="footer">
    <div class="rechten">
      <p>Alle rechten voorbehouden © 2024</p>
      </div>

      <div class="footer-column">
      <h3>Pagina's</h3>
      <a href="../index.php">Home</a><br>
      <a href="../Astronomie/astronomie.php">Astronomie</a><br>
      <a href="../Opleiding/opleiding.php">Opleiding</a><br>
      <a href="../gamePagina/game.php">Game</a><br>
      <a href="../FAQ/faq.php">FAQ</a><br>
      <a href="../ContactP/contact.php">Contact</a><br>
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
  
  <script src="../Main/assets/javascript/script.js"></script>
  <script src="../Main/assets/javascript/activeTab.js"></script>
  <script src="../Main/assets/javascript/progressBar.js"></script>
    
</body>
</html>
