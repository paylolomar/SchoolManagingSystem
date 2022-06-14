
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Matricula</title>

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
      
    <!-- inicio div Matricula -->
  <div id="alumno-matricula" class="content-section-b" style="border-top: 0">
    <div class="container">

      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Matricula</h2>    
      </div>
      
      <!-- aqui el contenido  -->
      <div class="row">
        <div class="col-sm-12 wow fadeInDown text-center">

    <form method="post" class="form-horizontal">

      <div class="form-group">
      <label for="inputnombre" class="col-lg-4 control-label">Nombre Completo:</label>
      <div class="col-lg-5">
        <input type="text" class="nombre form-control" name="nombre" placeholder="Ingrese el nombre del estudiante">
      </div>
      </div>

    <div class="form-group">
      <label for="inputnumeroId" class="col-lg-4 control-label">Numero de Identidad:</label>
      <div class="col-lg-5">
        <input type="text" class="numeroId form-control" name="numeroId" placeholder="Ingrese el numero de identidad">
      </div>
    </div>

    <div class="form-group">
      <label for="inputfechaNaco" class="col-lg-4 control-label">Fecha de Nacimiento:</label>
      <div class="col-lg-5">
        <input type="text" class="fechaNac form-control" name="fechaNac"  placeholder="Ingrese la fecha de nacimiento">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-4 control-label">Genero:</label>
      <div class="col-lg-2">
        <div class="Genero">
          <label>
            <input type="radio" name="optionsgenero" id="optionsgenero1" value="option1" checked="">
            F
            <input type="radio" name="optionsgenero" id="optionsgenero2" value="option2">
            M
          </label>    
        </div>
      </div>
    </div>
     
    <div class="form-group">
      <label for="inputdireccion" class="col-lg-4 control-label">Direccion:</label>
      <div class="col-lg-5">
        <input type="text" class="direccion form-control" name="direccion" placeholder="Ingrese la direccion">
      </div>
    </div>

    <div class="form-group">
      <label for="inputedad" class="col-lg-4 control-label">Edad:</label>
      <div class="col-lg-5">
        <input type="text" class="edad form-control" name="edad" placeholder="Ingrese la edad">
      </div>
    </div>

    <div class="form-group">
      <label for="select" class="col-lg-4 control-label">Jornada:</label>
      <div class="col-lg-5">
        <select class="form-control" id="select">
          <option>Seleccione una opcion</option>
          <option>Matutino</option>
          <option>Vespertino</option>
        </select>
      </div>
    </div>
     
    <div class="form-group">
      <label for="inputcorreoElec" class="col-lg-4 control-label">Correo Electronico:</label>
      <div class="col-lg-5">
        <input type="text" class="correoElec form-control" name="correoElec" placeholder="Ingrese el correo electronico">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputtel" class="col-lg-4 control-label">Telefono:</label>
      <div class="col-lg-5">
        <input type="text" class="tel form-control" name="tel" placeholder="Ingrese el telefono">
      </div>
    </div>

    <div class="btn-group btn-group-justified">
        <div class="ultimo">
                  <div class="msg"></div>
                  <a class="boton_guardar btn btn-default btn-sm" style="background-color:#1A242F; border-color:#FFFFFF">Guardar</a>
                <a class="btn btn-default btn-sm" href="/Proyecto/administracion/secretaria/alumnos/datos-medicos.php" style="background-color:#E28700; border-color:#FFFFFF">Datos Medicos</a>
                <a class="btn btn-default btn-sm" href="/Proyecto/administracion/secretaria/alumnos/alumnado.php" style="background-color:#798D8F; border-color:#FFFFFF">Cancelar</a>
              </div>  
      </div>

        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
  </div> 
  </form>

  <!-- fin div Matricula -->
  
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
  <script type="text/javascript" src="../../../js/funcionesMatricula.js"></script>

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