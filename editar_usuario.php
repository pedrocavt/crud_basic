<?php 

include 'conexao.php';

$id = $_GET['id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="width:400px; margin-top:50px">
    <div style="text-align:right">
    <a href="listar_usuario.php" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
         <center>
            <h4>Atualizar usuário</h4>
        </center>
        <form action="_atualizar_usuario.php" method="POST">
        <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `usuarios` WHERE idUsuario = $id";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)){
                    $idUsuario =  $array['idUsuario'];
                    $nomeUsuario = $array['nomeUsuario'];
                    $emailUsuario = $array['emailUsuario'];
                    $nivelUsuario= $array['nivelUsuario'];
                    
                ?>
            <div class="form-group">
                <label>Nome do Usuário:</label>
                <input type="text" name="nomeUsuario" class="form-control" required autocomplete="off"  value="<?php echo $nomeUsuario ?>">
                <input type="text" name="id" class="form-control" required autocomplete="off"  value="<?php echo $idUsuario ?>" style="display:none">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="emailUsuario" class="form-control" required autocomplete="off" value="<?php echo $emailUsuario ?>">
            </div>
            <div class="form-group">
                <label>Nível de acesso</label>
                <select name="nivelUsuario" class="form-control" value="<?php echo $nivelUsuario ?>">

                    <option value="1">Adminstrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>

                </select>
            </div>            
            
            <div style="text-align:right">
            <button type="submit" class="btn btn-sm btn-success">Atualizar</button>
            </div>
         <?php } ?>
        </form>

    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>