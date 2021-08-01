<?php
if (!isset ($_SESSION)){
    session_start();
    }
    if (!isset ($_SESSION['id_usuario_session']) and !isset ($_SESSION['senha_usuario_session'])){
     header("location:../restrito.html");
     exit;
}

include "../conect.php"; 

$id_usuario = $_GET["id_usuario"];
    
    mysqli_query($sql, "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'");
    header("Location: usuarios.php");