CREATE DATABASE University;

	CREATE TABLE Students(
	
		ID int(25) NOT NULL, 
		Name varchar(25) NOT NULL, 
		Age int(25) NOT NULL, 
		Faculty varchar(25) NOT NULL
	);

INSERT INTO Students(ID, Name, Age, Faculty)
VALUES (1, "Balganym", 18, "FIT"),(2, "Firuza", 18, "FIT"),(3, "Almat", 18, "FIT");

SELECT Name,Faculty FROM Students;

SELECT *FROM Students 
ORDER BY Name;

UPDATE Students
SET age = 19
where name = "Almat";

DELETE FROM Students
where ID = 2;

		



