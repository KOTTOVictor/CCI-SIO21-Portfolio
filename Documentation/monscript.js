var slide = new Array("./images/nav1.jpg", "./images/nav2.jpg", "./images/nav3.jpg");
var numero = 0;

let path = new Array("Mon Parcours.html", "Projet.html", "Experience Proffesionnel.html" )
let title = new Array("Mon Parcours", "Mes Projets", "Mes Experiences Proffessionel" )
let pied = new Array("#d71b3b", "#4203c9", "#16acea" )

// let description = new Array("Mon Parcours", "Mes Projets", "Mes Experiences Proffessionel" )



function ChangeSlide(sens) {
     numero = numero + sens;
    if (numero < 0)
         numero = slide.length - 1;
     if (numero > slide.length - 1)
         numero = 0;
     document.getElementById("slide").src = slide[numero];
     document.getElementById("slidlink").href = path[numero];
     document.getElementById("slide").title = title[numero];
     document.getElementById("pied").style.backgroundColor = pied[numero];
    //  document.getElementById("slidlink").description = description[numero];
    
 }
 setInterval("ChangeSlide(1)", 15000);

