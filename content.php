<?php
if(!isset($_GET["pg"])){
    include "pages/welcome.php";
}else{
    $page = "pages/". basename($_GET["pg"]).".php";
    if(file_exists($page) && $_GET["pg"] != "slides"){
        include $page;
    } else {
        include "pages/error.php";
    }
}
