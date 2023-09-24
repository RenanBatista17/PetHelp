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
    <link rel="shortcut icon" type="imagex/png" href="imagens/Icon.svg">
    <script src="CadastroPet.js" type="text/javascript"></script>
</head>
<body>
    <nav>
        <h3>Bem vindo(a) ao PetHelp!</h3>
    </nav>
    <header>
        <div id="logo">
            <a href="HomePage.php">
                <img src="imagens/PetHelp.png">
            </a>
        </div>
        <img src="imagens/Agendar.svg" height="20px" width="20px" id="icon">
        <a href="AgendarConsulta.php">Agendar Consulta</a>
        <img src="imagens/Cadastro.svg" height="20px" width="20px" id="icon">
        <a href="CadastroPet.php">Cadastro Pet</a>
        <img src="imagens/Perfil.svg" height="20px" width="20px" id="icon">
        <a href="Perfil.php">Perfil</a>
        <img src="imagens/Historico.svg" height="20px" width="20px" id="icon">
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
            echo"<td>
            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
            </a> 
            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                </svg>
            </a>
            </td>";
            echo"</tr>";
        }
    ?>
  </tbody>
</table>
<section>
    <div id="BannerCadastro">
        <img src="imagens/CadastrarP.png" max-width="1817px">
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
                <img src="imagens/Instagram.svg" height="30px" width="30px">
            </a>
            <a href="" id="Red">
                <img src="imagens/Facebook.svg" height="30px" width="30px">
            </a>
        </div>
    </div>
</footer>
</body>
</html>