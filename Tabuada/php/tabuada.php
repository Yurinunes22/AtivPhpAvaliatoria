<?php
function calcularnumero() { 
    $numero = 0;
    $cont = 0;
    do {
    $numero = $numero*$cont;
    $cont = $cont++ ;
    } while ($cont <= 10);
}

var_dump(calcularnumero());