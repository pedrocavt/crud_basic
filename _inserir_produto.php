<?php

include 'conexao.php';

$nroProduto = $_POST['nroProduto']; //recebe o valor do atributo
$nameProduto = $_POST['nameProduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`( `nroProduto`, `nameProduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroProduto,'$nameProduto','$categoria',$quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
	
	<div style="margin-top:20px">
	
		<h4>Produto adicionado com sucesso!</h4>	
	
	</div>
	
	<div style="padding-top: 20px;">


		<a href="index.php" class="btn btn-sm btn-secondary">Voltar para o menu</a>

		<a href="index.php" role="button" class="btn btn-sm btn-primary" style="float:right">Cadastrar novo item</a>

	</div>

</div>

