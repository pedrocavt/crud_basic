<?php 
    include 'conexao.php';

    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO `fornecedor`(`nome_fornecedor`) VALUES ('$fornecedor')";

    $inserir = mysqli_query($conexao, $sql)


?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
	
	<div style="margin-top:20px">
	
		<h4>Fornecedor adicionado com sucesso!</h4>	
	
	</div>
	
	<div style="padding-top: 20px;">


		<a href="menu.php" class="btn btn-sm btn-secondary">Voltar para o menu</a>

		<a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-primary" style="float:right">Cadastrar nova categoria</a>

	</div>

</div>