const readline = require("readline").createInterface({ 
    input: process.stdin,
    output: process.stdout
});

readline.question("Quel est votre nom ? : ",nom =>{
readline.question("Quel est votre prénom ? : ",prenom =>{ 
readline.question("Quel est votre âge ? : ",age =>{  
console.log("----------BIENVENUE----------");
console.log("Votre nom est : "+nom);
console.log("Votre prenom est : "+prenom);
console.log("Vous avez "+age+" ans");
readline.close();
});});});

