// function makeUser(name, age) {
//     this.name = name;
//     this.age = age;
//     this.sayhi = function () {
//         console.log(`Hello, I am ${this.name}`)
//     }
// }

// let userA = new makeUser('Bob', 37);
// let userB = new makeUser('John', 42);

// console.log(userA.__proto__ == userB.__proto__);

// let animal = {
//     eats: true,
//     type: "mamal",
//     walk() {
//         console.log("I walk!");

//     },
//     getType() {
//         console.log("my type is" + this.type);

//     }
// }

// let lapin = {
//     jumps: true,
//     __proto__: animal,
//     type: "rabbiy"
// }

// let longueOreilles = {
//     eat: 20,
//     __proto__: lapin,
//     type: "longEar"
// }

// lapin.jumps = function () {
//     console.log("I jump!");

// }

// longueOreilles.getType();

// String.prototype.display = function () { // Ajouter une méthode à un objet natif (String)
//     console.log(this); // this se réfère à l'objet lui même
// }

// let array = [1, 2, 3];
// Array.prototype.display = function () {
//     console.log(this);
// }


function Clock({ template }) {
    let timer;
    function render() {
        let date = new Date();

        let hours = date.getHours();
        if (hours < 10) hours = '0' + hours;

        let mins = date.getMinutes();
        if (mins < 10) min = '0' + mins;

        let secs = date.getSeconds();
        if (secs < 10) secs = '0' + secs;

        let output = template
            .replace('h', hours)
            .replace('m', mins)
            .replace('s', secs);
        console.log(output);
    }
    this.stop = function () {
        clearInterval(timer);
    };
    this.start = function () {
        render();
        timer = setInterval(render, 1000);
    };
}
let clock = new Clock({ template: 'h:m:s' })
clock.start();


