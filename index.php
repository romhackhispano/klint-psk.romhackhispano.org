<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />
        <!--<link rel="stylesheet" type="text/css" href="css/slides.css" />-->
        <link type="text/css" rel="Stylesheet" href="css/bjqs.css" />
        
        <link href="favicon.ico" rel="shortcut icon" />
        <script src="lib/jquery-1.8.2.js"></script>
            <script src="lib/jquery.color.js"></script>
            <!--<script src="lib/jquery.slides.min.js"></script>-->
            <script src="lib/bjqs-1.3.min.js"></script>
        <title>Klint Proguctions</title>
    </head>
    <body>
    	<div id="header"> 
            <div id="tagline"></div>
        </div>
        <div id="menubarWrapper">
        <div id="menubar">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li>&nbsp;</li>
                <li><a href="?pg=news">Noticias</a></li>
                <li>&nbsp;</li>
                <li><a href="?pg=about">Acerca de</a></li>
                <!--<li>&nbsp;</li>
                <li><a href="index.php?pg=contact">Contacto</a></li>-->
                <li>&nbsp;</li>
                <li><a href="?pg=colabor">Colaboraciones</a></li>
                <li>&nbsp;</li>
                <li><a href="?pg=links">Enlaces</a></li>
                <li>&nbsp;</li>
                <li><a href="?pg=down">Descargas</a></li>
            </ul>
        </div>
        </div>
    	<div id="sidebar"> 
            <ul id="aux">
                <? //include "projects.php";?>
                <li class='pry-term'><a href="?pg=pry-met">Metroid</a></li>
                <li class='pry-term'><a href="?pg=pry-met2">Metroid II</a></li>
                <li class='pry-term'><a href="?pg=pry-met3">Super Metroid</a></li>                    
                <li class='pry-term'><a href="?pg=pry-kirb1">Kirby's Adventure</a></li>
                <li class='pry-curs'><a href="?pg=pry-fe3">Fire Emblem: Mystery of the Emblem</a></li>
                <li class='lihr'><hr/></li>
                <li class='pry-term-aj'><a href="http://blog.tales-tra.com/proyectos/tales-of-destiny/">Tales of Destiny</a></li>
                <li class='pry-term-aj'><a href="http://tiovictor.romhackhispano.org/fragile-dreams-farewell-ruins-of-the-moon/">Fragile Dreams</a></li>
                <li class='pry-term-aj'><a href="http://nekutranslations.es/moz/">El Mago de Oz</a></li>
            </ul>
        </div>
        <div id="rightbar">
            <a class="twitter-timeline"  href="https://twitter.com/Klint_Prg">Tweets por @Klint_Prg</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
        </div>
    	<div id="content">
    	    <? include "content.php";?>
        </div>
        <div id="footer">
            <p>Página creada por Klint-psk</p>
            <p>Todos los izquierdos extrovertidos, 2007-<?=date("Y")?></p>
        </div>
        <script src="script/sidebars.js"></script>
        <script src="script/Tagline.js"></script>
    </body>
</html>