<?php
    $ab = 4;
    $ac = 5;
    $bc = 4;
    $lados = "";
    
    if( $ab == $ac && $ac == $bc && $ab == $bc) {
        $lados = "Tri�ngulo Equil�tero!";
    }elseif( $ab == $ac ) {
        $lados = "Tri�ngulo Is�celes!";
    }elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
        $lados = "Tri�ngulo Escaleno!";
    }  
    
    echo "<h2 align= center>$lados</h2>";
    
    $anga = 80;
    $angb = 60;
    $angc = 40;
    $angulo = "";
    
    if( $anga < 90 && $angb < 90 && $angc < 90 ) {
        $angulo = "Tri�ngulo Acut�ngulo!";
    }elseif( $anga > 90 && $angb > 90 && $angc > 90 ) {
        $angulo = "Tri�ngulo Obtus�ngulo!";
    }elseif( $anga == 90 && $angb == 90 && angc == 90 ){
        $angulo = "Tri�ngulo Reto!";
    }
    
    echo "<h2 align= center>$angulo</h2>";