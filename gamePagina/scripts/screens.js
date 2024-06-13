//story stuff
let luggage_broken = false;
let signal = false;

function swap_screen(screen) {

    console.log("swapping screen...")
    options.forEach(option => {
        option.removeEventListener("click");
    })
    switch (screen) {
        case 0:
            title.innerHTML = "WAKKER WORDEN!";
            event_text.innerHTML = "Een scherp geluid blèrt door de kamer heen je oor in."; //1
            option1.innerHTML = "Nog vijf minuten.";
            option1.addEventListener("click", ()=> {swap_screen(1);});
            option2.innerHTML = "Heb te veel dorst om op te staan. En ik ben te moe om te drinken...";
            option2.addEventListener("click", ()=> {swap_screen(1);});
            option3.innerHTML = "Skip intro";
            option3.addEventListener("click", ()=> {swap_screen(10);});
            option3.addEventListener("click", ()=> {tick(0,0,0);});
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 1:
            title.innerHTML = "Huh?"
            event_text.innerHTML = "De echo van de kamer klinkt veel groter dan je slaapkamer. De waas die je door een van je ogen, die half open is, ziet. Ziet er ook niet uit als je slaapkamer";
            option1.innerHTML = "wrijf dat spul uit je ogen" //2
            option1.addEventListener("click", ()=> {swap_screen(2);});
            option2.innerHTML = "&#x0022 De wekker! Waar is de @#!* wekker! &#x0022" //3
            option2.addEventListener("click", ()=> {swap_screen(3);});
            option3.innerHTML = "Nog vijf minuten..." //4
            option3.addEventListener("click", ()=> {swap_screen(4);});
            option4.innerHTML = ""
            option5.innerHTML = ""
            break;
        case 2:
            title.innerHTML = "Slaapslijm";
            event_text.innerHTML = "Dat ranzige spul wat in je ogen zat is weg. Je kan nu duidelijk zien, dat je zeker weten niet in je slaapkamer bent. Je realiseert ook dat je niet in een bed slaapt. Maar met je kont in een bureau stoel, en je torso op een bureau.";
            option1.innerHTML = "&#x0022 Oh ja... &#x0022";//5
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        case 3:
            title.innerHTML = "De hoorn der eind tijden."
            event_text.innerHTML = "Je raazt door de kamer heen. Op zoek naar die duivelse wekker. Met half je zicht is dit moeilijk te doen. Uiteindelijk kom je bij een wazig object terecht. Je wekker zit er in";
            option1.innerHTML = "Scheur dat ding open om dat elektronisch gejank zo snel mogelijk te stoppen";
            option2.innerHTML = "Scheld de wekker uit";
            option3.innerHTML = "Adem in en uit."
            option4.innerHTML = ""
            option5.innerHTML = ""
            break;
        
        case 4:
            title.innerHTML = "Vijf minuten later"
            event_text.innerHTML = "Oké... het is nu vijf minuten later."
            option1.innerHTML = "Tijd om iets anders te doen";
            option1.addEventListener("click", ()=> {swap_screen(1);});
            option2.innerHTML = "Slaap, nu voor altijd";
            option2.addEventListener("click", ()=> {swap_screen(7);});
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        
        case 5:
            title.innerHTML = "De eerste dag van je leven."
            event_text.innerHTML = "Natuurlijk ben je niet op je oude slaapkamer. Je woont nu op je nieuwe baan. De baan waar je in slaap bent gevallen. Mischien moet je nu je werk gaan doen...";
            option1.innerHTML = "Nee ik ga weer naar bed.";
            option1.addEventListener("click", ()=> {swap_screen(0);});
            option2.innerHTML = "Kijk rond het kantoor."; //6
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        case 6:
            title.innerHTML = "De werkkamer"
            event_text.innerHTML = "Je nieuwe kantoor. Eigenlijk is het een kantoor voor meerdere mensen. Maar jij bent de enige die hier nu werkt. Nogal onhandig aangezien dit je eerste dag is en er nu niemand is om je in te werken. Je had al gehoord dat er niemand hier was voor een jaar of zo. Maar het is treurig om de staat van dit gebouw te zien."
            option1.innerHTML = "Aan het werk dan maar. Zet de computer aan";
            option1.addEventListener("click", ()=> {swap_screen(8);});
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;
        
        case 7:
            title.innerHTML = "De Honk Shoo grindset"
            event_text.innerHTML = "Op mysterieuze wijze heb je je eigen biologie gebroken, en is het nu onmogelijk voor jou om op te staan. Je bent dood voor de wereld, en de wereld is dood voor jou. GAME OVER."
            option1.innerHTML = "Probeer het opnnieuw";
            option1.addEventListener("click", ()=> {swap_screen(0);});
            option2.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        case 8:
            title.innerHTML = "Je zet een van de werkcomputers aan. Dit oude ding kan niet jonger dan tien jaar zijn. Tot horror zie dat hij op windows XP runt."
            event_text.innerHTML = "";
            option1.innerHTML = "";
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        case 9:
            title.innerHTML = "";
            event_text.innerHTML = "";
            option1.innerHTML = "";
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        case 10:
            title.innerHTML = "Einde van het begin van het einde.";
            event_text.innerHTML = "Je zit in je kantoor, je bent omringt door computers, samen geronseld uit verschillende eerdere programma's en tijdperken.";
            option1.innerHTML = "Check de schotelantenne besturing.";
                if (blackout) {
                   option1.addEventListener("click", ()=> {swap_screen();});
                }

                else {
                    option1.addEventListener("click", ()=> {swap_screen(11);});
                }
            option1.addEventListener("click", ()=> {swap_screen(11);});
            option2.innerHTML = "Bekijk de radio ontvanger."
            option3.innerHTML = "Zet de werkcomputer aan.";
            option4.innerHTML = "Loop het kantoor uit. (00:05)";
            option4.addEventListener("click", ()=> {swap_screen();});
            option3.addEventListener("click", ()=> {tick(0,0,5);})
            option5.innerHTML = "";
            break;

        case 11:
            title.innerHTML = "Stemmen uit het grote niks.";
            if (signal) {
                event_text.innerHTML = "De radiotelescoopt ziet niets buiten kosmische achtergrondsstraling.";
            }
            else {
                event_text.innerHTML = "Je grafiek geeft iets wat duidelijk niet alleen achtergrondsstraling is is. Of het iets is moet je nog uitvogelen";
            }
            
            option1.innerHTML = "Beweeg de schotel om iets te zoeken. (00:30)";
            
            if ((Math.floor(Math.random() * 2)) == 1) {
                option1.addEventListener("click", ()=> {swap_screen(12);});
            }

            else {
                option1.addEventListener("click", ()=> {swap_screen(13);});
            }
            option1.addEventListener("click", ()=> {tick(0,0,5);})
            if (signal) {
                option2.innerHTML = "Bestudeer het signaal (00:30)";
                option2.addEventListener("click", ()=> {tick(0,0,30);});
            }
            else {
                option2.innerHTML = "Bestudeer de achtergrondsstraling";
            }
            option3.innerHTML = "Bekijk de rest van het kantoor";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        case 12:
            title.innerHTML = "Iets in het niets";
            event_text.innerHTML = "Tussen de ruis kom je wat andere ruis tegen. Nu moet je alleen nog uitvinden wat het is";
            signal = true;
            option1.innerHTML = "Bestudeer het gelijk (00:30)";
            option1.addEventListener("click", ()=> {swap_screen(12);});
            option1.addEventListener("click", ()=> {tick(0,0,30);})
            option2.innerHTML = "Laat het voor nu liggen.";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        case 13:
            title.innerHTML = "Niets in het niets in het niets in het niets...";
            event_text.innerHTML = "Je zoekt en je zoekt, alles wat je ziet is ruis";
            option1.innerHTML = "Bestudeer de achtergrondsstraling";
            option2.innerHTML = "laat de ruis maar zitten. Later zal er ook wel ruis zijn.";
            option1.addEventListener("click", ()=> {swap_screen(11);});
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        case 14:
            title.innerHTML = "Iets, maar wat?";
            event_text.innerHTML = "Je hebt je radiogolven, je hebt alleen nog niet een goed idee wat het is, dit moet je nu uitvogelen.";
            option1.innerHTML = "";
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            break;

        default:
            title.innerHTML = "ERROR";
            event_text.innerHTML = "Je hebt de game gebroken. Je hoort dit niet te zien. Hoe heb je dat gedaan?"
            option1.innerHTML = "Sorry...";
            option2.innerHTML = "";
            option3.innerHTML = "";
            option4.innerHTML = "";
            option5.innerHTML = "";
            
    }

    
    
}
