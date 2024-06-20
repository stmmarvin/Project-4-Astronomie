// Astronomie gerelateerd script
let signal_detected = false;
let blackout = false;

function swap_screen(screen) {

    console.log("swapping screen...")
    options.forEach(option => {
        option.removeEventListener("click", swap_screen);
        option.removeEventListener("click", tick);
    });

    switch (screen) {
        case 0:
            title.innerHTML = "RUIMTEVAARTMISSIE: ONTWAKEN";
            event_text.innerHTML = "Een alarm gaat af in je ruimtecapsule, wakker worden!";
            option1.innerHTML = "Nog vijf minuten...";
            option1.addEventListener("click", () => { swap_screen(1); });
            option2.innerHTML = "Sta op en controleer de instrumenten.";
            option2.addEventListener("click", () => { swap_screen(2); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 1:
            title.innerHTML = "Nog even slapen";
            event_text.innerHTML = "Je probeert verder te slapen, maar het alarm blijft loeien.";
            option1.innerHTML = "Sta op en controleer de instrumenten.";
            option1.addEventListener("click", () => { swap_screen(2); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 2:
            title.innerHTML = "Instrumenten controleren";
            event_text.innerHTML = "Je staat op en loopt naar het controlepaneel. De schermen geven data weer van de telescoop en de status van het ruimteschip.";
            option1.innerHTML = "Controleer de telescoopdata.";
            option1.addEventListener("click", () => { swap_screen(3); });
            option2.innerHTML = "Bekijk de status van het ruimteschip.";
            option2.addEventListener("click", () => { swap_screen(4); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 3:
            title.innerHTML = "Telescoopdata";
            event_text.innerHTML = "De telescoop heeft een vreemd signaal gedetecteerd van een verre ster.";
            option1.innerHTML = "Analyseer het signaal.";
            option1.addEventListener("click", () => { swap_screen(5); });
            option2.innerHTML = "Negeer het signaal en ga terug naar bed.";
            option2.addEventListener("click", () => { swap_screen(1); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 4:
            title.innerHTML = "Ruimteschip status";
            event_text.innerHTML = "Alle systemen werken naar behoren, maar de zuurstofniveaus zijn iets lager dan normaal.";
            option1.innerHTML = "Controleer de zuurstoftoevoer.";
            option1.addEventListener("click", () => { swap_screen(6); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 5:
            title.innerHTML = "Signaal Analyse";
            event_text.innerHTML = "Het signaal lijkt kunstmatig te zijn. Misschien is het afkomstig van een buitenaardse beschaving!";
            option1.innerHTML = "Stuur een bericht terug.";
            option1.addEventListener("click", () => { swap_screen(7); });
            option2.innerHTML = "Blijf het signaal verder analyseren.";
            option2.addEventListener("click", () => { swap_screen(8); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 6:
            title.innerHTML = "Zuurstoftoevoer controleren";
            event_text.innerHTML = "Je ontdekt een klein lek in het zuurstofsysteem. Het moet gerepareerd worden.";
            option1.innerHTML = "Repareer het lek.";
            option1.addEventListener("click", () => { swap_screen(9); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 7:
            title.innerHTML = "Bericht versturen";
            event_text.innerHTML = "Je stuurt een bericht terug naar de bron van het signaal. Nu is het wachten op een reactie.";
            option1.innerHTML = "Wacht op een reactie.";
            option1.addEventListener("click", () => { swap_screen(10); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 8:
            title.innerHTML = "Signaalanalyse voortzetten";
            event_text.innerHTML = "Je blijft het signaal analyseren en ontdekt patronen die lijken op een taal.";
            option1.innerHTML = "Probeer de taal te ontcijferen.";
            option1.addEventListener("click", () => { swap_screen(11); });
            option2.innerHTML = "Neem een pauze en ga iets anders doen.";
            option2.addEventListener("click", () => { swap_screen(12); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 9:
            title.innerHTML = "Lek repareren";
            event_text.innerHTML = "Je repareert het lek in de zuurstoftoevoer. De niveaus beginnen weer te stijgen.";
            option1.innerHTML = "Ga terug naar het controlepaneel.";
            option1.addEventListener("click", () => { swap_screen(2); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 10:
            title.innerHTML = "Reactie ontvangen";
            event_text.innerHTML = "Je ontvangt een reactie op je bericht. Het lijkt een uitnodiging om meer informatie te delen.";
            option1.innerHTML = "Stuur meer gegevens.";
            option1.addEventListener("click", () => { swap_screen(13); });
            option2.innerHTML = "Blijf afwachten.";
            option2.addEventListener("click", () => { swap_screen(10); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 11:
            title.innerHTML = "Taal ontcijferen";
            event_text.innerHTML = "Je begint de taal te ontcijferen. Het lijkt erop dat ze ons meer willen vertellen over hun cultuur.";
            option1.innerHTML = "Blijf ontcijferen.";
            option1.addEventListener("click", () => { swap_screen(14); });
            option2.innerHTML = "Deel je ontdekkingen met je team.";
            option2.addEventListener("click", () => { swap_screen(15); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 12:
            title.innerHTML = "Pauze nemen";
            event_text.innerHTML = "Je neemt een pauze van het analyseren en kijkt uit het raam naar de sterren.";
            option1.innerHTML = "Ga terug naar de analyse.";
            option1.addEventListener("click", () => { swap_screen(5); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 13:
            title.innerHTML = "Meer gegevens versturen";
            event_text.innerHTML = "Je stuurt meer gegevens naar de bron van het signaal. Wachten op een reactie.";
            option1.innerHTML = "Blijf wachten.";
            option1.addEventListener("click", () => { swap_screen(10); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 14:
            title.innerHTML = "Meer ontcijferingen";
            event_text.innerHTML = "Je maakt vorderingen in het ontcijferen van de taal. Het wordt steeds duidelijker.";
            option1.innerHTML = "Blijf doorgaan.";
            option1.addEventListener("click", () => { swap_screen(14); });
            option2.innerHTML = "Deel je ontdekkingen met je team.";
            option2.addEventListener("click", () => { swap_screen(15); });
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 15:
            title.innerHTML = "Ontdekkingen delen";
            event_text.innerHTML = "Je deelt je ontdekkingen met je team. Samen proberen jullie meer te begrijpen over de buitenaardse cultuur.";
            option1.innerHTML = "Ga verder met het onderzoek.";
            option1.addEventListener("click", () => { swap_screen(16); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 16:
            title.innerHTML = "Einde van de beginfase";
            event_text.innerHTML = "Je hebt de eerste fase van de missie voltooid. De echte ontdekkingen beginnen nu pas.";
            option1.innerHTML = "Ga verder!";
            option1.addEventListener("click", () => { swap_screen(0); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        default:
            title.innerHTML = "ERROR";
            event_text.innerHTML = "Er is iets misgegaan. Probeer opnieuw.";
            option1.innerHTML = "Opnieuw beginnen";
            option1.addEventListener("click", () => { swap_screen(0); });
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
    }

    options.forEach(option => {
        option.classList.add("active-option");

        if (option.innerHTML === "") {
            option.classList.remove("active-option");
        }
    });
}

function ask_name() {
    let name = prompt("Wat is je naam?");
    if (name != null) {
        console.log("Je naam is " + name);
    }
}
