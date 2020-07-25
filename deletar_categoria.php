<?php
    include 'conexao.php';

    $id = $_GET['id'];

    $sql= "DELETE FROM `categoria` WHERE id_categoria = $id";

    $deletar = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px;">

        <div style="text-align:center">
            <h3>Deletado com Sucesso</h3>
            <br><br>  
            <a href="listar_categoria.php" class="btn btn-sm btn-warning">Voltar</a>    
        </div>
</div>