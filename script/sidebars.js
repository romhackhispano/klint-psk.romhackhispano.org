$('#sidebar').hover(
    function(){ // Función de mousein
            $(this).stop(true).animate({left:'-0.25%'});
            //$(this).css('background-image','url()');
    }, 
    function(){ // Función de mouseout
            $(this).stop(true).animate({left:'-13%'});
            //$(this).css('background-image','url(img/sidebar.png)');
    }
);
$('#rightbar').hover(
    function(){ // Función de mousein
            $(this).stop(true).animate({right:'-0.25%'});
            //$(this).css('background-image','url()');
    }, 
    function(){ // Función de mouseout
            $(this).stop(true).animate({right:'-15%'});
            //$(this).css('background-image','url(img/sidebar.png)');
    }
);

$('a').hover(
        function(){
                $(this).stop(true).animate({color:'#FFD700'}, 250);
        },
        function(){
                $(this).stop(true).animate({color:'white'}, 250);
        }
);