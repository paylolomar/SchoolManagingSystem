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

    <title>Administración, Bienvenido</title>

    <!-- inicio de todas las importaciones de la plantilla -->
    <link href="/proyecto/css/bootstrap.min.css" rel="stylesheet">
 	<link href="/proyecto/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="/proyecto/css/general.css" rel="stylesheet">
	<link href="/proyecto/css/custom.css" rel="stylesheet">
	<link href="/proyecto/css/owl.carousel.css" rel="stylesheet">
    <link href="/proyecto/css/owl.theme.css" rel="stylesheet">
	<link href="/proyecto/css/style.css" rel="stylesheet">
	<link href="/proyecto/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="/proyecto/css/magnific-popup.css"> 
	<script src="/proyecto/js/modernizr-2.8.3.min.js"></script>  
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
	<!-- fin de todas las importaciones de la plantilla -->
</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    
	
	<!-- NavBar principio-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img class="img-circle" src="/Proyecto/img/RR.jpg" width="50" height="50">
				<a class="navbar-brand" href="#home">Instituto Dr. Ramón Rosa</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="/Proyecto/administracion/administracion-principal.php#administrar">Empezar a Administrar</a></li>
					<li class="menuItem"><a href="/Proyecto/administracion/tesoreria/administracion-tesoreria.php">Tesorería</a></li>
					<li class="menuItem"><a href="/Proyecto/administracion/secretaria/administracion-secretaria.php">Secretaría</a></li>
					<li class="menuItem"><a href="/Proyecto/administracion/cuentas/administracion/administracion-cuentas.php">Cuentas</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
	        		<li class="dropdown">
	          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
	          			<ul class="dropdown-menu">
	            			<li><a href="#">Salir del sistema</a></li>
	            			<li><a href="#">Perfíl</a></li>
	            			<li><a href="#">Opciones</a></li>
	            		</ul>
	        		</li>
	      		</ul>

			</div>

		   
		</div>
	</nav> 
	<!-- NavBar fin-->

	<!-- inicio div administracion -->
	<div id="administrar" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Administrar</h2>
				<p class="lead" style="margin-top:0">Seleccione una opción</p>
				
			</div>
			
			<div class="row">
			
				<div class="col-sm-4 wow fadeInDown text-center">
				  <a title="Tesorería" href="/Proyecto/administracion/tesoreria/administracion-tesoreria.php"><img  class="rotate" src="../../img/icon/tesoreria.png" alt="Generic placeholder image" height="100" width="100"></a>
				  <h3>Tesorería</h3>
				  <p class="lead">En este apartado usted será capáz de administrar todo lo relacionado con la tesorería institucional.</p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <a title="Secretaría" href="/Proyecto/administracion/secretaria/administracion-secretaria.php"><img  class="rotate" src="../../img/icon/secretaria.png" alt="Generic placeholder image" height="100" width="100"></a>
				  <h3>Secretaría</h3>
				   <p class="lead">En este apartado usted será capáz de administrar todo lo relacionado con la secretaría institucional.</p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <a title="Cuentas" href="/Proyecto/administracion/cuentas/administracion-cuentas.php"><img  class="rotate" src="../../img/icon/cuentas.png" alt="Generic placeholder image" height="100" width="100"></a>
				   <h3>Cuentas</h3>
					<p class="lead">En este apartado usted será capáz de administrar, borrar y crear cuentas en el sistema.</p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
		</div>
	</div>
	<!-- fin div administracion -->
	
	<div  class="content-section-c ">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Dejanós un comentario</h2>
				<p class="lead" style="margin-top:0">Solucionaremos cualquier problema que tengas.</p>
			</div>
			
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Ház click aquí</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Ház click aquí</h2>
										<form>
											<p><label>Nombre de usuario:</label><input type="text"/></p>
											<p><label>Háblanos de tu problema:</label><input type="text"/></p>
											<p><button>Comentar</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>
		</div>
	</div>	
	
	
	
	
	
	
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Universidad Nacional Autónoma de Honduras</h3>
            <p>Grupo numero <br/>
              integrantes:<br/>
             	blah 1 <br/>
             	blah 2 <br/>
             	blah 3 <br/>
             	blah 4 <br/>
             	blah 5 <br/>
			</p>
			
			<!-- LICENSE -->
			<a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy"
		   property="dc:title">Flatfy Theme </a> by
		   <a rel="dc:creator" href="http://www.andreagalanti.it"
		   property="cc:attributionName">Andrea Galanti</a>
		   is licensed to the public under 
		   <BR>the <a rel="license"
		   href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
		   Commons Attribution 3.0 License - NOT COMMERCIAL</a>.
		   
	   
          </div> <!-- /col-xs-7 -->

          
        </div>
      </div>
    </footer>

    <script src="/proyecto/js/jquery-1.10.2.js"></script>
    <script src="/proyecto/js/bootstrap.js"></script>
	<script src="/proyecto/js/owl.carousel.js"></script>
	<script src="/proyecto/js/script.js"></script>
	<script src="/proyecto/js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<script type="text/javascript" src="/proyecto/js/jquery.corner.js"></script> 
	<script src="/proyecto/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="/proyecto/js/classie.js"></script>
	<script src="/proyecto/js/uiMorphingButton_inflow.js"></script>
	<script src="/proyecto/js/jquery.magnific-popup.js"></script>

</body>

</html>
