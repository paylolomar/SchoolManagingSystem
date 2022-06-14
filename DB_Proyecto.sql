-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema BD_Proyecto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BD_Proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BD_Proyecto` ;
USE `BD_Proyecto` ;

-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_cuentas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_cuentas` (
  `tipo_cuenta` VARCHAR(45) NULL,
  `id_tipo_cuenta` INT NOT NULL,
  PRIMARY KEY (`id_tipo_cuenta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_cuentas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_cuentas` (
  `id_cuenta` INT NOT NULL,
  `id_tipo_cuenta` INT NOT NULL,
  `nombre_cuenta` VARCHAR(45) NULL,
  `contrasena_cuenta` VARCHAR(45) NULL,
  PRIMARY KEY (`id_cuenta`),
  INDEX `fk_tbl_cuentas_tbl_tipo_cuentas1_idx` (`id_tipo_cuenta` ASC),
  CONSTRAINT `fk_tbl_cuentas_tbl_tipo_cuentas1`
    FOREIGN KEY (`id_tipo_cuenta`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_cuentas` (`id_tipo_cuenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_persona` (
  `id_persona` INT NOT NULL,
  `numero_identidad` VARCHAR(20) NULL,
  `nombre_persona` VARCHAR(45) NULL,
  `edad` VARCHAR(45) NULL,
  `Genero` VARCHAR(45) NULL,
  `datos_medicosl` VARCHAR(500) NULL,
  PRIMARY KEY (`id_persona`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_curso` (
  `id_tipo_curso` INT NOT NULL,
  `tipo_curso` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_curso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_cursos` (
  `id_curso` INT NOT NULL,
  `id_tipo_curso` INT NOT NULL,
  `nombre_curso` VARCHAR(45) NULL,
  PRIMARY KEY (`id_curso`),
  CONSTRAINT `fk_tbl_cursos_tbl_tipo_curso1`
    FOREIGN KEY (`id_tipo_curso`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_curso` (`id_tipo_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_alumnos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_alumnos` (
  `id_alumno` INT NOT NULL,
  `id_cuenta` INT NOT NULL,
  `id_persona` INT NOT NULL,
  `id_curso` INT NOT NULL,
  PRIMARY KEY (`id_alumno`),
  INDEX `fk_tbl_alumnos_tbl_cuentas1_idx` (`id_cuenta` ASC),
  INDEX `fk_tbl_alumnos_tbl_persona1_idx` (`id_persona` ASC),
  INDEX `fk_tbl_alumnos_tbl_cursos1_idx` (`id_curso` ASC),
  CONSTRAINT `fk_tbl_alumnos_tbl_cuentas1`
    FOREIGN KEY (`id_cuenta`)
    REFERENCES `BD_Proyecto`.`tbl_cuentas` (`id_cuenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_alumnos_tbl_persona1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `BD_Proyecto`.`tbl_persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_alumnos_tbl_cursos1`
    FOREIGN KEY (`id_curso`)
    REFERENCES `BD_Proyecto`.`tbl_cursos` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_empleado` (
  `id_tipo_empleado` INT NOT NULL,
  `tipo_empleado` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_empleado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_empleado` (
  `id_empleado` INT NOT NULL,
  `id_tipo_empleado` INT NOT NULL,
  `id_cuenta` INT NOT NULL,
  `id_persona` INT NOT NULL,
  PRIMARY KEY (`id_empleado`),
  INDEX `fk_tbl_empleado_tbl_tipo_empleado1_idx` (`id_tipo_empleado` ASC),
  INDEX `fk_tbl_empleado_tbl_cuentas1_idx` (`id_cuenta` ASC),
  INDEX `fk_tbl_empleado_tbl_persona1_idx` (`id_persona` ASC),
  CONSTRAINT `fk_tbl_empleado_tbl_tipo_empleado1`
    FOREIGN KEY (`id_tipo_empleado`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_empleado` (`id_tipo_empleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_empleado_tbl_cuentas1`
    FOREIGN KEY (`id_cuenta`)
    REFERENCES `BD_Proyecto`.`tbl_cuentas` (`id_cuenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_empleado_tbl_persona1`
    FOREIGN KEY (`id_persona`)
    REFERENCES `BD_Proyecto`.`tbl_persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_cobros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_cobros` (
  `id_tipo_pagos` INT NOT NULL,
  `tipo_pago` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_pagos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_cobros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_cobros` (
  `id_pagos` INT NOT NULL,
  `id_tipo_pagos` INT NOT NULL,
  `id_alumno` INT NOT NULL,
  PRIMARY KEY (`id_pagos`),
  INDEX `fk_tbl_pagos_tipo_pagos1_idx` (`id_tipo_pagos` ASC),
  INDEX `fk_tbl_pagos_tbl_alumnos1_idx` (`id_alumno` ASC),
  CONSTRAINT `fk_tbl_pagos_tipo_pagos1`
    FOREIGN KEY (`id_tipo_pagos`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_cobros` (`id_tipo_pagos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_pagos_tbl_alumnos1`
    FOREIGN KEY (`id_alumno`)
    REFERENCES `BD_Proyecto`.`tbl_alumnos` (`id_alumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_pago` (
  `id_tipo_pago` INT NOT NULL,
  `tipo_pago` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_pago`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_pagos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_pagos` (
  `id_pago` INT NOT NULL,
  `id_tipo_pago` INT NOT NULL,
  `id_empleado` INT NOT NULL,
  PRIMARY KEY (`id_pago`),
  INDEX `fk_tbl_pagos_tbl_tipo_pago1_idx` (`id_tipo_pago` ASC),
  INDEX `fk_tbl_pagos_tbl_empleado1_idx` (`id_empleado` ASC),
  CONSTRAINT `fk_tbl_pagos_tbl_tipo_pago1`
    FOREIGN KEY (`id_tipo_pago`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_pago` (`id_tipo_pago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_pagos_tbl_empleado1`
    FOREIGN KEY (`id_empleado`)
    REFERENCES `BD_Proyecto`.`tbl_empleado` (`id_empleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_docente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_docente` (
  `id_tipo_docente` INT NOT NULL,
  `tipo_docente` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_docente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_docente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_docente` (
  `id_docente` INT NOT NULL,
  `id_tipo_docente` INT NOT NULL,
  `id_empleado` INT NOT NULL,
  PRIMARY KEY (`id_docente`),
  INDEX `fk_tbl_docente_tbl_tipo_docente1_idx` (`id_tipo_docente` ASC),
  INDEX `fk_tbl_docente_tbl_empleado1_idx` (`id_empleado` ASC),
  CONSTRAINT `fk_tbl_docente_tbl_tipo_docente1`
    FOREIGN KEY (`id_tipo_docente`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_docente` (`id_tipo_docente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_docente_tbl_empleado1`
    FOREIGN KEY (`id_empleado`)
    REFERENCES `BD_Proyecto`.`tbl_empleado` (`id_empleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_docente_cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_docente_cursos` (
  `id_docente` INT NOT NULL,
  `id_curso` INT NOT NULL,
  PRIMARY KEY (`id_docente`, `id_curso`),
  INDEX `fk_tbl_docente_cursos_tbl_cursos1_idx` (`id_curso` ASC),
  CONSTRAINT `fk_tbl_maestros_cursos_tbl_docente1`
    FOREIGN KEY (`id_docente`)
    REFERENCES `BD_Proyecto`.`tbl_docente` (`id_docente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_docente_cursos_tbl_cursos1`
    FOREIGN KEY (`id_curso`)
    REFERENCES `BD_Proyecto`.`tbl_cursos` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_asignaturas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_asignaturas` (
  `id_asignaturas` INT NOT NULL,
  `nombre_asignatura` VARCHAR(45) NULL,
  PRIMARY KEY (`id_asignaturas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_asignaturas_docente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_asignaturas_docente` (
  `id_docente` INT NOT NULL,
  `id_asignaturas` INT NOT NULL,
  PRIMARY KEY (`id_docente`, `id_asignaturas`),
  INDEX `fk_tbl_asignaturas_docente_tbl_asignaturas1_idx` (`id_asignaturas` ASC),
  CONSTRAINT `fk_tbl_asignaturas_docente_tbl_docente1`
    FOREIGN KEY (`id_docente`)
    REFERENCES `BD_Proyecto`.`tbl_docente` (`id_docente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_asignaturas_docente_tbl_asignaturas1`
    FOREIGN KEY (`id_asignaturas`)
    REFERENCES `BD_Proyecto`.`tbl_asignaturas` (`id_asignaturas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_asignatura_cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_asignatura_cursos` (
  `id_curso` INT NOT NULL,
  `id_asignaturas` INT NOT NULL,
  PRIMARY KEY (`id_curso`, `id_asignaturas`),
  INDEX `fk_tbl_asignatura_cursos_tbl_asignaturas1_idx` (`id_asignaturas` ASC),
  CONSTRAINT `fk_tbl_asignatura_cursos_tbl_cursos1`
    FOREIGN KEY (`id_curso`)
    REFERENCES `BD_Proyecto`.`tbl_cursos` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_asignatura_cursos_tbl_asignaturas1`
    FOREIGN KEY (`id_asignaturas`)
    REFERENCES `BD_Proyecto`.`tbl_asignaturas` (`id_asignaturas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_calificaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_calificaciones` (
  `id_asignaturas` INT NOT NULL,
  `primer_parcial` INT NULL,
  `segundo_parcial` INT NULL,
  `tercer_parcial` INT NULL,
  `cuarto_parcial` INT NULL,
  `promedio_final` INT NULL,
  `recuperacion` INT NULL,
  PRIMARY KEY (`id_asignaturas`),
  INDEX `fk_tbl_calificaciones_tbl_asignaturas1_idx` (`id_asignaturas` ASC),
  CONSTRAINT `fk_tbl_calificaciones_tbl_asignaturas1`
    FOREIGN KEY (`id_asignaturas`)
    REFERENCES `BD_Proyecto`.`tbl_asignaturas` (`id_asignaturas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_alumno_asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_alumno_asignatura` (
  `id_alumno` INT NOT NULL,
  `id_asignaturas` INT NOT NULL,
  PRIMARY KEY (`id_alumno`, `id_asignaturas`),
  INDEX `fk_tbl_alumno_asignatura_tbl_asignaturas1_idx` (`id_asignaturas` ASC),
  CONSTRAINT `fk_tbl_alumno_asignatura_tbl_alumnos1`
    FOREIGN KEY (`id_alumno`)
    REFERENCES `BD_Proyecto`.`tbl_alumnos` (`id_alumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_alumno_asignatura_tbl_asignaturas1`
    FOREIGN KEY (`id_asignaturas`)
    REFERENCES `BD_Proyecto`.`tbl_asignaturas` (`id_asignaturas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_titulo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_titulo` (
  `id_tipo_titulo` INT NOT NULL,
  `tipo_titulo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_titulo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_titulo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_titulo` (
  `id_titulo` INT NOT NULL,
  `id_tipo_titulo` INT NOT NULL,
  `existe_titulo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_titulo`),
  INDEX `fk_tbl_titulo_tbl_tipo_titulo1_idx` (`id_tipo_titulo` ASC),
  CONSTRAINT `fk_tbl_titulo_tbl_tipo_titulo1`
    FOREIGN KEY (`id_tipo_titulo`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_titulo` (`id_tipo_titulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_titulo_alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_titulo_alumno` (
  `id_titulo` INT NOT NULL,
  `id_alumno` INT NOT NULL,
  INDEX `fk_tbl_alumno_titulo_tbl_titulo1_idx` (`id_titulo` ASC),
  PRIMARY KEY (`id_titulo`, `id_alumno`),
  INDEX `fk_tbl_alumno_titulo_tbl_alumnos1_idx` (`id_alumno` ASC),
  CONSTRAINT `fk_tbl_alumno_titulo_tbl_titulo1`
    FOREIGN KEY (`id_titulo`)
    REFERENCES `BD_Proyecto`.`tbl_titulo` (`id_titulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_alumno_titulo_tbl_alumnos1`
    FOREIGN KEY (`id_alumno`)
    REFERENCES `BD_Proyecto`.`tbl_alumnos` (`id_alumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_sancion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_sancion` (
  `id_tipo_sancion` INT NOT NULL,
  `tipo_sancion` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_sancion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_tipo_reportes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_tipo_reportes` (
  `id_tipo_reportes` INT NOT NULL,
  `id_tipo_sancion` INT NOT NULL,
  `tipo_reportes` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo_reportes`),
  INDEX `fk_tbl_tipo_reportes_tbl_tipo_sancion1_idx` (`id_tipo_sancion` ASC),
  CONSTRAINT `fk_tbl_tipo_reportes_tbl_tipo_sancion1`
    FOREIGN KEY (`id_tipo_sancion`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_sancion` (`id_tipo_sancion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`tbl_reportes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`tbl_reportes` (
  `id_tipo_reportes` INT NOT NULL,
  `id_alumno` INT NOT NULL,
  PRIMARY KEY (`id_tipo_reportes`, `id_alumno`),
  INDEX `fk_tbl_reportes_tbl_alumnos1_idx` (`id_alumno` ASC),
  CONSTRAINT `fk_tbl_reportes_tbl_tipo_reportes1`
    FOREIGN KEY (`id_tipo_reportes`)
    REFERENCES `BD_Proyecto`.`tbl_tipo_reportes` (`id_tipo_reportes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_reportes_tbl_alumnos1`
    FOREIGN KEY (`id_alumno`)
    REFERENCES `BD_Proyecto`.`tbl_alumnos` (`id_alumno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
