var slide = new Array("./img/nav1.jpg", "./img/nav2.jpg", "./img/nav3.jpg");
var numero = 0;

let path = new Array("./html/MonParcours.html", "./html/Projet.html", "./html/ExperienceProffesionnel.html" )
let title = new Array("Mon Parcours", "Mes Projets", "Mes ExperiencesProffessionel" )
let pied = new Array("#d71b3b", "#4203c9", "#16acea" )


function ChangeSlide(sens) 
{
     numero = numero + sens;
    if (numero < 0)
         numero = slide.length - 1;
     if (numero > slide.length - 1)
         numero = 0;
     document.getElementById("slide").src = slide[numero];
     document.getElementById("slidlink").href = path[numero];
     document.getElementById("slide").title = title[numero];
     document.getElementById("pied").style.backgroundColor = pied[numero];
}

setInterval("ChangeSlide(1)", 15000);

// Width PETIT PETIT---------------------------------------------------------
let blockfgpetit = document.getElementById("blockfgpetit");
let blockfdpetit = document.getElementById("blockfdpetit");


blockfgpetit.style.display = "none";



blockfgpetit.addEventListener("click", () => {
    blockfgpetit.style.display = "none";
    blockfdpetit.style.display = "block";

 })

blockfdpetit.addEventListener("click", () => {
    blockfdpetit.style.display = "none";
    blockfgpetit.style.display = "block";

})



// Width moyen---------------------------------------------------------
let blockfgmoyen = document.getElementById("blockfgmoyen");
let blockfdmoyen = document.getElementById("blockfdmoyen");
let fgmoyen = document.getElementById("fgmoyen");
let fdmoyen = document.getElementById("fdmoyen");

fgmoyen.style.display = "none";



blockfgmoyen.addEventListener("click", () => {
     fgmoyen.style.display = "none";
     fdmoyen.style.display = "block";

 })

blockfdmoyen.addEventListener("click", () => {
    fdmoyen.style.display = "none";
    fgmoyen.style.display = "block";

})



// Width Grand---------------------------------------------------------

let blockfg = document.getElementById("blockfg");
let blockfd = document.getElementById("blockfd");
let fg = document.getElementById("fg");
let fd = document.getElementById("fd");

fg.style.display = "none";

blockfg.addEventListener("click", () => {
     fg.style.display = "none";
     fd.style.display = "block";

 })

blockfd.addEventListener("click", () => {
    fd.style.display = "none";
    fg.style.display = "block";

})
 