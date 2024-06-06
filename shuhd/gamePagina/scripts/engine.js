//HTML
const fuel_ticker = document.getElementById("fuel");
const hunger_ticker = document.getElementById("hunger");
let option1 = document.getElementById("option1");
let option2 = document.getElementById("option2");
let option3 = document.getElementById("option3");
let option4 = document.getElementById("option4");
let option5 = document.getElementById("option5");
let title = document.getElementById("title");
let event_text = document.getElementById("event_text");

//Tickers
let fuel = 100;
let hunger = 100;
let fuel_drain = 0.05;
let hunger_drain = 0.05;
let blackout = false;
let starving = false;

option1.addEventListener("click", activate);


function loop() {
    if (fuel > 0) {
        fuel -= fuel_drain;
        fuel_ticker.innerHTML = Math.floor(fuel);
    }

    else if (blackout) {
        //TODO blackout event
    }

    if (hunger > 0) {
        hunger -= hunger_drain;
        hunger_ticker.innerHTML = Math.floor(hunger);
    }

    else if (starving) {
        //TODO starving event
    }
}

function activate() {
    setInterval(loop, 33);
    swap_screen(0);
    option1.removeEventListener("click", activate);
    option1.addEventListener("click", swap_screen(option1_set));
    option2.addEventListener("click", swap_screen(option2_set));
    option3.addEventListener("click", swap_screen(option3_set));
    option4.addEventListener("click", swap_screen(option4_set));
    option5.addEventListener("click", swap_screen(option5_set));
    
}
function test1() {
    fuel += 10;
}

