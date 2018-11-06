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
	alert("Erro ao cadastrar!");
	}
      </script>
        <script>
        function existe()
	{
	alert("Este matricula já esta cadastrado!");
	}      
  	</script>
        <script>
         function sucesso(){
         alert("Cadastrado realizado com sucesso!");
         }
        </script>
        <script>
         function v1(){
          alert("O Campo matricula deve ser preenchido");
         }
         </script>
         <script>
         function v2(){
          alert("O Campo usuario deve ser preenchido");
         }
         </script>
         <script>
         function v3(){
          alert("O Campo email deve ser preenchido");
         }
         </script>
         <script>
         function v4(){
          alert("O Campo senha deve ser preenchido");
         }
     </script>
    <script>
         function v5(){
          alert("Indique se o usuário é aluno ou professor");
         }
     </script>
 </head>
<body>      
</body>
</html>
<?php

include("conecta.php");

//echo "fuunnnfooooo";

$username = $_POST['login'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$flag = $_POST['radio-but'];



$matricula = mysqli_real_escape_string($connect,$_POST['matricula']);
$verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE matricula = '$matricula'") or die("erro ao selecionar");
	
      $row=mysqli_fetch_array($verifica,MYSQLI_ASSOC); 

	if (mysqli_num_rows($verifica)<=0){

	if($username == "" || $username == null) echo" <script>v1();window.location.href='registro.html';</script>";
        if($email == "" || $email == null) echo" <script>v2();window.location.href='registro.html';</script>";
	if($matricula == "" || $matricula == null) echo" <script>v3();window.location.href='registro.html';</script>";
	if($senha == "" || $senha == null) echo" <script>v4();window.location.href='registro.html';</script>";
        if($flag == "" || $flag == null) echo" <script>v5();window.location.href='registro.html';</script>";
        
        if ($flag=="sim") {
             $flag=1;
           //  echo "é professor";
	} else {
              $flag=0;
   	    //  echo "é aluno";
 }
         
      mysqli_query($connect,"INSERT INTO usuarios (username,password,matricula,email,flag) VALUES('$username','$senha','$matricula','$email','$flag')");
		echo"<script>sucesso();window.location='homepage_admin.html';</script>";
}
	else{ 
        echo "<script>existe();window.location.href='registro.html';</script>";
	}

?>
