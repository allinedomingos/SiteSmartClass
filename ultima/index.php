 <!DOCTYPE HTML> <!-- Avisa o Navegador do uso do HTML5 -->  
 <html lang="pt-br"> <!-- indica a linguagem -->  
      <head>  
          <meta charset="UTF-8"> <!-- indica o conjunto de caracteres -->  
          <link rel="stylesheet" href="css/estilo.css"> <!-- mostra ao navegador onde está css para formatação -->  
          <title>Login</title> <!-- titulo da página -->  
      </head>  
      <body>  
          <form method="POST" action = "login.php"> <!-- linha para onde serão mandadas as informações do formulário e a forma (POST) -->  
              Login: <input type="text"   name = "login">  
              Senha: <input type="password" name = "password"> <!-- o type password indica que serão apresentados **** no lugar das letras digitadas-->  
              <input type="submit" value = "Entrar">  
              <?php echo $_GET['erro']; ?> <!-- esta linha apresentará a resposta do arquivo /php/login.php caso o usuario nao seja encontrado -->  
          </form>  
      </body>  
  </html>  
