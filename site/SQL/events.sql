CREATE TABLE events
(
    id      int(11) NOT NULL AUTO_INCREMENT,
    title   varchar(100) NOT NULL,
    eDate   datetime NOT NULL,
    description varchar(1000),
    createdby int(11),
    PRIMARY KEY (id),
    FOREIGN KEY (createdby) REFERENCES users(id)
)

INSERT INTO events
(title, eDate, description, createdby)
VALUES
('test',NOW(), 'This is an event description', 1);
