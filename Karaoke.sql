USE z1979224;
DROP TABLE IF EXISTS SIGNUP,CREATES,SONG,USERS,CONTRIBUTOR;

CREATE TABLE SONG (SONGID CHAR(20) NOT NULL PRIMARY KEY,
            TITLE CHAR(50) NOT NULL, 
            LENGTH CHAR(20) NOT NULL,
            STREAMNUM CHAR(20) NOT NULL,
            COST CHAR(20) NOT NULL,
            RELEASEDATE CHAR(20) NOT NULL,
            GENRE CHAR(20) NOT NULL);

INSERT INTO SONG VALUES ('1','Last Night','2:45','191,271,400','$1','2/6/2023','Country');
INSERT INTO SONG VALUES ('2','Kill Bill','2:35','814,149,700','$1','12/6/2022','POP');
INSERT INTO SONG VALUES ('3','Flowers','3:21','904,525,900','$1','1/12/2023','POP');
INSERT INTO SONG VALUES ('4','Creepin\'','3:42','580,369,400','$1','12/13/2022','R&B');
INSERT INTO SONG VALUES ('5','Die For You','4:20','1,420,902,600','$1','2/24/2023','R&B');
INSERT INTO SONG VALUES ('6','Boy\'s a Liar Pt. 2','2:11','335,806,400','$1','12/30/2022','POP');
INSERT INTO SONG VALUES ('7','Calm Down','3:59','629,610,200','$1','7/25/2022','Afrobeats');
INSERT INTO SONG VALUES ('8','Anti-Hero','3:21','756,115,700','$1','10/21/2022','POP');
INSERT INTO SONG VALUES ('9','Players','2:19','205,441,400','$1','11/30/2022','N/A');
INSERT INTO SONG VALUES ('10','Rock and a Hard Place','3:27','196,140,300','$1','06/10/2022','Country');
INSERT INTO SONG VALUES ('11','Lavender Haze','3:22','372,680,900','$1','11/29/2022','POP');
INSERT INTO SONG VALUES ('12','You Proof','2:37','268,164,800','$1','07/18/2022','Country');
INSERT INTO SONG VALUES ('13','As It Was','2:47','2,174,633,600','$1','04/1/2022','POP');
INSERT INTO SONG VALUES ('14','Favorite Song','3:29','39,962,100','$1','02/17/2023','R&B');
INSERT INTO SONG VALUES ('15','Sure Thing','3:13','814,255,500','$1','11/26/2010','R&B');
INSERT INTO SONG VALUES ('16','Fight The Feeling','2:40','10,106,600','$1','03/31/2023','N/A');
INSERT INTO SONG VALUES ('17','Ella Baila Sola','2:45','139,007,600','$1','N/A','N/A');
INSERT INTO SONG VALUES ('18','I\'m Good (Blue)','2:55','881,477,500','$1','07/26/2022','Dance');
INSERT INTO SONG VALUES ('19','Under The Influence','3:04','790,736,100','$1','08/06/2022','R&B');
INSERT INTO SONG VALUES ('20','Thought You Should Know','3:35','152,931,500','$1','11/07/2022','Country');
INSERT INTO SONG VALUES ('21','Thinkin\' Bout Me','2:57','47,053,600','$1','03/03/2023','Country');
INSERT INTO SONG VALUES ('22','Unholy','2:36','1,042,091,400','$1','09/22/2022','POP');
INSERT INTO SONG VALUES ('23','Escapism','4:32','386,846,500','$1','10/12/2022','R&B');
INSERT INTO SONG VALUES ('24','One Thing At A Time','3:26','89,028,300','$1','03/03/2023','Country');
INSERT INTO SONG VALUES ('25','Just Wanna Rock','2:03','336,784,300','$1','10/17/2022','Dance');
INSERT INTO SONG VALUES ('26','La Bebe','3:54','103,046,600','$1','04/01/2023','N/A');
INSERT INTO SONG VALUES ('27','Something in the Orange','3:48','348,413,600','$1','04/22/2022','Country');
INSERT INTO SONG VALUES ('28','Thank God','2:54','70,032,600','$1','09/12/2022','Country');
INSERT INTO SONG VALUES ('29','Heart Like a Truck','3:19','66,772,800','$1','05/20/2022','Country');
INSERT INTO SONG VALUES ('30','Rich Flex','3:59','456,752,300','$1','11/04/2022','R&B');

CREATE TABLE USERS (USERSID CHAR(20) NOT NULL PRIMARY KEY,
            NAME CHAR(20) NOT NULL, 
            PERFROMERNAME CHAR(20) NOT NULL,
            EMAIL CHAR(20) NOT NULL,
            PHONENUM CHAR(20) NOT NULL,
            BALANCE CHAR(20) NOT NULL);

CREATE TABLE CONTRIBUTOR (CONTRIBUTORID CHAR(20) NOT NULL PRIMARY KEY,
            NAME CHAR(20) NOT NULL, 
            BDAY CHAR(20) NOT NULL,
            COUNTRY CHAR(20) NOT NULL,
            ROLES CHAR(20) NOT NULL);

CREATE TABLE SIGNUP (USERSID CHAR(20) NOT NULL,
            SONGID CHAR(20) NOT NULL, 
            TIMES CHAR(20) NOT NULL,
            QUEUE CHAR(20) NOT NULL,
            PRIMARY KEY(USERSID,SONGID), 
            FOREIGN KEY(USERSID) REFERENCES USERS(USERSID),
            FOREIGN KEY(SONGID) REFERENCES SONG(SONGID));

CREATE TABLE CREATES (CONTRIBUTORID CHAR(20) NOT NULL,
            SONGID CHAR(20) NOT NULL, 
            YEAR CHAR(20) NOT NULL,
            PRIMARY KEY(CONTRIBUTORID,SONGID),
            FOREIGN KEY(CONTRIBUTORID) REFERENCES CONTRIBUTOR(CONTRIBUTORID),
            FOREIGN KEY(SONGID) REFERENCES SONG(SONGID));

SHOW TABLES;
DESCRIBE SONG;
SELECT * FROM SONG;

-- This is a test comment
