/* Crear Base de datos */
CREATE DATABASE GameOfLife;

/* CREATE TABLES */
CREATE TABLE `GameOfLife`.`USUARIOS` ( `Nickname` VARCHAR(255) NOT NULL , `Password` VARCHAR(255) NOT NULL , `Nombre` VARCHAR(255) NOT NULL , `Apellido` VARCHAR(255) NOT NULL , PRIMARY KEY (`Nickname`)) ENGINE = InnoDB;
CREATE TABLE `GameOfLife`.`PARTIDA` ( `Id` INT NOT NULL AUTO_INCREMENT , `Nombre` INT(255) NOT NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;
CREATE TABLE `GameOfLife`.`CELDAS` ( `Columna` INT NOT NULL , `Fila` INT NOT NULL , `Id_Partida` INT NOT NULL , `Valor` VARCHAR(255) NOT NULL , PRIMARY KEY (`Columna`, `Fila`, `Id_Partida`)) ENGINE = InnoDB;