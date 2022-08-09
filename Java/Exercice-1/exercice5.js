const readline = require("readline").createInterface({ 
    input: process.stdin,
    output: process.stdout
});

readline.question("Quelle table de multiplication voulez-vous afficher : ",nombre => { 
for(let i = 1; i <= 10; i++){
    const result = i * nombre;
    console.log(+nombre+ " * " +i+ " = " +result)
}
readline.close();
});