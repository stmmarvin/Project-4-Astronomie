//HTML
const day_display = document.getElementById("day");
const hour_display = document.getElementById("hour");
const minute_display = document.getElementById("minute");
const fuel_ticker = document.getElementById("fuel");
const hunger_ticker = document.getElementById("hunger");
const option1 = document.getElementById("option1");
const option2 = document.getElementById("option2");
const option3 = document.getElementById("option3");
let option4 = document.getElementById("option4");
let option5 = document.getElementById("option5");
let options = document.querySelectorAll("option")
let title = document.getElementById("title");
let event_text = document.getElementById("event_text");

//Tickers
let minute = 0;
let hour = 0;
let day = 0;
let fuel = 100;
let hunger = 100;
let fuel_drain = 0.05;
let hunger_drain = 0.05;
let blackout = false;
let starving = false;

//Scores:
let budget = 0;
let data = 0;

option1.addEventListener("click", activate);


/*function loop() {
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
}*/

function activate() {
    //setInterval(loop, 33);
    swap_screen(0);
    option1.removeEventListener("click", activate);
    option1.addEventListener("click", swap_screen(option1_set));
    option2.addEventListener("click", swap_screen(option2_set));
    option3.addEventListener("click", swap_screen(option3_set));
    option4.addEventListener("click", swap_screen(option4_set));
    option5.addEventListener("click", swap_screen(option5_set));
    
}

function tick(days,hours,minutes) {
    hour += hours;
    minutes += minutes;
    days += days;

    fuel -= fuel_drain * minutes;
    fuel -= fuel_drain * hours * 60;
    fuel -= fuel_drain * days * 1440;

    hunger -= hunger_drain * minutes;
    hunger -= hunger_drain * hours * 60;
    hunger -= hunger_drain * days * 1440;


    if (minutes > 60) {
        minutes -= 60;
        hours += 1;
    }

    if (hours > 24) {
        hours -= 24;
        day += 1;
    }

    day_display.innerHTML = day;
    hour.innerHTML = hour;
    minute.innerHTML = minute;
}

tick(1,1,26);

function test1() {
    fuel += 10;
}

