<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php 

session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
  header("location: index.php");
};

include 'conexao.php';

$sql = "SELECT `nivelUsuario` FROM `usuarios` WHERE emailUsuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($buscar);
$nivel = $array['nivelUsuario'];

?>    

  <div class="container" style="margin-top:10px">

    <div style="text-align:right; margin-bottom:20px">
      <a href="index.php" class="btn btn-danger">Sair</a>  
    </div>

    <div class="row">
<?php 
if (($nivel == 1) || ($nivel == 2)){

?>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Produto</h5>
            <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
            <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
          </div>
        </div>
      </div>
<?php } ?>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Produto</h5>
            <p class="card-text">Visualizar, editar e excluir os produtos.</p>
            <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container" style="margin-top:30px">
    
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Categoria</h5>
            <p class="card-text">Opção para adicionar categoria de produtos.</p>
            <div>
            <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar categoria</a>
            <a href="listar_categoria.php" class="btn btn-secondary" style="float:right">Editar categoria</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar fornecedor</h5>
            <p class="card-text">Opção para adicionar fornecedores.</p>
            <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar fornecedor</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container" style="margin-top:30px">
    
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Usuários</h5>
            <p class="card-text">Aprovação, lista de usuários e cadastradar.</p>
            <div style="display:grid; grid-template-columns: 1fr 1fr 1fr;">
              <div>
                <a href="aprovar_usuario.php" class="btn btn-primary" >Aprovar</a>
              </div>
              <div style="text-align:center">
                <a href="listar_usuario.php" class="btn btn-secondary" >Lista de usuários</a>
              </div>
              <div style="text-align:right">
                <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

  </div>

   

 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>