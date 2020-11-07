<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Quicaña Quenta Douglas Emmanuel">
	<meta name="keywords" content="FERRETERIA">
	<meta name="name" content="pagina de prueba para Practicas">
	<link rel="img" href="img/login2.png">
  
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Document</title>
</head>
  <body background="img/fondo.png">
    <section class="container">
      <div class="row my-5 " >

            <div class="container bg-secondary col-sm-12 col-md-12 col-lg-4 col-xl-4 col-12 ">
              <form class="login" action="lib/checkLogin.php" method="POST">
              <?php
              if(isset($_GET['msg'])){
                echo "<center><div class='alert alert-danger'><span>".$_GET['msg']."</span></div></center>";
              }
              ?>
              <h2 class="display-5 text-center mb-3"></h2>
              <div> <img src="img/login2.png" width="230px" class="rounded mx-auto d-block mb-3"></div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="introdusca usuario "name="user" id="user">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" placeholder="introdusca contraseña" name="pass" id="pass">
              </div>
              <div class="form-group">
                <button type="password" name="submit" id="submit" class="btn btn-primary btn-block btn-lg btn-block">Iniciar secion</button>
                <span><a class="btn btn-danger btn-block btn-lg btn-block" href="index.php">Limpiar datos</a></span>
              </div>

              <div class="form-group">
                <div class="lead text-info text-center">No tienes cuenta?
                <a href="public/formulario.php" class="lead text-right text-primary font-weight-normal"> Crear cuenta</a>
                </div>

             </div>
      </div>

      </form>
    </div>
  </section>
<footer><div class="jumbotron text-center mb-0">
              <small class="lead">&copy; TODOS LOS DERECHOS RESERVADOS </small><p class="lead mb-o">DOUGLAS EMMANUEL QUICAÑA QUENTA</p>  
              
              <br class="text-danger"> <br>La Paz-Bolivia <br>GESTION 2020

</div>
</footer>
	<scrip src="js/jquery-3.4.1.min.js"></script>
		<scrip src="js/popper.min.js"></script>
			<scrip src="js/bootstrap.min.js"></script>
      <scrip src="js/codigo_valida7.js"></script>

</body>

</html>