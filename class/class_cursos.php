<?php

	class Cursos{

		private $idcurso;
		private $nombrecurso;

		public function __construct($idcurso,
					$nombrecurso){
			$this->idcurso = $idcurso;
			$this->nombrecurso = $nombrecurso;
		}
		public function getCodigoAsignatura(){
			return $this->idcurso;
		}
		public function setCodigoAsignatura($idAsignatura){
			$this->idcurso = $idcurso;
		}
		public function getNombreAsignatura(){
			return $this->nombrecurso;
		}
		public function setNombreAsignatura($nombreCategoria){
			$this->nombrecurso = $nombrecurso;
		}


		public static function generarCheckboxesCursos($conexion){
			
			$resultado = $conexion->ejecutarInstruccion(
				"SELECT id_curso, nombre_curso
				FROM tbl_cursos
				ORDER BY id_curso"
			);

			while ($fila= $conexion->obtenerFila($resultado)){
				echo '<label><input type="checkbox" name="chkcursos[]" 
				value="'.$fila["id_curso"].'">'.$fila["nombre_curso"].'</label><br>';
			}
		}

	}
?>