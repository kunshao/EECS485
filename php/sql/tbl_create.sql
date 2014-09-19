CREATE DATABASE photo_albums;
USE photo_albums;

# Drop All Tables. For testing purpose only.

SELECT concat('DROP TABLE IF EXISTS ', table_name, ';')
FROM information_schema.tables
WHERE table_schema = 'photo_albums';


CREATE TABLE IF NOT EXISTS User
(
    username varchar(20) NOT NULL,
    firstname varchar(20) NOT NULL,
    lastname varchar(20) NOT NULL,
    password varchar(20),
    email varchar(40),
    PRIMARY KEY (username)
);

CREATE TABLE IF NOT EXISTS Album 
(
    albumid int(40) NOT NULL AUTO_INCREMENT,
    title varchar(50),
    created datetime NOT NULL,
    lastupdated datetime NOT NULL,
    username varchar(20) NOT NULL,
    PRIMARY KEY (albumid),
    FOREIGN KEY (username) REFERENCES User(username)
);

CREATE TABLE IF NOT EXISTS Photo
(
    picid varchar(40) NOT NULL,
    url varchar(255) NOT NULL,
    format char(3) NOT NULL,
    photodate datetime NOT NULL,
    PRIMARY KEY (picid)
);

CREATE TABLE IF NOT EXISTS Contain 
(
    albumid int(40) NOT NULL,
    picid varchar(40) NOT NULL,
    caption varchar(255),
    sequencenum int(40) NOT NULL AUTO_INCREMENT,
    KEY (sequencenum),
    PRIMARY KEY (albumid, picid),
    FOREIGN KEY (albumid) REFERENCES Album(albumid),
    FOREIGN KEY (picid) REFERENCES Photo(picid)
);