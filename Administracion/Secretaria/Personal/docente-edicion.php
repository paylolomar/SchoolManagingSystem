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

    <title>Edicion Maestro</title>

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
			    <legend>Editar Docentes</legend>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Ingrese el Codigo de Docente</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputEmail" placeholder="Ej. 4158720">
			        <button>Buscar</button>
			      </div>
			    </div>

			   	
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Nombre Docente</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputEmail" placeholder="Ej. 4158720">
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

			        <label class="col-lg-2 control-label">Cursos a los que impartir??</label>
			        	<br />
						<input name="cbprimero" type="checkbox" />Primero
						<br />
						<input name="cbsegundo" type="checkbox" />Segundo
						<br />
						<input name="cbtercero" type="checkbox" />Tercero
						<br />
						<input name="cbprimero" type="checkbox" />Cuarto
						<br />
						<input name="cbsegundo" type="checkbox" />Quinto
						<br />
						<input name="cbtercero" type="checkbox" />Sexto
						<br />
						<input name="cbprimero" type="checkbox" />S??ptimo
						<br />
						<input name="cbsegundo" type="checkbox" />Octavo
						<br />
						<input name="cbtercero" type="checkbox" />Noveno
						<br />
						<input name="cbprimero" type="checkbox" />Primero Diversificado
						<br />
						<input name="cbsegundo" type="checkbox" />Segundo Diversificado
						<br />
						<input name="cbtercero" type="checkbox" />Tercero Diversificado
						</br>

			        <label for="select" class="col-lg-2 control-label">Clase a impart??r</label>
			        <select class="form-control">
			          <option>Ciencias Naturales</option>
			          <option>Matem??ticas</option>
			          <option>Espa??ol</option>
			          <option>Ciencias Soci??les</option>
			          <option>Computaci??n</option>
			          <option>Ingles</option>
			          <option>Dibujo</option>
			          <option>M??sica</option>
			          <option>Educaci??n F??sica</option>
			          <option>F??sica Elemental</option>
			          <option>Qu??mica</option>
			          <option>Biolog??a</option>
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
			        <button type="submit" class="btn btn-warning">Elminar Docente</button>
			        <button type="submit" class="btn btn-primary">Modificar Docente</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
</body>

</html>
