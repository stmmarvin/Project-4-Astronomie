<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astronomie</title>
  <link rel="stylesheet" href="../css/navbar.css" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
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
    <img src="../img/letter.jpg" alt="height-50">
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
      <a href="register.php">Don't have an account? Register here.</a>
    </form>

</body>

</html>
