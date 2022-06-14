<?php

	class Usuario{

		private $id_cuenta;
		private $id_tipo_cuenta;
		private $nombre_cuenta;
		private $contrasena_cuenta;
		

		public function __construct($id_cuenta,
					$id_tipo_cuenta,
					$nombre_cuenta,
					$contrasena_cuenta)
					{
					$this->id_cuenta = $id_cuenta;
					$this->id_tipo_cuenta = $id_tipo_cuenta;
					$this->nombre_cuenta = $nombre_cuenta;
					$this->contrasena_cuenta = $contrasena_cuenta;
		}

		public function getId_Cuenta(){
			return $this->id_cuenta;
		}
		public function setId_Cuenta($id_cuenta){
			$this->id_cuenta = $id_cuenta;
		}
		public function getId_Tipo_Cuenta(){
			return $this->id_tipo_cuenta;
		}
		public function setId_Tipo_Cuenta($id_tipo_cuenta){
			$this->id_tipo_cuenta = $id_tipo_cuenta;
		}
		public function getNombre_Cuenta(){
			return $this->nombre_cuenta;
		}
		public function setNombre_Cuenta($nombre_cuenta){
			$this->nombre_cuenta = $nombre_cuenta;
		}
		public function getContrasena_Cuenta(){
			return $this->contrasena_cuenta;
		}
		public function setContrasena_Cuenta($contrasena_cuenta){
			$this->contrasena_cuenta = $contrasena_cuenta;
		}
		
		
		public function toString(){
			return "Id_Cuenta: " . $this->id_cuenta. 
				" Id_Tipo_Cuenta: " . $this->id_tipo_cuenta. 
				" Nombre_Cuenta: " . $this->nombre_cuenta . 
				" Contrasena_cuenta: " . $this->contrasena_cuenta;
		}

		public static function verificarUsuario($conexion, $usuario,$contrasena){
				$resultado = $conexion->ejecutarInstruccion(
					sprintf("SELECT id_cuenta, id_tipo_cuenta, nombre_cuenta, contrasena_cuenta FROM tbl_cuentas 
					WHERE nombre_cuenta = '%s'
					AND contrasena_cuenta = sha1('%s')",
					stripslashes($usuario),
					stripslashes($contrasena)
				));
				$respuesta = array();

				if($conexion->cantidadRegistros($resultado) >0){
					$fila = $conexion->obtenerFila($resultado);
					$respuesta["codigo_resultado"] = 1;
					$respuesta["resultado"] = "Usuario Existe";
					$respuesta["id_cuenta"] = $fila["id_cuenta"];
					$respuesta["nombre_usuario"] = $fila["nombre_usuario"];
					$respuesta["id_tipo_cuenta"] = $fila["id_tipo_cuenta"];
				}
				else {
					$respuesta["codigo_resultado"] = 0;
					$respuesta["resultado"] = "Usuario no Existe";
				}
				return $respuesta;
		}
	}
?>