<?php

if (isset($_POST['submit-cad'])) {

  include_once('config.php');

  $apelido = $_POST['apelido_cad'];
  $email = mysqli_real_escape_string($conexao, $_POST['email_cad']);
  $senha = password_hash($_POST['senha_cad'], PASSWORD_DEFAULT);

  $query = "SELECT * FROM jogador WHERE email = '$email'";
  $result = mysqli_query($conexao, $query);

  if (mysqli_num_rows($result) > 0) {
      echo "Este email já está cadastrado. Por favor, use outro email.";
  } else {
      $result = mysqli_query($conexao, "INSERT INTO informacoes (apelido, email, senha) VALUES ('$apelido', '$email','$senha')");

      $confirmResult = mysqli_query($conexao, "SELECT email FROM informacoes WHERE email = '$email'");
  
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

    $resultLogin = mysqli_query($conexao, "SELECT email,senha FROM informacoes WHERE email = '$emailLogin'");

    if ($resultLogin && mysqli_num_rows($resultLogin) === 0) {
        echo "Email incorreto";
    }

     else if ($resultLogin && mysqli_num_rows($resultLogin) > 0) {
        $usuario = mysqli_fetch_assoc($resultLogin);

        if(password_verify($senhaLogin, $usuario['senha'])) {
            header("Location: http://localhost/SEPE/front/site/paginas/index.html");
            exit();
        }

        else {
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
  <a class="links" id="paracadastro"></a>
  <a class="links" id="paralogin"></a>
   
  <div class="content">      
    <!--FORMULÁRIO DE LOGIN-->
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
          <a href="#paracadastro">Cadastre-se</a>
        </p>
      </form>
    </div>

    <!--FORMULÁRIO DE CADASTRO-->
    <div id="cadastro">
      <form method="post" action="login.php"> 
        <h1>Cadastro</h1> 
         
        <p> 
          <label for="nome_cad">Seu apelido</label>
          <input id="nome_cad" name="apelido_cad" required="required" type="text" placeholder="nome"/>
        </p>
         
        <p> 
          <label for="email_cad">Seu e-mail</label>
          <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@gmail.com"/> 
        </p>
         
        <p> 
          <label for="senha_cad">Sua senha</label>
          <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
        </p>
         
        <p> 
          <input type="submit" name="submit-cad" value="Cadastrar"/> 
        </p>
         
        <p class="link">  
          Já tem conta?
          <a href="#paralogin"> Ir para Login </a>
        </p>
      </form>
    </div>
  </div>
</div>  

</body>

</html>
