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
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: Perfil.php');
?>