CREATE TABLE news (
	idNews	INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	titreNews	VARCHAR(100),
	texteNews	TEXT,
	dateNews	INT(10)
);

INSERT INTO news (titreNews, texteNews, dateNews)
VALUES	("Nos horaires","Ouvert le XX de XXh à XXh !",1487181317),
		("New !","Nouvelles aiguilles disponibles !",1489139350	);