<?php
	require_once("../paginas/conect.php");
	include "verificar_aluno.php";
    $matricula = $_GET['us'];
	$sql = mysql_query("SELECT * FROM aluno WHERE matricula = '$matricula'");
	while($linha = mysql_fetch_array($sql)){
		$nome = $linha['nome'];
		$foto = $linha['foto'];
	}
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>projeto integrador telas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background: #edecec;">
    <div class="row">
        <div class="col-md-12" style="background-color:#0E1724;height:100px;overflow:hidden;">
            <div class="container">
                <div id="logo" class="col-md-4"><img src="assets/img/logomarca.png" id="logomarca"></div>
                <div id="busca" class="col-md-4">
                    <div class="search-container">
                        <input type="text" name="search-bar" placeholder="Search..." class="search-input" style="background-color:white;height:35px;">
                        <button class="btn btn-default search-btn" type="button" style="background-color:#FFD400;color:black;"> <i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
                <div id="nome_user" class="col-md-4" style="color:white;">
				<img src="foto/<?php echo $foto; ?>" id="foto_perfil" style="width:50px;height:50px;">
				<?php echo "<div style='color:white !important;font-family:calibri light;font-size:20px;'>$nome</div>"; ?><br>
				<a href="logout.php"><p style='color:white !important;font-family:calibri light;'>Sair</p></a>
				</div>
            </div>
        </div>
    </div>
    <div id="caixa_menu" class="row" style="height:50px;">
        <div id="caixa_menu_central" class="container" style="overflow:hidden;">
            <nav class="navbar navbar-default" style="height:50px;background-color:rgba(249,249,249,0);color:#0E1724;border: none;font-family:calibri;">
                <div class="container-fluid" >
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav main-nav" >
                            <li role="presentation"><a href="#" id="home" style="color:#0E1724;font-family:calibri;">Pagina Inicial</a></li>
                            <li role="presentation"><a href="#"  style="font-family:calibri;">Projetos </a></li>
                            <li role="presentation"><a href="#"  style="font-family:calibri;">Sobre O Projeto </a></li>
                            <li role="presentation"><a href="#"  style="color:#0E1724;font-family:calibri;">Perfil </a></li>
                            <li role="presentation"><a href="#"  style="font-family:calibri;">Ajuda </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row" >
        <div class="container" id="central"  style="padding-left: 0px;">
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="icone" >
                    <div class="lado-circulo">   
                        <div class="circulo" style="background:#A4C882 url('imagens/icon 02.png')no-repeat;background-position:center center;background-size:50%;"> 
                            
                        </div>
                    </div>
                    <div class="lado_numero">
                        <div style="margin-top:20px;font-size:18px;">
                            0
                        </div>
                        <div style="font-family:calibri;">
                            Projetos publicados
                        </div>
                    </div>    
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icone" >
                    <div class="lado-circulo">   
                        <div class="circulo" style="background: #B08BD9 url('imagens/icon 03.png')no-repeat;background-position:center center;background-size:50%;"> 
                        </div>
                    </div>
                    <div class="lado_numero">
                        <div style="margin-top:20px;font-size:18px;">
                            0
                        </div>
                        <div style="font-family:calibri;">
                            Em andamento
                        </div>
                    </div>    
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icone" >
                    <div class="lado-circulo">   
                        <div class="circulo" style="background: #00B6AD url('imagens/icon 04.png')no-repeat;background-position:center center;background-size:50%;"> 
                        </div>
                    </div>
                    <div class="lado_numero">
                        <div style="margin-top:20px;font-size:18px;">
                            0
                        </div>
                        <div style="font-family:calibri;">
                           Comcluidos
                        </div>
                    </div>    
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icone" >
                    <div class="lado-circulo">   
                        <div class="circulo" style="background:#FF8662 url('imagens/icon 01.png')no-repeat;background-position:center center;background-size:50%;"> 
                        </div>
                    </div>
                    <div class="lado_numero">
                        <div style="margin-top:20px;font-size:18px;">
                            0
                        </div>
                        <div style="font-family:calibri;">
                            Cancelados
                        </div>
                    </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-5" style="background: white;padding-bottom: 10px;padding-left: 0px;padding-right: 0px;">
                <div class="lado_esquerdo">
                    <div class="titulo_le">
                        <span style="font-family: calibri;font-size: 16px;">Meu Perfil</span>
                        <div class="editar">
                           <img src="assets/img/lapis.png" alt="" width="10">
                            <span style="font-family: calibri;font-size: 14px;">Editar</span>
                        </div>
                    </div>
                    <div class="caixa_perfil">
                       <div class="lado_esq">
                        <div class="foto_perfil">
                            <img src="foto/<?php echo $foto; ?>" alt="" width="80" height="80">
                        </div>
                    </div>
                    <div class="lado_direito">
                       <div class="nome-user"><?php echo $nome; ?></div>
                        <img src="assets/img/star-off.png" alt="">
                        <img src="assets/img/star-off.png" alt="">
                        <img src="assets/img/star-off.png" alt="">
                        <img src="assets/img/star-off.png" alt="">
                        <img src="assets/img/star-off.png" alt=""><span style="margin-left: 15px; font-family: calibri;"><i>(0 Avaliação)</i></span>

                    </div>
                </div>                
            </div>
            <div style="text-align: center;padding-left: 10px;padding-right: 10px;">
                    <span style="font-family: calibri;">Perfil preenchido ( 100% )</span>
                    <div class="barra_de_rolagem">        
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="caixa-lado-direito">
                <div class="titulo_le" style="font-size: 16px;font-family: calibri;">
                    Meus Processos
                </div>
                <div class="lado_di">
                    <div class="caixa_select">
                       <form action="">
                        <select name="" id="" style="border:1px solid gray;">
                            <option value="">Todos</option>
                        </select>
                       </form>
                    </div>
                    <div class="caixa_select" style="border: none;text-align: center;line-height: 100px;height: 100px;font-family: calibri;">
                        Nenhum projeto foi encontrado. Publicar Projeto.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>    
    <div class="row">
        <div class="container">
            <div class="col-md-5" style="background: white;padding-bottom: 10px;padding-left: 0px;padding-right: 0px;">
            <div class="lado_esquerdo">
                    <div class="titulo_le">
                        <span style="font-family: calibri;font-size: 16px;">Minhas Metas</span>
                    </div>  
                    <div style="text-align: center;padding-left: 10px;padding-right: 10px;margin-top: 10px;">
                    <span style="font-family: calibri;">Metas Concluidas ( 100% )</span>
                    <div class="barra_de_rolagem">        
                </div>
            </div> 
            <div class="check">
               <form action="">
                <input type="checkbox" name="" >
               </form>    
            </div>                            
        </div>
        </div>
        </div>
    </div>
</body>

</html>