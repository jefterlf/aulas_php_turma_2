<?php
    function maiusculo($string) {
        $string = strtoupper ($string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "I", $string);
        $string = str_replace ("�", "U", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        $string = str_replace ("�", "�", $string);
        return $string;
    }
    $nome = "Jos� Ant�nio";
    $nome_m = maiusculo ($nome);
    echo "O nome do rapaz � $nome_m";
?>