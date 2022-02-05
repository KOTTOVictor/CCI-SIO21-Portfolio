var slide = new Array("Documentation/images/nav1.jpg", "Documentation/images/nav2.jpg", "Documentation/images/nav3.jpg");
var numero = 0;

let path = new Array("Documentation/MonParcours.html", "Documentation/Projet.html", "Documentation/ExperienceProffesionnel.html" )
let title = new Array("Mon Parcours", "Mes Projets", "Mes ExperiencesProffessionel" )
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



 let fg = document.getElementById("fg");
 let fd = document.getElementById("fd");
 let fg1 = document.getElementById("fg1");
 let fd1 = document.getElementById("fd1");

 fg.addEventListener("click", () => {
   if(getComputedStyle(fg1).display != "none"){
     fg1.style.display = "none";
   } else {
    fg1.style.display = "block";
   }
 })
 
 function fdd(){
   if(getComputedStyle(fd1).display != "none"){
    fd1.style.display = "none";
   } else {
    fd1.style.display = "block";
   }
 };
 fd.onclick = fdd;

//  let fg = document.getElementById("fg");
//  let fd = document.getElementById("fd");
//  let fg1 = document.getElementById("fg1");
//  let fd1 = document.getElementById("fd1");
//  fg.addEventListener("click", () => {
//    if(getComputedStyle(fg1).visibility = "hidden"){
//      fg1.style.visibility = "visible";
//    } else {
//     fg1.style.display = "block";
//    }
//  })
 
//  function togg(){
//    if(getComputedStyle(fd1).visibility = "hidden"){
//     fd1.style.visibility = "visible";
//    } else {
//     fd1.style.display = "block";
//    }
//  };
//  fd.onclick = f;