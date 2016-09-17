<?
/************************
 * De momento, esto se va
 * a quedar "dummied out"
 ************************//*
$fXML = new SimpleXMLElement("projects.xml",NULL,TRUE);
$propios = $fXML->xpath("/proyectos/proyecto [@type='P']");
$colabor = $fXML->xpath("/proyectos/proyecto [@type='C']");
for( $i=0; $i <= sizeof($propios)-1; $i++){   
    ?>
<li class="<?=$propios[$i]['class']?>"><a href="index.php?pg=pry-<?=$propios[$i]['id']?>"><?=$propios[$i]?></a></li>
    <?
}
?>
<li class='lihr'><hr/></li>    
<?
for( $i=0; $i <= sizeof($colabor)-1; $i++){   
    if($colabor[$i]['url'] == "none"){
    ?>
<li class="<?=$colabor[$i]['class']?>"><a href="index.php?pg=pry-<?=$colabor[$i]['id']?>"><?=$colabor[$i]?></a></li>
    <?
    } else {
    ?>
<li class="<?=$colabor[$i]['class']?>"><a href="<?=$colabor[$i]['url']?>"><?=$colabor[$i]?></a></li>
    <?    
    }
}*/
?>
