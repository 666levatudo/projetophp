<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto integrador telas</title>
    
    <link rel="stylesheet" href="paginas/assets/css/styles.min.css">
</head>

<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="border-bottom: 1px solid #edecec;">
                    <div id="user" class="col-md-6" style="border-right: 1px solid #edecec;"><span>Eu sou um Aluno</span></div>
                    <div id="empy" class="col-md-6"><span>Eu quero contratar</span></div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-md-12" id="container">
                    <div id="aluno">
                    <div class="login-card">
                      <p class="profile-name-card">Para acessar o UniEstagios ultize a Matrícula e senha do Virtual UNIPÊ </p>
                      <br>
                       <img src="paginas/assets/img/avatar_2x.png" class="profile-img-card">                        
                        <form class="form-signin" action="paginas/logar.php" method="post"> <span class="reauth-email"> </span>
                            <input class="form-control" type="text" name="matricula" required="" placeholder="Matricula" autofocus="" id="inputEmail">
                            <input class="form-control" type="password" required="" name="senha" placeholder="Senha" id="inputPassword">
                            <div class="checkbox">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Lembrar-me</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
                        </form>
                        </div>
                    </div>
                    <div  id="contrato">
                    <div class="login-card" style="width: 50%;">
                        <p class="profile-name-card">Entre com o Login e Senha caso não tenha cadastre-se acessando o link abaixo </p>
                        <form class="form-signin" action="paginas/logar_empy.php" method="post" enctype="multipart/form-data">
                           <span class="reauth-email"> </span>
                            <input class="form-control" type="email" name="email" required="" placeholder="Email" autofocus="" id="inputEmail">
                            <input class="form-control" type="password" name="senha" required="" placeholder="Senha" id="inputPassword">
                            <div class="checkbox">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Remember me</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
                        </form><a href="index.php?link=5" class="forgot-password">Cadastre - se</a>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
 
</body>

</html>