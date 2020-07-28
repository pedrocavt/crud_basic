<?php 
    include 'conexao.php';

    $id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Categoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="_atualizar_categoria.php" class="container" style="width:500px; margin-top:50px">
   <?php 
    $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
   
    $buscar2 = mysqli_query($conexao, $sql);

    while($array2 = mysqli_fetch_array($buscar2)){
        $id_categoria = $array2['id_categoria'];
        $categoria = $array2['nome_categoria'];
   ?>

    <div style="text-align:right; margin-bottom:10px;">
        <a href="menu.php" class="btn btn-sm btn-secondary" >Voltar para o menu</a>    
    </div>
    <h3>Editar uma categoria</h3>
  <div class="form-group">
    <label>Categoria:</label>
    <input type="text" class="form-control" name="categoria" placeholder="Escreva a categoria" value="<?php echo $categoria ?>">
    <input type="text" class="form-control" name="id" placeholder="Escreva a categoria" value="<?php echo $id ?>" style="display:none">
  </div>


  <div>
  <button type="submit" class="btn btn-primary" style="float:right">Atualizar</button>
    <?php } ?>
  </div>
</form>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>