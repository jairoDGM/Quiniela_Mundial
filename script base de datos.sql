CREATE DATABASE Proyecto2;

USE Proyecto2;

CREATE TABLE Usuarios(
    nombre CHAR(50),
    Contrasena CHAR(50),
    usuario CHAR(50),
    pts_fase1 INT,
    pts_fase2 INT,
    pts_fase3 INT,
    pts_fase4 INT,
    PRIMARY KEY(usuario)
);


CREATE TABLE Equipos(
    nombre_equipo CHAR(50),
    grupo CHAR (1),
    puesto_clasificatoria CHAR(10),
    bandera CHAR(50),
    pj INT,
    gf INT,
    gc INT,
    dif INT,
    pts INT,
    PRIMARY KEY(nombre_equipo)
);


CREATE TABLE Estadios(
    lugar CHAR(50),
    nombre_estadio CHAR(50),
	PRIMARY KEY (nombre_estadio)
);


CREATE TABLE Partidos(
    fecha_partido DATE,
    hora CHAR(10),
    numero_partido INT,
    PRIMARY KEY(numero_partido)
);


CREATE TABLE relacion_quiniela(
    gol_equipo1 INT,
    gol_equipo2 INT,
    pronostico_acertado CHAR(2),
    usuario CHAR(50),
    numero_partido INT,
    PRIMARY KEY(usuario,numero_partido),
    FOREIGN KEY (usuario) REFERENCES Usuarios,
    FOREIGN KEY (numero_partido) REFERENCES Partidos
);


CREATE TABLE relacion_juega(
    numero_partido INT,
    nombre_estadio CHAR(50),
    PRIMARY KEY(numero_partido, nombre_estadio),
    FOREIGN KEY (numero_partido) REFERENCES Partidos,
    FOREIGN KEY (nombre_estadio) REFERENCES Estadios
);


CREATE TABLE equipo1(
    goles INT,
    nombre_equipo CHAR(50),
    numero_partido INT,
    PRIMARY KEY (numero_partido),
    FOREIGN KEY (numero_partido) REFERENCES Partidos,
    FOREIGN KEY (nombre_equipo) REFERENCES Equipos
);


CREATE TABLE equipo2(
    goles INT,
    nombre_equipo CHAR(50),
    numero_partido INT,
    PRIMARY KEY (numero_partido),
    FOREIGN KEY (numero_partido) REFERENCES Partidos,
    FOREIGN KEY (nombre_equipo) REFERENCES Equipos
);