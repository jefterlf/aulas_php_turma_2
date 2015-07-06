<?php
    $ab = 5;
    $ac = 5;
    $bc = 5;
    $lados = "";
    
    if( $ab == $ac && $ac == $bc && $ab == $bc) {
        $lados = "Triângulo Equilátero!";
    }elseif( $ab == $ac ) {
        $lados = "Triângulo Isóceles!";
    }elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
        $lados = "Triângulo Escaleno!";
    }  
    