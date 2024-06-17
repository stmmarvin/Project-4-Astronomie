<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astronomie</title>
  <link rel="stylesheet" href="../css/navbar.css" />
  <link rel="stylesheet" href="../css/main.css" />
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


    <div id="banner">
    <img src="../img/trap.jpg" alt="height-50">
      <div class="content text-center">
        <h1>
          Inschrijven voor de opleiding
        </h1>
        <p>schrijf je in op ons opleiding en ervaar de vere sterrenstelsel.</p>
      </div>
      </img>
    </div>
  </header>


  <div class="Login">
    <h1>Login</h1>
    <form method="POST" action="create.php">
      <label for="username">gebruikersnaam</label>
      <input type="username" name="username" id="username"  placeholder="Voer hier je gebruikersnaam in."required>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Voer hier je wachtwoord in."required>
      <input type="submit" value="Login">
      <a href="register.php">Nog geen account? Registreed nu.</a>
    </form>

    
     <footer class="footer">
      <div class="rechten">
      <p>Alle rechten voorbehouden</p>
      <p>© 2024</p>
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
</body>
</html>
