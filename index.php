<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scaleblo=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container" style="width:350px; margin-top:100px; border: 2px solid #0048ff9c; border-radius:15px; padding:15px; box-shadow: 10px 7px 9px -1px rgba(0,72,255,0.36);
";
">
    <center>
        <img src="img/cadeado.png" alt="cadeado" width="125px" height="125px">
    </center>
    <form action="">
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="usuario" class="form-control" placeholder="Senha" autocomplete="off" required>
        </div>
        <div style="text-align:right">
        <button type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>
    </form>
</div>

<center style="margin-top:10px">
    <p>Você não possui cadastro? Clique<a href="cadastro_usuario_externo.php"> aqui</a></p>
</center>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>