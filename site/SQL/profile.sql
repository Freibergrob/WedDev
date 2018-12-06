CREATE TABLE profile (
    id int(11) NOT NULL AUTO_INCREMENT, 
    userId int(11) NOT NULL,
    firstName varchar(10) DEFAULT NULL,
    lastName varchar(15) DEFAULT NULL,
    nickname varchar(10) DEFAULT NULL,
    gradYear int(4) DEFAULT NULL,
    gradSeason int(11) DEFAULT NULL,
    email varchar(25) DEFAULT NULL,
    bio varchar(50000) DEFAULT NULL,
 	PRIMARY KEY (id),
 	FOREIGN KEY (userId) REFERENCES users(id)
) 