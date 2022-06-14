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

    <title>Distribuciones</title>

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
          
          <li class="menuItem"><a href="/Proyecto/administracion/secretaria/secretaria-instituto.php">Volver a Instituto</a></li>
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

  <!-- inicio div Distribuciones -->

  <div id="Distribuciones" class="content-section-b" style="border-top: 0">
    <div class="container">

      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Distribuciones</h2>
      </div>
      
      <div class="row">

        <div class="col-sm-12 wow fadeInDown text-center">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="txtNomCurso" class="col-lg-4 control-label">Nombre del Curso</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="txtNomCurso" placeholder="Inserte el codigo del curso" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="txtNomAsignatura" class="col-lg-4 control-label">Nombre de la Asignatura</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="txtNomAsignatura" placeholder="Ingrese el codigo de la asignatura" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="txtNomSección" class="col-lg-4 control-label">Nombre de la Sección</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="txtNomSección" placeholder="Ingrese el nombre de la sección" required="">
            </div>
          </div>

          <div class="form-group">
            <label for="txtCodEstudiante" class="col-lg-4 control-label">Nombre del Estudiante</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="txtCodEstudiante" placeholder="Ingrese el codigo del estudiante">
            </div>
          </div> 

          <div class="form-group">
              <label for= "txtCodDocente" class="col-lg-4 control-label">Nombre del Docente</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="txtCodDocente" placeholder="Ingrese el codigo del docente">
              </div>
          </div>

         
          <div class="form-group">
             <label for="txtCodEdificio" class="col-lg-4 control-label">Código del Edificio</label>
             <div class="col-lg-5">
               <input type="text" class="form-control" id="txtCodEdificio" placeholder="Ingrese código asignado al Edificio" red="">
             </div>
          </div>

          <div class="form-group">
            <label for="slcJornada" class="col-lg-4 control-label">Jornada</label>
            <div class="col-lg-5">
              <select class="form-control" id="slcJornada">
                <option>Matutino</option>
                <option>Vespertino</option>
              </select>
            </div>
          </div><br> 
           
          <div class="form-group">
            <div class="col-lg-4 col-lg-offset-4">
              <button type="submit" class="btn btn-primary btn-sm">Asignar</button>
              <button type="reset" class="btn btn-default btn-sm">Cancelar</button>
            </div>
          </div>
        </form> 
        </div> 
        <div class="media">
             <a href="#" class="pull-left">
                <img  class="rotate" src="../../img/icon/admiracion.png" alt="Generic placeholder image" height="20" width="20">
             </a>
             <div class="media-body">
               <p class="help-block" style="font-size:10pt">En este formulario, sus campos se llenaran a partir de la base de datos.</p>
             </div>
        </div>  
      </div><!-- /.row -->
    </div>
  </div> 
<!-- fin div Distribuciones -->
  
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
                <li>Gabriel Mejía</li>
                <li>Gipsy Ortiz</li>
                <li>Jennifer Escoto</li><br>
                <li>Flatfy Theme: Andrea Galanti</li>
                <li>Creative Commons Attribution 3.0 License - NOT COMMERCIAL</li><br>
          </div>
    </footer>

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