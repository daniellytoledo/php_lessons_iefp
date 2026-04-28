<!-- misturando php com html: -->
<?php

require_once "funcoes.php";

 if(isset($_POST['fnome'])): ?>    
    <div style='background-color:#3c8e9d; height:100vh'>
        <h2 style='text-align:center;padding:20px;'>Formulário Recebido com sucesso!</h2>
        <?php pre($_POST) // o pre($_POST) é pra mostrar o resultado array, o que foi recebido no post ?> 
    </div>

<?php else: ?>
    <div style='background-color:#1f6bb2; height:100vh'>
        <h2 style='text-align:center;padding:20px;'>Preencha o formulário!</h2>
        <form method='POST' action='' style='background-color:#3c8e9d; padding:10px;'>

            <label for='nome'>Nome:</label><br>
            <input type='text' id='nome' name='fnome' required>
            <br><br>

            <label for="morada">Sua morada:</label><br>
            <textarea name="fmorada" id="morada"></textarea> <!-- textarea porque tem um campo maior para preencher que pode ser configurado no CSS -->
            <br><br>

            <label for='telefone'>Telefone:</label><br>
            <input type='tel' id='telefone' name='ftelefone'>
            <br><br>

            <label for="cargo">Canditado do cargo</label><br>
            <select name="fcargo" id="cargo" required>
                <option value="opcao" selected disabled>Escolha uma opção</option> <!-- selected pra ficar essa mensagem na caixinha e disabled para desabilitar essa mensagem como uma real opção a ser escolhida -->
                <option value="comercial">Técnico Comercial</option>
                <option value="front">Técnico Front-End</option>
                <option value="back">Técnico Back-End</option>
            </select>
            <br><br>

            Bate bem da bola?<br>
            <label for="bbdb">Claro que sim!</label>
            <input type="radio" value="1" id="bbdb" name="fbbdb"><br>
            <label for="nbbdb">Claro que não!</label>
            <input type="radio" value="0" id="nbbdb" name="fbbdb">

            <br><br>
            <input type='submit' name='enviar' value='Enviar'>
        </form>
    </div>";

    
<?php endif?>