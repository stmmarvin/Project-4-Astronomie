<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astronomie</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="shortcut icon" href="../media/img/favicon.ico" type="image/x-icon">
</head>

<body>
  <header>
    <nav>
      <div class="container row jc-center">
        <div class="main-menu">
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../Opleiding/opleiding.php">Opleiding</a></li>
            <li><a href="../FAQ/faq.php">FAQ</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="banner">
      <img src="../media/img/studenten.jpg" alt="Studenten" class="height-50">
      <div class="content text-center">
        <h1>Opleiding</h1>
        <p>mbo niveau 3 of hoger</p>
      </div>
    </div>
  </header>

  <main class="container">
    <section class="opleiding_info">
      <div class="col-12">
        <h2><img src="../media/img/galaxy.png">Wat is Astronomie?</h2>
        <p>
          Astronomie is de wetenschap die zich bezighoudt met de bestudering van hemellichamen zoals sterren, planeten, kometen, en meer.
          Astronomen bestuderen de oorsprong, evolutie, en de toekomst van het universum.
        </p>
        <p>
          Je studeert Sterrenkunde wanneer je je wilt richten op alle facetten van het heelal.
          Je doet uitgebreide kennis op over planeten en hun manen, asteroïden, sterren en andere objecten in het heelal.
          Daarnaast leer je alles over instrumenten en methoden om het heelal te bestuderen. Met deze studie kun je veel
          betekenen voor de maatschappij. Zo is medische beeldapparatuur, zoals de MRI-scanner, op sterrenkundige technologie
          gebaseerd en zijn de grootste zonnepanelen gemaakt van materiaal dat ontwikkeld is om een ruimtetelescoop van energie te voorzien.
        </p>
      </div>
    </section>

    <section class="opleiding_vakken">
      <h2>Wat kun je verwachten van deze opleiding?</h2>
      <ul>
        <li>Diepgaande kennis van astronomische concepten</li>
        <li>Praktische ervaring met observaties en onderzoek</li>
        <li>Samenwerking met professionals in het veld</li>
        <li>Mogelijkheden voor stages en internationale uitwisselingsprogramma's</li>
        <li>Je krijgt ook algemene vakken zoals: Nederlands, Rekenen, Engels en Burgerschap</li>
      </ul>
    </section>

    <section class="opleiding_details">
      <h2>Opleidingsdetails</h2>
      <ul>
        <li><strong>Kosten:</strong> Voor de kosten van de opleiding betaal je lesgeld als je op 1 augustus ouder bent dan 18 jaar.
          Verder zijn er nog kosten voor boeken en andere leermiddelen.
          Ook moet je rekening houden met de kosten voor een computer.</li>
        <li><strong>Duur:</strong> De opleiding Astronomie duurt normaal gesproken vier jaar bij een voltijdse studie.</li>
        <li><strong>Laptop eisen:</strong> Voor de opleiding Astronomie moet je een laptop hebben, omdat we de lessen volgen vanuit een online onderwijssysteem.
          Dit zijn de eisen voor de laptop:
          <ul>
            <li>Minimaal 8GB RAM</li>
            <li>Minimaal 256GB opslag</li>
            <li>Intel Core i5 of AMD Ryzen 5 processor of hoger</li>
            <li>Windows 10 of 11 of MacOS versie 11 of hoger</li>
          </ul>
        </li>
        <li><strong>BBL/BOL:</strong> Deze opleiding wordt aangeboden als voltijdse BOL (BeroepsOpleidende Leerweg).</li>
        <li><strong>Open dagen:</strong> Bekijk onze website voor de data van de eerstvolgende open dagen.</li>
      </ul>
    </section>

    <!--Opleidingen-->

    <section class="overzicht_opleidingen">
    <h2><img src="../media/img/graduation.png">Overzicht van Opleidingen</h2>
    <div class="opleidingen">
        <div class="opleiding card">
        <a href="sterrenkunde.php">
            <h3>Sterrenkunde</h3>
            <img src="../media/img/Sterrenkunde.png" class="opleiding-image">
            <p>Een diepgaande studie van het universum, inclusief sterren, planeten en andere hemellichamen.</p>
            <ul>
                <li><strong>Type:</strong> BOL</li>
                <li><strong>Niveau:</strong> HBO</li>
                <li><strong>Duur:</strong> 4 jaar</li>
            </ul>
        </a>
        </div>
        <div class="opleiding card">
          <a href="ruimtevaarttechnologie.php">
            <h3>Ruimtevaarttechnologie</h3>
            <img src="../media/img/Ruimtevaarttechnologie.jpg" class="opleiding-image">
            <p>De technologie en engineering achter ruimtevaartuigen en satellieten.</p>
            <ul>
                <li><strong>Type:</strong> BOL</li>
                <li><strong>Niveau:</strong> HBO</li>
                <li><strong>Duur:</strong> 4 jaar</li>
            </ul>
            </a>
        </div>
        <div class="opleiding card">
          <a href="astrofysica.php">
            <h3>Astrofysica</h3>
            <img src="../media/img/astrofysicus.jpg" class="opleiding-image">
            <p>De fysica van sterren en andere objecten in de ruimte, inclusief hun eigenschappen en gedrag.</p>
            <ul>
                <li><strong>Type:</strong> BOL</li>
                <li><strong>Niveau:</strong> HBO</li>
                <li><strong>Duur:</strong> 4 jaar</li>
            </ul>
            </a>
        </div>
        <div class="opleiding card">
          <a href="planetologie.php">
            <h3>Planetologie</h3>
            <img src="../media/img/planet.jpg" class="opleiding-image">
            <p>De studie van planeten, manen en planetaire systemen, vooral in ons eigen zonnestelsel.</p>
            <ul>
                <li><strong>Type:</strong> BOL</li>
                <li><strong>Niveau:</strong> HBO</li>
                <li><strong>Duur:</strong> 4 jaar</li>
            </ul>
            </a>
        </div>
    </div>
</section>






  </main>

  <section class="contact">
    <h3>Heb je vragen? Neem contact met ons op!</h3>
    <form action="" method="post" class="contact-form">
      <label for="firstname">Voornaam:</label><br>
      <input type="text" id="firstname" name="firstname" placeholder="voornaam"><br>
      <label for="lastname">Achternaam:</label><br>
      <input type="text" id="lastname" name="lastname" placeholder="achternaam"><br>
      <label for="telefoonnummer">Telefoonnummer:</label><br>
      <input type="tel" id="telefoonnummer" name="telefoonnummer" placeholder="+313123456"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="name@example.com"><br>
      <label for="question">Stel hier je vraag:</label><br>
      <textarea id="question" name="question" rows="4" cols="50"></textarea><br>
      <input type="submit" value="Verzenden">
    </form>
  </section>

  <footer class="footer">
    <div class="rechten">
      <p>Alle rechten voorbehouden</p>
      <p>© 2024</p>
    </div>
    
    <div class="footer-column">
      <h3>Pagina's</h3>
      <a href="../index.php">Home</a><br>
      <a href="../Opleiding/opleiding.php">Opleiding</a>
    </div>
    
    <div class="footer-column">
      <h3>Opleidingen</h3>
      <a href="sterrenkunde.php">Sterrenkunde</a><br>
      <a href="ruimtevaarttechnologie.php">Ruimtevaarttechnologie</a><br>
      <a href="astrofysica.php">Astrofysica</a><br>
      <a href="planetologie.php">Planetologie</a>
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
  
  <script src="../Main/assets/javascript/script.js"></script>
  <script src="../Main/assets/javascript/activeTab.js"></script>
  <script src="../Main/assets/javascript/progressBar.js"></script>
</body>

</html>