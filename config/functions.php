<?php

function isLogged(){
    if (empty($_SESSION['userid'])){
        return false;
    }
    return true;
}

function printMenu(){
    if (isLogged()) {
        echo file_get_contents('html/menu_in.html');
    }else {
        echo file_get_contents('html/menu_out.html');
    }
}

function printHtml($html){
        echo file_get_contents($html);
    }
?>