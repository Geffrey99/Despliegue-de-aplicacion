CREATE DATABASE IF NOT EXISTS CestaLlena;

USE CestaLlena;

CREATE TABLE IF NOT EXISTS CestaLlena (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(40) NOT NULL,
    quantity INT NOT NULL
);

INSERT INTO CestaLlena (name, quantity) VALUES
    ('ARROZ', 6),
    ('MANZANAS', 8),
    ('HUEVOS', 6);
    ('NARANJAS', 3),
    ('PERICOS', 7),
    ('DINA', 9);