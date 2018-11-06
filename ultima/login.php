<?php  
      $login = $_POST["login"]; //recupera o texto de login   
      $senha = $_POST["password"];  
      $conexao = mysql_connect("191.36.8.36:5070","smartclass","daj2017pji"); //aqui entre com seu usuario e senha do servidor  
      $bd   = mysql_select_db("SmartClass", $conexao);  //selecione o banco de dados desejado  
      $usuarios = mysql_query("SELECT * FROM usuarios", $conexao);  
      mysql_close($conexao); //nao se esqueça de fechar a conexão com servidor  
      //esta é uma forma de acessar os dados do banco de dados, mas me parece que consome muitos recursos, futuramente voltarei para melhorá  
      while ($row = mysql_fetch_array($usuarios)){ //puxe a lista com todas as colunas da tabla  
          if (($login == $row['login']) //verifar se a variavel $usuario é igual a algum dos usuarios  
           &&($senha == $row['password'])){ //verificar se a senha apresentada é igual a senha do usuario indicado  
              session_start(); //inicia a sessão  
              $_SESSION['login'] = $login;  
              header("location: /sessao.php"); //redireciona para o arquivo da página principal do site  
              exit();  
          }else{  
              header("location: /index.php?erro=acessoNegado"); //avisa a página index que a senha está errada  
          }  
      }  
  ?> 
