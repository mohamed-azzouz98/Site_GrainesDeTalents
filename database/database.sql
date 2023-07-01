-- Creation de la bdd
CREATE DATABASE IF NOT EXISTS gdt;

-- Creation de l'utilisateur
CREATE USER IF NOT EXISTS 'gdt'@'localhost' IDENTIFIED BY 'gdt13';

GRANT ALL PRIVILEGES ON gdt.* TO 'gdt'@'localhost';

FLUSH PRIVILEGES;

USE  gdt;


CREATE  TABLE IF NOT EXISTS admin(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);


CREATE TABLE IF NOT EXISTS user(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    img VARCHAR(255),
    video VARCHAR(255),
    lookingFor VARCHAR(50),
    mail VARCHAR(150),
    phone VARCHAR(50),
    description VARCHAR(255)
);



