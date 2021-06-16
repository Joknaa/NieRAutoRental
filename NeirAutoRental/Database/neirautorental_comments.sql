create table comments
(
    ID_Comment int auto_increment
        primary key,
    Score      enum ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10') not null,
    Content    varchar(500)                                             not null,
    Type       enum ('positive', 'negative')                            not null,
    Firstname  varchar(100)                                             null,
    Lastname   varchar(100)                                             null
);

INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (1, '3', 'Great Person', 'positive', 'Houda', 'Mzari');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (2, '5', 'I got my car back in a better state that it was in when i gave it !!', 'positive', 'Mohammad', 'Laadidaoui');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (3, '2', 'This person broke my car ! dont accept his request ', 'negative', 'Niama', 'Mouradi');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (4, '2', 'Mohamed is a good person', 'positive', 'Brahim', 'Oulmo');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (5, '2', 'It was a pleasure working with you, Houda !', 'positive', 'Niama', 'Mouradi');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (6, '2', 'What a mess of a person !! the worst', 'negative', 'Houda', 'Mzari');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (8, '2', 'What a car !!!!! fabulous !', 'positive', 'Houda', 'Mzari');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (9, '2', 'I dont like that color though !', 'negative', 'Niama', 'Mouradi');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (10, '2', 'I like this car, it soo compfyyy ', 'positive', 'Brahim', 'Oulmo');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (11, '2', 'Meeh, Not bad', 'positive', 'Mohamed', 'Hmouyi');