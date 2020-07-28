<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="width:400px; margin-top:50px">
    <div style="text-align:right">
         <a href="index.php" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
         <center>
            <h4>Cadastro de usuário</h4>
        </center>
        <form action="_insert_usuario_externo.php" method="POST">
            <div class="form-group">
                <label>Nome do Usuário:</label>
                <input type="text" name="nomeUsuario" class="form-control" required autocomplete="off" placeholder="Seu nome">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="emailUsuario" class="form-control" required autocomplete="off" placeholder="Seu email">
            </div>            
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" id="txtSenha" name="senhaUsuario" class="form-control" required autocomplete="off" placeholder="Senha">
            </div>
            <div class="form-group">
                <label>Repetir Senha:</label>
                <input type="password" name="senhaUsuario2" class="form-control" required autocomplete="off" placeholder="Repita a senha" oninput="validaSenha(this)">
                <small>Precisa ser igual a senha digitada acima.</small>
            </div>
            
            <div style="text-align:right">
            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        
        </form>

    </div>

<script>
    function validaSenha(input){
        if(input.value != document.getElementById('txtSenha').value){
            input.setCustomValidity("Repita a senha corretamente");
        }else{
            input.setCustomValidity('');
        }

    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>