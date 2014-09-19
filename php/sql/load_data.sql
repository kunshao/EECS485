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
VALUES ('f28cc15cdbb4b5e888f1862f3a4d97da', '/static/pictures/world_Isfahan.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', 'f28cc15cdbb4b5e888f1862f3a4d97da', 'Isfahan');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('ecf6ca28895d052f4b338436655bee6d', '/static/pictures/football_s3.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('2', 'ecf6ca28895d052f4b338436655bee6d', 's3');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('a9a312e125b3b2948ef1d678c74c0697', '/static/pictures/world_EiffelTower.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', 'a9a312e125b3b2948ef1d678c74c0697', 'EiffelTower');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('0fb43e877c71bebb75e177efb132b2e1', '/static/pictures/world_TelAviv.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', '0fb43e877c71bebb75e177efb132b2e1', 'TelAviv');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('12c6d88d07dad3e253f310a4e38f466f', '/static/pictures/world_Seoul.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', '12c6d88d07dad3e253f310a4e38f466f', 'Seoul');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('317ccc8cebfd9dedd8ddaf89971c2667', '/static/pictures/world_Reykjavik.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', '317ccc8cebfd9dedd8ddaf89971c2667', 'Reykjavik');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('e7f24264bc12ddb95a88a274a872be20', '/static/pictures/world_Persepolis.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', 'e7f24264bc12ddb95a88a274a872be20', 'Persepolis');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('5adde53ebb4111c576c062a1ee41749f', '/static/pictures/world_Stonehenge.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', '5adde53ebb4111c576c062a1ee41749f', 'Stonehenge');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('682b3c2323510c010f077e48390260ad', '/static/pictures/space_HelixNebula.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('4', '682b3c2323510c010f077e48390260ad', 'HelixNebula');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('8d896c01a6ef59118e6bff1c41f4c44e', '/static/pictures/sports_s2.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', '8d896c01a6ef59118e6bff1c41f4c44e', 's2');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('973d1d2f4c184ce2b952cb4d49317b73', '/static/pictures/sports_s7.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', '973d1d2f4c184ce2b952cb4d49317b73', 's7');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('3b3d24b00b88110dcd146e10a77d5aab', '/static/pictures/sports_s3.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', '3b3d24b00b88110dcd146e10a77d5aab', 's3');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('37c2bf301fa74bcfed77176c760f1b87', '/static/pictures/space_MilkyWay.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('4', '37c2bf301fa74bcfed77176c760f1b87', 'MilkyWay');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('8af82f4377cbf93d500322dcb6ba5b3c', '/static/pictures/sports_s5.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', '8af82f4377cbf93d500322dcb6ba5b3c', 's5');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('3e074878315a90cbe0e0914139b39a4f', '/static/pictures/world_tokyo.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', '3e074878315a90cbe0e0914139b39a4f', 'tokyo');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('df189ed2618ea7c56cf54138d7955d4b', '/static/pictures/space_OrionNebula.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('4', 'df189ed2618ea7c56cf54138d7955d4b', 'OrionNebula');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('5c42c0ca9745e444ee1e7c872179bb55', '/static/pictures/sports_s8.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', '5c42c0ca9745e444ee1e7c872179bb55', 's8');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('3d82cba7f03d59058697e86eb699248b', '/static/pictures/world_firenze.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', '3d82cba7f03d59058697e86eb699248b', 'firenze');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('4cfe44deb9159947d938a44af0846b4f', '/static/pictures/football_s1.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('2', '4cfe44deb9159947d938a44af0846b4f', 's1');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('5969f31bbd047168ac9b58acee861c22', '/static/pictures/space_GalaxyCollision.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('4', '5969f31bbd047168ac9b58acee861c22', 'GalaxyCollision');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('b19f099557fa474e8c58911accf5dee4', '/static/pictures/sports_s4.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', 'b19f099557fa474e8c58911accf5dee4', 's4');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('bbef5bcde09917acad4228c8b0eead80', '/static/pictures/space_EagleNebula.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('4', 'bbef5bcde09917acad4228c8b0eead80', 'EagleNebula');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('72de1d863a854370c16444d2cd3baeb9', '/static/pictures/sports_s1.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', '72de1d863a854370c16444d2cd3baeb9', 's1');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('e4968a8fa8e9fb9078d25d205f75153d', '/static/pictures/football_s4.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('2', 'e4968a8fa8e9fb9078d25d205f75153d', 's4');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('cef7fa52f1f5f33b67e656a1d55f841e', '/static/pictures/world_Istanbul.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', 'cef7fa52f1f5f33b67e656a1d55f841e', 'Istanbul');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('b9ff594f71009eab53c1d49fe9e2560f', '/static/pictures/world_TajMahal.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', 'b9ff594f71009eab53c1d49fe9e2560f', 'TajMahal');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('4033118fb1208b3df19562c7007135be', '/static/pictures/world_GreatWall.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', '4033118fb1208b3df19562c7007135be', 'GreatWall');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('f2ebd4732216ceb8049b4cb12947908c', '/static/pictures/world_WashingtonDC.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('3', 'f2ebd4732216ceb8049b4cb12947908c', 'WashingtonDC');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('6ca7b22857ba5c2692a8f89525a09659', '/static/pictures/football_s2.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('2', '6ca7b22857ba5c2692a8f89525a09659', 's2');
INSERT INTO  Photo ( picid, url, format, photodate )
VALUES ('574e6b69b54d2f3917753524ca884535', '/static/pictures/sports_s6.jpg', 'JPG', '2014-09-17 22:51:11');
INSERT INTO  Contain ( albumid, picid, caption )
VALUES ('1', '574e6b69b54d2f3917753524ca884535', 's6');
