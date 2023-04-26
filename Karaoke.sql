USE z1979224;
DROP TABLE IF EXISTS SignUp,Creates,Song,Users,Contributor;

CREATE TABLE Song (SongID int(20) NOT NULL PRIMARY KEY,
            Title CHAR(50) NOT NULL,
            Artist CHAR(50) NOT NULL, 
            Length CHAR(20) NOT NULL,
            Genre CHAR(20) NOT NULL,
            StreamNum CHAR(20) NOT NULL);

INSERT INTO Song VALUES ('1','Last Night','Morgan Wallen','2:45','Country','191,271,400');
INSERT INTO Song VALUES ('2','Kill Bill','SZA','2:35','POP','814,149,700');
INSERT INTO Song VALUES ('3','Flowers','Miley Cyrus','3:21','POP','904,525,900');
INSERT INTO Song VALUES ('4','Creepin\'','Metro Boomin','3:42','R&B','580,369,400'); /* FT 21 Savage AND The Weekend */
INSERT INTO Song VALUES ('5','Die For You','The Weekend','4:20','R&B','1,420,902,600'); /* FT Ariana Grande */
INSERT INTO Song VALUES ('6','Boy\'s a Liar Pt. 2','Pink Pantheress','2:11','POP','335,806,400'); /* FT Ice Spice */
INSERT INTO Song VALUES ('7','Calm Down','Rema','3:59','Afrobeats','629,610,200'); /* FT Selena Gomez */
INSERT INTO Song VALUES ('8','Anti-Hero','Taylor Swift','3:21','POP','756,115,700');
INSERT INTO Song VALUES ('9','Players','Coi Leray','2:19','N/A','205,441,400');
INSERT INTO Song VALUES ('10','Rock and a Hard Place','Bailey Zimmerman','3:27','Country','196,140,300');
INSERT INTO Song VALUES ('11','Lavender Haze','Taylor Swift','3:22','POP','372,680,900');
INSERT INTO Song VALUES ('12','You Proof','Morgan Wallen','2:37','Country','268,164,800');
INSERT INTO Song VALUES ('13','As It Was','Harry Styles','2:47','POP','2,174,633,600');
INSERT INTO Song VALUES ('14','Favorite Song','Toosii','3:29','R&B','39,962,100');
INSERT INTO Song VALUES ('15','Sure Thing','Miguel','3:13','R&B','814,255,500');
INSERT INTO Song VALUES ('16','Fight The Feeling','Rod Wave','2:40','N/A','10,106,600');
INSERT INTO Song VALUES ('17','Ella Baila Sola','Eslabon Armado','2:45','N/A','139,007,600'); /* FT Peso Pluma */
INSERT INTO Song VALUES ('18','I\'m Good (Blue)','David Guetta','2:55','Dance','881,477,500'); /* FT Bebe Rexha */
INSERT INTO Song VALUES ('19','Under The Influence','Chris Brown','3:04','R&B','790,736,100');
INSERT INTO Song VALUES ('20','Thought You Should Know','Morgan Wallen','3:35','Country','152,931,500');
INSERT INTO Song VALUES ('21','Thinkin\' Bout Me','Morgan Wallen','2:57','Country','47,053,600');
INSERT INTO Song VALUES ('22','Unholy','Sam Smith','2:36','POP','1,042,091,400'); /* FT Kim Petras */
INSERT INTO Song VALUES ('23','Escapism','RAYE','4:32','R&B','386,846,500'); /* FT 070 Shake */
INSERT INTO Song VALUES ('24','One Thing At A Time','Morgan Wallen','3:26','Country','89,028,300');
INSERT INTO Song VALUES ('25','Just Wanna Rock','Lil Uzi Vert','2:03','Dance','336,784,300');
INSERT INTO Song VALUES ('26','La Bebe','Yng Lvcas','3:54','N/A','103,046,600'); /* FT Peso Pluma */
INSERT INTO Song VALUES ('27','Something in the Orange','Zach Bryan','3:48','Country','348,413,600');
INSERT INTO Song VALUES ('28','Thank God','Kane Brown','2:54','Country','70,032,600'); /* FT Katelyn Brown */
INSERT INTO Song VALUES ('29','Heart Like a Truck','Lainey Wilson','3:19','Country','66,772,800');
INSERT INTO Song VALUES ('30','Rich Flex','Drake','3:59','R&B','456,752,300'); /* FT 21 Savage */

CREATE TABLE Users (UsersID CHAR(20) NOT NULL PRIMARY KEY,
            Name CHAR(20) NOT NULL, 
            StageName CHAR(20) NOT NULL,
            Balance CHAR(20) NOT NULL,
            Email CHAR(20) NOT NULL,
            PhoneNum CHAR(20) NOT NULL);

CREATE TABLE Contributor (ContributorID CHAR(20) NOT NULL PRIMARY KEY,
            Name CHAR(20) NOT NULL, 
            BDay CHAR(20) NOT NULL,
            Country CHAR(20) NOT NULL);

INSERT INTO Contributor Values ('1','Morgan Wallen','05/13/1993','USA'); -- Last Night Singer
INSERT INTO Contributor Values ('2','Ashley','04/29/1977','USA'); -- Last Night Writter
INSERT INTO Contributor Values ('3','Joey Moi','1975','Canada'); -- Last Night Producer
INSERT INTO Contributor Values ('4','SZA (Solána Rowe)','11/08/1989','USA'); -- Kill Bill Singer and Writter
INSERT INTO Contributor Values ('5','Carter Lang','N/A','N/A'); -- Kill Bill Writter and Producer
INSERT INTO Contributor Values ('6','Doja Cat (Amala Dlamini)','10/21/1995','USA'); -- Kill Bill Singer
INSERT INTO Contributor Values ('7','Miley Cyrus','11/23/1992','USA'); -- Flowers Singer and Writer
INSERT INTO Contributor Values ('8','Kid Harpoon','04/20/1982','England'); -- Flowers Producer
INSERT INTO Contributor Values ('9','Michael Pollack','04/26/1994','USA'); -- Flowers Writter
INSERT INTO Contributor Values ('10','Metro Boomin (Leland Wayne)','09/16/1993','USA'); -- Creepin' Producer
INSERT INTO Contributor Values ('11','The Weekend (Abel Tesfaye)','02/16/1990','Canada'); -- Creepin' Singer and Writter - Die For You Singer
INSERT INTO Contributor Values ('12','21 Savage (Shéyaa Abraham-Joseph)','10/22/1992','England'); -- Creepin' Singer and Writter
INSERT INTO Contributor Values ('13','DaHeala (Jason Quenneville)','02/23/1982','Canada'); -- Creepin' Producer and Writter
INSERT INTO Contributor Values ('14','Doc McKinney','08/27/1971','Canada'); -- Die For You Writter and Producer
INSERT INTO Contributor Values ('15','Cirkut (Henry Walter)','04/23/1986','Canada'); -- Die For You Producer
INSERT INTO Contributor Values ('16','PinkPantheress','04/18/2001','England'); -- Boy's a Liar Pt. 2 Writter and Producer
INSERT INTO Contributor Values ('17','Ice Spice (Isis Naija Gaston)','01/01/2000','USA'); -- Boy's a Liar Pt. 2 Writter and Singer
INSERT INTO Contributor Values ('18','Mura Masa (Alexander Crossan)','04/05/1996','England'); -- Boy's a Liar Pt. 2 Writter
INSERT INTO Contributor Values ('19','Rema (Divine Ikubor)','05/01/2000','Nigeria'); -- Calm Down Singer and Writter
INSERT INTO Contributor Values ('20','Selena Gomez','07/22/1992','USA'); -- Calm Down Singer and Writter
INSERT INTO Contributor Values ('21','London (Michael Hunter)','1999','England'); -- Calm Down Producer
INSERT INTO Contributor Values ('22','Taylor Swift','12/13/1989','USA'); -- Anti-Hero Singer and Producer and Writter
INSERT INTO Contributor Values ('23','Jack Antonoff','03/31/1984','USA'); -- Anti-Hero Writter and Producer
INSERT INTO Contributor Values ('24','Coi Leray (Coi Collins)','05/11/1997','USA'); -- Players Singer and writter
INSERT INTO Contributor Values ('25','Johnny Goldstien','01/29/1991','Israel'); -- Players Producer and writter
INSERT INTO Contributor Values ('26','Duke Bootee (Edward Fletcher)','06/06/1951','USA'); -- Players Writter
INSERT INTO Contributor Values ('27','Bailey Zimmerman','01/27/2000','USA'); -- Rock and a Hard Place Singer
INSERT INTO Contributor Values ('28','Heath Warren','N/A','USA'); -- Rock and a Hard Place Writter
INSERT INTO Contributor Values ('29','Austin Shawn','N/A','USA'); -- Rock and a Hard Place Producer

CREATE TABLE SignUp (UsersID CHAR(20) NOT NULL,
            SongID int(20) NOT NULL, 
            SignUpTime CHAR(20) NOT NULL,
            QueueType CHAR(20) NOT NULL,
            Cost CHAR(20) NOT NULL,
            PRIMARY KEY(UsersID,SongID,SignUpTime), 
            FOREIGN KEY(UsersID) REFERENCES Users(UsersID),
            FOREIGN KEY(SongID) REFERENCES Song(SongID));

CREATE TABLE Creates (SongID int(20) NOT NULL,
            ContributorID CHAR(20) NOT NULL,
            Contribution CHAR(20) NOT NULL,
            ReleseDate CHAR(20) NOT NULL,
            PRIMARY KEY(ContributorID,SongID,Contribution),
            FOREIGN KEY(ContributorID) REFERENCES Contributor(ContributorID),
            FOREIGN KEY(SongID) REFERENCES Song(SongID));
           
/*
INSERT INTO Creates VALUES ('1','N/A','N/A','2/6/2023');
INSERT INTO Creates VALUES ('2','N/A','N/A','12/6/2022');
INSERT INTO Creates VALUES ('3','N/A','N/A','1/12/2023');
INSERT INTO Creates VALUES ('4','N/A','N/A','12/13/2022');
INSERT INTO Creates VALUES ('5','N/A','N/A','2/24/2023');
INSERT INTO Creates VALUES ('6','N/A','N/A','12/30/2022');
INSERT INTO Creates VALUES ('7','N/A','N/A','7/25/2022');
INSERT INTO Creates VALUES ('8','N/A','N/A','10/21/2022');
INSERT INTO Creates VALUES ('9','N/A','N/A','11/30/2022');
INSERT INTO Creates VALUES ('10','N/A','N/A','06/10/2022');
INSERT INTO Creates VALUES ('11','N/A','N/A','11/29/2022');
INSERT INTO Creates VALUES ('12','N/A','N/A','07/18/2022');
INSERT INTO Creates VALUES ('13','N/A','N/A','04/1/2022');
INSERT INTO Creates VALUES ('14','N/A','N/A','02/17/2023');
INSERT INTO Creates VALUES ('15','N/A','N/A','11/26/2010');
INSERT INTO Creates VALUES ('16','N/A','N/A','03/31/2023');
INSERT INTO Creates VALUES ('17','N/A','N/A','N/A');
INSERT INTO Creates VALUES ('18','N/A','N/A','07/26/2022');
INSERT INTO Creates VALUES ('19','N/A','N/A','08/06/2022');
INSERT INTO Creates VALUES ('20','N/A','N/A','11/07/2022');
INSERT INTO Creates VALUES ('21','N/A','N/A','03/03/2023');
INSERT INTO Creates VALUES ('22','N/A','N/A','09/22/2022');
INSERT INTO Creates VALUES ('23','N/A','N/A','10/12/2022');
INSERT INTO Creates VALUES ('24','N/A','N/A','03/03/2023');
INSERT INTO Creates VALUES ('25','N/A','N/A','10/17/2022');
INSERT INTO Creates VALUES ('26','N/A','N/A','04/01/2023');
INSERT INTO Creates VALUES ('27','N/A','N/A','04/22/2022');
INSERT INTO Creates VALUES ('28','N/A','N/A','09/12/2022');
INSERT INTO Creates VALUES ('29','N/A','N/A','05/20/2022');
INSERT INTO Creates VALUES ('30','N/A','N/A','11/04/2022');
*/

SHOW TABLES;
DESCRIBE Song;
SELECT * FROM Song;
SELECT * FROM Creates;

-- This is a test comment