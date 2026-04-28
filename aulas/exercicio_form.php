<?php
require_once "funcoes.php";

if (isset($_POST['fnome'])): ?>
    <div style='background-color:#3c8e9d; height:100vh'>
        <h2 style='text-align:center;padding:20px;'>Formulário Recebido com sucesso!</h2>
        <?php pre($_POST) // o pre($_POST) é pra mostrar o resultado array, o que foi recebido no post 
        ?>
    </div>

<?php else: ?>

    <div style='background-color:#1f6bb2; height:100vh'>

        Exercício: <br>

        <h2 style='text-align:center;padding:20px; color: white;'>Preencha o formulário!</h2>

        <form method='POST' action='' style='background-color:#3c8e9d; padding:10px;'>

            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="fnome" required><br><br>

            <label for="estilo">Estilo Literário:</label><br>
            <select name="festilos" id="estilos" required>
                <option value="opcao" selected disabled hidden>Escolha uma opção</option>
                <option value="romance">Romance</option>
                <option value="suspense">Suspense</option>
                <option value="comédia">Comédia</option>
            </select>
            <br><br>

            Sexo: <br>
            <label for="sexo">M</label>
            <input type="radio" value="m" id="m" name="fsexo"><br>
            <label for="sexo">F</label>
            <input type="radio" value="f" id="f" name="fsexo">
            <br><br>

            <label for="sobresi">Sobre si:</label><br>
            <textarea name="fsobre" id="sobresi"></textarea>
            <br><br>

            <label for="data">Data de Nascimento:</label><br>
            <input type="date" value="date" id="data" name="fdata">

            <br><br>
            <input type='submit' name='enviar' value='Enviar'>

        </form>
    </div>

<?php endif ?>