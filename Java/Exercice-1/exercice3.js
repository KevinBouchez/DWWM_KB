const readline = require("readline").createInterface({ 
    input: process.stdin,
    output: process.stdout
});

readline.question("Puissance voulue ? : ",puissance => { 
result=Math.pow(2, puissance);
console.log("2 à la puissance "+puissance+ " = "+result);
readline.close();
});

