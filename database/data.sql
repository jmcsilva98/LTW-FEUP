INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Joana','Silva','jmcsilva','feminine', '1998-05-19', 'Portugal', 'jmc@gmail.com','08f1cd26e65131f6430a5f4b1fad159414baf7f52771c85b9c6acfadad53b9f6', NULL, 0);
INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Miguel','Santos','mgst98','masculine', '1998-07-23', 'Portugal', 'mgs98@gmail.com','ccadd99b16cd3d200c22d6db45d8b6630ef3d936767127347ec8a76ab992c2ea', NULL,  3);
INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Mary','Smith','mars_123','feminine', '1992-10-05', 'Australia', 'mars@gmail.com','441b02df090112b0b48b44e9eb6026d2ca1eec0d685c7d5712b59efbb9423a0c', NULL,  0);
INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Daniel','Kim','kim_dan','masculine', '1989-07-17', 'United States', 'kims89@gmail.com','b800471929b924c809186012760cd9d3a1ea8b56d57bb5278bad8e215ba05c22', NULL, 2);
INSERT INTO User(FirstName, LastName, Username, Gender, Birthday, Country, Email, Password, Photo, Points) VALUES ('Aimilia','Sabat','aimi_1996','feminine', '1996-06-21', 'Bangladesh', 'aimiii@gmail.com','f90aaa143228f01d58ce31cfc46c36fda3958e1cd40cf04d54abb69726caa9ec', NULL, 1);




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
INSERT INTO DIRECTOR(Name) VALUES ('Francis Ford Coppola');

INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('The Shawshank Redemption', '1994', 'shawshank_redemption.jpg', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.' );
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Bohemian Rhapsody','2018', 'bohemian.jpg', 'A chronicle of the years leading up to Queens legendary appearance at the Live Aid (1985) concert.');
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Venom','2018', 'venom.jpg','When Eddie Brock acquires the powers of a symbiote, he will have to release his alter-ego "Venom" to save his life.');
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('The Incredibles 2', '2018', 'incredibles2.jpg', 'Bob Parr (Mr. Incredible) is left to care for the kids while Helen (Elastigirl) is out saving the world.' );
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Ratatouille','2007', 'ratatui.jpg', 'A rat who can cook makes an unusual alliance with a young kitchen worker at a famous restaurant.');
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('Boy Erased','2018','boy_erased.png','The son of a Baptist preacher is forced to participate in a church-supported gay conversion program after being forcibly outed to his parents.');
INSERT INTO Movie(Name, ReleaseYear, CoverPhoto, Description) VALUES ('The Godfather','1972','godfather.jpg','The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.');



INSERT INTO MovieGenre(GenreID, MovieID) VALUES (1,1);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (2,2);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (3,3);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (4,4);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (4,5);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (2,6);
INSERT INTO MovieGenre(GenreID, MovieID) VALUES (1,7);

INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (1,1);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (2,2);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (3,3);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (4,4);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (4,5);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (5,6);
INSERT INTO MovieDirector(DirectorID, MovieID) VALUES (6,7);

-- reviews of boy erased
INSERT INTO Review(Title, UserID, MovieID, ReviewDate, Description) VALUES ('An impressive movie of a terrifying practice', 1, 6, '2018-10-08', 'It is scary what we do to ourselves and our families. This is a dramatization of a real life horror. Well written, well acted and well directed.');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate, Description) VALUES ('A movie that every family should watch', 4, 6, '2018-11-11', 'One of the best movies of this year. the best actors are in here working on making a change. conversion therapy is not a real therapy. it is false and a horror that should not be allowed to happen to anyones life. this movie depicts the true experience of garrard conley, written by him.. as he had to go to a conversion camp. the story is touching and educational. should be watched by every parents as well as any family ');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate, Description) VALUES ('No word is worthy!', 3, 6, '2018-11-08', 'This is such a beautiful thing. beautiful cause it hurts. beautiful cause it is heartfelt. beautiful because in the end, we are what we are. beautiful. because. it is true. and truth deserves a voice.');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Edgerton delivers one of the best films of 2018', 2, 6, '2018-11-02', 'Boy Erased is a memoir by Garrard Conley, and it was adapted to the screen by writer, director, and actor, Joel Edgerton. Lucas Hedges plays Jared, a 19 yr. old boy from a devout baptist family. Jared knows he is gay, but decides not to tell anyone, because being gay is a major sin to Baptists. When Jareds parents played by a powerful Nicole Kidman and Russel Crowe, find out the truth about Jareds sexuality, they have no choice, but to send him to Love in Action, a gay conversion camp to fix his "addiction." The camp is led by Victor Sykes, an ex-gay himself (played by writer/director Joel Edgerton). When Jared begins his time at LIA, he is ready to put his homosexual acts behind him, but as he quickly sees the terrors of LIAs facility, he realizes that he needs to break away and live the life he cannot deny. The film provides many emotional scenes throughout and it gives viewers a look at the horrors of conversion therapy. Before seeing this film, I read the book, and this movie is one of the rare instances when the movie might be better than the book. Edgerton masterfully displays the hurt and sorrow Jared is going through, and the pain he is feeling knowing that his relationship with his family has taken a hit. The scenes between Hedges and Kidman are especially heartfelt and gripping, as well as the last scene between Crowe and Hedges. When the film comes to an end, you will be left feeling many emotions because of the strong emotional tone of the film. The tone is depicted in a clear and concise way by Edgerton, and its hard to lose interest throughout. Edgerton has provided one of the best movies of 2018, with unforgettable performances led by the tremendous Lucas Hedges. Boy Erased is a poignant film about family, love, and being yourself, and it is an important film which should be seen to make known of these relevant issues and stories');

-- reviews of shawshank redemption
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Powerful', 3, 1, '2001-07-25', 'One of my all time favorites. Shawshank Redemption is a very moving story about hope and the power of friendship. The cast is first rate with everyone giving a great performance. Tim Robbins and Morgan Freeman carry the movie, but Bob Gunton and Clancy Brown are perfect as the Warden Norton and prison guard captain Hadley respectively. And James Whitmores portrail of an elderly inmate Brooks is moving. The screenplay gives almost every actor at least one or more memorable lines through out the film. As well as a very surprising "twist" near the end that almost knocked me out of my chair. If you have not seen this movie rent it or better yet buy it. As I bet youll want to see this one more than once.');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Prepare to be moved',5, 1, '2001-02-02', 'I have never seen such an amazing film since I saw The Shawshank Redemption. Shawshank encompasses friendships, hardships, hopes, and dreams. And what is so great about the movie is that it moves you, it gives you hope. Even though the circumstances between the characters and the viewers are quite different, you do not feel that far removed from what the characters are going through. It is a simple film, yet it has an everlasting message.');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('A good movie but definitely not #1 of all time', 4, 1, '2012-07-20', 'This is certainly a good movie, with universal themes of freedom and adversity etc etc, but... I have seen plenty of movies which were more artfully made than this one. There is nothing revolutionary in the directing. The novella by Stephen King is practically tailor-made for a movie adaption, and it seems any capable director could have made a good movie from it. I think the only reason this movie is #2 on this list is the sheer amount of people who have seen it and voted. The other truly great movies near the top of the list do not pack the same mass audience appeal that Shawshank Redemption does, nor are they shown on TNT 6-10 times a year. Movies like 2001, The Seven Samurai, or Lawrence of Arabia, for example, would bore many of the people who love Shawshank Redemption, and I personally consider those three I named and many others to be far better creations than the Shawshank Redemption. Perhaps we should take a poll of TNT viewers on the best movie of all time - I would bet Shawshank Redemption would place first, with The Blues Brothers coming in a close second.');


-- reviews of godfather
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Perfect', 1, 7, '2001-05-16', 'This movie is strong, good script, great casting, excellent acting, and over the top directing. It is hard to fine a movie done this well, it is 29 years old and has aged well. Even if the viewer does not like mafia type of movies, he or she will watch the entire film, the audiences is glued to what will happen next as the film progresses. Its about, family, loyalty, greed, relationships, and real life. This is a great mix, and the artistic style make the film memorable.');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('A Masterpiece', 2, 7, '2002-07-05', 'This must rank as the best film (along with part 2)of all time.An ensemble performance that has no weak spot.
Particularly, John Cazale ( Fredo) and Richard Castellano ( Clemenza) give wonderfully understated performances. You just have to believe that Castellano WAS Clemenza, he brings a real touch to his role.
John Cazale brings the troubled Fredo to life, and you can see the weak Fredo desperately trying to live up to the family reputation but knowing that he can never be what his father wants. 
The story of one mans reluctance to be drawn into the murky family business,and his gradual change through circumstance, paints a vivid picture of this violent period of US history.
Do not miss this film!');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Slightly overrated', 3, 7, '2010-05-19', 'This movie is ridiculously overrated. It is merely a overly dramatized celluloid interpretation of life involved with the Italian Mafia. Yes, organized crime is a problem, but this movie is NOT all that amazing. There are entirely too many references to it in other movies, too many spoofs and too many quotes. It is a bad movie. Let it go. There is no real plot line and the bad accents were enough to give me a headache. This movie is mind numbingly boring. It feels as though I lose brain cells every time I am forced to watch this painfully shallow film. Most films following along a similar premise are horribly dull. Why does everyone rave about movies like this and Scarface? They are awful, overly exaggerated and generally badly constructed cinematic failures. A decent script and plot line were substituted for gratuitous blood, gore and explosions. A good movie starts with a good story and a good script, this lacks both. Every aspect of this movie was horribly boring. It does NOT deserve to be named "The Best Movie of All Time."');
INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Most overrated film of all-time', 5, 7, '2011-05-20', 'This movie continues to be praised, but when I rented it I only made it through 45 minutes before I stopped the video. There are not many movies that are so bad I do not watch the whole thing, but "The Godfather" is that bad. I do not care how much other people may like it. I still say it sucks,sucks,sucks,sucks,sucks,sucks,sucks...');

--reviews of incredibles

INSERT INTO Review(Title, UserID, MovieID, ReviewDate,  Description) VALUES ('Definitely not as good as the first Incredibles movie', 1, 4, '2001-05-16', 'Good: The animation for this movie was excellent just like most other Pixar movies, it was funny (especially Jack Jack) and I really liked the action sequences throughout the movie. I liked that the movie showed that parenting (when done right) can be heroic.

Bad: I thought this film has quite a few problems, the biggest problem was that the ending was pretty predictable, I could see it coming. Also, there was a feminism theme with Helen which was okay but at times it seemed to shove it in my face and it got to be annoying. There seemed to be a little too much going on in the movie and a few too many characters.');





INSERT INTO Comment(UserID,CommentDate,ReviewID,Description) VALUES (2,'2018-10-11',1,'Agreed...');
INSERT INTO Comment(UserID,CommentDate,ReviewID,Description) VALUES (1,'2017-10-10',10,'I do not agree, this movie is just an amazing masterpiece');
INSERT INTO Comment(UserID,CommentDate,ReviewID,Description) VALUES (3,'2018-11-03',2,'Amazing review!!');

INSERT INTO LikeReview(UserID,ReviewID) VALUES (1,2);
INSERT INTO LikeReview(UserID,ReviewID) VALUES (1,1);
INSERT INTO LikeReview(UserID,ReviewID) VALUES (2,1);
INSERT INTO LikeReview(UserID,ReviewID) VALUES (3,1);

INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (1,3);
INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (1,10);
INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (2,2);
INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (2,3);
INSERT INTO DisLikeReview(UserID,ReviewID) VALUES (3,2);

INSERT INTO LikeComment(UserID,CommentID) VALUES (1,2);
INSERT INTO LikeComment(UserID,CommentID) VALUES (1,1);

INSERT INTO DisLikeComment(UserID,CommentID) VALUES (2,1);
INSERT INTO DisLikeComment(UserID,CommentID) VALUES (3,2);