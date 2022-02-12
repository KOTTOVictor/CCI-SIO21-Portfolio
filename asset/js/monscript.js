var slide = new Array("./img/nav1.jpg", "./img/nav2.jpg", "./img/nav3.jpg");
var numero = 0;

let path = new Array("./html/MonParcours.html", "./html/Projet.html", "./html/ExperienceProffesionnel.html" )
let title = new Array("Mon Parcours", "Mes Projets", "Mes ExperiencesProffessionel" )
let pied = new Array("#d71b3b", "#4203c9", "#16acea" )

let fillText = new Array("Mon Parcours", "Mes Projets", "Mes ExperiencesProffessionel" )


// let description = new Array("Mon Parcours", "Mes Projets", "Mes Experiences Proffessionel" )



function ChangeSlide(sens) 
{
     numero = numero + sens;
    if (numero < 0)
         numero = slide.length - 1;
     if (numero > slide.length - 1)
         numero = 0;
     document.getElementById("slide").src = slide[numero];
     document.getElementById("slide").fillText = fillText[numero];

     document.getElementById("slidlink").href = path[numero];
     document.getElementById("slide").title = title[numero];
     document.getElementById("pied").style.backgroundColor = pied[numero];
    //  document.getElementById("slidlink").description = description[numero];  
}
// context.fillText("Bonjour",40,40);
// context.strokeText("Bonjour",40,100);

setInterval("ChangeSlide(1)", 15000);



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
 