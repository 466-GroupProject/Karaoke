/*
    Julio Rivera, Michael Rasmussen, Oscar Vasquez 
	Z1979224, Z1696323, Z1968485
	CSCI 466 PE1
*/    
USE z1979224;
DROP TABLE IF EXISTS SignUp,Creates,Song,Users,Contributor;

CREATE TABLE Song (SongID int NOT NULL UNIQUE PRIMARY KEY,
            Title CHAR(50) NOT NULL,
            Artist CHAR(50) NOT NULL, 
            Length TIME NOT NULL,
            Genre CHAR(20) NOT NULL,
            StreamNum char(20) NOT NULL);

CREATE TABLE Users (UsersID int(20) NOT NULL UNIQUE AUTO_INCREMENT PRIMARY KEY,
            Name CHAR(50) NOT NULL, 
            StageName CHAR(50) NULL,
            Balance int(20) NOT NULL DEFAULT '0',
            Email CHAR(50) NOT NULL UNIQUE,
            PhoneNum CHAR(20) NOT NULL UNIQUE);

CREATE TABLE Contributor (ContributorID int(20) NOT NULL UNIQUE  PRIMARY KEY,
            Name CHAR(50) NOT NULL, 
            BDay Date NULL,
            Country CHAR(20) NULL);

CREATE TABLE SignUp (UsersID int(20) NOT NULL,
            SongID int(20) NOT NULL, 
            SignUpTime TIMESTAMP NOT NULL,
            QueueType CHAR(20) NOT NULL,
            Cost int(20) NULL,
            FileID DECIMAL(4,1) NOT NULL,
            Versions char(4) NOT NULL,
            PRIMARY KEY(UsersID,SongID,SignUpTime), 
            FOREIGN KEY(UsersID) REFERENCES Users(UsersID),
            FOREIGN KEY(SongID) REFERENCES Song(SongID));

CREATE TABLE Creates (SongID int(20) NOT NULL,
            ContributorID int(20) NOT NULL,
            Contribution CHAR(30) NOT NULL,
            ReleaseDate Date NULL,
            PRIMARY KEY(ContributorID,SongID),
            FOREIGN KEY(ContributorID) REFERENCES Contributor(ContributorID),
            FOREIGN KEY(SongID) REFERENCES Song(SongID));

SHOW TABLES;
DESCRIBE Song;
DESCRIBE Contributor;
DESCRIBE Users;
DESCRIBE Creates;
DESCRIBE SignUp;