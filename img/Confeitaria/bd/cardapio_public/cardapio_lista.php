<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo/cardapio.css" rel="stylesheet">
    <title>Cardápio</title>
</head>

<body>

<a href="../logar.php"><input type="button" Value="Home"></a>

    <center>
    <table border='1' align="center">
        <tr align="center">
            
            <td></td>
            <td>Produto</td>
            <td>Descrição</td>
            <td>Valor</td>
        </tr>
<?php
    include "../bd/conect.php";
    $dados = mysqli_query($sql, "SELECT cod_produto, nome_produto, descricao, valor, foto_produto FROM produtos");  
    while($linha = mysqli_fetch_array($dados)) {

        $cod_produto = $linha ['cod_produto'];
        $nome_produto = $linha ['nome_produto'];
        $descricao = $linha ['descricao'];
        $valor = $linha ['valor'];
        $foto = $linha ['foto_produto'];

        echo"
        <tr><td>
        <img src= ../bd/$foto width=256px height=165px></td>";
        echo"<td>$nome_produto</td>";
        echo"<td>$descricao</td>";
        echo"<td>$valor</td>
        </tr>";
    }
    echo"</table>";     
?>

</body>
</html>