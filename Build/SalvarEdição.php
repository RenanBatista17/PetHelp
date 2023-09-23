<?php
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', cpf='$cpf', senha='$senha', tipo='$tipo' WHERE id='$id'";
        
        $result = $conexao->query($sqlUpdate);
    }
    header('Location: Perfil.php');
?>