-- The below statements have been executed locally --

INSERT INTO User ( username, firstname, lastname, password, email )
VALUES ('sportslover', 'Paul', 'Walker', 'test_password', 'sportslover@hotmail.com');

INSERT INTO User ( username, firstname, lastname, password, email )
VALUES ('traveler', 'Rebecca', 'Travolta','test_password', 'rebt@explorer.org');

INSERT INTO User ( username, firstname, lastname, password, email )
VALUES ('spacejunkie', 'Bob', 'Spacey','test_password', 'bspace@spacejunkies.net');

INSERT INTO Album ( title, created, lastupdated, username )
VALUES ('I love sports', '2014-09-16 15:27:13', '2014-09-16 15:27:13', 'sportslover');

INSERT INTO Album ( title, created, lastupdated, username )
VALUES ('I love football', '2014-09-16 15:28:14', '2014-09-16 15:28:14', 'sportslover');

INSERT INTO Album ( title, created, lastupdated, username )
VALUES ('Around The World', '2014-09-16 15:28:14', '2014-09-16 15:28:14', 'traveler');

INSERT INTO Album ( title, created, lastupdated, username )
VALUES ('Cool Space Shots', '2014-09-16 15:28:14', '2014-09-16 15:28:14', 'spacejunkie');

-- The below statements are generated automatically --

INSERT INTO  Photo ( url, format, photodate )
VALUES ('Cool Space Shots', '2014-09-16 15:28:14', '2014-09-16 15:28:14', 'spacejunkie');

INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('Cool Space Shots', '2014-09-16 15:28:14', '2014-09-16 15:28:14', 'spacejunkie');
