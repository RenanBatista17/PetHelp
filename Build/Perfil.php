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

    $sql = "SELECT * FROM usuarios ORDER BY  id DESC";
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHelp</title>
    <link rel="stylesheet" type="text/css" href="Perfil.css">
    <link rel="shortcut icon" type="imagex/png" href="imagens/Icon.svg">
    <script src="Perfil.js" type="text/javascript"></script>
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
    <section id="BarraDeRolagem"></section>
    <div id="titulo">
        <h3>Perfi's de Usuários</h3>
    </div>
    <div id="Resultado">
        <table id="table">
            <thead id="Cabeca">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody id="Corpo">
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo"<td>" .$user_data['id']."</td>";
                        echo"<td>" .$user_data['nome']."</td>";
                        echo"<td>" .$user_data['email']."</td>";
                        echo"<td>" .$user_data['cpf']."</td>";
                        echo"<td>" .$user_data['senha']."</td>";
                        echo"<td>" .$user_data['tipo']."</td>";
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
    </div>
    <div id="BannerPerfil">
        <img src="imagens/PerfilM.png" max-width="1817px">
    </div>
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