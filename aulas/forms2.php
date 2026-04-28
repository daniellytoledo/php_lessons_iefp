<?php

require_once "forms.php";
require_once "../db/cidades.php";

if (isset($_POST['fnome'])) {
    echo "Obrigada por preencher! <br>";
    echo $_POST['fnome'];
} else {
    echo "Página aberta por navegação.";
}