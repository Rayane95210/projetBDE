USE mybdd
CREATE TABLE Clients (
  idEtudiant INTEGER PRIMARY KEY,
  nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  password VARCHAR(255) NOT NULL,
  admin smallint,
  tiktak smallint ) ;

CREATE TABLE Historique (
  idEtudiant INTEGER,
  date timestamp,
  totalPrix INTEGER,
  quantite varchar(30),
  nom VARCHAR(30) ) ;
 
CREATE TABLE Products (
  id INTEGER,
  img VARCHAR(1000) NOT NULL,
  price float NOT NULL,
  name VARCHAR(30) NOT NULL,
  quantite INTEGER NOT NULL ) ;