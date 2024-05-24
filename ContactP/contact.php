<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astronomie</title>
  <link rel="stylesheet" href="../css/main.css"/>
 
</head>

<body>
  <header>
    <nav>
      <div class="container row jc-center">
      <div class="main-menu">
        <ul>
        <li><a href="../index.php">Home</a></li> <!-- Link back to the home page -->
        <li><a href="../Opleiding/opleiding.php">Opleiding</a></li> <!-- Link to the "Contact" page from any other page -->
        <li><a href="../FAQ/faq.php">FAQ</a></li>
        <li><a href="../ContactP/contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="banner">
      <img src="https://thispersondoesnotexist.com/" alt="height-50">
      <div class="content text-center">
        <h1>
        Contact
        </h1>
        <p>MBO Utrecht</p>
      </div>
      </img>
    </div>
  </header>

<section class="contact">
  <div class="flex-direction">

  <h3>Adres en Locatie</h3>

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.849989008314!2d5.099612576505236!3d52.06425507194521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c665948a2073bf%3A0xb8405acd63a12ee1!2sMBO%20Utrecht!5e0!3m2!1snl!2snl!4v1716453590789!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <p>Australiëlaan 25</p>
    <p>Utrecht 3526AB</p>
    <p><a href="mailto:astronomie@utrecht.nl">astronomie@utrecht.nl</a></p>





    <h3>Heb je vragen? Neem contact met ons op!</h3>
    <form action="create.php" method="post" class="contact-form">
      <label for="firstname">Voornaam:</label><br>
      <input type="text" id="firstname" name="firstname" placeholder="voornaam" required><br> 
      <label for="lastname">Achternaam:</label><br>
      <input type="text" id="lastname" name="lastname" placeholder="achternaam" required><br>
      <label for="telefoonnummer">Telefoonnummer:</label><br>
      <input type="tel" id="telefoonnummer" name="telefoonnummer" placeholder="+313123456" required><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="name@example.com" required><br>
      <label for="question">Stel hier je vraag:</label><br>
      <textarea id="question" name="question" rows="4" cols="50" required></textarea><br>
      <input type="submit" value="Verzenden">
    </form>
  </section>
</div>
</div>
  
<footer class="footer">
      <p><div class="rechten">
      <p>Alle rechten voorbehouden</p>
      <p>© 2024</p>
      </div></p>
  <div class="footer-column">
    <h3>Pagina's</h3>
      <a href="../index.php">Home</a><br>
      <a href="../Opleiding/opleiding.php">Opleiding</a>
      <!--<a href="ContactP/contact.php">Contact</a> Pagina is nog niet nodig in sprint 1-->
  </div>

  <div class="footer-column">
    <h3>Contactgegevens</h3>
    <p>Australiëlaan 25</p>
    <p>Utrecht 3526AB</p>
    <p><a href="mailto:astronomie@utrecht.nl">astronomie@utrecht.nl</a></p>
    <div class="social-media-links">
      <a href="https://twitter.com/utrecht" class="social-media-link" id="twitter">
        <img src="../media/img/twitter.png" alt="Twitter">
      </a>
      <a href="https://www.facebook.com/utrecht" class="social-media-link" id="facebook">
        <img src="../media/img/facebook.png" alt="Facebook">
      </a>
      <a href="https://www.youtube.com/utrecht" class="social-media-link" id="youtube">
        <img src="../media/img/youtube.png" alt="YouTube">
      </a>
    </div>
  </div>
</footer>
</body>

</html>