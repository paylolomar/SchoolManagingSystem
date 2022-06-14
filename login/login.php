<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="/proyecto/css/bootstrap.min.css" rel="stylesheet">
    <link href="/proyecto/css/signin.css" rel="stylesheet">
  </head>

<body>
  <div class="container">
      <div class="form-signin">
        <h2 class="form-signin-heading">Bienvenido, Identificate para ingresar</h2>
        <label for="NombreUsuario" class="sr-only">Nombre de Usuario</label>
        <input type="email" id="NombreUsuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="contrasena" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> No cerrar sesión en este equipo
          </label>
        </div>
        <button id="btn-login" class="btn btn-lg btn-primary btn-block" type="button" onclick="redireccionar();">ingresar</button>
        <div id="resultado"></div>
      </div>
       
  </div> 
  
  <script type="text/javascript" src="/Proyecto/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="/Proyecto/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/Proyecto/js/login.js"></script>
  <script language="JavaScript" type="text/javascript">
    var pagina="/Proyecto/administracion/administracion.php"
    function redireccionar(){
      location.href=pagina
     } 
    setTimeout ("redireccionar()", 20000);
  </script>

</body>

</html>
