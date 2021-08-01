<?php 
if (!isset ($_SESSION)){
session_start();
}
if (!isset ($_SESSION['id_usuario_session']) and !isset ($_SESSION['senha_usuario_session'])){
 header("location:../restrito.html");
 exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo/cad-user.css" rel="stylesheet">
    <title>Cadastrar Usuários</title>
</head>
<body>
<legend class="titulo"> Cadastrar Usuário</legend>

            <div class="div1">
            
            <form method="post" action="inserir.php">

                <p>
                    <label class="legendas" for='id_usuario'>Usuário:</label>
                    <input class="text-box-usuario" type='text' name='id_usuario' required>
                </p>
                
                <p>
                    <label class="legendas" for='senha_usuario'>Senha:</label>
                    <input  class="text-box-senha" type='password' name='senha_usuario' required minlength="4" >
                </p>

            </div>
            <div class="btn">
                <a href="usuarios.php"><input class="btn-listar" type="button" Value="Listar Usuários"></a>
                <a href="../inicio.php"><input class="btn-voltar" type="button" Value="Home"></a>
            </div>

                <button class="btn-cad">Cadastrar</button><br/><br/>
                <input class="btn-limpar" type="reset" value="X" id="reset">
            </form>
</body>
</html>