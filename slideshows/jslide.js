var current = 0;
var element = document.getElementById("jslide");
var slides = element.getElementsByTagName("img");
var size = slides.length-1;
var start = setInterval(function(){jslide();}, 3000);

function jslide(){
  if ( current != size ) { 
    slides[ current ].style.display = "none";
    current++;
  } else {
    current = 0;
    for ( var i = 0; i < size; ++i ) {
      slides[i].style.display = "block"; 
    }
  }
}