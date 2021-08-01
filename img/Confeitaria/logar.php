<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <title>Acesso do administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
   
<center>
   <body class="fundo">

       <link href="css/login.css" rel="stylesheet">
	   
       
            <div class="titulo"> Login </div>
			
            <form class="form" method="post" action="bd/users/login.php">

                <p>
                    <label class="legendas" for='id_usuario' placeholder="Digite seu número de acesso" >User:</label>
                    <input class="input-user" type='text' name='id_usuario' required>
                </p>
                
                <p>
                    <label class="legendas" for='senha_usuario'>Senha:</label>
                    <input class="input-senha" type='password' name='senha_usuario' required minlength="4">
                </p>
           
                <button class="btn-logar" >Entrar</button><br /><br />
               

                <br> <br>
            </form>
       

</body>
</html>