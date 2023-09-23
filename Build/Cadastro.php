<?php

if(isset($_POST['submit'])){
    // print_r($_POST['nome']);
    // print_r('<br>');
    // print_r($_POST['gmail']);
    // print_r('<br>');
    // print_r($_POST['cpf']);
    // print_r('<br>');
    // print_r($_POST['senha']);
    // print_r('<br>');
    // print_r($_POST['Pergunta']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['gmail'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $tipo = $_POST['Pergunta'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,cpf,senha,tipo) VALUES ('$nome','$email','$cpf','$senha','$tipo')");
    header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="Cadastro.css">
    <script src="Login.js" type="text/javascript"></script>
    <link rel="shortcut icon" type="imagex/png" href="Icon.svg">
</head>
<body>
    <form action="Cadastro.php" method="POST">
        <img src="Assets/PetHelp.png">
        <h3>Cadastre-se</h3>
        <div id="CadastroGeral">
            <h4>Nome:</h4>
            <input type="text" placeholder=" nome" id="nome" name="nome">
            <h4>G-mail:</h4>
            <input type="text" placeholder=" exemplo@gmail.com" id="gmail" name="gmail">
            <h4>CPF:</h4>
            <input type="text" placeholder=" 000.000.000.00" id="cpf" name="cpf">
            <h4>Senha: </h4>
            <input type="password" placeholder=" Senha" id="senha" name="senha">
        </div>
        <div id="check">
            <div class="Opção">
                <input id="Cliente" name="Pergunta" value="1" type="radio" checked>
                <label for="Cliente">Cliente</label>
            </div>
            <div class="Opção">
                <input id="Médico" name="Pergunta" value="0" type="radio">
                <label for="Médico">Médico</label>
            </div>
        </div>
        <input type="submit" name="submit" id="Botao">
        <!-- <div id="CMed">
            <h4>CRMV:</h4>
            <input type="number" placeholder="Número">
            <h4>Nome:</h4>
            <input type="text" placeholder=" Nome Completo">
        </div>
        <div id="CCli">
            <h4>Nome:</h4>
            <input type="text" placeholder=" Nome Completo">
        </div> -->
        <div id="Cad">
        <a href="Login.php">
            <p>Caso já possua um login clique aqui</p>
        </a>
        </div>
    </form>
</body>
</html>