<?php

    include 'conexao.php';

    $id = $_GET['id'];
    $nivel = $_GET['nivelUsuario'];

    if($nivel == 1){

         $sql = "UPDATE usuarios SET status = 'Ativo', nivelUsuario = 1 WHERE idUsuario = $id";
         $atualizacao = mysqli_query($conexao,$sql);
         
         echo "ADMINISTRADOR APROVADO";
    }
    if($nivel == 2){

        $sql = "UPDATE usuarios SET status = 'Ativo', nivelUsuario = 2 WHERE idUsuario = $id";
        $atualizacao = mysqli_query($conexao,$sql);
        echo "FUNCIONARIO APROVADO";
    }
    if($nivel == 3){

    $sql = "UPDATE usuarios SET status = 'Ativo', nivelUsuario = 3 WHERE idUsuario = $id";
    $atualizacao = mysqli_query($conexao,$sql);
    echo "CONFERENTE APROVADO";
    }

    header("location: aprovar_usuario.php");

?>