INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Joana','Silva','jmcsilva','feminine', '1998-05-19', 'Portugal', 'jmc@gmail.com','441b02df090112b0b48b44e9eb6026d2ca1eec0d685c7d5712b59efbb9423a0c', NULL, 0);
INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Miguel','Santos','mgst98','masculine', '1998-07-23', 'Portugal', 'mgs98@gmail.com','ccadd99b16cd3d200c22d6db45d8b6630ef3d936767127347ec8a76ab992c2ea', NULL,  3);
INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Mary','Smith','mars_123','feminine', '1992-10-05', 'Australia', 'mars@gmail.com','441b02df090112b0b48b44e9eb6026d2ca1eec0d685c7d5712b59efbb9423a0c', NULL,  0);

INSERT INTO Genre(Name) VALUES ('Drama');
INSERT INTO Genre(Name) VALUES ('Biography');
INSERT INTO Genre(Name) VALUES ('Action');
INSERT INTO Genre(Name) VALUES ('Animation');
INSERT INTO Genre(Name) VALUES ('Romance');
INSERT INTO Genre(Name) VALUES ('Comedy');
INSERT INTO Genre(Name) VALUES ('Thriller');

INSERT INTO DIRECTOR(Name) VALUES ('Frank Darabont');
INSERT INTO DIRECTOR(Name) VALUES ('Bryan Singer');
INSERT INTO DIRECTOR(Name) VALUES ('Ruben Fleischer');
INSERT INTO DIRECTOR(Name) VALUES ('Brad Bird');
INSERT INTO DIRECTOR(Name) VALUES ('Joel Edgerton');

INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('The Shawshank Redemption', '1994', 'shawshank_redemption.jpg', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.' );
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Bohemian Rhapsody','2018', 'bohemian.jpg', 'A chronicle of the years leading up to Queens legendary appearance at the Live Aid (1985) concert.');
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Venom','2018', 'venom.jpg','When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego "Venom" to save his life.');
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('The Incredibles 2', '2018', 'incredibles2.jpg', 'Bob Parr (Mr. Incredible) is left to care for the kids while Helen (Elastigirl) is out saving the world.' );
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Ratatouille','2007', 'ratatui.jpg', 'A rat who can cook makes an unusual alliance with a young kitchen worker at a famous restaurant.');
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Boy Erased','2018','boy_erased.png','The son of a Baptist preacher is forced to participate in a church-supported gay conversion program after being forcibly outed to his parents.');

INSERT INTO MovieGenre(GenreID, MovieID) VALUES (1,1);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (2,2);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (3,3);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (4,4);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (4,5);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (2,6);

INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (1,1);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (2,2);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (3,3);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (4,4);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (4,5);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (5,6);

INSERT INTO Review(Title, UserID, MovieID, ReviewDate, Description) VALUES ('An impressive movie of a terrifying practice', 1, 6, '2018-10-08', 'It is scary what we do to ourselves and our families. This is a dramatization of a real life horror. Well written, well acted and well directed.');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Edgerton delivers one of the best films of 2018', 2, 6, '2018-11-02', 'Boy Erased is a memoir by Garrard Conley, and it was adapted to the screen by writer, director, and actor, Joel Edgerton. Lucas Hedges plays Jared, a 19 yr. old boy from a devout baptist family. Jared knows he is gay, but decides not to tell anyone, because being gay is a major sin to Baptists. When Jareds parents played by a powerful Nicole Kidman and Russel Crowe, find out the truth about Jareds sexuality, they have no choice, but to send him to Love in Action, a gay conversion camp to fix his "addiction." The camp is led by Victor Sykes, an ex-gay himself (played by writer/director Joel Edgerton). When Jared begins his time at LIA, he is ready to put his homosexual acts behind him, but as he quickly sees the terrors of LIAs facility, he realizes that he needs to break away and live the life he cannot deny. The film provides many emotional scenes throughout and it gives viewers a look at the horrors of conversion therapy. Before seeing this film, I read the book, and this movie is one of the rare instances when the movie might be better than the book. Edgerton masterfully displays the hurt and sorrow Jared is going through, and the pain he is feeling knowing that his relationship with his family has taken a hit. The scenes between Hedges and Kidman are especially heartfelt and gripping, as well as the last scene between Crowe and Hedges. When the film comes to an end, you will be left feeling many emotions because of the strong emotional tone of the film. The tone is depicted in a clear and concise way by Edgerton, and its hard to lose interest throughout. Edgerton has provided one of the best movies of 2018, with unforgettable performances led by the tremendous Lucas Hedges. Boy Erased is a poignant film about family, love, and being yourself, and it is an important film which should be seen to make known of these relevant issues and stories');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Powerful', 3, 1, '2001-07-25', 'One of my all time favorites. Shawshank Redemption is a very moving story about hope and the power of friendship. The cast is first rate with everyone giving a great performance. Tim Robbins and Morgan Freeman carry the movie, but Bob Gunton and Clancy Brown are perfect as the Warden Norton and prison guard captain Hadley respectively. And James Whitmores portrail of an elderly inmate Brooks is moving. The screenplay gives almost every actor at least one or more memorable lines through out the film. As well as a very surprising "twist" near the end that almost knocked me out of my chair. If you have not seen this movie rent it or better yet buy it. As I bet youll want to see this one more than once.');

INSERT INTO Comment(UserID,CommentDate,ReviewID,Description) VALUES (2,'2018-10-11',1,'Agreed...');
INSERT INTO Comment(UserID,CommentDate,ReviewID,Description) VALUES (3,'2018-11-03',2,'Amazing review!!');

INSERT INTO LikeReview(UserID,ReviewID) VALUES (1,2);
INSERT INTO LikeReview(UserID,ReviewID) VALUES (1,1);
INSERT INTO LikeReview(UserID,ReviewID) VALUES (2,1);
INSERT INTO LikeReview(UserID,ReviewID) VALUES (3,1);

INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (1,3);
INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (2,2);
INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (2,3);
INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (3,2);

INSERT INTO LikeComment(UserID,CommentID) VALUES (1,2);
INSERT INTO LikeComment(UserID,CommentID) VALUES (1,1);

INSERT INTO DisLikeComment(UserID,CommentID) VALUES (2,1);
INSERT INTO DisLikeComment(UserID,CommentID) VALUES (3,2);