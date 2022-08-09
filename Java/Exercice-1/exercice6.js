    let readline = require("readline-sync");
    while(isNaN(saisie = readline.question("Quelle nombre voulez-vous saisir ? ")))
    {
        console.log("Veuillez recommencer la saisie, vous devez saisir un nombre");
    }
    console.log("Le chiffre saisi est : "+saisie);
