CREATE TABLE clients (
  idEtudiant INTEGER PRIMARY KEY,
  nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  password VARCHAR(255) NOT NULL,
  admin tinyint(1),
  tiktak tinyint(1) ) ;

CREATE TABLE historique (
  idEtudiant INTEGER,
  date timestamp,
  totalPrix INTEGER,
  quantite varchar(30),
  nom VARCHAR(30) ) ;
 
CREATE TABLE products (
  id INTEGER,
  img VARCHAR(1000) NOT NULL,
  price float NOT NULL,
  name VARCHAR(30) NOT NULL,
  quantite INTEGER NOT NULL ) ;