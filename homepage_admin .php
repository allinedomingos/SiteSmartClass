<!doctype html>   
<html lang="pt-BR">  
  <html>
  <head> 
     <meta charset="UTF-8"/>
     <title>SmartClass</title>
     <link href="layout.css" rel="stylesheet" type="text/css"/>
     <script>
	function loginfunfou()
	{
	alert("voce selecionou alterar usuarios!");
	}


  </script>
 </head>
<body>      
</body>
</html>

<?php 
  //$connect = mysqli_connect('localhost','SmartClassUser','SmartClassPwd');
 // $db = mysqli_select_db($connect,'SmartClass');
  		  
  if (isset($_POST['adastrar_u'])) {  
	echo "<script>loginfunfou();window.location.href='index.html';</script>";
   // $username = $_POST['login'];		
   // $senha = mysqli_real_escape_string($connect,$_POST['senha']);
	//$verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE username = '$username' and password = '$senha'") or die("erro ao selecionar");
	//$row=mysqli_fetch_array($verifica,MYSQLI_ASSOC); 

	//if (mysqli_num_rows($verifica)<=0){
      	//	echo "<script>loginfalhou();window.location.href='index.html';</script>";
      //		die();
       //}else{
      //    $mat = $row["matricula"];
      //	  setcookie("login",$login);
	//}

	//if(strlen($mat)==1){
      //  	header("Location:homepage_admin.html");
	//  }else if(strlen($mat)>1 && strlen($mat)<9){
      //  	header("Location:homepage_professor.html");
	//  }else{
       // 	header("Location:homepage_aluno.html");
	//  }
  }
?>
