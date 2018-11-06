<!doctype html>   
<html lang="pt-BR">  
  <html>
  <head> 
   <style>
	table, th, td {
    	border: 1px solid black;
   	border-collapse: collapse;
	}
        th, td {
      	padding: 5px;
      	}
      	th {
    	text-align: left;
	}
  	table#t01 tr:nth-child(even) {
    	background-color: #eee;
    	}
    	table#t01 tr:nth-child(odd) {
   	background-color: #fff;
	}
   	table#t01 th {
    	background-color: #DAA520;
   	color: white;
	}
    </style>
     <meta charset="UTF-8"/>
     <title>SmartClass</title>
     <link href="layout.css" rel="stylesheet" type="text/css"/>
     <pre width="20"> </pre>
           <center><img src="criando.png"  align="center" width="70"/></center>
     <script>
	function naoachou()
	{
	alert("Nenhum usuário foi encontrado!");
	}


  </script>
 </head>
<body>
<?php

include("conecta.php");
 
$username = $_POST['login'];
$username = mysqli_real_escape_string($connect,$_POST['login']);
$verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE username='$username'") or die ("erro ao selecionar");
 
     if (mysqli_num_rows($verifica)<=0){
       echo" <script>naoachou();window.location.href='edita_user.html';</script>";
    } else {
 	
       echo " 
       <pre width='20px'>
       </pre>
       <center><table style='width:60%' id='t01'>
       <tr>
       <th>Usuário</th>
       <th>Matricula</th>
       <th>E-mail</th>
       <th>Editar</th>
       <th>Excluir</th>
       </tr>
";
while($aux = mysqli_fetch_assoc($verifica)) {
      
 echo" <tr>
         <td>" .$aux['username']."</td>
         <td>" .$aux['matricula']."</td>
         <td> ".$aux['email']."</td>
         <td> <a href=\"editar.php\">[Editar]</a> </td>
         <td> <a href=\"excluir.php\">[Excluir]</a></td>
       </tr>";

}
 echo "</table></center>";
}
?>

</body>
</html>




