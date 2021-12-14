var compteurImage=1;
var totalimage=3;

function slider(x){

    var image=document.getElementById('img');
    compteurImage=compteurImage + x;
    image.src="images/nav"+compteurImage +".jpg"

    if(compteurImage>=totalImage)
        {
            compteurImage=1;
        }
    if(compteurImage<1){compteurImage=totalimage;}
}