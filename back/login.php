<?php

if (isset($_POST['submit-cad'])) {

  include_once('config.php');

  $nome = $_POST['nome_cad'];
  $email = mysqli_real_escape_string($conexao, $_POST['email_cad']);
  $senha = password_hash($_POST['senha_cad'], PASSWORD_DEFAULT);

  $query = "SELECT * FROM jogador WHERE email = '$email'";
  $result = mysqli_query($conexao, $query);

  if (mysqli_num_rows($result) > 0) {
      echo "Este email já está cadastrado. Por favor, use outro email.";
  } else {
      $result = mysqli_query($conexao, "INSERT INTO jogador (apelido, email, senha) VALUES ('$nome', '$email',       '$senha')");

      $confirmResult = mysqli_query($conexao, "SELECT email FROM jogador WHERE email = '$email'");
  
      if ($confirmResult && mysqli_num_rows($confirmResult) === 0) {
        echo "Email não cadastrado";
      } else {
          echo "Email cadastrado";
      }
    }
  }

  if(isset($_POST['submit-login'])) {
    include_once('config.php');

    $emailLogin = $_POST['email_login'];
    $senhaLogin = $_POST['senha_login'];

    $resultLogin = mysqli_query($conexao, "SELECT apelido,email,senha FROM informacoes WHERE email = '$emailLogin'");

    if ($resultLogin && mysqli_num_rows($resultLogin) === 0) {
      echo "Email ou senha incorretos";
    } 
    
    else if ($resultLogin && mysqli_num_rows($resultLogin) > 0) {
      $usuario = mysqli_fetch_assoc($resultLogin);
  
      if (!isset($_SESSION)) {
          session_start();
      }
  
      $_SESSION['nome'] = $usuario['apelido'];
  
      if (password_verify($senhaLogin, $usuario['senha'])) {
          echo "redirecionando para a página...";
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
