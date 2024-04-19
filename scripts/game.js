class Ship {
    constructor(name, speed, cargo_space, crew_space, slots, u_slots, w_slots, a_slots, component_use, fuel_use, armor, shields, hull) {
        this.name = name;
        this.speed = speed;
        this.cargo_space = cargo_space;
        this.crew_space = crew_space;
        this.slots = slots;
        this.u_slots = u_slots;
        this.w_slots = w_slots;
        this.a_slots = a_slots
        this.component_use = component_use;
        this.fuel_use = fuel_use;
        this.armor = armor;
        this.shields = shields;
        this.hull = hull;
    }

    static create_cargo() {
        return new Ship(cargo_names_default[Math.floor(Math.random() * cargo_names_default.length)]
                        ,Math.floor(Math.random() * 301)
                        ,Math.floor((Math.random() * 501) + 500)
                        ,Math.floor((Math.random() * 101) + 100)
                        ,Math.floor((Math.random() * 2) + 1)
                        ,Math.floor((Math.random() * 2) + 1)
                        ,Math.floor(Math.random() * 2)
                        ,Math.floor(Math.random() * 2)
                        ,Math.round((Math.random() * 5) + 0.1 + Number.EPSILON)
                        ,Math.round((Math.random() * 5) + 0.1 + Number.EPSILON)
                        ,Math.floor(Math.random() * 100)
                        ,Math.floor(Math.random() * 50)
                        ,Math.floor((Math.random() * 100) + 100))

    }
}

cargo_names_default = ["Space Whale","Earth or Bust!","Bucket","Century Hawk","Rusty","Primrose","Old Man","Gold Digger","Walter",""];
cargo_names_pirate = ["Haula","Money printer","Iron Giant","Last Train Home","Going Merry"];

war_names_default = ["Blitzer","Brittannia","Dreadnought","Samurai","TT Far From Home","Paragon","Grute Pier"];
war_names_pirate = ["Dreadwell","Brittannia","Hound","Ronin","Hunter","Dirty Dog","Genghis","MF"];

dingus = new Ship("aa",12,500,500,5,3,1,2,0.5,0.5,100,100,100);
bingus = Ship.create_cargo();

console.log(bingus)


