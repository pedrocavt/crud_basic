<?php 
    include 'conexao.php';
    include 'script/password.php';

    $usuario = $_POST['usuario'];
    $senhaUsuario = $_POST['senha'];

    $sql = "SELECT emailUsuario, senhaUsuario, status FROM usuarios WHERE emailUsuario = '$usuario'";
    $buscar = mysqli_query($conexao, $sql);

    $total = mysqli_num_rows($buscar);

    while($array = mysqli_fetch_array($buscar)){

        $senha = $array['senhaUsuario'];
        $status = $array['status'];


        $senhaDecodificada = sha1($senhaUsuario);


        if($total > 0){
            if($senhaDecodificada == $senha && $status == 'Ativo'){

                session_start();
                $_SESSION['usuario'] = $usuario;

                header("location: menu.php");

            }else{
                header("location: erro1.php");
            }
        }else{
            header("localtion: erro.php");
        }

    }


?>