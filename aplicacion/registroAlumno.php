<?php
include('views/loguear.php'); // Includes Login Script
 
if(isset($_SESSION['login_user_sys'])){
header("location: INICIO.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>REGISTRO ALUMNO</title>
<!-- Custom Theme files -->
<link href="../public/CSS/estilos.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
<!--google fonts-->
</head>
<body>
<!--header start here-->
<h1>Registrate para acceder al sistema</h1>
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
			<h3>REGISTRO</h3>
			<form action="#" method="post">
				<input type="text" placeholder="Nombre" required="" name="nombre" required>
				<input type="text" placeholder="Apellidos" required="" name="apellidos" required>
				<input type="text" placeholder="Institucion Eduativa" required="" name="institucion" required>
                <input type="text" placeholder="Matricula" required="" name="matricula" required>
				<input type="text" placeholder="Usuario" required="" name="username" required>
				<input type="password" placeholder="Contraseña" name="password" required>
				<input name="submit" type="submit" value="Registrar">
			</form>
			<div class="clear"> </div>
				<span><?php echo $error; ?></span>
			</div>
			
			
		</div>
	</div>
</div>
<!--header end here-->
<!--copy rights end here-->
<div class="copy-rights w3l">		 	
	<p>© <?php echo date("Y");?> <a href="http://obedalvarado.pw/" target="_blank">Sistemas Web</a>  Todos los derechos reservados | Diseñado por  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>		 	
</div>
<!--copyrights start here-->
 
</body>
</html>