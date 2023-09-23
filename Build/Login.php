<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
    <script src="Login.js" type="text/javascript"></script>
    <link rel="shortcut icon" type="imagex/png" href="Icon.svg">
</head>
<body>
    <form action="verificar.php" method="POST">
        <img src="Assets/PetHelp.png">
        <h3>Login</h3>
        <input type="text" placeholder=" Gmail" id="gmail" name="email">
        <input type="password" placeholder=" Senha" id="senha"  name="senha">
        <div class="Opção">
            <input id="Cliente" name="tipo" value="1" type="radio">
            <label for="Cliente">Cliente</label>
          </div>
          <div class="Opção">
            <input id="Médico" name="tipo" value="0" type="radio">
            <label for="Médico">Médico</label>
          </div>
        <input type="submit" id="Botao" value="Entrar" name="submit">
        <div id="Cad">
          <a href="Cadastro.php">
            <p>Caso não tenha um login cadastre-se!</p>
          </a>
        </div>
    </form>
</body>
</html>