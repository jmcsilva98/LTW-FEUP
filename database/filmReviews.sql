PRAGMA foreign_keys = ON;
.mode columns
.headers on
.nullvalue NULL

BEGIN TRANSACTION;

DROP TABLE IF EXISTS User;

CREATE TABLE User (
    ID        INTEGER PRIMARY KEY AUTOINCREMENT,
    FirstName STRING NOT NULL,
    LastName  STRING NOT NULL,
    Username  STRING UNIQUE NOT NULL,
    Gender    STRING NOT NULL,
    Birthday  DATE NOT NULL,
    Country   STRING NOT NULL,
    Email     STRING UNIQUE NOT NULL,
    Password  CHAR (256) NOT NULL,  
    Photo     STRING DEFAULT "default.jpg",
    Points    INTEGER
    
);

DROP TABLE IF EXISTS Genre;

CREATE TABLE Genre (
    ID          INTEGER PRIMARY KEY AUTOINCREMENT,
    Name        STRING NOT NULL 
);

DROP TABLE IF EXISTS Director;

CREATE TABLE Director (
     ID          INTEGER  PRIMARY KEY AUTOINCREMENT,
     Name        STRING NOT NULL
);

DROP TABLE IF EXISTS Movie;

CREATE TABLE Movie (
    ID          INTEGER PRIMARY KEY AUTOINCREMENT,
    Name        STRING NOT NULL,
    ReleaseYear STRING NOT NULL,
    CoverPhoto  STRING DEFAULT "default.jpg"
);

DROP TABLE IF EXISTS MovieGenre;

CREATE TABLE MovieGenre (
    GenreID    INTEGER REFERENCES Genre(ID),
    MovieID    INTEGER REFERENCES Movie(ID),
    PRIMARY KEY (GenreID, MovieID)

);

DROP TABLE IF EXISTS MovieGenre;

CREATE TABLE MovieDirector (
    DirectorID    INTEGER REFERENCES Director(ID),
    MovieID    INTEGER REFERENCES Movie(ID),
    PRIMARY KEY (DirectorID, MovieID)
);


DROP TABLE IF EXISTS Review;

CREATE TABLE Review (
    ID          INTEGER UNIQUE AUTOINCREMENT,
    Title       STRING  NOT NULL,
    UserID      INTEGER REFERENCES User(ID),
    MovieID     INTEGER REFERENCES Movie(ID),
    ReviewDate  DATE NOT NULL,
    Heart       INTEGER,
    Dislike     INTEGER,
    Description STRING NOT NULL
    
);

DROP TABLE IF EXISTS Comment;

CREATE TABLE Comment (
    ID          INTEGER PRIMARY KEY AUTOINCREMENT,
    UserID      INTEGER REFERENCES User(ID),
    CommentDate DATE NOT NULL,
    Heart       INTEGER,
    Dislike     INTEGER,
    ReviewID    INTEGER REFERENCES Review(ID),
    Description STRING NOT NULL
    
);




