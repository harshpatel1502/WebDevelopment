/*Harsh Patel
lab7_auto_records.Sql
WEBD
15th DEC 2023
*/
-- DROP'ping tables clear out any existing data. CREATE TABLE where all different car models and actor should be also different
    CREATE TABLE automobile(
        
	id INTEGER PRIMARY KEY,
	make VARCHAR(15) NOT  NULL,
    model VARCHAR(20),
    year INTEGER,
    owner VARCHAR(200),
    msrp DECIMAL(10,2),
    purchase_data DATE

);
--ALTER TABLE automobile  OWNER TO userid;   --this will change the owner to your userid on your local/laptop database (over riding the default owner of postgres)
--GRANT ALL ON automobile  TO faculty;  --required when running the script on opentech to allow faculty members to access your databsae table

INSERT INTO automobile (id, make, model, year, owner,msrp,purchase_data) 
    VALUES(1,'Toyota Fortuner',15,2020,'Harsh Patel',66976.00,'2020-02-15');

INSERT INTO automobile (id, make, model, year, owner,msrp,purchase_data) 
    VALUES(2,'Mahindra XUV700',19,2021,'Deep Patel',38836.80,'2021-10-19');

INSERT INTO automobile (id, make, model, year, owner,msrp,purchase_data) 
    VALUES(3,'TATA harrier',25,2021,'Meet Patel',32364.00,'2021-12-25');

INSERT INTO automobile (id, make, model, year, owner,msrp,purchase_data) 
    VALUES(4,'Jguar XF',05,2022,'Kushal Patel',61800.00,'2022-05-05');

INSERT INTO automobile (id, make, model, year, owner,msrp,purchase_data) 
    VALUES(5,'Honda accord',05,2022,'Keval Patel',33670.00,'2022-05-05');