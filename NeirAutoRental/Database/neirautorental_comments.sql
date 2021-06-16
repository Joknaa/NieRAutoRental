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

INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (1, '2', 'test comment', 'positive', 'Houda', 'someone');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (2, '2', 'test comment', 'positive', 'Houda', 'someone');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (3, '2', 'test comment', 'positive', 'Houda', 'someone');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (4, '2', 'test comment', 'negative', 'Houda', 'someone');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (5, '2', 'test comment', 'negative', 'Houda', 'someone');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (6, '2', 'test comment', 'negative', 'Houda', 'someone');
INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type, Firstname, Lastname) VALUES (7, '2', 'test comment', 'negative', 'Houda', 'someone');