<? require_once "validador_acesso.php" ; ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet" >
    <link rel="shortcut icon" href="./img/logo.png">

  </head>

  <body class="fundo-degrade-home">

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row d-flex justify-content-center">
          <div class="card-home">
            <div class="card">
              <div class="card-header d-flex justify-content-center bg-info text-white">
                <h3>Menu</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6 d-flex justify-content-center">
                    <a href="abrir_chamado.php"  class="title_icon_home">
                      <img src="./img/suporte-tecnico.gif" width="70" height="70">
                      <h5 class="title_icon_home">Abrir chamado</h5>
                    </a>
                  </div>
                  <div class="col-6 d-flex justify-content-center">
                    <a href="consultar_chamado.php" class="title_icon_home">
                      <img src="./img/procurar.gif" width="70" height="70">
                      <h5 class="title_icon_home">Consultar chamado</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="d-flex justify-content-center">
            <img src="./img/na_duvida.png"  width="450" height="450" alt="">
        </div>
    </div>
  </body>
</html>