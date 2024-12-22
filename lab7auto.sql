
-- DROP'ping tables clear out any existing data
DROP TABLE IF EXISTS movies;
DROP TABLE IF EXISTS actors;

-- CREATE the table, note that id has to be unique, and you must have a name
CREATE TABLE actors(
	id INTEGER PRIMARY KEY,
	name VARCHAR(20) NOT  NULL
);
--ALTER TABLE actors OWNER TO userid;   --this will change the owner to your userid on your local/laptop database (over riding the default owner of postgres)
--GRANT ALL ON actors TO faculty;  --required when running the script on opentech to allow faculty members to access your databsae table

INSERT INTO actors(id, name) VALUES(
	1,
	'Harsh Patel');
INSERT INTO actors(id, name) VALUES(
	2,
	'Deep Patel');
INSERT INTO actors(id, name) VALUES(
	3,
	'Meet Patel');
INSERT INTO actors(id, name) VALUES(
	4,
	'Kushal Patel');
INSERT INTO actors(id, name) VALUES(
	5,
	'Keval Patel');

-- CREATE the table, note movie_num is unique and title and year are required fields, though the actor can be optionally empty
CREATE TABLE movies(
	movie_num INTEGER PRIMARY KEY,
	title VARCHAR(35) NOT NULL,
	actor INTEGER,
	year INTEGER NOT NULL
);
--ALTER TABLE actors OWNER TO userid;  
--GRANT ALL ON actors TO faculty;  

INSERT INTO movies(movie_num, title, actor, year) 
VALUES(
	1,
	'Toyota Fortuner',
	1,
	2019);
INSERT INTO movies(movie_num, title, actor, year) VALUES(
	2,
	'Mahindra XUV700',
	2,
	2021);
INSERT INTO movies(movie_num, title, actor, year)
VALUES(
	3,
	'TATA Harrier',
	3,
	2020);
INSERT INTO movies(movie_num, title, actor, year) VALUES(
	4,
	'Jguar XF',
	4,
	2019);
INSERT INTO movies(movie_num, title, actor, year) VALUES(
	5,
	'Honda Accord',
	5,
	2018);
