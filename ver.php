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

</head>
<body>

<?php

include("conecta.php");
 

$verifica = mysqli_query($connect, "SELECT * FROM usuarios") or die ("erro ao selecionar");
 	
       echo " 
       <pre width='20px'>
       </pre>
       <center><table style='width:60%' id='t01'>
       <tr>
       <th>Usuário</th>
       <th>Matricula</th>
       <th>E-mail</th>
       </tr>
";
while($aux = mysqli_fetch_assoc($verifica)) {
      
 echo" <tr>
         <td>" .$aux['username']."</td>
         <td>" .$aux['matricula']."</td>
         <td> ".$aux['email']."</td>
       </tr>";

}
 echo "</table></center>";
 
?> 
<script>
		   function voltar(){
		   location.href=" homepage_admin.html"
		   }
           </script>
             <pre width='20px'>
             </pre>
      <center><button class="button" onClick="voltar()">voltar</button></center><br>
     </div>
</body>
</html>
