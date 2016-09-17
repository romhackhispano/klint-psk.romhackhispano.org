// JavaScript Document
function Aleatorio(Max, Last) {
    var i = parseInt(Math.random()*Max);;	
    while (i<=0 || i>Max || i == Last) {
      i=parseInt(Math.random()*Max);
    }
    return i;
}
function Genera() {
    $("#tagline").fadeIn("slow");
    var aFrases=new Array('',
    'Nada de esto es real, es solo un sueño de Antonio Resines',
    'Andamos cortos de traductores. Aceptamos sugerencias y/o esclavos',
    'Seguimos el "spanish way of life": no hagas hoy lo que puedes dejar para mañana',
    'Comenzamos a hacernos responsables de los dolores oculares',
    'Sin romhacking, no puede ser visto',
    'Procrastinando desde 2007',
    'Traducciones liberales y posmodernas',
    'Ni machismo ni feminismo: fantraducciones');
    try{
        k = Aleatorio(aFrases.length, k);
    }catch (e){
        k = Aleatorio(aFrases.length, 0);
    }
    $("#tagline").text(aFrases[k]);
    
    delay(
        function (){
            $("#tagline").fadeOut('slow', function() {
                Genera();
            });
        }
    , 5000)
 }
 
 var delay = (function () {
    var timer = 0;
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();

$("document").ready(function(){
    Genera();
});