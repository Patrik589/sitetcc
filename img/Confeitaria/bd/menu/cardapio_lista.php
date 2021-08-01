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
    <title>Cardápio</title>
</head>

<body>

<a href="cardapio.php"><input type="button" Value="Adicionar Produto"></a>
<a href="../inicio.php"><input type="button" Value="Home"></a>

    <center>
    <table border='1' align="center">
        <tr align="center">
            
            <td></td>
            <td>Produto</td>
            <td>Descrição</td>
            <td>Valor</td>
        </tr>
<?php
    include "../conect.php";
    $dados = mysqli_query($sql, "SELECT cod_produto, nome_produto, descricao, valor, foto_produto FROM produtos");  
    while($linha = mysqli_fetch_array($dados)) {

        $cod_produto = $linha ['cod_produto'];
        $nome_produto = $linha ['nome_produto'];
        $descricao = $linha ['descricao'];
        $valor = $linha ['valor'];
        $foto = $linha ['foto_produto'];

        echo"
        <tr><td>
        <img src= ../$foto width=256px height=165px></td>";
        echo"<td>$nome_produto</td>";
        echo"<td>$descricao</td>";
        echo"<td>$valor</td>";
        echo"<td><a href='deletar.php?cod_produto=$cod_produto'>Deletar</a></td>
        </tr>";
    }
    echo"</table>";     
?>

</body>
</html>