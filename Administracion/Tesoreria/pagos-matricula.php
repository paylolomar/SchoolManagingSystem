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

    <title>Pagos de Matricula</title>

    <!-- inicio de todas las importaciones de la plantilla -->
     <link rel="stylesheet" href="../../css/estilos.css" />


    <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
  <link href="../../css/general.css" rel="stylesheet">
  <link href="../../css/custom.css" rel="stylesheet">
  <link href="../../css/owl.carousel.css" rel="stylesheet">
    <link href="../../css/owl.theme.css" rel="stylesheet">
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/magnific-popup.css"> 
  <script src="../../js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
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
        <a class="navbar-brand" href="http://localhost/Proyecto/index.php" title="Volver a la p??gina principal">Instituto Privado Dr. Ram??n Rosa</a>
      </div>

      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav"> 
          <li class="menuItem"><a href="/Proyecto/administracion/tesoreria/pagos-principal.php">Volver a Menu de Pagos</a></li>   
        <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Salir del sistema</a></li>
                    <li><a href="#">Perf??l</a></li>
                    <li><a href="#">Opciones</a></li>
                  </ul>
              </li>
            </ul>

      </div>

       
    </div>
  </nav> 
  <!-- NavBar fin-->

  <!-- inicio div administracion -->
  <div id="Tesorer??a" class="content-section-b" style="border-top: 0">
    <div class="container">

      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Pagos de matriculas</h2>
        <p class="lead" style="margin-top:0">Seleccione una opci??n de pago:</p>
        
      </div>
      
      <div class="row">




      








        <div class="col-sm-10 wow fadeInDown text-center">
          <!--Quite div de pagos matriculas-->
           <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->

           <form method="post" class="pagos-matricula" class="form-horizontal">
  <fieldset>
    <legend>Datos del alumno</legend>
    <div class="form-group">
      <label for="inputAlumno" class="col-lg-2 control-label">Alumno:</label>
      <div class="col-lg-10">
        <input type="text" class="inputAlumno form-control"  name="inputAlumno" placeholder="Alumno">
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Curso</label>
      <div class="col-lg-10">
        <select class="form-control" id="selectCurso" placeholder="Seleccione una opcion">
          <option>Seleccione una opcion</option>
          <option>primer curso</option>
          <option>segundo curso</option>
          <option>tercer curso</option>
          <option>I bachillerato Ciencias y Letras</option>
          <option>II bachillerato Ciencias y letras</option>
        </select>
        <br>
       
      </div>
    </div>
    </div>

    
    <!--<div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div> -->
    <!--<div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div> -->
   
  </fieldset>
</form>
        </div><!-- /.col-lg-4 -->











 <div class="col-sm-10 wow fadeInDown text-center">
          
           <form class="form-horizontal">
  <fieldset>
    <legend>Datos de pago</legend>
    <div class="form-group">
      <label for="inputFecha" class="col-lg-2 control-label">Fecha:</label>
      <div class="col-lg-10">
        <input type="text" class="inputMes form-control" name="inputMes" placeholder="Fecha">
      </div>
    </div>
    <div class="form-group">
      <label for="inputMonto" class="col-lg-2 control-label">Monto:</label>
      <div class="col-lg-10">
        <input type="text" class="inputMonto form-control" name="inputMonto" placeholder="Monto"/>
        
      </div>
    </div>
    
    <a class="boton_registrar btn btn-default btn-sm" style="background-color:#1A242F; border-color:#FFFFFF">Registrar</a>

    
    </div>
    </div>
  </fieldset>
</form>
        </div><!-- /.col-lg-4 -->



 










      
        
        
      </div><!-- /.row -->
    </div>
  </div> 
  <!-- fin div administracion -->
  
  <div  class="content-section-c ">
    <div class="container">
      <div class="row">
      
      <div class="col-md-6 col-md-offset-3 text-center white">
        <h2>Dejan??s un comentario</h2>
        <p class="lead" style="margin-top:0">Solucionaremos cualquier problema que tengas.</p>
      </div>
      
      <div class="col-md-6 col-md-offset-3 text-center">
        <div class="mockup-content">
            <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
              <button type="button "><span>H??z click aqu??</span></button>
              <div class="morph-content">
                <div>
                  <div class="content-style-form content-style-form-4 ">
                    <h2 class="morph-clone">H??z click aqu??</h2>
                    <form>
                      <p><label>Nombre de usuario:</label><input type="text"/></p>
                      <p><label>H??blanos de tu problema:</label><input type="text"/></p>
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
              <h1 class="footer-title">Universidad Nacional Aut??noma de Honduras</h1>
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

    <script type="text/javascript" src="../../js/funcionesPagosMatricula.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- JavaScript -->
    <script src="../../js/jquery-1.10.2.js"></script>
    <script src="../../js/bootstrap.js"></script>
  <script src="../../js/owl.carousel.js"></script>
  <script src="../../js/script.js"></script>
  <!-- StikyMenu -->
  <script src="../../js/stickUp.min.js"></script>
  <!--<script type="text/javascript">-->






  <script type="text/javascript">
    jQuery(function($) {
    $(document).ready( function() {
      $('.navbar-default').stickUp();
      
    });
    });
  
  </script>
  <!-- Smoothscroll -->
  <script type="text/javascript" src="../../js/jquery.corner.js"></script> 
  <script src="../../js/wow.min.js"></script>
  <script>
   new WOW().init();
  </script>
  <script src="../../js/classie.js"></script>
  <script src="../../js/uiMorphingButton_inflow.js"></script>
  <!-- Magnific Popup core JS file -->
  <script src="../../js/jquery.magnific-popup.js"></script> 
  

</body>

</html>
