<?php
    require_once "conect.php";
    include "verificar.php";
    session_start();
  
    
    $sql = mysql_query("SELECT * FROM admin WHERE login = '$login_usuario' && senha = '$senha_usuario'");
    while($linha = mysql_fetch_array($sql)){
        $nome = $linha['nome'];
        $foto = $linha['foto'];
    }

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Integrador</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
        <link rel="stylesheet" href="../assets/css/styles.min.css">
        <link rel="stylesheet" href="../assets/css/estilo.css">

        <style>
        </style>
    </head>

    <body>
        <div class="hidden-xs vertical-nav" style="background-color:rgb(21,36,58);">
            <h4 class="text-center">
                <img class="img-responsive" src="../assets/img/logomarca.png" id="perfil" style="width:100px;margin-top:50px;margin-bottom:-70px;">
            </h4>
            <div class="moldura-foto">
                <div class="caixa-avatar">
                    <img src="foto/<?= $foto ?>" alt="" width="100%">
                </div>
            </div>
            <h4 id="nome_perfil">
                <?= $nome ?>
            </h4>
            <ul class="vertical-nav-list">
                <li class="vnav-li"><a href="painel_adm.php?link=1" class="vnav-link"><i class="glyphicon glyphicon-home"></i> Alunos Cadastrados</a></li>
                <li class="vnav-li"><a href="painel_adm.php?link=2" class="vnav-link"><i class="glyphicon glyphicon-tasks"></i> Empresas Cadastradas</a></li>
                <li class="vnav-li"><a href="painel_adm.php?link=3" class="vnav-link"><i class="glyphicon glyphicon-list-alt"></i> Administradores</a></li>
                <li class="vnav-li"><a href="logout.php" class="vnav-link"><i class="glyphicon glyphicon-eject"></i> Logout</a></li>
            </ul>
        </div>
        <div id="lado_direito" class="container" style="background-color:rgb(21,36,58);position:relative;float:right;color:white;">
            <div class="caixa_foto_perfil_superior">
                <div class="avatar_foto_superior">
                    <img src="foto/<?= $foto ?>" alt="" width="100%">
                </div>
            </div>
        <a href="logout.php">    
            <div class="caixa_sair">
                Sair
            </div>
        </a>    
        </div>
        <div class="col-md-12" style="background:;float:right;padding-top:20px;">
            <div class="container-fluid">
                <div class="col-md-11" style="position:relative;float:right;">
                    <div class="col-md-12" id="linha_icones">
                        <div class="col-md-3" style="background:;">
                            <div class="caixa_wid">
                                <div class="numero">
                                    150
                                    <div class="dizeres">
                                        Novas Ordens
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <div class="mais-info">
                                    <i>Mais informações &nbsp;<i class="fa fa-share-square-o"></i></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="caixa_wid" style="background:#00A65A;">
                                <div class="numero">
                                    465
                                    <div class="dizeres">
                                        Registros de usuários
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <div class="mais-info">
                                    <i>Mais informações &nbsp;<i class="fa fa-share-square-o"></i></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="caixa_wid" style="background:#F39C12;">
                                <div class="numero">
                                    50%
                                    <div class="dizeres">
                                        Taxa de rejeição
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <div class="mais-info">
                                    <i>Mais informações &nbsp;<i class="fa fa-share-square-o"></i></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="caixa_wid" style="background:#DD4B39;">
                                <div class="numero">
                                    300
                                    <div class="dizeres">
                                        visitantes únicos
                                    </div>

                                </div>
                                <div class="icon">
                                    <i class="ion  ion-pie-graph"></i>
                                </div>
                                <div class="mais-info">
                                    <i>Mais informações &nbsp;<i class="fa fa-share-square-o"></i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluide" style="background:;;padding:20px;margin-left:165px;">
               
                <?php							
				$link = $_GET["link"];	
				
				$pag[1] = "alunos.php";
                $pag[2] = "empresas.php";
				$pag[3] = "administradores.php";
    
				if (!empty($link)) 
				{
					if (file_exists($pag[$link])) 
					{
						include $pag[$link];
					}
					else
					{
						include "alunos.php";
					}
				}
				else
				{
					include "alunos.php";
				}				
			?>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
        <script src="../assets/js/script.min.js"></script>
        <script type="text/javascript"  language="JavaScript">		
		$(function(){
			$('.botao_deletar').click(function(){
			decisao = confirm("Tem Certeza que Você quer Deletar esse Usuário!");

		if (decisao){

		alert ("Usuario Deletado Permanentemente do banco de dados!");
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "admin/deletar.php",
				data: dados,
				success: function( data )
				{
					alert( data );
				}
			});
			
			return false;
		});
	
		

		} else {

		alert ("Usuário permanece no banco de dados!");
			return false;
		}
		
		});
		});
	</script>
    </body>

    </html>