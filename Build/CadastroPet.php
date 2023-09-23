<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Login.php');
    }
    $logado = $_SESSION['email'];

    if(isset($_POST['submit'])){
        $nomeP = $_POST['nomeP'];
        $idade = $_POST['idade'];
        $nomeD = $_POST['nomeD'];
        $telefone = $_POST['telefone'];
    
        $result = mysqli_query($conexao, "INSERT INTO cadastrop(nomeP,idade,nomeD,telefone) VALUES ('$nomeP','$idade','$nomeD','$telefone')");  
    }

    $sql = "SELECT * FROM cadastrop ORDER BY  id DESC";
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pet</title>
    <link rel="stylesheet" type="text/css" href="CadastroPet.css">
    <link rel="shortcut icon" type="imagex/png" href="Icon.svg">
    <script src="CadastroPet.js" type="text/javascript"></script>
</head>
<body>
    <nav>
        <h3>Bem vindo(a) ao PetHelp!</h3>
    </nav>
    <header>
        <div id="logo">
            <a href="HomePage.php">
                <img src="Assets/PetHelp.png">
            </a>
        </div>
        <img src="Assets/Agendar.svg" height="20px" width="20px" id="icon">
        <a href="AgendarConsulta.php">Agendar Consulta</a>
        <img src="Assets/Cadastro.svg" height="20px" width="20px" id="icon">
        <a href="CadastroPet.php">Cadastro Pet</a>
        <img src="Assets/Perfil.svg" height="20px" width="20px" id="icon">
        <a href="Perfil.php">Perfil</a>
        <img src="Assets/Historico.svg" height="20px" width="20px" id="icon">
        <a href="">Histórico de Consultas</a>
        <a href="Login.php">Sair</a>
</header>
<section id="PerfilPet">
    <div id="Box">
        <div id="titulo">
            <h1>Cadastre o seu Pet</h1>
        </div>
        <form form action="CadastroPet.php" method="POST">
            <div id="NomeP">
                <h3>Nome do Pet:</h3>
                <input type="text" placeholder="Nome do Pet" name="nomeP">
            </div>
            <div id="IdadeP">
                <h3>Idade do Pet:</h3>
                <input type="number" placeholder="1" name="idade">
            </div>
            <div id="NomeD">
                <h3>Nome do Dono:</h3>
                <input type="text" placeholder="Nome do Dono" name="nomeD">
            </div>
            <div id="Telefone">
                <h3>Númro de Contato:</h3>
                <input type="text" placeholder="(xx) x xxxx-xxxx" name="telefone">
            </div>
            <div id="Cadastre">
                <input type="submit" placeholder="Cadastrar" value="Cadastrar" name="submit">
            </div>
        </form>
    </div>
</section>
<table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome do Pet</th>
        <th scope="col">Idade do Pet</th>
        <th scope="col">Nome do Dono</th>
        <th scope="col">Número de Contato</th>
        <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>" .$user_data['id']."</td>";
            echo"<td>" .$user_data['nomeP']."</td>";
            echo"<td>" .$user_data['idade']."</td>";
            echo"<td>" .$user_data['nomeD']."</td>";
            echo"<td>" .$user_data['telefone']."</td>";
            echo"<td>ações</td>";
            echo"</tr>";
        }
    ?>
  </tbody>
</table>
<section>
    <div id="BannerCadastro">
        <img src="Assets/CadastrarP.png" max-width="1817px">
    </div>
</section>
<footer>
    <ul id="Lista">
        <li id="Titulo"><b>Institucional</b></li>
        <li><p>Termos de Uso</p></li>
        <li><p>Política de Privacidade</p></li>
        <li><p>Contato</p></li>
        <li><p>Sobre PetHelp</p></li>
    </ul>
    <div id="Redes">
        <div id="Titulo">
            <b>Siga-nos</b>
        </div>
        <div id="Itens">
            <a href="" id="Red">
                <img src="Assets/Instagram.svg" height="30px" width="30px">
            </a>
            <a href="" id="Red">
                <img src="Assets/Facebook.svg" height="30px" width="30px">
            </a>
        </div>
    </div>
</footer>
</body>
</html>