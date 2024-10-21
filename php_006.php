<?php
    // define("CIUDAD", "Madrid"); //La variable ciudad tendrá el valor Madrid.
    if(defined(  "CIUDAD")){
        print("La ciudad es:" . CIUDAD);
    } else{
        print("La estructura no está definida");
    }
?>