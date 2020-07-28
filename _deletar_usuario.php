<?php 

    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE idUsuario = $id";

    $deletar = mysqli_query($conexao,$sql);
    
    header("location: aprovar_usuario.php");
?>