<?php

require_once "funcoes.php";

if (isset($_POST['fnome'])) {
    echo "Recebi a informação! <br>";
    pre($_POST);
} else {
    echo "Não recebi a informação";
    pre($_POST);
}

