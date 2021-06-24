CREATE DATABASE IF NOT EXISTS stageVTC DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE stageVTC;

DROP TABLE IF EXISTS user;

CREATE TABLE IF NOT EXISTS user(
  idUser int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomUser varchar(50) NOT NULL,
  prenomUser varchar(50)NOT NULL,
  mdpUser varchar(50)NOT NULL,
  mailUser varchar(50)NOT NULL,
  idRole int (2) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS roles;

CREATE TABLE IF NOT EXISTS roles(
  idRole int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomRole varchar (50) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS reservation;

CREATE TABLE IF NOT EXISTS reservation(
  idReservation int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  dateReservation varchar (50) NOT NULL,
  adresseDepart varchar(150)NOT NULL,
  destination varchar(150)NOT NULL,
  idUser int() NOT NULL
) ENGINE = InnoDB;


INSERT INTO roles VALUES (null,'Administrateur');
INSERT INTO roles VALUES (null,'Utilisateur');
