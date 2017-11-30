<?php
$host = "localhost:3306"; //Servidor do mysql
$user = "pdtinfo_adm"; //Usuario do banco de dados
$senha = "@prodatta2016#"; //senha do banco de dados
$db = "pdtinfo_integrador"; //banco de dados
$nome_site = "Projeto Integrador"; //Nome do site
$email = "camara@goiana.pe.leg.br"; //E-mail do administrador
$site = "http://localhost/sispro/"; //Seu site n se esuqece de bota o http://

@mysql_connect($host, $user, $senha) or die (@mysql_error());
@mysql_select_db($db) or die (@mysql_error()); 


mysql_set_charset('utf8');
	
	session_start();
	
	if(isset($_SESSION['email']) && isset($_SESSION['senha'])){
		$email_usuario = $_SESSION['email'];
		$senha_usuario = $_SESSION['senha'];
		
	$sql = mysql_query("SELECT * FROM empresa WHERE email= '$email_usuario' && senha = '$senha_usuario'");
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