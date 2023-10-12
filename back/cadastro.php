<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cadastro | SEPE</title>
</head>
<body>
<div class="container" >
  <a class="links" id="paracadastro"></a>
  <a class="links" id="paralogin"></a>
   
  <div class="content">      
    <!--FORMULÁRIO DE CADASTRO-->
    <div id="cadastro">
      <form method="post" action="login.php"> 
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
          <input type="submit" name="submit-cad" value="Cadastrar"/> 
        </p>
         
        <p class="link">  
          Já tem conta?
          <a href="login.php"> Ir para Login </a>
        </p>
      </form>
    </div>
  </div>
</div>  
</body>
</html>