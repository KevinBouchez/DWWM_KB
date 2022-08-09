let voiture = {
    immatriculation : "AB123CD3",
    marque : "toyota",
    annee : 2022,
    carac : {
        nbKilometre : 20000,
        couleur : "rouge",
        puissance : 7
    }
}

console.log(voiture.immatriculation);
console.log(voiture.marque);
console.log(voiture.annee);

console.log(`La voiture d'immatriculation ${voiture.immatriculation} de marque ${voiture.marque} date de ${voiture.annee}`);