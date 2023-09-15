<?php

if (isset($_POST['submit'])) {
  // print_r('Nome: ' . $_POST['nome']);
  // print_r('<br>');
  // print_r('Email: ' . $_POST['email']);
  // print_r('<br>');
  // print_r('Telefone: ' . $_POST['telefone']);
  // print_r('<br>');
  // print_r('Sexo' . $_POST['genero']);
  // print_r('<br>');
  // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
  // print_r('<br>');
  // print_r('Cidade: ' . $_POST['cidade']);
  // print_r('<br>');
  // print_r('Estado: ' . $_POST['estado']);
  // print_r('<br>');
  // print_r('Endereço: ' . $_POST['endereco']);

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['genero'];
  $data_nasc = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
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
      <form method="post" action=""> 
        <h1>Login</h1> 
        <p> 
          <label for="nome_login">Seu nome</label>
          <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@gmail.com"/>
        </p>
         
        <p> 
          <label for="email_login">Seu e-mail</label>
          <input id="email_login" name="email_login" required="required" type="password" placeholder="ex. senha" /> 
        </p>
         
        <p> 
          <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
          <label for="manterlogado">Manter-me logado</label>
        </p>
         
        <p> 
          <input type="submit" value="Logar" /> 
        </p>
         
        <p class="link">
          Ainda não tem conta?
          <a href="#paracadastro">Cadastre-se</a>
        </p>
      </form>
    </div>

    <!--FORMULÁRIO DE CADASTRO-->
    <div id="cadastro">
      <form method="post" action=""> 
        <h1>Cadastro</h1> 
         
        <p> 
          <label for="nome_cad">Seu nome</label>
          <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome"/>
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
          <input type="submit" value="Cadastrar"/> 
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
