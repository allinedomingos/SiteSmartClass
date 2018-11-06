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

	include("conecta.php");

	$username = $_POST['login'];
	$email = $_POST['email'];
	$matricula = $_POST['matricula'];
	$senha = $_POST['senha'];


	$matricula = mysqli_real_escape_string($connect,$_POST['matricula']);
	$verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE matricula = '$matricula'") or die("erro ao selecionar");
	
        $row=mysqli_fetch_array($verifica,MYSQLI_ASSOC); 



	$result = mysqli_query($connect,"SELECT * FROM professores");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['matricula'] . "</td>";
echo "<td>" . $row['disciplina'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

  //$connect = mysqli_connect('localhost','SmartClassUser','SmartClassPwd');
 // $db = mysqli_select_db($connect,'SmartClass');
  		  
  if (isset($_POST['adastrar_u'])) {  
	echo "<script>loginfunfou();window.location.href='index.html';</script>";

  }
?>




