<?php 
if (!isset ($_SESSION)){
session_start();
}
if (!isset ($_SESSION['id_usuario_session']) and !isset ($_SESSION['senha_usuario_session'])){
 header("location:restrito.html");
 exit;
}
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <title>Home-ADM</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css">
	<link href="estilo/home.css" rel="stylesheet">
	
	<body>
	  <center class="lg-btn">

	        <a href="users/cadastrar.php"><input class="btn" type="button" Value="Cadastrar Usuários"></a><br><br>
            <a href="menu/cardapio.php"><input class="btn" type="button" Value="Adicionar Produtos"></a><br><br>
            <a href="menu/cardapio_lista.php"><input class="btn" type="button" Value="Cardápio"></a><br><br>
            <a href="sair.php"><input class="btn" type="button" Value="Sair"></a>
	  <div>
	     <img class="logo" src="estilo/img/logo.png">
	     <label class="legenda"> Bem-Vindo(a) </label><br><br>
		 <label class="nome-user">
		 <?php
         echo ucwords($_SESSION['id_usuario_session']);
         ?>
		 </label>
	  </div>
	  </center>
	</body>
	
</head>

</html>