<?php
	include_once("../class/class_conexion.php");
	session_start();
	$conexion= new conexion();
	switch ($_GET["accion"]) {
		case '1': //Acceder
			
			$nombre =$_POST["NombreUsuario"];
			$contrasena= $_POST["contrasena"];

			

			$codigo = $conexion->ejecutarInstruccion(
				'SELECT id_tipo_cuenta, nombre_cuenta, contrasena_cuenta FROM tbl_cuentas 
				WHERE contrasena_cuenta ='."'".$contrasena."'".'AND nombre_cuenta ='."'".$nombre."'");
			
			$cantidad = $conexion->cantidadRegistros($codigo);
			$fila = $conexion->obtenerFila($codigo);
			$conexion->liberarResultado($codigo);
			
			if ($cantidad == 0 || !$cantidad){  
				echo "Nombre de usuario o contraseña equivocada."."<br>";
			} else {
				echo "Bienvenido señor"."<br>";
				echo $fila["nombre_cuenta"]."<br>";
				$_SESSION["id_tipo_cuenta"] = $fila["id_tipo_cuenta"];
				$_SESSION["nombre_cuenta"] = $fila["nombre_cuenta"];
				$_SESSION["contrasena_cuenta"] = $fila["contrasena_cuenta"];
				
			}

			$conexion->cerrarConexion();
			break;

		case '2'://agregar docente
			$nombreUsuario=$_POST["inputUsuario"];
			$contrasena=$_POST["inputcontrasena"];
			$nombre=$_POST["inputNombre"];
			$numeroIdentidad= $_POST["inputNumeroIdentidad"];
			$edad= $_POST["inputEdad"];
			$genero= $_POST["slcGenero"];
			$cursos= $_POST["cursos"];
			$asignatura= $_POST["slcAsignaturas"];
			$observacionesMedicas= $_POST["textAreaObservacionesMedicas"];

			/*echo $nombreUsuario." ";
			echo $contrasena." ";
			echo $nombre." ";
			echo $numeroIdentidad." ";
			echo $edad." ";
			echo $genero." ";
			
			echo $tamano." ";*/
			//for($i=0;$i<=$tamano-1;$i++){
				//echo " - ".$i." este es igual a ". $cursos[$i];
			//}
			//echo $asignatura." ";
			//echo $observacionesMedicas."<br/>";
			$tamano=count($cursos);

			$contar = $conexion->ejecutarInstruccion('SELECT * FROM tbl_persona');	
			$contar2 = $conexion->ejecutarInstruccion('SELECT * FROM tbl_docente');
			$contar3 = $conexion->ejecutarInstruccion('SELECT * FROM tbl_empleado');
			$contar4 = $conexion->ejecutarInstruccion('SELECT * FROM tbl_cuentas');
			
			$numero = $conexion->cantidadRegistros($contar);
			$numero2 = $conexion->cantidadRegistros($contar2);
			$numero3 = $conexion->cantidadRegistros($contar3);
			$numero4 = $conexion->cantidadRegistros($contar4);
			
			$conexion->liberarResultado($contar);
			$conexion->liberarResultado($contar2);
			$conexion->liberarResultado($contar3);
			$conexion->liberarResultado($contar4);
			
			$id_persona = $numero+1;
			$id_docente = $numero2+1;
			$id_empleado = $numero3+1;
			$id_cuenta = $numero4+1;

			//echo $id_persona." ".$id_docente." ".$id_empleado." ".$id_cuenta." <br/>";
			
			$codigo = $conexion->ejecutarInstruccion(
					'INSERT INTO `tbl_persona`(`id_persona`, `numero_identidad`, `nombre_persona`, `edad`, `Genero`, `datos_medicos`) 
					VALUES ('.$id_persona.",'".$numeroIdentidad."','".$nombre."',".$edad.",'".$genero."','".$observacionesMedicas.');');

			$codigo2 = $conexion->ejecutarInstruccion(
					'INSERT INTO `tbl_docente`(`id_docente`, `id_tipo_docente`, `id_empleado`) 
						VALUES ('.$id_docente.",1,".$id_empleado.')');

			$codigo3 = $conexion ->ejecutarInstruccion(
					'INSERT INTO `tbl_empleado`(`id_empleado`, `id_tipo_empleado`, `id_cuenta`, `id_persona`) 
						VALUES ('.$id_empleado.",2,".$id_cuenta.",".$id_persona.')');

			$codigo4 = $conexion->ejecutarInstruccion(
					'INSERT INTO `tbl_cuentas`(`id_cuenta`, `id_tipo_cuenta`, `nombre_cuenta`, `contrasena_cuenta`) 
						VALUES ('.$id_cuenta.",2,'".$nombreUsuario."','".$contrasena."')'");

			$codigo6 = $conexion->ejecutarInstruccion(
					'INSERT INTO `tbl_asignaturas_docente`(`id_docente`, `id_asignaturas`) 
						VALUES ('.$id_docente.",".$asignatura.')'); 

			for($i=0;$i<=$tamano-1;$i++){
				$codigo5=$conexion->ejecutarInstruccion(
						'INSERT INTO `tbl_docente_cursos`(`id_docente`, `id_curso`) 
							VALUES ('.$id_docente.",".$cursos[$i].')');
				}
					
			$codigo6=$conexion->ejecutarInstruccion(
						'INSERT INTO `tbl_asignaturas_docente`(`id_docente`, `id_asignaturas`) 
							VALUES ('.$id_docente.",".$asignatura.')');

			echo "Se ha añadido con exito su nuevo usuario bienvenido ".$nombreUsuario." tenga un excelente dia"."<br>";
			$conexion->cerrarConexion();

		break;	
		default:
			# code...
			break;
	}
	
?>