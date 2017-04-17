CREATE TABLE news (
	idNews	INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	titreNews	VARCHAR(100),
	texteNews	TEXT,
	dateNews	INT(10)
);

INSERT INTO news (titreNews, texteNews, dateNews)
VALUES	("Nos horaires","Ouvert le XX de XXh à XXh !",1487181317),
		("New !","Nouvelles aiguilles disponibles !",1489139350	);



CREATE TABLE users (
	id		INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email	VARCHAR(100) NOT NULL UNIQUE,
	password	VARCHAR(64) NOT NULL,
	nom 	VARCHAR(100) NOT NULL,
	prenom 	VARCHAR(100) NOT NULL
);

INSERT INTO users (email, password, nom, prenom)
VALUES	("admin@aasa.fr","8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918","ADMIN", "Root");