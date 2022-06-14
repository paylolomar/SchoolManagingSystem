
<!doctype html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Traslado</title>

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
  <script src="/Proyecto/js/modernizr-2.8.3.min.js"></script> <!-- Modernizr /-->
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
        <a class="navbar-brand" href="http://localhost/Proyecto/index.php" title="Volver a la página principal">Instituto Privado Dr. Ramón Rosa</a>
      </div>

      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          
          <li class="menuItem"><a href="/Proyecto/administracion/secretaria/alumnos/alumnado.php">Volver a Alumnado</a></li>
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

  <!-- inicio div Traslado -->
  
<div id="traslado" class="content-section-b" style="border-top: 0">
    <div class="container">

      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Traslado</h2>   
      </div>
      
      <!-- aqui el contenido  -->
      <div class="row">

        <div class="col-sm-12 wow fadeInDown text-center">
        <form method="post" class="form-horizontal">

    <div class="form-group">
      <label for="inputnomEstudiante" class="col-lg-4 control-label">Nombre del Estudiante:</label>
      <div class="col-lg-5">
        <input type="text" class="nomEstudiante form-control" name="nomEstudiante" placeholder="Ingrese el nombre del estudiante">
      </div>
    </div> 

    <div class="form-group">
      <label for="inputnomEncargado" class="col-lg-4 control-label">Nombre del Encargado:</label>
      <div class="col-lg-5">
        <input type="text" class="nomEncargado form-control" name="nomEncargado" placeholder="Ingrese el nombre del encargado">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputconstancia" class="col-lg-4 control-label">Constancia de Conducta:</label>
      <div class="col-lg-5">
        <input type="text" class="constancia form-control" name="constancia" placeholder="Ingrese la constancia de conducta">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputinstTraslada" class="col-lg-4 control-label">Instituto donde se Traslada:</label>
      <div class="col-lg-5">
        <input type="text" class="instTraslada form-control" name="instTraslada" placeholder="Ingrese el instituto donde se traslada">
      </div>
    </div>
  
  <div class="form-group">
      <label for="select" class="col-lg-4 control-label">Motivo/Razon del Traslado:</label>
      <div class="col-lg-5">
        <select class="form-control" id="select">
          <option>Seleccione una opcion</option>
          <option>Salud</option>
          <option>Trabajo</option>
          <option>Economia</option>
          <option>Cambio de Domicilio</option>
          <option>Otros</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputfecha" class="col-lg-4 control-label">Fecha:</label>
      <div class="col-lg-5">
        <input type="text" class="fecha form-control" name="fecha" placeholder="Ingrese la fecha">
      </div>
    </div>

    <div class="btn-group btn-group-justified">
        <div class="ultimo">
                  <div class="msg"></div>
                  <a class="boton_guardar btn btn-default btn-sm" style="background-color:#1A242F; border-color:#FFFFFF">Guardar</a>
          <a class="btn btn-default btn-sm" href="/Proyecto/administracion/secretaria/alumnos/alumnado.php" style="background-color:#798D8F; border-color:#FFFFFF">Cancelar</a>
              </div>  
      </div>
      </form>
  
      
      </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
  </div> 

  <!-- fin div traslado -->
  
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
          <div class="col-md-6">
              <h1 class="footer-title">Universidad Nacional Autónoma de Honduras</h1>
                <li>Grupo #3</li>
                <li>Integrantes:</li>
                <li>Abigail Fick</li>
                <li>Cristian Umanzor</li>
                <li>Gabriel Mejiga</li>
                <li>Gipsy Ortiz</li>
                <li>Jennifer Escoto</li><br>
                <li>Flatfy Theme: Andrea Galanti</li>
                <li>Creative Commons Attribution 3.0 License - NOT COMMERCIAL</li><br>
          </div>
    </footer>

    <!--Validacion -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="../../../js/funcionesTraslado.js"></script>

    <!-- JavaScript -->
    <script src="/Proyecto/js/jquery-1.10.2.js"></script>
    <script src="/Proyecto/js/bootstrap.js"></script>
  <script src="/Proyecto/js/owl.carousel.js"></script>
  <script src="/Proyecto/js/script.js"></script>
  <script src="/Proyecto/js/stickUp.min.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
    $(document).ready( function() {
      $('.navbar-default').stickUp();
      
    });
    });
  
  </script>
  <script type="text/javascript" src="/Proyecto/js/jquery.corner.js"></script> 
  <script src="/Proyecto/js/wow.min.js"></script>
  <script>
   new WOW().init();
  </script>
  <script src="/Proyecto/js/classie.js"></script>
  <script src="/Proyecto/js/uiMorphingButton_inflow.js"></script>
  <script src="/Proyecto/js/jquery.magnific-popup.js"></script> 

</body>

</html>