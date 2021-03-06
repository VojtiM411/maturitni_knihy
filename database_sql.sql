-- MySQL Script generated by MySQL Workbench
-- Fri Sep 11 11:12:31 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema m_knihym
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `m_knihym` ;

-- -----------------------------------------------------
-- Schema m_knihym
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `m_knihym` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci ;
USE `m_knihym` ;

-- -----------------------------------------------------
-- Table `m_knihym`.`knihy`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m_knihym`.`knihy` ;

CREATE TABLE IF NOT EXISTS `m_knihym`.`knihy` (
  `idknihy` INT NOT NULL AUTO_INCREMENT,
  `nazev_knihy` VARCHAR(45) NULL,
  `autor_knihy` VARCHAR(45) NULL,
  `anotace` TEXT(250) NULL,
  PRIMARY KEY (`idknihy`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m_knihym`.`menu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m_knihym`.`menu` ;

CREATE TABLE IF NOT EXISTS `m_knihym`.`menu` (
  `id_menu` INT NOT NULL,
  `polozka_menu` VARCHAR(45) NULL,
  PRIMARY KEY (`id_menu`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

--- Hodnoty v tabulkách

INSERT INTO kategorie (`id_kategorie`, `kategorie`)
VALUES ('1', 'Světová a česká literatura do konce 18. století');

INSERT INTO kategorie (`id_kategorie`, `kategorie`)
VALUES ('2', 'Světová a česká literatura 19. století');

INSERT INTO kategorie (`id_kategorie`, `kategorie`)
VALUES ('3', 'Světová literatura 20. a 21. století');

INSERT INTO kategorie (`id_kategorie`, `kategorie`)
VALUES ('4', 'Česká literatura 20. a 21. století');



INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('1', 'Jeptiška /P/ (překlad Věra Smetanová)', 'Diderot, Denis', 'Lorem Ipsum', '1');

INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('2', 'Labyrint světa a ráj srdce /P/', 'Komenský, Jan Amos', 'Lorem Ipsum', '1');

INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('3', 'Otec Goriot /P/  (překlad Božena Zimová)', 'Balzac, Honoré de', 'Lorem Ipsum', '2');

INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('4', 'Oliver Twist /P/ (překlad Emanuel Tilsch, Emanuela Tilschová)', 'Dickens, Charles', 'Lorem Ipsum', '2');

INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('5', 'Povídky z jedné kapsy /P/', 'Čapek, Karel', 'Lorem Ipsum', '3');

INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('6', 'Jméno růže /P/ (překlad Zdeněk Frýbort)', 'Eco, Umberto', 'Lorem Ipsum', '3');

INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('7', 'Návštěva staré dámy /D/ (překlad Otakar Fencl)', 'Dürrenmatt, Friedrich', 'Lorem Ipsum', '4');

INSERT INTO knihy (`idknihy`,`nazev_knihy`,`autor_knihy`,`anotace`,`kategorie_id_kategorie`)
VALUES ('8', 'Válka s mloky /P/', 'Čapek, Karel', 'Lorem Ipsum', '4');

