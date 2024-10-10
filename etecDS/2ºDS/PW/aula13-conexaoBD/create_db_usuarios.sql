CREATE DATABASE db_usuarios
USE db_usuarios

CREATE TABLE tbl_usuarios(
	idUsuario INT PRIMARY KEY AUTO_INCREMENT
    ,login VARCHAR(128) NOT NULL
    ,senha VARCHAR(128) NOT NULL
    ,idade smallint
);
