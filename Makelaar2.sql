-- MySQL Script generated by MySQL Workbench
-- Sun Feb 14 17:12:09 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Makelaar3
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Makelaar3
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Makelaar3` DEFAULT CHARACTER SET utf8 ;
USE `Makelaar3` ;

-- -----------------------------------------------------
-- Table `Makelaar3`.`Woningsoort`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Makelaar3`.`Woningsoort` (
  `idWoningsoort` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idWoningsoort`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Makelaar3`.`Woningstatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Makelaar3`.`Woningstatus` (
  `idWoningstatus` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idWoningstatus`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Makelaar3`.`Wijk`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Makelaar3`.`Wijk` (
  `idWijk` INT NOT NULL AUTO_INCREMENT,
  `Naam` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idWijk`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Makelaar3`.`Woningen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Makelaar3`.`Woningen` (
  `idWoningen` INT NOT NULL AUTO_INCREMENT,
  `Stad` VARCHAR(45) NOT NULL,
  `Postcode` VARCHAR(45) NOT NULL,
  `Straatnaam` VARCHAR(45) NOT NULL,
  `Huisnummer` VARCHAR(45) NOT NULL,
  `Verdiepingen` INT NOT NULL,
  `AantalKamers` INT NOT NULL,
  `Vierkantemeter` INT NOT NULL,
  `Woningsoort_idWoningsoort` INT NOT NULL,
  `Woningstatus_idWoningstatus` INT NOT NULL,
  `Wijk_idWijk` INT NOT NULL,
  PRIMARY KEY (`idWoningen`),
  INDEX `fk_Woningen_Woningsoort_idx` (`Woningsoort_idWoningsoort` ASC),
  INDEX `fk_Woningen_Woningstatus1_idx` (`Woningstatus_idWoningstatus` ASC),
  INDEX `fk_Woningen_Wijk1_idx` (`Wijk_idWijk` ASC),
  CONSTRAINT `fk_Woningen_Woningsoort`
    FOREIGN KEY (`Woningsoort_idWoningsoort`)
    REFERENCES `Makelaar3`.`Woningsoort` (`idWoningsoort`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Woningen_Woningstatus1`
    FOREIGN KEY (`Woningstatus_idWoningstatus`)
    REFERENCES `Makelaar3`.`Woningstatus` (`idWoningstatus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Woningen_Wijk1`
    FOREIGN KEY (`Wijk_idWijk`)
    REFERENCES `Makelaar3`.`Wijk` (`idWijk`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Makelaar3`.`Prijs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Makelaar3`.`Prijs` (
  `idPrijs` INT NOT NULL AUTO_INCREMENT,
  `PrijsInfo` INT NOT NULL,
  `GeldigVanaf` DATE NOT NULL,
  `Woningen_idWoningen` INT NOT NULL,
  PRIMARY KEY (`idPrijs`),
  INDEX `fk_Prijs_Woningen1_idx` (`Woningen_idWoningen` ASC),
  CONSTRAINT `fk_Prijs_Woningen1`
    FOREIGN KEY (`Woningen_idWoningen`)
    REFERENCES `Makelaar3`.`Woningen` (`idWoningen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;