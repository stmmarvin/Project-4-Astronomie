class Ship {
    constructor(name, speed, cargo_space, crew_space, slots, u_slots, w_slots, a_slots, component_use, fuel_use, armor, shields, hull, sprite) {
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
        this.sprite = sprite;
        this.mods = [];
    }

    static create_cargo() {
        return new Ship(cargo_names_default[Math.floor(Math.random() * cargo_names_default.length)]
                        ,Math.floor(Math.random() * 301)
                        ,Math.floor((Math.random() * 501) + 500)
                        ,Math.floor((Math.random() * 101) + 100)
                        ,Math.floor((Math.random() * 2) + 1)
                        ,Math.floor((Math.random() * 2) + 1)
                        ,Math.floor(Math.random() * 2)
                        ,Math.floor(Math.random() * 2 + 1)
                        ,Math.round(Math.random() * 5 + 1)
                        ,Math.round(Math.random() * 5)
                        ,Math.floor(Math.random() * 101)
                        ,Math.floor(Math.random() * 51)
                        ,Math.floor((Math.random() * 101) + 100)
                        ,cargo_sprites_default[Math.floor(Math.random() * cargo_sprites_default.length)])

    }
}

class Mod {
    constructor(name, type, slots_used) {
        this.name = name;
        this.type = type;
        this.slots_used = slots_used;
    }
}

class Weapon extends Mod {
    constructor(name, type, slots_used, damage, fire_rate, ammo) {
        super.constructor(name,type,slots_used);
        this.damage = damage;
        this.fire_rate = fire_rate;
        this.ammo = ammo;
    }
}

class Utility extends Mod {
    constructor(name, type, slots_used,effect,add,strength) {
        super(name,type,slots_used);
        this.effect = effect;
        //0 = +, 1 = -, 2 = *, 3 = /
        this.add = add;
        this.strength = strength;
    }

}

class System {
    constructor(planets, features) {
        this.planets = planets;
        features = {};
    }
}

class Astronomical {
    constructor(size, features) {
    }
}

class Star extends Astronomical {
    constructor(size,features,instensity) {
        super(size,features) 
        this.instensity = instensity;
    }
}

class Planet extends Astronomical {
    constructor(size,features,distance,wetness,athmosphere) {
        super(size,features)
        this.distance = distance;
        this.wetness = wetness;
        this.athmosphere = athmosphere;
        this.temperature = athmosphere / distance;
    }
}


cargo_names_default = ["Space Whale","Earth or Bust!","Bucket","Century Hawk","Rusty","Primrose","Old Man","Gold Digger","Walter","Red Dwarf"];
cargo_names_pirate = ["Haula","Money printer","Iron Giant","Last Train Home","Going Merry"];

war_names_default = ["Blitzer","Brittannia","Dreadnought","Samurai","TT Far From Home","Paragon","Grute Pier"];
war_names_pirate = ["Dreadwell","Brittannia","Hound","Ronin","Hunter","Dirty Dog","Genghis","MF"];

cargo_sprites_default = ["../img/cargo_default_1.svg","../img/cargo_default_2.svg"]

//================================================================================================================================================

const features = {
    const oasis = [

    ],
};


const dingus = new Ship("aa",12,500,500,5,3,1,2,0.5,0.5,100,100,100);
const bingus = Ship.create_cargo();

const gungus = new Utility("External cargo hold", "u", "1", "cargo_space","0","100");

console.log(bingus);

console.log(gungus);

console.log(document.getElementsByTagName("body")[0]);

document.getElementsByTagName("body")[0].style.backgroundImage = bingus.sprite;


