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
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="js/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <script type="text/javascript" href="js/prettify.js"></script>
    <script type="text/javascript" src="source/shadowbox.js"></script>
    <link rel="stylesheet" href="source/shadowbox.css" type="text/css">
    
    </head>
<body>       
   <div class="container-fluid" id="efeito">
      <div class="xis">X</div>
       <div class="container" id="central">
           <div class="col-md-6" id="formulario">
               <div class="caixa-imgem">
                   <img src="assets/img/1486485581-account-audience-person-customer-profile-user_81164.png" alt="" height="100%">
               </div>
               <div class="caixa-formulario" style="padding-top:30px;">
                  <form action="admin/logar.php" method="post" enctype="multipart/form-data">
                       <input type="text" name="login" placeholder="Login">
                       <input type="password" name="senha" placeholder="Email">
                       <input type="submit" name="" value="Entrar">
                   </form>   
               </div>
           </div>
       </div>
   </div> 
    <div id="linha_busca" class="row">
        <div id="central_busca" class="container">
            <div id="busca_esquerda" class="col-md-4"><span>Central de Atendiimeto- (83) 3657 - 0000</span></div>
            <div id="busca_direita" class="col-md-8">
                <div id="login" class="col-md-4 col-sm-12"><span><a href="#" id="click"> Login</a></span> | Suport | Contatos</div>
                <div id="busca" class="col-md-8">
                    <div class="hidden-xs hidden-sm" id="icones" style="display:inline;"><img src="assets/img/yout.png" id="icon" style="width:25px;height:25px;"><img src="assets/img/face.png" id="icon2" style="width:25px;"><img src="assets/img/insta.png" id="icon3" style="width:25px;height:25px;"></div>
                    <form class="search-form col-md-8"
                    style="overflow:hidden;display:inline;">
                        <div class="input-group">
                            <div class="input-group-addon"><span><i class="glyphicon glyphicon-search"></i></span></div>
                            <input class="form-control" type="text" placeholder="Pesquisar...">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="button" style="background-color:rgb(43,55,74);">Pesquisar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="cabecalho" class="row" style="color:#15243a;height:200px;">
        <div id="centra_cab" class="container">
            <div id="logomarca" class="container">
                <div class="col-md-4 col-sm-4"></div>
                <div id="cental" class="col-md-4 col-sm-4"><img src="assets/img/logomarca.png"></div>
                <div class="col-md-4 col-sm-4"></div>
            </div>
            <div id="espaco" class="container" style="height:40px;"></div>
            <div id="nav" class="col-md-12">
                <nav class="navbar navbar-inverse nav-main-wrapper" style="background-color:rgba(1,1,1,0);">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li role="presentation" style="width:160px;"><a href="index.php?link=1">Home </a></li>
                                <li role="presentation" style="width:160px;"><a href="index.php?link=2">O Projeto</a></li>
                                <li role="presentation" style="width:160px;"><a href="#">Como Funciona</a></li>
                                <li role="presentation" style="width:160px;"><a href="index.php?link=3">Cadastre - Se</a></li>
                                <li role="presentation" style="width:160px;"><a href="index.php?link=6">Encontrar Aluno </a></li>
                                <li role="presentation" style="width:160px;"><a href="index.php?link=7">Encontrar Estágio</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div id="amarelo" class="row" style="height:25px;"></div>
		<?php							
				$link = $_GET["link"];	
				
				$pag[1] = "paginas/home.php";
				$pag[2] = "paginas/projeto.php";
                $pag[3] = "paginas/login_home.php";
                $pag[4] = "paginas/cadastro_user.php";
                $pag[5] = "paginas/iframe.php";
                $pag[6] = "paginas/encontrar.php";
				$pag[7] = "paginas/estagios.php";
        
    
				if (!empty($link)) 
				{
					if (file_exists($pag[$link])) 
					{
						include $pag[$link];
					}
					else
					{
						include "paginas/home.php";
					}
				}
				else
				{
					include "paginas/home.php";
				}				
			?>
			
    <div class="footer-dark" style="background-color:rgb(21,36,58);">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-sm-4 item social"><a href="#"><i class="icon ion-social-facebook" style="font-size:30px;line-height:40px;color:white;left:-10px;"></i></a><a href="#"><i class="icon ion-social-twitter" style="font-size:25px;line-height:40px;color:white;left:-13px;"></i></a><a href="#"><i class="icon ion-social-snapchat" style="font-size:25px;line-height:40px;color:white;left:-14px;"></i></a><a href="#"><i class="icon ion-social-instagram" style="font-size:25px;line-height:40px;color:white;left:-13px;"></i></a></div>
                </div>
            </div>
        </footer>
    </div>
    <div id="linha_busca" class="row">
        <div id="central_busca" class="container">
            <p id="atributo" class="copyright"> Projeto Integrador © 2017</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
     <script src="js/efeito.js"></script>
        <script type="text/javascript" src="js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-tagsinput-angular.js"></script>
        
         <script>
    function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
    </script>
  
    <script>
        $(document).ready(function() {
           $("#click").click(function(){
                $('#efeito').animate({
                    'opacity': '100'
                }, 500, 'linear');
                $('#efeito').css('display', 'block');
           });
            
             $('.xis').click(function() {
                $('#efeito').animate({
                    'opacity': '0'
                }, 500, 'linear', function() {
                    $('#efeito').css('display', 'none');
                })
            });

        });
    </script>
</body>
</html>