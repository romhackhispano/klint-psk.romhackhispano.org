<h1>Noticias</h1>
<?
$fXML = new SimpleXMLElement("noticias.xml",NULL,TRUE);
//var_dump($fXML);
for( $i=0; $i <= sizeof($fXML[0]->noticia)-1; $i++){
    //var_dump($fXML[0]->noticia[$i]->titulo);
    ?>
<h3><?=$fXML[0]->noticia[$i]->titulo?></h3>
<h4>Publicado el <?=$fXML[0]->noticia[$i]->fecha?></h4>
<?=$fXML[0]->noticia[$i]->cuerpo?>
    <?
}
?>
<!--
<strong>Gran lavado de cara<br/>
    08/11/2011</strong>
    <p>Un gran y evidente lavado de cara, como puede verse. Menos mareos por el fondo, secciones más bonitas, y el código algo más limpio.</p>
    <strong>Un nigromante revivió el proyecto<br/>
    27/7/2011</strong>
    <p>Al fin, tras sangre, sudor, lagrimas, y "HAAAAAAAAAAAI!" la traducción de Kirby's Adventure está terminada, y la web ha sufrido también algunos retoques. Disfrutadla, es una traducción muy, muy buena.</p>
    <p>Y eso viene a significar otra cosa: tal como dije en mi blog el Quest for Glory queda aparcado, y siendo así, solo un proyecto más se vislumbra en el horizonte, de momento: Fire Emblem Mistery of the Emblem. Y ese juego también será traducido, sin duda.</p>
    <strong>Even moar!<br/>
    31/3/2011</strong>
    <p>Más proyectos, más detallitos bonicos, más faltas de ortografia... en definitiva, ¡Más Klint Proguctions! Y mirad la traducción del Fragile Dreams, que nos ha quedado majisima :3</p>
    <strong>Kawaii~<br/>
    11/1/2011</strong>
    <p>Unas cuantas secciones, unas pocas imagenes en el menú izquierdo para hacerlo más bonito, y poco más. Quizas vaya haciendo algunas otras pequeñas mejoras.</p>
    <strong>Adecentando y tal<br/>
    19/11/2010</strong>
    <p>Le he dado una revisión bien maja y bonita a las secciones de la web. Algunas ya no son tan escuetas, estan mejor estructuradas o presentan más información. He dividido así mismo los proyectos en categorias bastante obvias, pero por si alguien se pierde, las aclaro: los proyectos terminados son aquellos... terminados, obviamente. Los que estan en curso son los que realizo actualmente cuando tengo tiempo, y no tienen que ser necesariamente al mismo tiempo. Por último las pruebas técnicas son simplemente juegos que miré internamente, le hice un par de pruebas y dejé una captura demostrándolo. Puede que sean proyectos futuros, puede que los haga en grupo dedicándome yo al hacking, o puede que no haga nada con ellos.</p>
    <p>También decir que por razones que escapan a toda lógica he sido elegido como una de las mejores paginas de traducción de videojuegos del 2010 por la pagina de <a href="http://www.ibidemgroup.es/traduccion/recursos/traducciones-videojuegos.html">Ibidem Group</a>. Esta ha sido una motivación importante para adecentar la web y actualizar el blog, y algo que sin duda ha sido posible gracias a... que en la última actualización puse sección de Contacto.</p>
    <p>Por último, no dejare de recomendar encarecidamente que le echéis un vistazo a la ya    terminada traducción del Tales of Destiny por parte de <a href="http://blog.tales-tra.com">Tales Translations</a>, a la izquierda tenéis el enlace a la pagina web de la traducción, ha sido mucho tiempo, pero creo que el resultado es para sentirnos algo orgullosos.</p>
-->