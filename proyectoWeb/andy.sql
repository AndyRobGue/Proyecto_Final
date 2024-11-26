
DROP SCHEMA IF EXISTS andy; -- Eliminamos el esquema si ya existe
CREATE SCHEMA IF NOT EXISTS andy DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE andy;

CREATE TABLE individuo (
    numero INT(11) NOT NULL AUTO_INCREMENT,  
    nombre TEXT NOT NULL,
    carrera TEXT NOT NULL,
    no_cuenta INT(10) NOT NULL,
    direccion TEXT NOT NULL,
    telefono VARCHAR(8) NOT NULL,
    email TEXT NOT NULL,
    password VARCHAR(8) NOT NULL,
    fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    permisos INT(11) NOT NULL DEFAULT 2,
    PRIMARY KEY (numero)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO individuo (nombre, carrera, no_cuenta, direccion, telefono, email, password, permisos)
VALUES 
    ('Tamara Robles', 'Medicina', 28118, '6 de Marzo', '55570236', 'tamyrob@example.com', '12345673', 2);

SELECT * FROM individuo;