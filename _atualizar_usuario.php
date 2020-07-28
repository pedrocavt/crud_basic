<?php 
    include 'conexao.php';

    $id = $_POST['id'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $nivelUsuario = $_POST['nivelUsuario'];

    $sql = "UPDATE `usuarios` SET `nomeUsuario`='$nomeUsuario',`emailUsuario`='$emailUsuario',`nivelUsuario`= $nivelUsuario WHERE idUsuario = $id";


    $atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px;">

        <div style="text-align:center">
            <h3>Atualizado com Sucesso</h3>
            <br><br>  
            <a href="listar_usuario.php" class="btn btn-sm btn-warning">Voltar</a>    
        </div>
</div>