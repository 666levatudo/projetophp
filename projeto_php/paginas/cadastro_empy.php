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
    <link rel="stylesheet" href="js/bootstrap-tagsinput.css">
    <script type="text/javascript" href="js/prettify.js"></script>
    <script type="text/javascript" src="source/shadowbox.js"></script>
    <link rel="stylesheet" href="source/shadowbox.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body>
  <div class="container">
      
  </div>
  

    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form action="envia_cad_empyt.php" method="post" enctype="multipart/form-data">
            <div class="row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div>
                    <input type="file" class="form-control" name="foto">
                </div>
                <div class="col-md-8">
                    <h1>Cadastro Empregador</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label"> Nome/Empresa:</label>
                                <input class="form-control" type="text" name="nome" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label"> Pessoa:</label><br>
                               <select name="pessoa" id="pessoa" class="form-control" required="">
                                  <option></option>
                                   <option value="Fisica">Fisica</option>
                                   <option value="Juridica">Juridica</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12" id="cpf">
                            <div class="form-group">
                                <label class="control-label">Cpf: </label>
                                <input class="form-control" type="text" name="cpf" id="cpf"  maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" >
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12" id="cnpj">
                            <div class="form-group">
                                <label class="control-label">Cnpj: </label>
                                <input class="form-control" type="text" name="cnpj" id="cpf" maxlength="16" OnKeyPress="formatar('##.###.###/0001-##', this)" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12">
                            <label class="control-label">Email </label>
                            <input class="form-control" type="email" autocomplete="off"  name="email" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Senha: </label>
                                <input class="form-control" type="password" name="password" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Confirmar Senha: </label>
                                <input class="form-control" type="password" name="senha" autocomplete="off" required="">
                            </div>
                        </div>
                         <div class="col-md-12 col-sm-12">
                             <div class="form-group">
                                <label class="control-label">Descreva o seu projeto: </label>
                                <textarea name="projeto" id=""  class="form-control" style="height:150px;" required=""></textarea>
                             </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                 <div class="bs-example" style="width:100%;height:200px;">
                                 <label class="control-label">Escolha as habilidades do profissional: </label><br>
                                <input class="form-control" type="text" name="habilidade" value="PHP, HTML" data-role="tagsinput" />
                              </div>                        
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 content-right">
                        
                            <input class="btn btn-primary form-btn" type="submit" value="Cadastrar">
                            <button class="btn btn-danger form-btn" type="reset">CANCELAR </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
     <script src="../js/efeito.js"></script>
        <script type="text/javascript" src="js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-tagsinput-angular.js"></script>
      <script>
		$(function(){
			$("#pessoa").on('change', function(e){
			    var pessoa = $(this).val();
                var mudar = $('#mudar');
                var cpf = $("#cpf");
                var cnpj = $("#cnpj");
              
                
               if(pessoa === "Juridica"){
                   cpf.fadeOut(1000);
                   cnpj.fadeIn(1000);
               }if(pessoa === "Fisica"){
                   cnpj.fadeOut(1000);
                    cpf.fadeIn(1000);
               }
		});
					
		});
            
    </script>
</body>

</html>