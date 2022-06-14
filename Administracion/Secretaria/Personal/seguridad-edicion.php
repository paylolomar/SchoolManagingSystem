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

    <title>Nuevo Personal de Seguridad</title>

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
			  <fieldset>
			    <legend>Editar Personal de Seguridad</legend>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Ingrese el Codigo del personal</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputEmail" placeholder="Ej. 4158720">
			        <button>Buscar</button>
			      </div>
			    </div>

			      <label class="col-lg-2 control-label">Nombre Completo</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputEmail" placeholder="Ej. Juan Orlando Hernandez Alvarado">
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Numero de Identidad</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputPassword" placeholder="Ej. 0801-1995-05088">
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

			        <label class="col-lg-2 control-label">Turnos</label>
			        	<br />
						<input name="cbprimero" type="checkbox" />24 Horas 
						<br />
						<input name="cbsegundo" type="checkbox" />8 Horas 
						<br />
						<input name="cbtercero" type="checkbox" />12 Horas
						<br />
					
					<label for="select" class="col-lg-2 control-label">Dias De trabajo</label>
			        	<br />
						<input name="cbprimero" type="checkbox" />Lunes
						<br />
						<input name="cbsegundo" type="checkbox" />Martes 
						<br />
						<input name="cbtercero" type="checkbox" />Miércoles
						<br />
						<input name="cbprimero" type="checkbox" />Jueves
						<br />
						<input name="cbsegundo" type="checkbox" />Viernes 
						<br />
						<input name="cbtercero" type="checkbox" />Sábado
						<br />
						<input name="cbtercero" type="checkbox" />Domingo
						<br />						
			        

			        <label for="select" class="col-lg-2 control-label">Edificio Asignado</label>
			        <select class="form-control">
			          <option>Colegio</option>
			          <option>Escuela</option>
			        </select>	

			      </div>
			    </div>

			    <div class="form-group">
			      <label for="textArea" class="col-lg-2 control-label">Observaciones</label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" id="textArea"></textarea>
			        <span class="help-block">cualquier tipo de observacion incluidas: medicas, conductivas, etc.</span>
			      </div>
			    </div>
				
				<div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default">Cancelar</button>
			        <button type="submit" class="btn btn-warning">Eliminar de Personal de Seguridad</button>
			        <button type="submit" class="btn btn-primary">Agregar a Personal de Seguridad</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
</body>

</html>