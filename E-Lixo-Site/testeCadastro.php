<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/Cadastro.css" rel="stylesheet">
  </head>

  <body class="bg-light">
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          </a>
          <a class="py-2 d-none d-md-inline-block" href="Informaçoes_Materiais.html">Infomaçoes sobre Materiais</a>
          <a class="py-2 d-none d-md-inline-block" href="LocaisDescarte.html">Locais para Descarte</a>
          <a class="py-2 d-none d-md-inline-block" href="Cadastro.html">Cadastro</a>
          <a class="py-2 d-none d-md-inline-block" href="Login.html">Login</a>
        </div>
      </nav>

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/imgCadastro.png" alt="" width="72" height="72">
        <h2>Cadastro</h2>
        <p class="lead">Cadastro é importante para mantermos o usuario atualizado das informações e mundanças em nosso</p>
      </div>

      <div class="text-center">
        <div class="text-center">
          <h4 class="mb-3">Informações</h4>
        <?php
          if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
          }
        ?>
            <form method="POST" action="cadastrar.php" class="needs-validation" >

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nome">Primeiro Nome</label>
                  <input type="text" class="form-control" name="nome" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" class="form-control" name="sobrenome" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="nick@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="mb-3">
                <label for="nick">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" name="usuario" placeholder="usuario" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
                <label for="senha">Senha</label>
                <div class="input-group">
                  <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                  <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnCadUsuario" value="Cadastrar">Finalizar Cadastro</button>
            </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small"></footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>