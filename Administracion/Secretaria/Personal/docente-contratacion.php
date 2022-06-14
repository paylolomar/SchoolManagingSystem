<?php
include_once("../../../class/class_cursos.php");
include_once("../../../class/class_asignaturas.php");
include_once("../../../class/class_conexion.php");
$conexion = new conexion();
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

    <title>Nuevo Maestro</title>

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
			    <legend>Nuevo Maestro</legend>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Nombre usuario</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputUsuario" placeholder="Ej. Juan_Orlando">
			      </div>
			    </div>
			    <div class="form-group">
			      <label  class="col-lg-2 control-label">Contraseña</label>
			      <div class="col-lg-10">
			        <input type="password" class="form-control" id="inputcontrasena" placeholder="contrasena">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="col-lg-2 control-label">Nombre Completo</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputNombre" placeholder="Ej. Juan Orlando Hernandez Alvarado">
			      </div>
			    </div>
			    <div class="form-group">
			      <label  class="col-lg-2 control-label">Numero de Identidad</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputNumeroIdentidad" placeholder="Ej. 0801-1995-05088">
			      </div>
			    </div>
				
			    <div class="form-group">
			      <label  class="col-lg-2 control-label">Edad</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" id="inputEdad" placeholder="Ej. 15">
			      </div>
			    </div>

				<div class="form-group">
			      <label for="select" class="col-lg-2 control-label">Genero</label>
			      
			      <div class="col-lg-10">
			        <select class="form-control" id="slcGenero">
			          <option value="Masculino">Masculino</option>
			          <option value="Femenino">Femenino</option>
			        </select>
			        <br>

			        <label class="col-lg-2 control-label">Cursos a los que impartirá</label>
			        <div id=chkcursos>
			        	<?php
								Cursos::generarCheckboxesCursos($conexion);
							?>
			        </div>

			        <label for="select" class="col-lg-2 control-label">Clase a impartír</label>
			        <?php
								Asignatura::generarListaAsignaturas($conexion);
							?>
					</div>
			    </div>

			    <div class="form-group">
			      <label for="textArea" class="col-lg-2 control-label">Observaciones</label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" id="textAreaObservacionesMedicas"></textarea>
			        <span class="help-block">cualquier tipo de observacion incluidas: medicas, conductivas, etc.</span>
			      </div>
			    </div>
				
				<div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default">Cancelar</button>
			        <button id="agregardocente" type="button" class="btn btn-primary">Agregar Docente</button>
			      </div>
			    </div>
			    <div id="ver"></div>
			  </fieldset>
			</form>

	
	<script type="text/javascript" src="/Proyecto/js/jquery-1.9.1.min.js"></script>
  	<script type="text/javascript" src="/Proyecto/js/bootstrap.min.js"></script>
  	<script>
  		$(document).ready(function(){
		$("#agregardocente").click(function(){
			
			var cursosSeleccionadas="";
			$("input[name='chkcursos[]']:checked").each(function(){
			cursosSeleccionadas+="cursos[]="+$(this).val()+"&";
			});

			var parametros ="inputUsuario=" +$("#inputUsuario").val() + 
						"&"+"inputcontrasena="+$("#inputcontrasena").val()+
						"&"+"inputNombre="+$("#inputNombre").val()+
						"&"+"inputNumeroIdentidad="+$("#inputNumeroIdentidad").val()+
						"&"+"inputEdad="+$("#inputEdad").val()+
						"&"+"slcGenero="+$("#slcGenero").val()+
						"&"+cursosSeleccionadas+
						"&"+"slcAsignaturas="+$("#slcAsignaturas").val()+
						"&"+"textAreaObservacionesMedicas="+$("#textAreaObservacionesMedicas").val();
						

			//alert(parametros);
			$.ajax({
				url:"/Proyecto/ajax/acciones.php?accion=2",
				method: "POST",
				data: parametros,
				
				success:function(respuesta){
					$("#ver").html(respuesta);

				},

				error:function(){

				}
		});
	});	
});
  	</script>
  	
</body>

</html>
