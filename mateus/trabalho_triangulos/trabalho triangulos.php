<?php
    $ab = 5;
    $ac = 5;
    $bc = 5;
    $lados = "";
    
    if( $ab == $ac && $ac == $bc && $ab == $bc) {
        $lados = "Tri�ngulo Equil�tero!";
    }elseif( $ab == $ac ) {
        $lados = "Tri�ngulo Is�celes!";
    }elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
        $lados = "Tri�ngulo Escaleno!";
    }  
    