<?php
    include 'conexao.php';

    $id = $_POST['id'];
    $nameProduto = $_POST['nameProduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    
    $sql = "UPDATE `estoque` SET `nameProduto`='$nameProduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque= $id";

    $atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px;">

        <div style="text-align:center">
            <h3>Atualizado com Sucesso</h3>
            <br><br>  
            <a href="listar_produtos.php" class="btn btn-sm btn-warning">Voltar</a>    
        </div>
</div>