<?php
    $connect = new mysqli("localhost","root","","autokereskedes","3306");

    if ($connect -> connect_errno){
        die("A kapcsolat felépítése nem sikerült");
    }
    if(!$connect -> set_charset("utf8")){
        echo "Karakterkódolási hiba!";
    }