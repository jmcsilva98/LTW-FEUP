PRAGMA foreign_keys = ON;
.mode columns
.headers on
.nullvalue NULL

BEGIN TRANSACTION;

DROP TABLE IF EXISTS User;

CREATE TABLE User (
    ID        INTEGER PRIMARY KEY AUTOINCREMENT,
    FirstName NOT NULL STRING,
    LastName  NOT NULL STRING,
    Username  STRING UNIQUE NOT NULL,
    Gender    STRING NOT NULL,
    Birthday  DATE NOT NULL,
    Country   STRING NOT NULL,
    Email     STRING UNIQUE NOT NULL,
    Password  CHAR (256) NOT NULL,  
    Photo     STRING DEFAULT "default.jpg",
    Points    INTEGER
    
);

DROP TABLE IF EXISTS Movie;

CREATE TABLE Movie (
    Name        STRING PRIMARY KEY NOT NULL,
    ID          INTEGER UNIQUE AUTOINCREMENT,
    GenreID     INTEGER REFERENCES Genre(ID),
    ReleaseDate DATE NOT NULL,
    CoverPhoto  STRING DEFAULT "default.jpg",
    DirectorID  INTEGER REFERENCES Director(ID)
);

DROP TABLE IF EXISTS Genre;

CREATE TABLE Genre (
    Name        STRING PRIMARY KEY NOT NULL,
    ID          INTEGER UNIQUE AUTOINCREMENT 
);

DROP TABLE IF EXISTS Director;

CREATE TABLE Director (
    Name        STRING PRIMARY KEY NOT NULL,
    ID          INTEGER UNIQUE AUTOINCREMENT 
);

DROP TABLE IF EXISTS Review;

CREATE TABLE Review (
    ID          INTEGER UNIQUE AUTOINCREMENT,
    Title       STRING  NOT NULL,
    UserID      INTEGER REFERENCES User(ID),
    ReviewDate  DATE NOT NULL,
    Heart       INTEGER,
    Dislike       INTEGER,
    Description STRING NOT NULL
    
);

DROP TABLE IF EXISTS Comment;

CREATE TABLE Comment (
    ID          INTEGER UNIQUE AUTOINCREMENT,
    UserID      INTEGER REFERENCES User(ID),
    CommentDate DATE NOT NULL,
    Heart       INTEGER,
    Dislike     INTEGER,
    ReviewID    INTEGER REFERENCES Review(ID),
    Description STRING NOT NULL
    
);




