<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<title>Login</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>

 <center>

<?php
session_start();

 include '../conect.php';

 $id_usuario = "$_POST[id_usuario]";
 $senha_usuario = "$_POST[senha_usuario]";
 
 $logar = $sql->query("SELECT id_usuario FROM usuarios where id_usuario like '$id_usuario' and senha_usuario like '$senha_usuario'");
 $check = mysqli_num_rows($logar);

if($check == 1){
$_SESSION['id_usuario_session'] = $id_usuario;
$_SESSION['senha_usuario_session'] = $senha_usuario;

      header('Location:../inicio.php');
    } 
 
    else{

  unset($_SESSION['id_usuario_session']);
  unset($_SESSION['senha_usuario_session']);

      echo "Algum dos seus dados pode estar incorreto ou você não tem um cadastro! Você só pode ser cadastrado por um administrador da confeitaria.";
    }
?>

</body>
</html>