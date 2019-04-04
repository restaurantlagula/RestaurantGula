<!DOCTYPE html>
<meta charset="utf-8">
<html>
<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<head>
	<title>La Gula</title>
</head>
<header>
	<div>
	<nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="index.php">La Gula </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php#togo">To Go</a></li>
                        <li><a href="index.php#ubi">Ubicacion</a></li>
                        <li><a href="login.php">Reservar</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->
	</div>
</header>
	<body class="BodyLogin">
	<div class="login">
  <h2 class="login-header">Inicio de Sesión</h2>

  <form class="login-container" method="POST" action="validar-login.php">
    <p><input type="email" placeholder="Correo Electronico" name="CorreoElec" required></p>
    <p><input type="password" placeholder="Contraseña" name="Contra" required></p>
    <p><input type="submit" href="validar-login.php" value="Iniciar Sesion" name="entrar"></p>
    <p>¿No eres Usuario de La Gula?</p>
    <a href="registrar.php"><p>Registrate aquí</p></a>
  </form>
</div>
</body>
</html>