<?php

	class Asignatura{

		private $idAsignatura;
		private $nombreAsignatura;

		public function __construct($idAsignatura,
					$nombreAsingatura){
			$this->idAsignatura = $idAsignatura;
			$this->nombreAsingatura = $nombreAsingatura;
		}
		public function getCodigoAsignatura(){
			return $this->idAsignatura;
		}
		public function setCodigoAsignatura($idAsignatura){
			$this->idAsignatura = $idAsignatura;
		}
		public function getNombreAsignatura(){
			return $this->nombreAsingatura;
		}
		public function setNombreAsignatura($nombreCategoria){
			$this->nombreAsingatura = $nombreAsingatura;
		}


		public static function generarListaAsignaturas($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				"SELECT id_asignaturas, nombre_asignatura
				FROM tbl_asignaturas 
				ORDER BY nombre_asignatura"
			);
			echo '<select name="" id="slcAsignaturas" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["id_asignaturas"].'">'.
					$fila["nombre_asignatura"].'</option>';
			}
			echo '</select>';

		}

	}
?>