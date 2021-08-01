<?php
if (!isset ($_SESSION)){
    session_start();
    }
    if (!isset ($_SESSION['id_usuario_session']) and !isset ($_SESSION['senha_usuario_session'])){
     header("location:../restrito.html");
     exit;
}

include "../conect.php"; 

$cod_produto = $_GET["cod_produto"];
    
    mysqli_query($sql, "DELETE FROM produtos WHERE cod_produto = '$cod_produto'");
    header("Location: cardapio_lista.php");