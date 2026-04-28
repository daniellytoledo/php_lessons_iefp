<?php

if(isset($_POST['fnome'])){
    echo "
    <div style='background-color:#C90;height:100vh'>
        <h2 style='text-align':center;padding:20px;>Formulário Recebido com sucesso!</h2>
    </div>";
}else{
    echo "
    <div style='background-color:#E80;height:100vh'>
        <h2 style='text-align':center;padding:20px;>Preencha o formulário!</h2>
        <form method='POST' action='' style='background-color:#C90; padding:10px;'>
            <label for='nome'>Nome</label><br>
            <input type='text' id='nome' name='fnome' required>
            <br><br>
            <label for='morada'>Morada</label><br>
            <input type='text' id='morada' name='fmorada'>
            <br><br>
            <label for='telefone'>Telefone</label><br>
            <input type='tel' id='telefone' name='ftelefone'>
            <br><br>
            <input type='submit' name='enviar' value='Enviar'>
        </form>
    </div>";
}