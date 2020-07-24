<?php 

include 'conexao.php';

$id = $_GET['id'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualizar Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css" >
	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}

		#button{
			background-color: #800909;
			color: #fff;
			border: 2px solid black;
			border-radius: 8px;
		}

	</style>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Atualização de Cadastro</h4>
		<form action="_atualizar_produto.php" method="POST" style="margin-top: 20px">
            <?php

            $sql = "SELECT * FROM `estoque` WHERE  id_estoque = $id";
            
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $id_estoque = $array['id_estoque'];
                $nroProduto = $array['nroProduto'];
                $nameProduto = $array['nameProduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            ?>
            
            <div class="form-group">
			    <label>Nro Produto</label>
			    <input type="number" class="form-control" name="nroProduto" value="<?php echo $nroProduto ?>" disabled>
				<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none">
		  	</div>
		  	<div class="form-group">
			    <label>Nome Produto</label>
			    <input type="text" class="form-control" name="nameProduto" value="<?php echo $nameProduto ?>">
		  	</div>
		  	<div class="form-group">
			    <label >Categoria</label>
			    <select class="form-control" name="categoria" >
			      <option>Periféricos</option>
			      <option>Hardware</option>
			      <option>Software</option>
			      <option>Celulares</option>
			    </select>
			</div>
		  	<div class="form-group">
			    <label>Quantidade</label>
			    <input type="number" class="form-control"  name="quantidade"value="<?php echo $quantidade ?>">
		  	</div>
		  	<div class="form-group">
			    <label >Fornecedor</label>
			    <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
			      <option>Fornecedor A</option>
			      <option>Fornecedor B</option>
			      <option>Fornecedor C</option>
			    </select>
			</div>
			<div>
			<a href="listar_produtos.php" class="btn btn-sm btn-secondary">Voltar</a>
			<button type="submit" id="button" class="btn btn-sm" style="float: right;">Atualizar</button>
			</div>
            <?php } ?>
		</form>
	  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>