<?php
include "conect.php";
	
	session_start();
	
	if(isset($_SESSION['login']) && isset($_SESSION['senha'])){
		$login_usuario = $_SESSION['login'];
		$senha_usuario = $_SESSION['senha'];
		
	$sql = mysql_query("SELECT * FROM admin WHERE login= '$login_usuario' && senha = '$senha_usuario'");
	while ($linha = mysql_fetch_array($sql)){
		$senha_db = $linha['senha'];
	
		$cont = mysql_num_rows($sql);
		
		if($cont === 0){
			echo"
				<meta http-equiv='refresh' content='0; url= ../index.php'/>
				<script type='text/javascript'>alert('Login nao Existe!')</script>
			";	
			}else
				if($senha_db != $senha_usuario){
				echo"
					<meta http-equiv='refresh' content='0; url= ../index.php'/>
					<script type='text/javascript'>alert('Senha nao correnponde')</script>
				";			
			}
	}
		}else{
	echo"
					<meta http-equiv='refresh' content='0; url= ../index.php'/>
					<script type='text/javascript'>alert('Você precisa estar logado para visualizar essa pagina')</script>
				";		
}
?>