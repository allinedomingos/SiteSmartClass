<!doctype html>   
<html lang="pt-BR">  
  <html>
  <head> 
     <meta charset="UTF-8"/>
     <title>SmartClass</title>
     <link href="layout.css" rel="stylesheet" type="text/css"/>
     <script>
	function loginfalhou()
	{
	alert("Erro de login, senha ou usuário incorretos!");
	}


  </script>
 </head>
<body>      
</body>
</html>

<?php 
  
 include("conecta.php");
  		  
  if (isset($_POST['login'])) {  
    $username = $_POST['login'];		
    $senha = mysqli_real_escape_string($connect,$_POST['senha']);
	$verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE username =  '$username' and password = '$senha'") or die("erro ao selecionar");
	$row=mysqli_fetch_array($verifica,MYSQLI_ASSOC); 

	if (mysqli_num_rows($verifica)<=0){
      		echo "<script>loginfalhou();window.location.href='index.html';</script>";
      		die();
       }else{
          $mat = $row["flag"];
          $name = $row["username"];
      	  setcookie("login",$login);
          session_start();   
	}

	if($name=="admin"){
        	header("Location:homepage_admin.html");
	  }else if($mat==1){
        	header("Location:homepage_professor.html");
	  }else{
        	header("Location:homepage_aluno.html");
	  }

      }
?>
