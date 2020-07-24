<?php

    include 'conexao.php';

    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO `categoria`(`categoria`) VALUES ('$categoria')";

    $inserir = mysqli_query($conexao, $sql);
    
?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
	
	<div style="margin-top:20px">
	
		<h4>Categoria adicionada com sucesso!</h4>	
	
	</div>
	
	<div style="padding-top: 20px;">


		<a href="index.php" class="btn btn-sm btn-secondary">Voltar para o menu</a>

		<a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary" style="float:right">Cadastrar nova categoria</a>

	</div>

</div>

