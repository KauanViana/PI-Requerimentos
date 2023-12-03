-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ifba_requerimentos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ifba_requerimentos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ifba_requerimentos` DEFAULT CHARACTER SET utf8 ;
USE `ifba_requerimentos` ;

-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`COORDENADOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`COORDENADOR` (
  `id_siape` INT NOT NULL,
  `nome_coordenador` VARCHAR(200) NOT NULL,
  `celular` VARCHAR(20) NOT NULL,
  `email` VARCHAR(225) NOT NULL,
  `coordenação` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_siape`),
  UNIQUE INDEX `id_matricula_UNIQUE` (`id_siape` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`CURSO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`CURSO` (
  `id_curso` INT NOT NULL,
  `curso` VARCHAR(45) NOT NULL,
  `id_coordenador` INT NOT NULL,
  PRIMARY KEY (`id_curso`),
  INDEX `fk_CURSO_COORDENADOR1_idx` (`id_coordenador` ASC),
  CONSTRAINT `fk_CURSO_COORDENADOR1`
    FOREIGN KEY (`id_coordenador`)
    REFERENCES `ifba_requerimentos`.`COORDENADOR` (`id_siape`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`TURMA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`TURMA` (
  `id_turma` INT NOT NULL,
  `turma` INT NOT NULL,
  PRIMARY KEY (`id_turma`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`DISCENTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`DISCENTE` (
  `id_matricula` INT NOT NULL,
  `nome_aluno` VARCHAR(200) NOT NULL,
  `endereço` VARCHAR(225) NOT NULL,
  `celular` VARCHAR(20) NOT NULL,
  `email` VARCHAR(225) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `id_curso` INT NOT NULL,
  `id_turma` INT NOT NULL,
  PRIMARY KEY (`id_matricula`),
  UNIQUE INDEX `id_matricula_UNIQUE` (`id_matricula` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  INDEX `fk_DISCENTE_CURSO1_idx` (`id_curso` ASC),
  INDEX `fk_DISCENTE_TURMA1_idx` (`id_turma` ASC),
  CONSTRAINT `fk_DISCENTE_CURSO1`
    FOREIGN KEY (`id_curso`)
    REFERENCES `ifba_requerimentos`.`CURSO` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_DISCENTE_TURMA1`
    FOREIGN KEY (`id_turma`)
    REFERENCES `ifba_requerimentos`.`TURMA` (`id_turma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`CORES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`CORES` (
  `usuario` INT NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`REQUERIMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`REQUERIMENTO` (
  `id_requerimento` INT NOT NULL,
  `data_incial` DATE NOT NULL,
  `data_final` DATE NOT NULL,
  `nomes_docentes` VARCHAR(225),
  `emails_docentes` VARCHAR(45) NOT NULL,
  `anexo` VARCHAR(45) NOT NULL,
  `motivo` VARCHAR(225) NOT NULL,
  `status` INT NOT NULL,
  `id_discente` INT NOT NULL,
  `id_cores` INT NOT NULL,
  PRIMARY KEY (`id_requerimento`),
  UNIQUE INDEX `idREQUERIMENTO_UNIQUE` (`id_requerimento` ASC) ,
  INDEX `id_aluno_idx` (`id_discente` ASC) ,
  INDEX `fk_REQUERIMENTO_CORES1_idx` (`id_cores` ASC) ,
  CONSTRAINT `id_aluno`
    FOREIGN KEY (`id_discente`)
    REFERENCES `ifba_requerimentos`.`DISCENTE` (`id_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_REQUERIMENTO_CORES1`
    FOREIGN KEY (`id_cores`)
    REFERENCES `ifba_requerimentos`.`CORES` (`usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`DOCENTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`DOCENTE` (
  `id_siape` INT NULL,
  `nome` VARCHAR(200) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_siape`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ifba_requerimentos`.`DOCENTE_TEM_REQUERIMENTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ifba_requerimentos`.`DOCENTE_TEM_REQUERIMENTO` (
  `id_docente` INT NOT NULL,
  `id_requerimento` INT NOT NULL,
  PRIMARY KEY (`id_docente`, `id_requerimento`),
  INDEX `fk_doscentes_has_REQUERIMENTO_REQUERIMENTO1_idx` (`id_requerimento` ASC) ,
  INDEX `fk_doscentes_has_REQUERIMENTO_doscentes1_idx` (`id_docente` ASC) ,
  CONSTRAINT `fk_doscentes_has_REQUERIMENTO_doscentes1`
    FOREIGN KEY (`id_docente`)
    REFERENCES `ifba_requerimentos`.`DOCENTE` (`id_siape`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_doscentes_has_REQUERIMENTO_REQUERIMENTO1`
    FOREIGN KEY (`id_requerimento`)
    REFERENCES `ifba_requerimentos`.`REQUERIMENTO` (`id_requerimento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
