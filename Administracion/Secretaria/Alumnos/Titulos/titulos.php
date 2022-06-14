<?php

?>
 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Titulo</title>

    <!-- inicio de todas las importaciones de la plantilla -->
    <link href="/Proyecto/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Proyecto/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="/Proyecto/css/general.css" rel="stylesheet">
	<link href="/Proyecto/css/custom.css" rel="stylesheet">
	<link href="/Proyecto/css/owl.carousel.css" rel="stylesheet">
    <link href="/Proyecto/css/owl.theme.css" rel="stylesheet">
	<link href="/Proyecto/css/style.css" rel="stylesheet">
	<link href="/Proyecto/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="/Proyecto/css/magnific-popup.css"> 
	
</head>

<body id="home">
		<form class="form-vertical">
			</br>
			<div class="row">
				<div class="col-sm-12 text-center">
				<a onClick="return popitup('/Proyecto/administracion/secretaria/alumnos/titulos/titulo-nuevo.php')"><button class="btn-primary">Nueva extensión de titulo</button></a>
				</div>
			</div>	
			</br>
			<div class="row">
				<div class="col-sm-12 text-center">
				<a onClick="return popitup('/Proyecto/administracion/secretaria/alumnos/titulos/titulo-busqueda.php')"><button class="btn-primary">Busqueda de titulo</button></a>
				</div>
			</div>

		</form>

		<script  type="text/javascript">
		function popitup(url)
		{
			newwindow=window.open(url,'name','height=660,width=600'); 
			if (window.focus) {newwindow.focus()}
			return false;
		}
		</script>
</body>

</html>