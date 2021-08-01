<?php 
if (!isset ($_SESSION)){
session_start();
}
if (!isset ($_SESSION['id_usuario_session']) and !isset ($_SESSION['senha_usuario_session'])){
 header("location:../restrito.html");
 exit;
}
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<title>Cardápio</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>

<?php
include '../conect.php';

$nome_produto = "$_POST[nome_produto]";
$descricao = "$_POST[descricao]";
$valor = "$_POST[valor]";
$uploaddir = "img/produtos/"; 
$arquivo = $_FILES["foto_produto"]["name"];
$foto_produto = time() . '.jpg';


        if (move_uploaded_file($_FILES['foto_produto']['tmp_name'], '../' . $uploaddir . $foto_produto)) { 
           $uploadfile = $uploaddir . $foto_produto;
           $sql->query("INSERT INTO produtos
           VALUES (NULL, '$nome_produto','$descricao','$valor','$uploadfile')");
           echo  "<h3>Salvo com sucesso!</h3>";

       } else { 
           echo "Não foi possível concluir o upload da imagem ou nenhum arquivo foi selecionado."; 
}
?>

</body>
</html>