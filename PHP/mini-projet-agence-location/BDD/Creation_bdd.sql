USE `projet_poubelle`;

DROP TABLE IF EXISTS `Voitures`, `Utilisateur`, `Adresses`, `Asso_4`;

CREATE TABLE `Voitures` (
   `ID` MEDIUMINT NOT NULL AUTO_INCREMENT,
   `Nom` VARCHAR(50) NOT NULL,
   `CarType` VARCHAR(50) NOT NULL,
   `TrainRoulant` VARCHAR(50) NOT NULL,
   `NbrPlaces` TINYINT,
   `decapotable` BOOL,
   `descriptions` TEXT,
   `Supp` BOOL NOT NULL,
   PRIMARY KEY(`ID`)
);

CREATE TABLE `Utilisateur` (
   `ID` MEDIUMINT NOT NULL AUTO_INCREMENT,
   `Nom` VARCHAR(50) NOT NULL,
   `Prenom` VARCHAR(30) NOT NULL,
   `AdresseMail` VARCHAR(50) NOT NULL,
   `Entity` TINYINT NOT NULL,
   `Supp` BOOL NOT NULL,
   PRIMARY KEY(`ID`)
);

CREATE TABLE `Adresses` (
   `ID` MEDIUMINT NOT NULL AUTO_INCREMENT,
   `NoRue` SMALLINT NOT NULL,
   `Extension` VARCHAR(3) NOT NULL,
   `NomDeRue` VARCHAR(50),
   `CodePostal` CHAR(5),
   `Ville` VARCHAR(50) NOT NULL,
   `Supp` BOOL NOT NULL,
   `ID_Utilisateur` MEDIUMINT NOT NULL,
   PRIMARY KEY(`ID`),
   FOREIGN KEY(`ID_Utilisateur`) REFERENCES `Utilisateur`(`ID`)
);

CREATE TABLE `Asso_4` (
   `ID_Voitures` MEDIUMINT,
   `ID_Utilisateur` MEDIUMINT,
   PRIMARY KEY(`ID_Voitures`, `ID_Utilisateur`),
   FOREIGN KEY(`ID_Voitures`) REFERENCES `Voitures`(`ID`),
   FOREIGN KEY(`ID_Utilisateur`) REFERENCES `Utilisateur`(`ID`)
);