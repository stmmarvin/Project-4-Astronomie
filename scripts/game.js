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

    create_cargo() {
        this.name = Math.floor(Math.random() * months.length);
        this.speed = Math.floor(Math.random() * 301);
        this.cargo_space = Math.floor((Math.random() * 501) + 500);
        this.crew_space = Math.floor((Math.random() * 101) + 50);
        this.slots = Math.floor((Math.random() * 2) + 1);
        this.u_slots = Math.floor((Math.random() * 2) + 1);
        this.w_slots = Math.floor(Math.random() * 2);
        this.a_slots = Math.floor(Math.random() * 2);
        this.component_use = Math.round((math.random * 5) + Number.EPSILON);
        this.component_use = Math.round((math.random * 5) + Number.EPSILON);
        this.armor = math.floor(math.random() * 100);
        this.shields = math.floor(math.random() * 50);
        this.hull = math.floor((math.random() * 100) + 100)

    }
}

cargo_names_default = ["Space Whale","Earth or Bust!","Bucket","Century Hawk","Rusty","Primrose"] 

dingus = new Ship("aa",12,500,500,5,3,1,2,0.5,0.5,100,100,100);
bingus = new Ship.create_cargo();

console.log(bingus)


