<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' and tipo = '$tipo'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['gmail']);
            unset($_SESSION['senha']);
            unset($_SESSION['tipo']);
            header('Location: Login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['tipo'] = $tipo;
            header('Location: HomePage.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: Login.php');
    }
?>