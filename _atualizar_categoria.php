<?php
    include 'conexao.php';

    $id = $_POST['id'];
    $categoria = $_POST['categoria'];

    
    $sql = "UPDATE `categoria` SET `nome_categoria`='$categoria' WHERE id_categoria = $id";

    $atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px;">

        <div style="text-align:center">
            <h3>Atualizada com Sucesso</h3>
            <br><br>  
            <a href="listar_categoria.php" class="btn btn-sm btn-warning">Voltar</a>    
        </div>
</div>