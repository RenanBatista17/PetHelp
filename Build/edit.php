
<?php
    // session_start();
    include_once('config.php');
    // print_r($_SESSION);
    // if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    // {
    //     unset($_SESSION['email']);
    //     unset($_SESSION['senha']);
    //     header('Location: Login.php');
    // }
    // $logado = $_SESSION['email'];

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios where id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $cpf = $user_data['cpf'];
                $senha = $user_data['senha'];
                $tipo = $user_data['tipo'];
            }
        }
        else{
            header('Location: Cadastro.php');
        }
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
    <form action="SalvarEdição.php" method="POST">
        <img src="Assets/PetHelp.png">
        <h3>Cadastre-se</h3>
        <div id="CadastroGeral">
            <h4>Nome:</h4>
            <input type="text" placeholder=" nome" id="nome" name="nome" value="<?php echo $nome ?>">
            <h4>G-mail:</h4>
            <input type="text" placeholder=" exemplo@gmail.com" id="gmail" name="email" value="<?php echo $email ?>">
            <h4>CPF:</h4>
            <input type="text" placeholder=" 000.000.000.00" id="cpf" name="cpf" value="<?php echo $cpf ?>">
            <h4>Senha: </h4>
            <input type="password" placeholder=" Senha" id="senha" name="senha" value="<?php echo $senha ?>">
        </div>
        <div id="check">
            <div class="Opção">
                <input id="Cliente" name="Pergunta" value="0" type="radio" <?php echo ($tipo == '0') ? 'checked' : '' ?>>
                <label for="Cliente">Cliente</label>
            </div>
            <div class="Opção">
                <input id="Médico" name="Pergunta" value="1" type="radio" <?php echo ($tipo == '1') ? 'checked' : '' ?>>
                <label for="Médico">Médico</label>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="update" id="Botao">
        <div id="Cad">
        <a href="Login.php">
            <p>Caso já possua um login clique aqui</p>
        </a>
        </div>
    </form>
</body>
</html>