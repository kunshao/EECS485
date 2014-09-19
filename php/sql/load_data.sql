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

INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('36b6d30b158298944e073e190a267a84', '/pictures/36b6d30b158298944e073e190a267a84.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '36b6d30b158298944e073e190a267a84', 'Isfahan', '0');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('1db0553bff49c79d1a95a02138b97995', '/pictures/1db0553bff49c79d1a95a02138b97995.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('2', '1db0553bff49c79d1a95a02138b97995', 's3', '0');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('7fb501bf2fe1c6e6d2553d396967d3ba', '/pictures/7fb501bf2fe1c6e6d2553d396967d3ba.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '7fb501bf2fe1c6e6d2553d396967d3ba', 'EiffelTower', '1');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('0f64a4c719a6b0b8cdf90fba04d0091b', '/pictures/0f64a4c719a6b0b8cdf90fba04d0091b.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '0f64a4c719a6b0b8cdf90fba04d0091b', 'TelAviv', '2');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('73cf527c5f92f5de290c47314428475c', '/pictures/73cf527c5f92f5de290c47314428475c.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '73cf527c5f92f5de290c47314428475c', 'Seoul', '3');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('12e294de464d1b7babb4e44d3af91d35', '/pictures/12e294de464d1b7babb4e44d3af91d35.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '12e294de464d1b7babb4e44d3af91d35', 'Reykjavik', '4');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('99428d6d4fa0daa63a6a17fc61ca0272', '/pictures/99428d6d4fa0daa63a6a17fc61ca0272.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '99428d6d4fa0daa63a6a17fc61ca0272', 'Persepolis', '5');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('093e0a73c46d94100bb50bd516bd5bfa', '/pictures/093e0a73c46d94100bb50bd516bd5bfa.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '093e0a73c46d94100bb50bd516bd5bfa', 'Stonehenge', '6');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('c9a5067bce203f599f9eb2d606855cf6', '/pictures/c9a5067bce203f599f9eb2d606855cf6.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('4', 'c9a5067bce203f599f9eb2d606855cf6', 'HelixNebula', '0');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('33578874396a8f967afa6ed82af83c53', '/pictures/33578874396a8f967afa6ed82af83c53.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', '33578874396a8f967afa6ed82af83c53', 's2', '0');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('2ae08e5b8a255b4b89695dabbe164fca', '/pictures/2ae08e5b8a255b4b89695dabbe164fca.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', '2ae08e5b8a255b4b89695dabbe164fca', 's7', '1');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('3be6e112857acc54dd6c1016a87b7576', '/pictures/3be6e112857acc54dd6c1016a87b7576.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', '3be6e112857acc54dd6c1016a87b7576', 's3', '2');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('ba4fcfe1df607754a0a99c027e97fb65', '/pictures/ba4fcfe1df607754a0a99c027e97fb65.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('4', 'ba4fcfe1df607754a0a99c027e97fb65', 'MilkyWay', '1');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('5b8f2b5797ceff18b9f2aa24a310b728', '/pictures/5b8f2b5797ceff18b9f2aa24a310b728.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', '5b8f2b5797ceff18b9f2aa24a310b728', 's5', '3');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('a9eeb76a6dd84e8e2603524335e47cd6', '/pictures/a9eeb76a6dd84e8e2603524335e47cd6.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', 'a9eeb76a6dd84e8e2603524335e47cd6', 'tokyo', '7');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('3ca3c84a8936382d04fcaa2f6e2f65ed', '/pictures/3ca3c84a8936382d04fcaa2f6e2f65ed.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('4', '3ca3c84a8936382d04fcaa2f6e2f65ed', 'OrionNebula', '2');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('d7c83f94025691d08f1634d097428577', '/pictures/d7c83f94025691d08f1634d097428577.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', 'd7c83f94025691d08f1634d097428577', 's8', '4');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('e615f0fb7a736a1e4cc2e3054b8877a4', '/pictures/e615f0fb7a736a1e4cc2e3054b8877a4.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', 'e615f0fb7a736a1e4cc2e3054b8877a4', 'firenze', '8');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('5c04f8429df74f581b8718577dca360d', '/pictures/5c04f8429df74f581b8718577dca360d.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('2', '5c04f8429df74f581b8718577dca360d', 's1', '1');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('3770390e32225ea2d2f75d830bd7a4ea', '/pictures/3770390e32225ea2d2f75d830bd7a4ea.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('4', '3770390e32225ea2d2f75d830bd7a4ea', 'GalaxyCollision', '3');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('fe0a119959cf8f8fc590ec1d172fb14a', '/pictures/fe0a119959cf8f8fc590ec1d172fb14a.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', 'fe0a119959cf8f8fc590ec1d172fb14a', 's4', '5');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('644914725935a4bce23f1b8c01eb79b8', '/pictures/644914725935a4bce23f1b8c01eb79b8.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('4', '644914725935a4bce23f1b8c01eb79b8', 'EagleNebula', '4');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('71dd26c0ea69e667f43496f08aa66233', '/pictures/71dd26c0ea69e667f43496f08aa66233.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', '71dd26c0ea69e667f43496f08aa66233', 's1', '6');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('40c5c152fcefbb843cabb3883a7a5b1a', '/pictures/40c5c152fcefbb843cabb3883a7a5b1a.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('2', '40c5c152fcefbb843cabb3883a7a5b1a', 's4', '2');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('41c94744532daa67619805beac10d115', '/pictures/41c94744532daa67619805beac10d115.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '41c94744532daa67619805beac10d115', 'Istanbul', '9');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('a3a01047a5fac999880e485486ddcfb9', '/pictures/a3a01047a5fac999880e485486ddcfb9.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', 'a3a01047a5fac999880e485486ddcfb9', 'TajMahal', '10');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('07b1c3279c543b30d2f807ea96131d1f', '/pictures/07b1c3279c543b30d2f807ea96131d1f.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', '07b1c3279c543b30d2f807ea96131d1f', 'GreatWall', '11');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('c12533222df74976f5a79ac6e45bf09c', '/pictures/c12533222df74976f5a79ac6e45bf09c.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('3', 'c12533222df74976f5a79ac6e45bf09c', 'WashingtonDC', '12');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('2403f9f36ccfc0d2f8d7c04314199a7d', '/pictures/2403f9f36ccfc0d2f8d7c04314199a7d.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('2', '2403f9f36ccfc0d2f8d7c04314199a7d', 's2', '3');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('6aa790b7c828d5399e856a2a9f063ecc', '/pictures/6aa790b7c828d5399e856a2a9f063ecc.jpg', 'jpg', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption, sequencenum )
VALUES ('1', '6aa790b7c828d5399e856a2a9f063ecc', 's6', '7');
