//options sets
let option1_set = 0
let option2_set = 0
let option3_set = 0
let option4_set = 0
let option5_set = 0


function swap_screen(screen) {
    console.log("swapping screen...")
    switch (screen) {
        case 0:
            title.innerHTML = "WAKKER WORDEN!";
            event_text.innerHTML = "Een scherp geluid blèrt door de kamer heen je oor in."; //1
            option1.innerHTML = "Nog vijf minuten."
            option1_set = 1;
            option2.innerHTML = "Heb te veel dorst om op te staan. En ik ben te moe om te drinken..."
            option2_set = 1;
            option3.innerHTML = ""
            option4.innerHTML = ""
            option5.innerHTML = ""
            break;
        case 1:
            title.innerHTML = "Huh?"
            event_text.innerHTML = "De kamer klinkt veel groter dan je slaapkamer. De waas die je door een van je ogen, die half open is, ziet, ziet er ook niet uit als je slaapkamer";
            option1.innerHTML = "wrijf dat spul uit je ogen" //2
            option2.innerHTML = "&#x0022 De wekker! Waar is de @#!* wekker!	&#x0022" //3
            option3.innerHTML = "Nog vijf minuten..." //4
            option4.innerHTML = ""
            option5.innerHTML = ""
            break;
        case 2:
            title.innerHTML = "Slaapslijm";
            event_text.innerHTML = "Dat ranzige spul wat in je ogen zat is weg. Je kan nu duidelijk zien, dat je zeker weten niet in je slaapkamer bent. Je realiseert ook dat je niet in een bed slaapt. Maar met je kont in een bureau stoel, en je torso op een bureau.";
            option1.innerHTML = "&#x0022 Oh ja... &#x0022";//5

            
    }
    
}
