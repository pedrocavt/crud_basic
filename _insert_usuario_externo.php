<?php 
    include 'conexao.php';
    include 'script/password.php';

    $nomeUsuario = $_POST['nomeUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    // $nivelUsuario = $_POST['nivelUsuario'];
    $status = "Inativo";

    $sql = "INSERT INTO `usuarios` (`nomeUsuario`, `emailUsuario`, `senhaUsuario`, `status`) values ('$nomeUsuario','$emailUsuario', sha1('$senhaUsuario'), '$status')";

    $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css" >
<div class="container" style="width:400px">
	
	<div style="margin-top:20px;text-align:center" >
	
		<h4>Usuário adicionada com sucesso, esperando aprovação!</h4>	
	
	</div>
	
	<div style="padding-top: 20px; text-align: center">


		<a href="index.php" class="btn btn-sm btn-primary">Voltar</a>


	</div>

</div>