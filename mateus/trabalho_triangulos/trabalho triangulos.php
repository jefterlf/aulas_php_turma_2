<?php
    $ab = 4;
    $ac = 5;
    $bc = 4;
    $lados = "";
    
    if( $ab == $ac && $ac == $bc && $ab == $bc) {
        $lados = "Triângulo Equilátero!";
    }elseif( ($ab == $ac && $ab != $bc && $ac != $bc) || ( $ab == $bc && $ab != $ac && $bc != $ac ) || ( $ac == $bc && $ac != $ab && $bc != $ab ) ) {
        $lados = "Triângulo Isóceles!";
    }elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
        $lados = "Triângulo Escaleno!";
    }  
    
    echo "<h2 align= center>$lados</h2>";
    
    $anga = 90;
    $angb = 90;
    $angc = 90;
    $angulo = "";
    
    if( $anga < 90 && $angb < 90 && $angc < 90 ) {
        $angulo = "Triângulo Acutângulo!";
    }elseif( $anga > 90 && $angb > 90 && $angc > 90 ) {
        $angulo = "Triângulo Obtusângulo!";
    }elseif( $anga == 90 && $angb == 90 && $angc == 90 ){
        $angulo = "Triângulo Reto!";
    }
    
    echo "<h2 align= center>$angulo</h2>";