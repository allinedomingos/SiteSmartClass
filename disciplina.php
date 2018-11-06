<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<html lang="pt-BR">  
  <html>
  <head> 

   <script>
         function sucesso(){
         alert("Disciplina cadastra com sucesso!");
         }
        </script>

   <script>
        function existe()
	{
	alert("Esta disciplina já esta cadastrada!");
	}      
  </script>
      <script>
         function v1(){
          alert("O Campo disciplina deve ser preenchido");
         }
         </script>
         <script>
         function v2(){
          alert("O Campo codigo disciplina deve ser preenchido");
         }
         </script>
         <script>
         function v3(){
          alert("O Campo C.H (Carga horaria) deve ser preenchido");
         }
         </script>
         <script>
         function v4(){
          alert("O Campo curso deve ser preenchido");
         }
     </script>
     <meta charset="UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>SmartClass</title>
     <link href="layout.css" rel="stylesheet" type="text/css"/>
 </head>

<?php

include("conecta.php");

$disciplina= $_POST['disciplina'];
$codigo = $_POST['codigo'];
$carga = $_POST['carga'];
$curso = $_POST['curso'];

$codigo = mysqli_real_escape_string($connect,$_POST['codigo']);
$verifica = mysqli_query($connect,"SELECT * FROM disciplinas WHERE codigo = '$codigo'") or die("erro ao selecionar");


       $row=mysqli_fetch_array($verifica,MYSQLI_ASSOC); 

	if (mysqli_num_rows($verifica)<=0){

	if($disciplina == "" || $disciplina == null) echo" <script>v1();window.location.href='registro.html';</script>";
        if($codigo == "" || $codigo == null) echo" <script>v2();window.location.href='registro.html';</script>";
	if($carga == "" || $carga == null) echo" <script>v3();window.location.href='registro.html';</script>";
	if($curso == "" || $curso == null) echo" <script>v4();window.location.href='registro.html';</script>";



   mysqli_query($connect,"INSERT INTO disciplinas (disciplina,codigo,carga,curso) VALUES('$disciplina','$codigo','$carga','$curso')");
		echo"<script>sucesso();window.location='homepage_admin.html';</script>";
}
	else{ 
        echo "<script>existe();window.location.href='disciplinas.html';</script>";
	}




?>
