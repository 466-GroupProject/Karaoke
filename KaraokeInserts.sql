/*
    Julio Rivera, Michael Rasmussen, Oscar Vasquez 
	Z1979224, Z1696323, Z1968485
	CSCI 466 PE1
*/       
USE z1979224;

INSERT INTO Song VALUES ('1','Last Night','Morgan Wallen','00:02:45','Country','191,271,400');
INSERT INTO Song VALUES ('2','Kill Bill','SZA','00:02:35','POP','814,149,700');
INSERT INTO Song VALUES ('3','Flowers','Miley Cyrus','00:03:21','POP','904,525,900');
INSERT INTO Song VALUES ('4','Creepin\'','Metro Boomin','00:3:42','R&B','580,369,400'); /* FT 21 Savage AND The Weekend */
INSERT INTO Song VALUES ('5','Die For You','The Weekend','00:04:20','R&B','1,420,902,600'); /* FT Ariana Grande */
INSERT INTO Song VALUES ('6','Boy\'s a Liar Pt. 2','Pink Pantheress','00:02:11','POP','335,806,400'); /* FT Ice Spice */
INSERT INTO Song VALUES ('7','Calm Down','Rema','00:03:59','Afrobeats','629,610,200'); /* FT Selena Gomez */
INSERT INTO Song VALUES ('8','Anti-Hero','Taylor Swift','00:03:21','POP','756,115,700');
INSERT INTO Song VALUES ('9','Players','Coi Leray','00:02:19','N/A','205,441,400');
INSERT INTO Song VALUES ('10','Rock and a Hard Place','Bailey Zimmerman','00:03:27','Country','196,140,300');
INSERT INTO Song VALUES ('11','Lavender Haze','Taylor Swift','00:03:22','POP','372,680,900');
INSERT INTO Song VALUES ('12','You Proof','Morgan Wallen','00:02:37','Country','268,164,800');
INSERT INTO Song VALUES ('13','As It Was','Harry Styles','00:02:47','POP','2,174,633,600');
INSERT INTO Song VALUES ('14','Favorite Song','Toosii','00:03:29','R&B','39,962,100');
INSERT INTO Song VALUES ('15','Sure Thing','Miguel','00:03:13','R&B','814,255,500');
INSERT INTO Song VALUES ('16','Fight The Feeling','Rod Wave','00:02:40','N/A','10,106,600');
INSERT INTO Song VALUES ('17','Ella Baila Sola','Eslabon Armado','00:02:45','N/A','139,007,600'); /* FT Peso Pluma */
INSERT INTO Song VALUES ('18','I\'m Good (Blue)','David Guetta','00:02:55','Dance','881,477,500'); /* FT Bebe Rexha */
INSERT INTO Song VALUES ('19','Under The Influence','Chris Brown','00:03:04','R&B','790,736,100');
INSERT INTO Song VALUES ('20','Thought You Should Know','Morgan Wallen','00:03:35','Country','152,931,500');
INSERT INTO Song VALUES ('21','Thinkin\' Bout Me','Morgan Wallen','00:02:57','Country','47,053,600');
INSERT INTO Song VALUES ('22','Unholy','Sam Smith','00:02:36','POP','1,042,091,400'); /* FT Kim Petras */
INSERT INTO Song VALUES ('23','Escapism','RAYE','00:04:32','R&B','386,846,500'); /* FT 070 Shake */
INSERT INTO Song VALUES ('24','One Thing At A Time','Morgan Wallen','00:03:26','Country','89,028,300');
INSERT INTO Song VALUES ('25','Just Wanna Rock','Lil Uzi Vert','00:02:03','Dance','336,784,300');
INSERT INTO Song VALUES ('26','La Bebe','Yng Lvcas','00:03:54','N/A','103,046,600'); /* FT Peso Pluma */
INSERT INTO Song VALUES ('27','Something in the Orange','Zach Bryan','00:03:48','Country','348,413,600');
INSERT INTO Song VALUES ('28','Thank God','Kane Brown','00:02:54','Country','70,032,600'); /* FT Katelyn Brown */
INSERT INTO Song VALUES ('29','Heart Like a Truck','Lainey Wilson','00:03:19','Country','66,772,800');
INSERT INTO Song VALUES ('30','Rich Flex','Drake','00:03:59','R&B','456,752,300'); /* FT 21 Savage */
INSERT INTO Song VALUES ('31', 'Kill Bill (Remix)','SZA FT Doja Cat', '00:02:56','POP','2,380,000') ;
INSERT INTO Song VALUES ('32', 'Die For You (Remix)','The Weeknd FT Ariana Granda', '00:03:53', 'R&B','313,903,660');
INSERT INTO Song VALUES ('33', 'Despacito', 'Luis Fonsi & Daddy Yankee','00:04:41','POP', '8,143,373,571');
INSERT INTO Song VALUES ('34', 'Despacito (Remix)', 'Luis Fonsi & Daddy Yankee FT Justin Biber, ','00:03:48','POP', '675,949,155');

INSERT INTO Users VALUES ('1','Tim','Timmy','25','Timmy@gmail.com','847-224-8765'); 
INSERT INTO Users VALUES ('2','Sarah','NULL','10','SarahS99@yahoo.com','224-637-2365'); 
INSERT INTO Users VALUES ('3','Matthew','Mighty Matt','30','MattySmith@gmail.com','312-548-7351'); 
INSERT INTO Users VALUES ('4','Victoria','Vicky','25','Vicky98@gmail.com','708-761-2997'); 
INSERT INTO Users VALUES ('5','Jeffery','Jeff','50','JeffM56@yahoo.com','847-609-6516'); 
INSERT INTO Users VALUES ('6','Jennifer','Jenny Jams','23','JJ123@gmail.com','224-519-2573'); 
INSERT INTO Users VALUES ('7','George','NULL','17','GeorgeBird@yahoo.com','708-582-0709'); 
INSERT INTO Users VALUES ('8','Tina','Big T','4','TinaSings@gmail.com','312-561-1764'); 
INSERT INTO Users VALUES ('9','Kyle','King Kyle','64','KyleJohnson89@gmail.com','224-861-0954'); 
INSERT INTO Users VALUES ('10','Blair','Baddie B','105','BlairW@yahoo.com','847-910-9812');  

INSERT INTO Contributor Values ('1','Morgan Wallen','1993-05-13','USA'); -- Last Night Singer
INSERT INTO Contributor Values ('2','Ashley','1977-04-29','USA'); -- Last Night Writter
INSERT INTO Contributor Values ('3','Joey Moi','1975-01-01','Canada'); -- Last Night Producer
INSERT INTO Contributor Values ('4','SZA (Solána Rowe)','1989-11-08','USA'); -- Kill Bill Singer and Writter
INSERT INTO Contributor Values ('5','Carter Lang',NULL,'N/A'); -- Kill Bill Writter and Producer
INSERT INTO Contributor Values ('6','Doja Cat (Amala Dlamini)','1995-10-25','USA'); -- Kill Bill Singer
INSERT INTO Contributor Values ('7','Miley Cyrus','1992-11-23','USA'); -- Flowers Singer and Writer
INSERT INTO Contributor Values ('8','Kid Harpoon','1982-04-20','England'); -- Flowers Producer
INSERT INTO Contributor Values ('9','Michael Pollack','1994-04-26','USA'); -- Flowers Writter
INSERT INTO Contributor Values ('10','Metro Boomin (Leland Wayne)','1993-09-16','USA'); -- Creepin' Producer
INSERT INTO Contributor Values ('11','The Weekend (Abel Tesfaye)','1990-02-16','Canada'); -- Creepin' Singer and Writter - Die For You Singer
INSERT INTO Contributor Values ('12','21 Savage (Shéyaa Abraham-Joseph)','1992-10-22','England'); -- Creepin' Singer and Writter
INSERT INTO Contributor Values ('13','DaHeala (Jason Quenneville)','1982-02-23','Canada'); -- Creepin' Producer and Writter
INSERT INTO Contributor Values ('14','Doc McKinney','1971-08-27','Canada'); -- Die For You Writter and Producer
INSERT INTO Contributor Values ('15','Cirkut (Henry Walter)','1986-04-23','Canada'); -- Die For You Producer
INSERT INTO Contributor Values ('16','PinkPantheress','2001-04-18','England'); -- Boy's a Liar Pt. 2 Writter and Producer
INSERT INTO Contributor Values ('17','Ice Spice (Isis Naija Gaston)','2000-01-01','USA'); -- Boy's a Liar Pt. 2 Writter and Singer
INSERT INTO Contributor Values ('18','Mura Masa (Alexander Crossan)','1996-04-05','England'); -- Boy's a Liar Pt. 2 Writter
INSERT INTO Contributor Values ('19','Rema (Divine Ikubor)','2000-05-01','Nigeria'); -- Calm Down Singer and Writter
INSERT INTO Contributor Values ('20','Selena Gomez','1992-07-22','USA'); -- Calm Down Singer and Writter
INSERT INTO Contributor Values ('21','London (Michael Hunter)','1999-01-01','England'); -- Calm Down Producer
INSERT INTO Contributor Values ('22','Taylor Swift','1989-12-13','USA'); -- Anti-Hero Singer and Producer and Writter
INSERT INTO Contributor Values ('23','Jack Antonoff','1984-03-31','USA'); -- Anti-Hero Writter and Producer
INSERT INTO Contributor Values ('24','Coi Leray (Coi Collins)','1997-05-11','USA'); -- Players Singer and writter
INSERT INTO Contributor Values ('25','Johnny Goldstien','1991-01-29','Israel'); -- Players Producer and writter
INSERT INTO Contributor Values ('26','Duke Bootee (Edward Fletcher)','1951-06-06','USA'); -- Players Writter
INSERT INTO Contributor Values ('27','Bailey Zimmerman','2000-01-27','USA'); -- Rock and a Hard Place Singer
INSERT INTO Contributor Values ('28','Heath Warren',NULL,'USA'); -- Rock and a Hard Place Writter
INSERT INTO Contributor Values ('29','Austin Shawn',NULL,'USA'); -- Rock and a Hard Place Producer
INSERT INTO Contributor VALUES ('30', 'Zoe Kravitz', '1988-12-01', 'USA');
INSERT INTO Contributor VALUES ('31', 'Charlie Handsome', NULL, 'USA');
INSERT INTO Contributor VALUES ('32', 'Harry Styles', '1994-02-01', 'UK'); -- as it was
INSERT INTO Contributor VALUES ('33', 'Tyler Johnson', NULL, 'USA');
INSERT INTO Contributor VALUES ('34', 'Toosii', '2000-01-09', 'USA'); -- favorite song
INSERT INTO Contributor VALUES ('35', 'Adelso', NULL, 'USA');
INSERT INTO Contributor VALUES ('36', 'Tatiana Manaois', '1996-01-01', 'USA');
INSERT INTO Contributor VALUES ('37', 'Miguel', '1985-10-23', 'USA'); -- sure thing
INSERT INTO Contributor VALUES ('38', 'Happy Perez', NULL, 'USA');
INSERT INTO Contributor VALUES ('39', 'Rod Wave', '1999-08-27', 'USA'); -- fight the feeling
INSERT INTO Contributor VALUES ('40', 'Eslabon Armado', NULL, 'USA'); -- ella balia sola
INSERT INTO Contributor VALUES ('41', 'Pedro Julian Tovar', '2002-07-22', 'USA');
INSERT INTO Contributor VALUES ('42', 'David Guetta', '1967-11-07', 'France'); -- Im good (Blue)
INSERT INTO Contributor VALUES ('43', 'Bebe Rexha', '1989-08-30', 'USA');
INSERT INTO Contributor VALUES ('44', 'Kamille', NULL, 'UK');
INSERT INTO Contributor VALUES ('45', 'Chris Brown', '1989-05-05', 'USA'); -- under the infulence
INSERT INTO Contributor VALUES ('46', 'Davido', '1992-11-21', 'Nigeria');
INSERT INTO Contributor VALUES ('47', 'Kiddominant', '1992-07-13', 'Nigeria');
INSERT INTO Contributor VALUES ('48', 'Miranda Lambert', '1983-11-10', 'USA');
INSERT INTO Contributor VALUES ('49', 'Sam Smith', '1995-05-19', 'UK');
INSERT INTO Contributor VALUES ('50', 'Kim Petras', '1992-09-27', 'Germany');
INSERT INTO Contributor VALUES ('51', 'Danielle Balbuena(070 Shake)', '1997-06-13','USA');
INSERT INTO Contributor VALUES ('52', 'Rachel Agatha Keen(Raye)','1997-10-24','USA');
INSERT INTO Contributor VALUES ('53', 'Symere Bysil Woods(Lil Uzi Vert)', '1995-07-31', 'USA');
INSERT INTO Contributor VALUES ('54', 'Hassan Emilio Kabande Laija(Peso Pluma)', '1999-06-15', 'Mexico');
INSERT INTO Contributor VALUES ('55', 'Ryan Hadlock', NULL, 'USA');
INSERT INTO Contributor VALUES ('56', 'Zachary Lane Bryan', '1996-04-02', 'USA');
INSERT INTO Contributor VALUES ('57', 'Josh Hoge', NULL, 'USA');  -- Thank God Writter
INSERT INTO Contributor VALUES ('58', 'Dann Huff', '1960-11-15', 'USA'); -- Thank god producer
INSERT INTO Contributor VALUES ('59', 'Kane Allen Brown', '1993-10-21', 'USA'); -- Thank god signer
INSERT INTO Contributor VALUES ('60', 'Dallas Wilson', NULL, 'USA'); -- Heart Like a Truck writter
INSERT INTO Contributor VALUES ('61', 'Lainey Denay Wilson', '1992-05-19', 'USA'); -- Heart Like a Truck Singer
INSERT INTO Contributor VALUES ('62', 'Aubrey Drake Graham', '1986-10-24', 'Canada'); -- Rich Flex
INSERT INTO Contributor VALUES ('63', 'Anderson Hernandez(Vinylz)', '1989-09-02', 'USA'); -- Rich Flex Producer
INSERT INTO Contributor VALUES ('64', 'Ariana Grande-Butera', '1993-06-26', 'USA'); -- Signer Producer
INSERT INTO Contributor VALUES ('65', 'Luis Fonis', '1978-04-15', 'USA');  -- Despacito Writter and singer
INSERT INTO Contributor VALUES ('66', 'Daddy Yankee', '1977-02-03', 'USA'); -- Despacito Writter and singer
INSERT INTO Contributor VALUES ('67', 'Justin Bieber', '1994-03-01', 'Canada'); -- Despacito Writter and singer
INSERT INTO Contributor VALUES ('68', 'Andrés Torres', NULL, 'Colombia'); --Despcito Producer

INSERT INTO SignUp VALUES ('1','1','2023-04-29 13:54:00','F',NULL, 1.0, 'Solo'); 
INSERT INTO SignUp VALUES ('1','10','2023-04-29 13:55:00','P','1', 10.5, 'Duet');
INSERT INTO SignUp VALUES ('2','11','2023-04-29 13:56:00','F',NULL, 11.0, 'Solo'); 
INSERT INTO SignUp VALUES ('2','13','2023-04-29 13:57:00','P','5', 13.5, 'Duet'); 
INSERT INTO SignUp VALUES ('4','4','2023-04-29 13:58:00','F',NULL, 4.5, 'Duet'); 
INSERT INTO SignUp VALUES ('4','2','2023-04-29 13:59:00','P','10', 2.0, 'Solo'); 
INSERT INTO SignUp VALUES ('10','21','2023-04-29 14:00:00','F',NULL, 21.0, 'Solo'); 
INSERT INTO SignUp VALUES ('10','27','2023-04-29 14:01:00','P','3', 27.0, 'Solo'); 
INSERT INTO SignUp VALUES ('7','29','2023-04-29 14:02:00','F',NULL,29.5, 'Duet'); 
INSERT INTO SignUp VALUES ('7','6','2023-04-29 14:03:00','P','2', 1.5, 'Duet');

INSERT INTO Creates VALUES ('1','1','Singer','2023-02-06');
INSERT INTO Creates VALUES ('1','2','Writter','2023-02-06');
INSERT INTO Creates VALUES ('1','3','Producer','2023-02-06');
INSERT INTO Creates VALUES ('2','4','Singer, Writter','2022-12-06');
INSERT INTO Creates VALUES ('2','5','Writter, Producer','2022-12-06');
INSERT INTO Creates VALUES ('2','6','Producer','2022-12-06');
INSERT INTO Creates VALUES ('3','7','Signer, Writter','2023-01-12');
INSERT INTO Creates VALUES ('3','8','Producer','2023-01-12');
INSERT INTO Creates VALUES ('3','9','Writter','2023-01-12');
INSERT INTO Creates VALUES ('4','10','Producer','2022-12-13');
INSERT INTO Creates VALUES ('4','11','Singer, Writter','2022-12-13');
INSERT INTO Creates VALUES ('4','12','Singer, Writter','2022-12-13');
INSERT INTO Creates VALUES ('4','13','Producer, Writter','2022-12-13');
INSERT INTO Creates VALUES ('5','14','Writter, Producer','2023-02-24');
INSERT INTO Creates VALUES ('5','15','Producer','2023-02-24');
INSERT INTO Creates VALUES ('6','16','Writter, Producer','2022-12-30');
INSERT INTO Creates VALUES ('6','17','Signer, Writter','2022-12-30');
INSERT INTO Creates VALUES ('6','18','Writter','2022-12-30');
INSERT INTO Creates VALUES ('7','19','Signer, Writter','2022-07-25');
INSERT INTO Creates VALUES ('7','20','Signer, Writter','2022-07-25');
INSERT INTO Creates VALUES ('7','21','Producer','2022-07-25');
INSERT INTO Creates VALUES ('8','22','Signer, Producer, Writter','2022-10-21');
INSERT INTO Creates VALUES ('8','23','Writter, Producer','2022-10-21');
INSERT INTO Creates VALUES ('9','24','Signer, Writter','2022-11-30');
INSERT INTO Creates VALUES ('9','25','Producer, Writter','2022-11-30');
INSERT INTO Creates VALUES ('9','26','Writter','2022-11-30');
INSERT INTO Creates VALUES ('10','27','Signer','2022-06-10');
INSERT INTO Creates VALUES ('10','28','Writter','2022-06-10');
INSERT INTO Creates VALUES ('10','29','Producer','2022-06-10');
INSERT INTO Creates VALUES ('11','22','Singer, Writer','2022-11-29');
INSERT INTO Creates VALUES ('11','23','Writer, Producer','2022-11-29');
INSERT INTO Creates VALUES ('11','30','Writer','2022-11-29');
INSERT INTO Creates VALUES ('12','1','Singer','2022-07-18');
INSERT INTO Creates VALUES ('12','31','Writer','2022-07-18');
INSERT INTO Creates VALUES ('12','3','Producer','2022-07-18');
INSERT INTO Creates VALUES ('13','32','Singer, Writer','2022-04-01');
INSERT INTO Creates VALUES ('13','8','Writer','2022-04-01');
INSERT INTO Creates VALUES ('13','33','Producer','2022-04-01');
INSERT INTO Creates VALUES ('14','34','Singer','2023-02-17');
INSERT INTO Creates VALUES ('14','35','Writer','2023-02-17');
INSERT INTO Creates VALUES ('14','36','Producer','2023-02-17');
INSERT INTO Creates VALUES ('15','37','Singer','2010-11-26');
INSERT INTO Creates VALUES ('15','38','Writer, Producer','2010-11-26');
INSERT INTO Creates VALUES ('16','39','Singer, Writer, Producer','2023-03-31');
INSERT INTO Creates VALUES ('17','40','Singer, Writer',NULL);
INSERT INTO Creates VALUES ('17','41','Writer, Producer',NULL);
INSERT INTO Creates VALUES ('18','42','Writer, Producer','2022-07-26');
INSERT INTO Creates VALUES ('18','43','Singer','2022-07-26');
INSERT INTO Creates VALUES ('18','44','Producer','2022-07-26');
INSERT INTO Creates VALUES ('19','45','Singer','2022-08-06');
INSERT INTO Creates VALUES ('19','46','Writer','2022-08-06');
INSERT INTO Creates VALUES ('19','47','Producer','2022-08-06');
INSERT INTO Creates VALUES ('20','1','Singer','2022-11-07');
INSERT INTO Creates VALUES ('20','3','Producer','2022-11-07');
INSERT INTO Creates VALUES ('20','48','Writer','2022-11-07');
INSERT INTO Creates VALUES ('21','1','Singer, Writter','2023-03-03'); -- Thinkin' Bout Me, Morgan Wallen
INSERT INTO Creates VALUES ('21','3','Producer','2023-03-03');
INSERT INTO Creates VALUES ('22','49','Singer, Writter, Producer','2022-09-22'); -- Unholy, Sam Smith
INSERT INTO Creates VALUES ('22','50','Singer, Writter, Producer','2022-09-22');
INSERT INTO Creates VALUES ('23','51','Singer','2022-10-12'); -- Escapism, RAYE
INSERT INTO Creates VALUES ('23','52','Writter','2022-10-12');
INSERT INTO Creates VALUES ('24','1','Singer, Writter','2023-03-03'); -- One Thing At A Time, Morgan Wallen
INSERT INTO Creates VALUES ('24','3','Producer','2023-03-03');
INSERT INTO Creates VALUES ('25','53','Signer, Writter','2022-10-17'); -- Just Wanna Rock, Lil Uzi Vert
INSERT INTO Creates VALUES ('26','54','Signer','2023-04-01'); -- La Bebe, Yng Lvcas
INSERT INTO Creates VALUES ('27','55','Producer','2022-04-22'); -- Something in the Orange, Zach Bryan
INSERT INTO Creates VALUES ('27','56','Signer','2022-04-22');
INSERT INTO Creates VALUES ('28','57','Writter','2022-09-12'); -- Thank God, Kane Brown
INSERT INTO Creates VALUES ('28','58','Producer','2022-09-12');
INSERT INTO Creates VALUES ('28','59','Signer','2022-09-12');
INSERT INTO Creates VALUES ('29','60','Writter','2022-05-20'); -- Heart Like a Truck, Lainey Wilson
INSERT INTO Creates VALUES ('29','61','Signer','2022-05-20');
INSERT INTO Creates VALUES ('30','62','Signer, Writter','2022-11-04'); -- Rich Flex, Drake
INSERT INTO Creates VALUES ('30','12','Signer, Writter','2022-11-04'); 
INSERT INTO Creates VALUES ('30','63', 'Producer', '2022-11-04');
INSERT INTO Creates Values ('31', '4', 'Signer and Writter','2023-01-10'); -- Kill Bill Remix
INSERT INTO Creates Values ('31', '6', 'Signer and Writter','2023-01-10');
INSERT INTO Creates VALUES ('31','5','Writter, Producer','2023-01-10');
INSERT INTO Creates VALUES ('32','14','Writter, Producer','2023-02-24'); -- Die for you remix
INSERT INTO Creates VALUES ('32','15','Producer','2023-02-24');
INSERT INTO Creates VALUES ('32','64','Writter, Producer','2023-02-24');
INSERT INTO Creates VALUES ('33', '65', 'Singer, Writter', '2017-01-12'); -- Despacito
INSERT INTO Creates VALUES ('33', '66', 'Singer, Writter', '2017-01-12');
INSERT INTO Creates VALUES ('33', '68', 'Producer', '2017-01-12');
INSERT INTO Creates VALUES ('34','65','Singer, Writter', '2017-04-17'); -- Despacito Remix
INSERT INTO Creates VALUES ('34','66','Singer, Writter', '2017-04-17');
INSERT INTO Creates VALUES ('34','67','Singer, Writter', '2017-04-17');
INSERT INTO Creates VALUES ('34','68','Singer, Writter', '2017-04-17');

SHOW TABLES;
SELECT * FROM Song;
SELECT * FROM Contributor;
SELECT * FROM Users;
SELECT * FROM Creates;
SELECT * FROM SignUp;