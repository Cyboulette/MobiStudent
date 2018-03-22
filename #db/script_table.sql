-- MySQL Script generated by MySQL Workbench
-- Thu Mar 22 13:58:30 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema model_mlr
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `universites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universites` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  `adresse_postale` VARCHAR(255) NULL DEFAULT NULL,
  `adresse_web` VARCHAR(255) NULL DEFAULT NULL,
  `adresse_mail` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nom_UNIQUE` (`nom` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `diplomes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `diplomes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `universite_id` INT NOT NULL,
  `intitule` VARCHAR(128) NULL DEFAULT NULL,
  `adresse_web` VARCHAR(128) NULL DEFAULT NULL,
  `niveau` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_DIPLOMES_UNIVERSITES` (`universite_id` ASC),
  CONSTRAINT `FK_DIPLOMES_UNIVERSITES`
    FOREIGN KEY (`universite_id`)
    REFERENCES `universites` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `etudiants`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `diplome_id` INT NOT NULL,
  `num_etudiant` BIGINT(4) NOT NULL,
  `nom` VARCHAR(128) NULL DEFAULT NULL,
  `prenom` VARCHAR(128) NULL DEFAULT NULL,
  `email` VARCHAR(128) NULL DEFAULT NULL,
  `cv` VARCHAR(128) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_ETUDIANTS_DIPLOMES` (`diplome_id` ASC),
  UNIQUE INDEX `num_etudiant_UNIQUE` (`num_etudiant` ASC),
  CONSTRAINT `FK_ETUDIANTS_DIPLOMES`
    FOREIGN KEY (`diplome_id`)
    REFERENCES `diplomes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `programmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `programmes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR(128) NULL DEFAULT NULL,
  `explication` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `demande_mobilites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `demande_mobilites` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `etudiant_id` INT NOT NULL,
  `diplome_id` INT NOT NULL,
  `date_depot` DATETIME NULL DEFAULT NULL,
  `etat` CHAR(32) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_DEMANDESMOBILITES_ETUDIANTS` (`etudiant_id` ASC),
  INDEX `FK_DEMANDESMOBILITES_DIPLOMES` (`diplome_id` ASC),
  CONSTRAINT `FK_DEMANDESMOBILITES_ETUDIANTS`
    FOREIGN KEY (`etudiant_id`)
    REFERENCES `etudiants` (`id`),
  CONSTRAINT `FK_DEMANDESMOBILITES_DIPLOMES`
    FOREIGN KEY (`diplome_id`)
    REFERENCES `diplomes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `contrats`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `contrats` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `diplome_id` INT NOT NULL,
  `demande_mobilite_id` INT NOT NULL,
  `programme_id` INT NULL DEFAULT NULL,
  `duree` INT NULL DEFAULT NULL,
  `etat` CHAR(32) NULL DEFAULT NULL,
  `ordre` CHAR(32) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_CONTRATS_DEMANDESMOBILITES` (`demande_mobilite_id` ASC),
  INDEX `FK_CONTRATS_PROGRAMMES` (`programme_id` ASC),
  INDEX `FK_CONTRATS_DIPLOMES_idx` (`diplome_id` ASC),
  CONSTRAINT `FK_CONTRATS_DIPLOMES`
    FOREIGN KEY (`diplome_id`)
    REFERENCES `diplomes` (`id`),
  CONSTRAINT `FK_CONTRATS_DEMANDESMOBILITES`
    FOREIGN KEY (`demande_mobilite_id`)
    REFERENCES `demande_mobilites` (`id`),
  CONSTRAINT `FK_CONTRATS_PROGRAMMES`
    FOREIGN KEY (`programme_id`)
    REFERENCES `programmes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `demande_financieres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `demande_financieres` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contrat_id` INT NOT NULL,
  `date_depot` DATETIME NULL DEFAULT NULL,
  `etat` CHAR(32) NULL DEFAULT NULL,
  `montant_accorde` DECIMAL(13,2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_DEMANDESFINANCIERES_CONTRATS` (`contrat_id` ASC),
  CONSTRAINT `FK_DEMANDESFINANCIERES_CONTRATS`
    FOREIGN KEY (`contrat_id`)
    REFERENCES `contrats` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `cours`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cours` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `libelle` VARCHAR(128) NULL DEFAULT NULL,
  `nb_ects` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `cours_diplomes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cours_diplomes` (
  `diplome_id` INT NOT NULL,
  `cour_id` INT NOT NULL,
  PRIMARY KEY (`diplome_id`, `cour_id`),
  INDEX `FK_PROGDIPLOME_COURS` (`cour_id` ASC),
  CONSTRAINT `FK_PROGDIPLOME_DIPLOMES`
    FOREIGN KEY (`diplome_id`)
    REFERENCES `diplomes` (`id`),
  CONSTRAINT `FK_PROGDIPLOME_COURS`
    FOREIGN KEY (`cour_id`)
    REFERENCES `cours` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `universites_programmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `universites_programmes` (
  `universite_id` INT NOT NULL,
  `programme_id` INT NOT NULL,
  INDEX `FK_IMPLIQUE_PROGRAMMES` (`programme_id` ASC),
  INDEX `FK_IMPLIQUE_UNIVERSITES_idx` (`universite_id` ASC),
  PRIMARY KEY (`universite_id`, `programme_id`),
  CONSTRAINT `FK_IMPLIQUE_UNIVERSITES`
    FOREIGN KEY (`universite_id`)
    REFERENCES `universites` (`id`),
  CONSTRAINT `FK_IMPLIQUE_PROGRAMMES`
    FOREIGN KEY (`programme_id`)
    REFERENCES `programmes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `cours_contrats`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cours_contrats` (
  `cour_id` INT NOT NULL,
  `contrat_id` INT NOT NULL,
  PRIMARY KEY (`cour_id`, `contrat_id`),
  INDEX `FK_COMPOSERCONTRAT_CONTRATS` (`contrat_id` ASC),
  CONSTRAINT `FK_COMPOSERCONTRAT_COURS`
    FOREIGN KEY (`cour_id`)
    REFERENCES `cours` (`id`),
  CONSTRAINT `FK_COMPOSERCONTRAT_CONTRATS`
    FOREIGN KEY (`contrat_id`)
    REFERENCES `contrats` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `cours_cours`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cours_cours` (
  `parent_cour_id` INT NOT NULL,
  `child_cour_id` INT NOT NULL,
  PRIMARY KEY (`parent_cour_id`, `child_cour_id`),
  INDEX `FK_COMPATIBLE_COURS1` (`child_cour_id` ASC),
  CONSTRAINT `FK_COMPATIBLE_COURS`
    FOREIGN KEY (`parent_cour_id`)
    REFERENCES `cours` (`id`),
  CONSTRAINT `FK_COMPATIBLE_COURS1`
    FOREIGN KEY (`child_cour_id`)
    REFERENCES `cours` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
