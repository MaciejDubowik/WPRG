CREATE TABLE uczniowie(
	id	char(255) NOT NULL PRIMARY KEY,
	imie varchar(255)
);

INSERT INTO uczniowie
VALUES (1,'Maciej'),(2,'Hubert');

UPDATE uczniowie
SET imie = 'Michal' 
WHERE id = 1;

DELETE FROM uczniowie
WHERE id = 2;