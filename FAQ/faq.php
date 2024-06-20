<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <img src="../img/faq.jpg" alt="height-50">
      <div class="content text-center">
        <h1>
          Frequently Asked Questions (FAQ)
        </h1>
        <p>Heb je een vraag? Kijk hier of je vraag al beantwoord is!</p>
      </div>
      </img>
    </div>
  </header>

  <main>
    <section class="faq-section">
      <div class="container">
        <h2><img src="../img/help.png">Frequently Asked Questions</h2>
        <div class="faq">
            <div class="faq-item hidden">
            <h3>Wat zijn de toelatingseisen voor de opleiding Astronomie?<span class="arrow">&rarr;</span></h3>
            <p>De toelatingseisen voor de opleiding Astronomie zijn een bachelordiploma in de natuurkunde of een verwant vakgebied.</p>
            </div>
            <div class="faq-item hidden">
            <h3>Welke vakken zijn opgenomen in de opleiding Astronomie?<span class="arrow">&rarr;</span></h3>
            <p>De opleiding Astronomie omvat vakken zoals Sterrenkunde, Galactische Astronomie en Kosmologie.</p>
            </div>
            <div class="faq-item hidden">
            <h3>Welke carrièremogelijkheden zijn er voor afgestudeerden in Astronomie?<span class="arrow">&rarr;</span></h3>
            <p>Afgestudeerden in Astronomie kunnen carrières nastreven als onderzoekswetenschappers, observatoriumtechnici of wetenschapsdocenten.</p>
            </div>
            <div class="faq-item hidden">
            <h3>Zijn er financiële ondersteuningsmogelijkheden beschikbaar voor studenten Astronomie?<span class="arrow">&rarr;</span></h3>
            <p>Ja, er zijn beurzen en subsidies beschikbaar voor studenten Astronomie. Je kunt contact opnemen met het financiële ondersteuningsbureau van de universiteit voor meer informatie.</p>
            </div>
            <div class="faq-item hidden">
            <h3>Kan ik tijdens de opleiding Astronomie stage lopen?<span class="arrow">&rarr;</span></h3>
            <p>Ja, de opleiding Astronomie biedt mogelijkheden voor stages bij observatoria en onderzoeksinstituten.</p>
      </div>
    </section>

    <section>
      <p>Staat je vraag niet tussen de lijst? <a href="../ContactP/contact.php" class="button"> Neem contact met ons op</a></p>
    </section>



  </main>

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
<script src="../Main/assets/javascript/script.js"></script>
<script src="../Main/assets/javascript/activeTab.js"></script>
<script src="../Main/assets/javascript/progressBar.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".faq-item h3").on("click", function(){
    $(".faq-item p").slideUp();
    $(".faq-item .arrow").html('&rarr;');

    var content = $(this).next('p');
    var arrow = $(this).find('.arrow');
    if (content.is(":visible")) {
      content.slideUp();
      arrow.html('&rarr;');
    } else {
      content.slideDown();
      arrow.html('&#9733;');
    }
  });
});
</script>

</body>
</html>
