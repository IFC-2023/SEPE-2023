<?php

  if(isset($_POST['submit-login'])) {
    include_once('config.php');

    $emailLogin = $_POST['email_login'];
    $senhaLogin = $_POST['senha_login'];

    $resultLogin = mysqli_query($conexao, "SELECT * FROM jogador WHERE email = '$emailLogin'");

    if ($resultLogin && mysqli_num_rows($resultLogin) === 0) {
      echo "Email ou senha incorretos";
    } 
    
    else if ($resultLogin && mysqli_num_rows($resultLogin) > 0) {
      $usuario = mysqli_fetch_assoc($resultLogin);
  
      if (!isset($_SESSION)) {
          session_start();
      }
  
      $_SESSION['nome'] = $usuario['apelido'];
      $_SESSION['idUsuario'] = $usuario['id'];

      
      if (password_verify($senhaLogin, $usuario['senha'])) {
          header("Location: http://localhost/SEPE/front/site/paginas/index.php");
          exit();
      } else {
          echo "Senha incorreta";
      }
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Formulário | LF</title>
</head>
<body>
  
<div class="container" >
  <div class="content">
    <div id="login">
      <form method="post" action="login.php"> 
        <h1>Login</h1> 
        <p> 
          <label for="nome_login">Seu email</label>
          <input id="nome_login" name="email_login" required="required" type="text" placeholder="ex. contato@gmail.com"/>
        </p>
         
        <p> 
          <label for="email_login">Sua senha</label>
          <input id="email_login" name="senha_login" required="required" type="password" placeholder="ex. senha" />
          <a href=""></a>
        </p>
         
        <p> 
          <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
          <label for="manterlogado">Manter-me logado</label>
        </p>
         
        <p> 
          <input type="submit" name="submit-login" value="Logar" /> 
        </p>
         
        <p class="link">
          Ainda não tem conta?
          <a href="cadastro.php">Cadastre-se</a>
        </p>
      </form>
    </div>
  </div>
</div>  

</body>

</html>
