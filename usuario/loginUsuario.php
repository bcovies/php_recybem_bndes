<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/index.css">
  <title>Index</title>
</head>
<body>
<form method="post" action="">
        <h1>Login</h1>
        <p>
          <label for="usuário">Seu usuário</label>
          <input id="idPagador" name="usuario" required="required" type="text" placeholder="" />
        </p>

        <p>
          <label for="senha">Sua senha</label>
          <input id="senha" name="senha" required="required" type="password" placeholder="" />
        </p>

        <p>
          <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
          <label for="manterlogado">Manter-me logado</label>
        </p>

        <p>
          <input type="submit" name="btnLogin" value="Logar" />
        </p>

        <p class="link">
          Ainda não tem conta?
          <a href="#paracadastro">Cadastre-se</a>
        </p>
      </form>
</body>


</html>