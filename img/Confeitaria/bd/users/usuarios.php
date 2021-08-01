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
    <link href="estilo/users.css" rel="stylesheet">
    <title>Usuários</title>
</head>
<body>

    <center>
    <legend class="titulo">Cadastros</legend>
    </center>
    <a href="../inicio.php"><input class="btn-voltar" type="button" Value="Home"></a>
    <br><br>

    <table border='2' align="center">
        <tr align="center">
            <td>Usuário</td>
        </tr>

<?php
    include "../conect.php";
    $dados = mysqli_query($sql, "SELECT id_usuario FROM usuarios");  

    while($linha = mysqli_fetch_array($dados)) {
        $id_usuario = $linha['id_usuario'];
    
        echo"
        <tr>
        <td>$id_usuario</td>";
        echo"<td class='deletar2'><a href='deletar.php?id_usuario=$id_usuario' class='deletar'>deletar</a></td>
        </tr>";
    }
    echo"</table>";    
?>

</body>
</html>