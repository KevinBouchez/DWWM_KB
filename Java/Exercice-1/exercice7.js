let readline = require("readline-sync");
number = readline.question('Quel nombre voulez-vous saisir ?\n');
if(number % 3 === 0)
{
    result=number/3;
    console.log("Le résultat de "+number+" / 3 = "+result);
}
else
{
    console.log("Le chiffre "+number+" n’est pas divisible par 3");
}