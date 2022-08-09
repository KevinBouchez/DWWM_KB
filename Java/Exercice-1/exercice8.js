//Exercice 9
let readline = require("readline-sync");
//mot = readline.question('Veuillez taper un mot ?\n');
let mot
function afficherTaille(mot)
{
    
    if(mot.length<8)
    {
        //Si il fait qu'un caractère on met pas de S ^^
        if(mot.length==1)
        {
            console.log("Le mot contient ${mot.length} caractère");
        }else
        {
        console.log("Le mot contient ${mot.length} caractères");
        }
    }
    else
    {
        console.log("Le mot  fait plus de 8 caractères");
    }
}

afficherTaille("Hélicoptère");
afficherTaille("Banane");
afficherTaille("Bière");
afficherTaille("Chat");
afficherTaille("A");
