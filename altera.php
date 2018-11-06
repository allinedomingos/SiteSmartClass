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
	alert("Matricula não encontrada,procure a coordenação!");
	}
   </script>
     <script>
	function senhafalhou()
	{
	alert("Senhas Digitadas não conhecidem!");
	}

   </script>
        <script>
	function senhaalter()
	{
	alert("Senha Alterada com Sucesso!");
	}

  </script>
 </head>
<body>      
</body>
</html>
<?php

        include("conecta.php");

        $senha_nova = $_POST['senha_nova'];
        $confirme_senha = $_POST['confirme_senha'];   
    
        if(($senha_nova=="") && ($confirme_senha=="")) { //verifica se foi preenchido
		  echo"<script>alert('Os campos das senhas não podem ser Nulos!');window.location='senha_perdida.html';</script>"; 
         
        }
        if (isset($_POST['matricula'])) {  
        $matricula = mysqli_real_escape_string($connect,$_POST['matricula']);
	$verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE matricula ='$matricula'") or die("erro ao selecionar");
        $row=mysqli_fetch_array($verifica,MYSQLI_ASSOC); 
        
       
       if (mysqli_num_rows($verifica)<=0){  // verifica se matricula existe
      		echo "<script>loginfalhou();window.location.href='index.html';</script>";
      		die();
        }elseif($senha_nova != $confirme_senha){ 
		echo"<script>senhafalhou();window.location='senha_perdida.html';</script>";
              }else{
                         mysqli_query($connect,"UPDATE usuarios SET password='$confirme_senha' WHERE matricula ='$matricula'");
			 echo"<script>senhaalter();window.location='index.html';</script>";
                }
				 
             

  
     }

?>
