<?php

function pre($valor, $die = false) {
    echo "<hr> <pre>";
    var_dump($valor); // usando só o var_dump porque se colocar echo ele retorna um valor string, mas o $valor não é string. então não precisa colocar o echo
    echo "</pre><hr>";
    if ($die) {
        die();
    }
}



?>