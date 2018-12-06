CREATE TABLE profile (
    id int(11) NOT NULL AUTO_INCREMENT, 
    userId int(11) NOT NULL,
    firstName varchar(10) NOT NULL,
    lastName varchar(15) NOT NULL,
    nickname varchar(10) NOT NULL,
    gradYear int(4) NOT NULL,
    gradSeason int(11) NOT NULL,
    email varchar(25) NOT NULL,
    bio varchar(50000) NOT NULL,
 	PRIMARY KEY (id),
 	FOREIGN KEY (userId) REFERENCES users(id)
) 