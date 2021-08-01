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
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css">
    <title >Cadastrar Produtos</title>
	<link href="estilo/inserir.css" rel="stylesheet">
</head>


        
<body>

                 <legend class="titulo"> Adicionar Produtos</legend>
                 <form method="post" action="c_inserir.php" enctype = "multipart/form-data">
<div class="div1">
                     <p>
                         <label class="legendas" for='nome_produto'>Produto:</label>
                         <input class="text-box-prod" type='text' name='nome_produto' placeholder='EX:Copo da Felicidade' required> 
                     </p>

                     <p>
                         <label class="legendas" for='valor'>Valor:</label>
                         <input class="text-box-val" type='text' name='valor' placeholder='EX:20,00' required>
                     </p>

                     <p>
                         <label class="legenda-desc" for='descricao'>Descrição:</label><br>
                         <textarea class="text-box-desc" name="descricao" rows="6" cols="30" style="resize:none" placeholder='Descrição do produto.' required maxlength="500"></textarea>
                       
                        </p>

</div>
                     <p>
<div class="div2">
                     <p>
                         <label class="legendas" for='foto_produto'>Imagem:</label><br>
                         <input id="img-input" class="foto" type='file' name='foto_produto' autofocus required accept = "image/*">
                         <div class="preview">
                         <img id="preview">
                                           
                     </p>
                        </div> 
     
                     <div class="div-btn">
                     <button class="btn-cad">Adicionar</button><br/><br/>
                    </div>
                <input class="btn-limpar" type="reset" value="X" id="reset">
                <a href="cardapio_lista.php"><input class="btn-listar" type="button" Value="Listar Produtos"></a>
                <a href="../inicio.php"><input class="btn-voltar" type="button" Value="Home"></a>
                </form>

                <script>
        function readImage() {
            if (this.files && this.files[0]) {
                var file = new FileReader();
                file.onload = function(e) {
                    document.getElementById("preview").src = e.target.result;
                };
                file.readAsDataURL(this.files[0]);
            }
        }
        document.getElementById("img-input").addEventListener("change", readImage, false);
    </script>
</div>

</body>

</html>