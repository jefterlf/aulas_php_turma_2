
<body>
<?php
    $ab =  $_POST['ab'];
    $ac = $_POST['ac'];
    $bc = $_POST['bc'];
    $lados = "";
    
    if( $ab == $ac && $ac == $bc && $ab == $bc) {
        $lados = "Tri�ngulo Equil�tero!";
    }elseif( ($ab == $ac && $ab != $bc && $ac != $bc) || ( $ab == $bc && $ab != $ac && $bc != $ac ) || ( $ac == $bc && $ac != $ab && $bc != $ab ) ) {
        $lados = "Tri�ngulo Is�celes!";
    }elseif( $ab != $ac && $ac != $bc && $ab != $bc ) {
        $lados = "Tri�ngulo Escaleno!";
    }  
    
    echo "<h2 align= center>$lados</h2>";
    
    $anga = $_POST['anga'];
    $angb = $_POST['angb'];
    $angc = $_POST['angc'];
    $angulo = "";
    
    if( $anga < 90 && $angb < 90 && $angc < 90 ) {
        $angulo = "Tri�ngulo Acut�ngulo!";
    }elseif( $anga > 90 && $angb > 90 && $angc > 90 ) {
        $angulo = "Tri�ngulo Obtus�ngulo!";
    }elseif( $anga == 90 && $angb == 90 && $angc == 90 ){
        $angulo = "Tri�ngulo Reto!";
    }
    
    echo "<h2 align= center>$angulo</h2>";
    
?>
</boy>
</html>