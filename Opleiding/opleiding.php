<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Astronomie</title>
  <link rel="stylesheet" href="../css/navbar.css" />
  <link rel="stylesheet" href="../css/course.css" />
  <link rel="shortcut icon" href="../media/img/favicon.ico" type="image/x-icon">
</head>

<body>
  <header>
  <nav>
    <div class="container row jc-center">
    <div class="main-menu">
        <ul>
        <li><a href="../index.php">Home</a></li> <!-- Link back to the home page from the "Opleiding" page -->
        <li><a href="../Opleiding/opleiding.php">Opleiding</a></li> <!-- Link to the "Contact" page from any other page -->
        <!--<li><a href="ContactP/contact.php">Contact</a></li> Pagina is nog niet nodig in sprint 1-->
      </ul>
    </div>
  </div>
</nav>


    <div id="banner">
    <img src="../media/img/studenten.jpg" alt="height-50">
      <div class="content text-center">
        <h1>
          Opleiding
        </h1>
        <p>mbo niveau 3 of hoger</p>
      </div>
      </img>
    </div>
  </header>

  <main class ="row container">
        <section class="opleiding_info">
          <div class="col-12">
            <h2>Wat is Astronomie</h2>
            <p>
                Astronomie is de wetenschap die zich bezighoudt met de bestudering van hemellichamen zoals sterren, planeten, kometen, en meer. 
                Astronomen bestuderen de oorsprong, evolutie, en de toekomst van het universum.
            </p>
            <p>
                Je studeert Sterrenkunde wanneer je je wilt richten op alle facetten van het heelal. 
                Je doet uitgebreide kennis op over planeten en hun manen, asteroïden, sterren en andere objecten in het heelal. 
                Daarnaast leer je alles over instrumenten en methoden om het heelal te bestuderen. Met deze studie kun je veel 
                betekenen voor de maatschappij. Zo is medische beeldapparatuur, zoals de MRI-scanner op sterrenkundige technologie 
                gebaseerd en zijn de grootste zonnepanelen gemaakt van materiaal dat ontwikkeld is om een ruimtetelescoop van energie te voorzien.
            </p>
          </div>
        </section>

        <section class="opleiding_vakken">
            <h2>Wat kun je verwachten van deze opleiding?</h2>
            <p>
                Tijdens de opleiding Astronomie kun je verwachten:
                <ul>
                    <li>Diepgaande kennis van astronomische concepten</li>
                    <li>Praktische ervaring met observaties en onderzoek</li>
                    <li>Samenwerking met professionals in het veld</li>
                    <li>Mogelijkheden voor stages en internationale uitwisselingsprogramma's</li>
                    <li>Je krijgt ook algemene vakken zoals: Nederlands, Rekenen, Engels en Burgerschap</li>
                </ul>
            </p>

        </section>

        <section class="opleiding_details">
            <h2>Opleidingsdetails</h2>
            <ul>
                <li><strong>Kosten:</strong> Voor de kosten van de opleiding betaal je lesgeld als je op 1 Augustus ouder bent dan 18 jaar.
                                             Verder zijn er nog kosten voor boeken en andere leermiddelen.
                                            Ook moet je rekening houden met de kosten voor de computer. </li>
                                             
              </li>
                <li><strong>Duur:</strong> De opleiding Astronomie duurt normaal gesproken vier jaar bij een voltijdse studie.</li>
                <li><strong>Laptop eisen:

                </strong> Voor de opleiding Astronomie moet je een laptop hebben, omdat we de lessen volgen van uit een onlineonderwijsysteem.
                         Dit zijn de eisen voor de laptop:
                            <ul>
                                <li>Minimaal 8GB RAM</li>
                                <li>Minimaal 256GB opslag</li>
                                <li>Intel Core i5 of AMD Ryzen 5 processor of hoger</li>
                                <li>Windows 10 of 11 of MacOS versie 11 0f hoger</li>
            
            
            </li>
                <li><strong>BBL/BOL:</strong> Deze opleiding wordt aangeboden als voltijdse BOL (BeroepsOpleidende Leerweg).</li>
                <li><strong>Open dagen:</strong> Bekijk onze website voor de data van de eerstvolgende open dagen.</li>
            </ul>
        </section>
    </main>

    <h3>Heb je een vragen? Neem contact met ons op!</h3>

    <form action="" method="post" class="contact-form">
   <label for="fullname">Volledige Naam:</label><br>
   <input type="text" id="fullname" name="fullname" placeholder="naam"><br>

    <label for="telefoonnummer">Telefoonnummer:</label><br>
    <input type="tel" id="telefoonnummer" name="telefoonnummer" placeholder="+313123456"><br>

   <label for="email">Email:</label><br>
   <input type="email" id="email" name="email" placeholder="name@example.com"><br>

    <label for="question">Stel hier je Vraag:</label><br>
    <textarea id="question" name="question" rows="4" cols="50"></textarea><br>

    <input type="submit" value="Verzenden">
    </form>

    
  <footer class="footer">
      <p><div class="rechten">
      <p>Alle rechten voorbehouden</p>
      <p>© 2024 - Heden</p>
      </div></p>
  <div class="footer-column">
    <h3>Pagina's</h3>
      <a href="../index.php">Home</a>
      <a href="../Opleiding/opleiding.php">Opleiding</a>
      <!--<a href="ContactP/contact.php">Contact</a> Pagina is nog niet nodig in sprint 1-->
  </div>
  <div class="footer-column">
    <h3>Scuti UY</h3>
    <!-- Content related to Scuti UY can go here -->
  </div>
  <div class="footer-column">
    <h3>Contactgegevens</h3>
    <p>Australiëlaan 25, Utrecht 3526AB</p>
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
