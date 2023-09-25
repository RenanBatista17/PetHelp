<?php

    include_once('config.php');


    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM agendamentos where id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM agendamentos WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: AgendarConsulta.php');
?>