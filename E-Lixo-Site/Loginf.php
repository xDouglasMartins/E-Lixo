<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/Login.css" rel="stylesheet">
  </head>

  <body class="bg-light">
  <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['msgcad'])){
			echo $_SESSION['msgcad'];
			unset($_SESSION['msgcad']);
		}
	?>
    <form class="form-signin" method="POST" action="valida.php">
      <div class="text-center mb-4">
        <img class="mb-4" src="img/imgCadastro.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <p>Caso ja possua cadastro entre em sua conta. </p>
      </div>
      

      <div class="mb-3">
        <input type="text" name="usuario" class="form-control" placeholder="Nick" required autofocus>
        <label for="usuario">Nick Usuario</label>
      </div>

      <div class="mb-3">
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
            <p>Você ainda não possui uma conta?</p>
			      <a href="testeCadastro.php">Faça seu cadastro.</a>
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit"name="btnLogin" value="Acessar">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2021</p>
    </form>
  </body>
</html>
