<?php 
// echo "O script config.php está sendo acessado.";
    $dbhost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno){
    //     echo "Erro";
    // }
    // else{
    //     echo"Conexao realizada com sucesso";
    // }
?>