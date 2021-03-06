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

    <title>Ingreso de Calificaciones</title>

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
        <a class="navbar-brand" href="http://localhost/Proyecto/index.php" title="Volver a la p??gina principal">Instituto Privado Dr. Ram??n Rosa</a>
      </div>

      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          
          <li class="menuItem"><a href="/Proyecto/Docente/docente.php">Volver a Docente</a></li>
        </ul>
        
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

  <!-- inicio div Ingreso de Calificaciones -->

  <div id=IngresoCalificaciones" class="content-section-b" style="border-top: 0">
    <div class="container">

      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Ingreso de Calificaciones</h2>
      </div>
      
      <div class="row">

        <div class="col-sm-12 wow fadeInDown text-center">
        <form class="form-horizontal">

        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <label for="txtCodEstudiante" class="col-lg-4 control-label">Nombre del Estudiante</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" id="txtCodEstudiante" placeholder="Ingrese el codigo del estudiante" required autofocus>
            </div>
          </div> 
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
              <label for= "txtCodDocente" class="col-lg-4 control-label">Nombre del Docente</label>
              <div class="col-lg-6">
                <input type="text" class="form-control" id="txtCodDocente" placeholder="Ingrese el codigo del docente">
              </div>
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
              <label class="col-md-4 control-label" for="slcAsignatura">Seleccione la Asignatura</label>
              <div class="col-md-6">
                <select id="slcAsignatura" name="slcAsignatura" class="form-control">
                  <option value="1">ej.; matem??ticas</option>
                  <option value="2">ej.; espa??ol</option>
                </select>
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
              <label class="col-md-4 control-label" for="slcParcial">Seleccione el Parcial</label>
              <div class="col-md-6">
                <select id="slcParcial" name="slcParcial" class="form-control">
                  <option value="1">Primero</option>
                  <option value="2">Segundo</option>
                  <option value="3">Tercero</option>
                  <option value="4">Cuarto</option>
                </select>
              </div>
            </div>
          </div>          
        </div>

        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtNumExamen">N??mero de Examen</label>  
              <div class="col-md-6">
              <input id="txtNumExamen" name="txtNumExamen" type="text" placeholder="ej.: primer examen" class="form-control input-md" required="">
              </div>-
            </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtNotaExamen">Examen</label>  
              <div class="col-md-4">
              <input id="txtNotaExamen" name="txtNotaExamen" type="text" placeholder="Ingrese nota examen" class="form-control input-md" required="">
              </div>
            </div>
        </div>

        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <label class="col-md-4 control-label" for="txtNumAcumulativo">N??mero de Acumulativo</label>  
              <div class="col-md-6">
              <input id="txtNumAcumulativo" name="txtNumAcumulativo" type="text" placeholder="ej.: primer acumulativo" class="form-control input-md" required="">
              </div>
            </div>
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <label class="col-md-4 control-label" for="txtAcumulativo">Acumulativo</label>  
                <div class="col-md-5">
                <input id="txtAcumulativo" name="txtAcumulativo" type="text" placeholder="Ingrese nota acumulativo" class="form-control input-md" required="">
                </div>
              </div>
        </div>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
           <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm">Nota Total Examenes</button>
              </span>
              <input id="txtTotalExamenes" name="txtTotalExamenes" type="text" placeholder="Autom??tico" class="form-control input-md">  
            </div>    
          </div>
          </div>


          <div class="form-group">
           <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm">Nota Total Acumulativo</button>
              </span>
              <input id="txtTotalAcumulativo" name="txtTotalAcumulativo" type="text" placeholder="Autom??tico" class="form-control input-md">  
            </div>
            </div>
          </div>


          <div class="form-group">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm">Promedio Parcial</button>
                </span>
                <input id="txtPromedioParcial" name="txtPromedioParcial" type="text" placeholder="Autom??tico" class="form-control input-md">
              </div>    
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm">Nota Asignatura</button>
                </span>
                <input id="txtNotaAsignatura" name="txtNotaAsignatura" type="text" placeholder="Autom??tico" class="form-control input-md">
              </div>    
            </div>
          </div>
    
          <div class="form-group">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm">Promedio Final</button>
                </span>
                <input id="txtPromedioFinal" name="txtPromedioFinal" type="text" placeholder="Autom??tico" class="form-control input-md">   
              </div>    
            </div>
          </div>

          </div>

        </div> 
        </div>
        </form> 
        </div>  
      </div><!-- /.row -->
    </div>
  </div> 
<!-- fin div Distribuciones -->
  
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