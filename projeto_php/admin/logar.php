<?php
include"conect.php";

$login = $_POST['login'];
$senha = $_POST['senha'];
/*
/* Verifica se existe usuario, o segredo ta aqui quando ele procupa uma 
linha q contenha o login e a senha digitada */
$sql_logar = "SELECT * FROM admin  WHERE login = '$login' && senha = '$senha'";
$exe_logar = mysql_query($sql_logar) or die (mysql_error());
$fet_logar = mysql_fetch_assoc($exe_logar);
$num_logar = mysql_num_rows($exe_logar);


//Verifica se n existe uma linha com o login e a senha digitado
if ($num_logar == 0){
	sleep();
	echo "<script> alert('Login ou Senha inválido.');</script>";
   echo "<br><a href='javascript:window.history.go(-1)'><div class='voltar' style='width:250px;height:50px;position:relative;margin:0 auto;margin-top:15%;color:white;background:royalblue;text-align:center;line-height:50px;border-radius:10px;font-family:arial;text-decoration:none;'>Clique aqui para volta.</div></a>";   
} else{


   //Cria a sessão e manda pra pagina principal.php
   session_start();
   $_SESSION['login'] = $login;
   $_SESSION['senha'] = $senha;
	header("Location: painel_adm.php");
}



?>