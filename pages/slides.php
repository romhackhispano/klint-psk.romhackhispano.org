<?php
/*
<div id="slidesWrapper">
    <div id="slides">
        <? 
        $urlpag = $_GET["pg"];
        for ($i=1; $i<=$numImg; $i++){
        ?>
        <img src="img/Capturas/<?=$urlpag?>-<?=$i?>.png" alt="<?=$urlpag?>-<?=$i?>" class="pry-img"/>
        <?}
        ?>
    </div>
</div>
 */
?>
<div id="slidesWrapper">
    <ul class="bjqs">
        <? 
        $urlpag = $_GET["pg"];
        for ($i=1; $i<=$numImg; $i++){
        ?>
        <li><img src="img/Capturas/<?=$urlpag?>-<?=$i?>.png" alt="<?=$urlpag?>-<?=$i?>" class="pry-img"/></li>
        <?}
        ?>
    </ul>
</div>
<script>
/*
$(function() {
$('#slides').slidesjs({
width: 300,
height: 300,
active: false
});
});*/
$(function() {
    $('#slidesWrapper').bjqs({
        'height'        : 300,
        'width'         : 300,
        'nexttext'      : '>>', // Text for 'next' button (can use HTML)
        'prevtext'      : '<<', // Text for 'previous' button (can use HTML)
        'showcontrols'  : true, // show next and prev controls
        'animtype'      : 'slide' // accepts 'fade' or 'slide'
    });
});
</script>