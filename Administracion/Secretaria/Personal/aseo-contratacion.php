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

    <title>Nuevo Personal Aseo</title>

    <!-- inicio de todas las importaciones de la plantilla -->
    <link rel="stylesheet" href="../../../css/estilos.css" />

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
		<form method="post" class="aseo-contratacion" class="form-vertical">
			  <fieldset>
			    <legend>Nuevo Personal de Aseo</legend>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Nombre Completo</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" name="txt-usuario" placeholder="Ej. Juan Orlando Hernandez Alvarado">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Numero de Identidad</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" name="txt-id" placeholder="Ej. 0801-1995-05088">
			      </div>
			    </div>
				
				<div class="form-group">
			      <label for="select" class="col-lg-2 control-label">Genero</label>
			      
			      <div class="col-lg-10">
			        <select class="form-control" id="select">
			          <option>Masculino</option>
			          <option>Femenino</option>
			        </select>
			        <br>

			        <label class="col-lg-2 control-label">Distrubición de aséo</label>
			        	<br />
						<input name="cbprimero" type="checkbox" />Pasillos y baños
						<br />
						<input name="cbsegundo" type="checkbox" />Aulas
						<br />
						<input name="cbtercero" type="checkbox" />Nivel Administrativo
						<br />
						<input name="cbprimero" type="checkbox" />Cafetería
						<br />
						<input name="cbsegundo" type="checkbox" />Direccíon
						</br>
			        

			        <label for="select" class="col-lg-2 control-label">Edificio Asignado</label>
			        <select class="form-control">
			          <option>Colegio</option>
			          <option>Escuela</option>
			        </select>	

			      </div>
			    </div>

			    <div class="form-group">
			      <label for="txt-Area" class="col-lg-2 control-label">Observaciones</label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" name="txt-Area"></textarea>
			        <span class="help-block">cualquier tipo de observacion incluidas: medicas, conductivas, etc.</span>
			      </div>
			    </div>
				
				<div class="btn-agregar btn-group-justified">
				<div class="ultimo">
	                <div class="msg"></div>
	                <a class="btn-agregar btn btn-default btn-sm" style="background-color:#1A242F;						border-color:#FFFFFF">Contratar</a>
					<a class="btn btn-default btn-sm" href="/Proyecto/administracion/secretaria/inserciones.php" style="background-color:#798D8F; border-color:#FFFFFF">Cancelar</a>
	            </div>	
				</div>

				<!--<div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default">Cancelar</button>
			        <button type="submit" class="btn btn-primary">Agregar Docente</button>
			      </div>
			    </div>-->
			  </fieldset>
			</form>

			<!-- JavaScript -->
    		<script src="/proyecto/js/jquery-1.10.2.js"></script>
    		<script src="/proyecto/js/bootstrap.js"></script>
			<script src="/proyecto/js/owl.carousel.js"></script>
			<script src="/proyecto/js/script.js"></script>

			<script type="text/javascript">
	  			jQuery(function($) {
					$(document).ready( function() {
		  				$('.navbar-default').stickUp();
		  
					});
	  			});
			</script>

			 <!-- Validaciones -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="../../../js/funciones_aseo_contratacion.js"></script>
</body>

</html>