<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="width:800px; margin-top:50px">
    <div style="text-align:right; margin-bottom: 20px">
    <a href="menu.php" class="btn btn-sm btn-secondary">Voltar para o menu</a>
    </div>
    <div style="text-align:center; margin-bottom:20px">
    <h3>Lista de Usuarios</h3>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `usuarios` WHERE status = 'Ativo'";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)){
                    $idUsuario =  $array['idUsuario'];
                    $nomeUsuario = $array['nomeUsuario'];
                    $emailUsuario = $array['emailUsuario'];
                    $nivelUsuario= $array['nivelUsuario'];
                    
                ?>
                    
            

                <tr>
                <td><?php echo $nomeUsuario ?></td>
                <td><?php echo $emailUsuario ?></td>
                <td><?php echo $nivelUsuario ?></td>
                <td><a class="btn btn-success btn-sm" href="editar_usuario.php?id=<?php echo $idUsuario ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-danger btn-sm" href="_deletar_usuario_aprov.php?id=<?php echo $idUsuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>