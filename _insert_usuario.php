<?php 
    include 'conexao.php';
    include 'script/password.php';

    $nomeUsuario = $_POST['nomeUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    $nivelUsuario = $_POST['nivelUsuario'];
    $status = "Ativo";

    $sql = "INSERT INTO `usuarios` (`nomeUsuario`, `emailUsuario`, `senhaUsuario`, `nivelUsuario`, `status`) values ('$nomeUsuario','$emailUsuario', sha1('$senhaUsuario'), $nivelUsuario, '$status')";

    $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
	
	<div style="margin-top:20px">
	
		<h4>Usuário adicionada com sucesso!</h4>	
	
	</div>
	
	<div style="padding-top: 20px;">


		<a href="index.php" class="btn btn-sm btn-secondary">Voltar para o menu</a>

		<a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary" style="float:right">Novo cadastro</a>

	</div>

</div>