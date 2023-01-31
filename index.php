<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet" >
    <link rel="shortcut icon" href="./img/logo.png">

  </head>

  <body class="fundo-degrade">
   
    <nav class="navbar navbar-dark bg-dark d-flex justify-content-center">
      <img src="./img/logo.png" width="50" height="50"  alt="">
      <a class="navbar-brand " href="#" class="d-flex justify-content-center">
      <h3 class="title-logo">APP HELP DESK</h3>  
      </a>
    </nav>

    <div class="container"  >    
      <div class="row d-flex align-items-end" >
        <div class="d-flex justify-content-center">
          <img src="./img/atendentes.png" width="450" height="450" alt="">
        </div>
        <div class="card-login alin-center">
          <div class="card">
            <div class="card-header d-flex justify-content-center">
              <img src="./img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <h3 style=" margin-left: 5px;"> Login </h3>
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <? if (isset($_GET['login'])&& $_GET['login'] == 'erro'){ ?> 
                <div class="text-danger">
                  Usuário ou senha incorretos!
                </div>
                
                <? } ?>

                <? if (isset($_GET['login'])&& $_GET['login'] == 'erro2'){ ?> 
                <div class="text-danger">
                  Por favor, faça login antes de acessar as páginas protegidas
                </div>
                
                <? } ?>


                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>