CREATE DATABASE babysiter;

CREATE USER "adminBaby"@"localhost" IDENTIFIED BY "B@bysitt3r";

GRANT ALL PRIVILEGES ON Babysitter.* TO 'adminBaby'@'localhost';

FLUSH PRIVILEGES;



CREATE TABLE Babysiter (
    id INT(100) PRIMARY KEY auto_increment,
    nom VARCHAR,
    prenom VARCHAR,
    age int
);

CREATE TABLE Parent (
    id INT (100)PRIMARY KEY auto_increment,
    nom VARCHAR,
    prenom VARCHAR,
    adress VARCHAR    
);

CREATE TABLE Enfant(
    id INT(100) PRIMARY KEY auto_increment,
    nom VARCHAR,
    prenom VARCHAR,
    age int
);

CREATE TABLE Contrat(
    id INT PRIMARY KEY auto_increment ,
    dateDebut date,
    parent INT(100),
    babysiter INT(100),
    enfant INT(100),
    FOREIGN KEY (parent) REFERENCES Parent(id),
    FOREIGN key (babysiter)REFERENCES Babysiter(id),
    FOREIGN key (enfant) REFERENCES Enfant (id)
);





