/*Von Hier*/
var diashow_aktuelles_bild = 1; 
showSlides(diashow_aktuelles_bild);
var diashow = document.getElementsByClassName("mySlides");


function plusSlides(Eingabe) {
  diashow_aktuelles_bild += 1;
  /*console.log("plusSlides");*/

  if(diashow_aktuelles_bild > diashow.length){
    diashow_aktuelles_bild = 1;
  }
  if(Eingabe > diashow.length){
    Eingabe = 1;
  }



  toggle(diashow_aktuelles_bild);
}

function currentSlide(Eingabe) {
  diashow_aktuelles_bild -= 1;


if(diashow_aktuelles_bild > 1){
    diashow_aktuelles_bild = 1;
  }
  if(Eingabe > 1){
    Eingabe = 1;
  }




  
  toggle(diashow_aktuelles_bild);
}

function showNext(){
  /*console.log("showNext");*/
  diashow_aktuelles_bild++;

  showSlides(diashow_aktuelles_bild);
}



function showSlides(Eingabe) {
  var diashow = document.getElementsByClassName("mySlides"); /*4*/


  /*console.log("Vor toggle: " + Eingabe);*/
  
  Eingabe = toggle(Eingabe);
  /*console.log("Nach toggle: " + Eingabe);*/
  
  
  /*slideIndex += n+1;*/
  
  
  diashow_aktuelles_bild = Eingabe; 
  
  /*console.log("Zeile 63:" + Eingabe)*/
  if(diashow_aktuelles_bild > diashow.length){
    diashow_aktuelles_bild = 1;
  }
  if(Eingabe > diashow.length){
    Eingabe = 1;
  }
  setTimeout(showNext, 9000);
}




/* Bild anzeigen */
function toggle(Eingabe) {
  /*console.log("toggle");*/

    var i;
    var diashow = document.getElementsByClassName("mySlides");
      if (Eingabe > diashow.length) 
      { /* Plus button wurde gespammt */
        Eingabe = 1;
      }

      if (Eingabe < 1) 
      { /* Minus button wurde gespammt */
        Eingabe = diashow.length;
      }

      for (i = 0; i < diashow.length; i++) /*Alle die nicht aktuell sind auf none*/
      {
        diashow[i].style.display = "none";
      }

      diashow[Eingabe-1].style.display = "block"; /*Anzeigen*/
    return Eingabe;
}

/*Bis hier*/

































function myNavbar(x){
  x.classList.toggle("change");

  var y = document.getElementById("nav_on_phone");
  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
}



// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
    // create the global player from the specific iframe (#video)
    player = new YT.Player('video', {
        events: {
            // call this function when player is ready to use
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {

    // bind events
    var playButton = document.getElementById("play-button");
    playButton.addEventListener("click", function() {
        player.playVideo();
        document.getElementsByTagName('audio')[1].play();
        
    });

    var pauseButton = document.getElementById("pause-button");
    pauseButton.addEventListener("click", function() {
        player.pauseVideo();
    });

    var stopButton = document.getElementById("stop-button");
    stopButton.addEventListener("click", function() {
        player.stopVideo();
    });

}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);