
CREATE TABLE guests
(
id INT(5) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20),
lastname VARCHAR(20),
email VARCHAR(30),
phoneno VARCHAR(20),
room INT(5),
roomtype VARCHAR(20),
arrivaldate DATE,
deperaturedate DATE,
price FLOAT,
commets VARCHAR(100)
);