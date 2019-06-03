SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';



CREATE TABLE IF NOT EXISTS `mydb`.`HistoricoSalvo` (
  `idHistoricoSalvo` INT NOT NULL,
  `idMateria` INT NOT NULL,
  `idUsuario` INT NOT NULL,
  `dataSalva` DATETIME NOT NULL,
  PRIMARY KEY (`idHistoricoSalvo`))
COMMENT = 'i';


CREATE TABLE IF NOT EXISTS `mydb`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `nomeUsuario` VARCHAR(45) NOT NULL,
  `emailUsuario` VARCHAR(45) NOT NULL,
  `senhaUsuario` VARCHAR(45) NOT NULL,
  `HistoricoSalvo_idHistoricoSalvo` INT NOT NULL,
  PRIMARY KEY (`idUsuario`, `HistoricoSalvo_idHistoricoSalvo`),
  INDEX `fk_Usuario_HistoricoSalvo1_idx` (`HistoricoSalvo_idHistoricoSalvo` ASC),
  CONSTRAINT `fk_Usuario_HistoricoSalvo1`
    FOREIGN KEY (`HistoricoSalvo_idHistoricoSalvo`)
    REFERENCES `mydb`.`HistoricoSalvo` (`idHistoricoSalvo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `mydb`.`Materia` (
  `idMateria` INT NOT NULL,
  `titulo` VARCHAR(80) NOT NULL,
  `texto` VARCHAR(9999) NOT NULL,
  `img` VARCHAR(50) NULL,
  `nomeCategoria` VARCHAR(45) NULL,
  `Materiacol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idMateria`))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `mydb`.`CategoriaMateria` (
  `idCategoriaMateria` INT NOT NULL,
  `nomeCategoria` VARCHAR(45) NOT NULL,
  `Materia_idMateria` INT NOT NULL,
  PRIMARY KEY (`idCategoriaMateria`, `Materia_idMateria`),
  INDEX `fk_CategoriaMateria_Materia1_idx` (`Materia_idMateria` ASC),
  CONSTRAINT `fk_CategoriaMateria_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `mydb`.`Administrador` (
  `idAdministrador` INT NOT NULL,
  `nomeAdmin` VARCHAR(60) NOT NULL,
  `emailAdmin` VARCHAR(60) NOT NULL,
  `senhaAdmin` VARCHAR(80) NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idAdministrador`, `Usuario_idUsuario`),
  INDEX `fk_Administrador_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Administrador_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `mydb`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `mydb`.`Administrador_has_Materia` (
  `Administrador_idAdministrador` INT NOT NULL,
  `Administrador_Usuario_idUsuario` INT NOT NULL,
  `Materia_idMateria` INT NOT NULL,
  PRIMARY KEY (`Administrador_idAdministrador`, `Administrador_Usuario_idUsuario`, `Materia_idMateria`),
  INDEX `fk_Administrador_has_Materia_Materia1_idx` (`Materia_idMateria` ASC),
  INDEX `fk_Administrador_has_Materia_Administrador1_idx` (`Administrador_idAdministrador` ASC, `Administrador_Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Administrador_has_Materia_Administrador1`
    FOREIGN KEY (`Administrador_idAdministrador` , `Administrador_Usuario_idUsuario`)
    REFERENCES `mydb`.`Administrador` (`idAdministrador` , `Usuario_idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Administrador_has_Materia_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `mydb`.`Usuario_has_Materia` (
  `Usuario_idUsuario` INT NOT NULL,
  `Materia_idMateria` INT NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`, `Materia_idMateria`),
  INDEX `fk_Usuario_has_Materia_Materia1_idx` (`Materia_idMateria` ASC),
  INDEX `fk_Usuario_has_Materia_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Usuario_has_Materia_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `mydb`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Materia_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `mydb`.`Materia_has_HistoricoSalvo` (
  `Materia_idMateria` INT NOT NULL,
  `HistoricoSalvo_idHistoricoSalvo` INT NOT NULL,
  PRIMARY KEY (`Materia_idMateria`, `HistoricoSalvo_idHistoricoSalvo`),
  INDEX `fk_Materia_has_HistoricoSalvo_HistoricoSalvo1_idx` (`HistoricoSalvo_idHistoricoSalvo`),
  INDEX `fk_Materia_has_HistoricoSalvo_Materia1_idx` (`Materia_idMateria`),
  CONSTRAINT `fk_Materia_has_HistoricoSalvo_Materia1`
    FOREIGN KEY (`Materia_idMateria`)
    REFERENCES `mydb`.`Materia` (`idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Materia_has_HistoricoSalvo_HistoricoSalvo1`
    FOREIGN KEY (`HistoricoSalvo_idHistoricoSalvo`)
    REFERENCES `mydb`.`HistoricoSalvo` (`idHistoricoSalvo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `mydb`.`Administrador_has_CategoriaMateria` (
  `Administrador_idAdministrador` INT NOT NULL,
  `Administrador_Usuario_idUsuario` INT NOT NULL,
  `CategoriaMateria_idCategoriaMateria` INT NOT NULL,
  `CategoriaMateria_Materia_idMateria` INT NOT NULL,
  PRIMARY KEY (`Administrador_idAdministrador`, `Administrador_Usuario_idUsuario`, `CategoriaMateria_idCategoriaMateria`, `CategoriaMateria_Materia_idMateria`),
  INDEX `fk_Administrador_has_CategoriaMateria_CategoriaMateria1_idx` (`CategoriaMateria_idCategoriaMateria` ASC, `CategoriaMateria_Materia_idMateria` ASC),
  INDEX `fk_Administrador_has_CategoriaMateria_Administrador1_idx` (`Administrador_idAdministrador` ASC, `Administrador_Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Administrador_has_CategoriaMateria_Administrador1`
    FOREIGN KEY (`Administrador_idAdministrador` , `Administrador_Usuario_idUsuario`)
    REFERENCES `mydb`.`Administrador` (`idAdministrador` , `Usuario_idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Administrador_has_CategoriaMateria_CategoriaMateria1`
    FOREIGN KEY (`CategoriaMateria_idCategoriaMateria` , `CategoriaMateria_Materia_idMateria`)
    REFERENCES `mydb`.`CategoriaMateria` (`idCategoriaMateria` , `Materia_idMateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;