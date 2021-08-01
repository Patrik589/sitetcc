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
<title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
<?php
include '../conect.php';

$id_usuario = "$_POST[id_usuario]";
$senha_usuario = "$_POST[senha_usuario]";


$salvar = $sql->query("SELECT * FROM usuarios WHERE id_usuario = '$id_usuario' ");
    $check = mysqli_num_rows($salvar);

    if($check == 1){
    echo"<h3>Este usuário já está cadastrado!</h3>";
    }
    
    else{  
      $sql->query("INSERT INTO usuarios
			VALUES ('$id_usuario','$senha_usuario')");
            echo "<h3>Salvo com sucesso!</h3>";
    }
?>

<a href="cadastrar.php"><input type="button" Value="Voltar"></a>

 </body>
 </html>