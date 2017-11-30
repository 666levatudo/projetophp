<?php
include "conect.php";
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$projeto = $_POST['projeto'];
$habilidade = $_POST['habilidade'];

 
if ($_FILES) { // Verificando se existe o envio de arquivos.

    if ($_FILES['foto']) { // Verifica se o campo não está vazio.
        $dir = "fotos/"; // Diretório que vai receber o arquivo.
        $tmpName = $_FILES['foto']['tmp_name']; // Recebe o arquivo temporário.

        $name = $_FILES['foto']['name']; // Recebe o nome do arquivo.
        preg_match_all('/\.[a-zA-Z0-9]+/',$name, $extensao);
        if (!in_array(strtolower(current(end($extensao))), array('.jpg', '.png', '.jpeg'))) {
            echo("<script>alert('Escolha Uma Imagem! Permitido extensãoe jpg, jpeg e png');</script>");
            echo "<script>window.history.go(-1);</script>";
            die;
        }
		$nameart = $name;
         //move_uploaded_file( $copia.$nameart )
        if (move_uploaded_file($tmpName, $dir.$nameart)) { // move_uploaded_file irá realizar o envio do arquivo.        
            //echo("<script>alert('Arquivo adicionado com sucesso.');</script>");
        } else {
            echo('Erro ao adicionar arquivo.');
        }
		
			
    }  
}

if(empty($cpf)){
    $mudar = $cnpj;
}else{
    $mudar = $cpf;
}

   $sql_busca = "SELECT * FROM empresa WHERE  email = '$email'";
   $exe_busca = mysql_query($sql_busca) or die (mysql_error());
   $num_busca = mysql_num_rows($exe_busca);
   $fet_busca = mysql_fetch_assoc($exe_busca);

if($num_busca == 0){

$in = mysql_query("INSERT INTO empresa (nome, cpfs, email, senha, descricao, habilidades, foto) VALUES ('$nome','$mudar', '$email', '$senha', '$projeto', '$habilidade', '$nameart')");
    echo "<script> alert('Usuário Cadastrado com sucesso! Seja Muito Bem Vindo ao Nosso Sistema ');</script>";
echo "<script>window.history.go(-1);</script>";
}else{
    echo "<script> alert('Email cadastrado por outro usuário tente outro email! ');</script>";
		  echo "<script>window.location = 'index.php?link=3';</script>";
}
?>