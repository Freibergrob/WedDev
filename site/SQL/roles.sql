CREATE TABLE roles
(
    id  int(1) NOT NULL,
    name varchar(100) NOT NULL,
    PRIMARY KEY (id)
)

INSERT INTO roles ( id, name ) VALUES ( 1, 'Member');
INSERT INTO roles ( id, name ) VALUES ( 2, 'Admin');
INSERT INTO roles ( id, name ) VALUES ( 3, 'Faculty');
