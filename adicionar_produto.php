<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
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
		<h4>Formulário de Cadastro</h4>
		<form action="_inserir_produto.php" method="POST" style="margin-top: 20px">
			<div class="form-group">
			    <label>Nro Produto</label>
			    <input type="number" class="form-control" name="nroProduto" placeholder="Insira o número do produto" required>
		  	</div>
		  	<div class="form-group">
			    <label>Nome Produto</label>
			    <input type="text" class="form-control" name="nameProduto" placeholder="Insira o nome do produto">
		  	</div>
		  	<div class="form-group">
			    <label >Categoria</label>
			    <select class="form-control" name="categoria">
				<?php 
					include 'conexao.php';
					$sql = "SELECT * FROM categoria order by nome_categoria ASC ";
					$buscar = mysqli_query($conexao, $sql);

					while($array = mysqli_fetch_array($buscar)){
						$id_categoria = $array['id_categoria'];
						$categoria = $array['nome_categoria'];
					?>
					
					<option><?php echo $categoria ?></option>
				
					<?php	} ?>
				</select>
			</div>
		  	<div class="form-group">
			    <label>Quantidade</label>
			    <input type="number" class="form-control"  name="quantidade"placeholder="Insira a quantidade do produto">
		  	</div>
		  	<div class="form-group">
			    <label >Fornecedor</label>
			    <select class="form-control" name="fornecedor">
				<?php 
				include 'conexao.php';
				$sql = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
				$buscar2 = mysqli_query($conexao, $sql);

				while($array2 = mysqli_fetch_array($buscar2)){
					$id_fornecedor = $array2['id_fornecedor'];
					$fornecedor = $array2['nome_fornecedor'];
					
					?>

			      	<option><?php echo $fornecedor ?></option>

					<?php } ?>
			    </select>
			</div>
			<div>
			<div>
			<a href="index.php" class="btn btn-sm btn-secondary">Voltar</a>
			<button type="submit" id="button" class="btn btn-sm" style="float:right">Cadastrar</button>
			</div>
		</form>
	  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>