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

?>
