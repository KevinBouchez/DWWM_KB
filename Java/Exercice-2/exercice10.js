let readline = require("readline-sync");

let personnage = {};

personnage.nom = readline.question("Quel est le nom : ");
personnage.age = parseInt(readline.question("Quel age : "));

console.log(personnage);

personnage.carac = {
    force : 7,
    intel : 8,
    agilite : 5
};