const titre = document.querySelector("h1");
// titre.style.background = "red";

// Premiere Façon :

// titre.addEventListener('click', function(){
//     console.log("hello");
// })

// Deuxieme Façon :

titre.addEventListener('click',fonctionAnimation);

function fonctionAnimation(){
    // console.log("Bye")
    // titre.style.background = "red";
}
