create table comments
(
    ID_Comment int auto_increment
        primary key,
    Score      enum ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10') not null,
    Content    varchar(500)                                             not null,
    Type       enum ('positive', 'negative')                            not null
)
    engine = InnoDB
    charset = utf8mb4;

INSERT INTO neirautorental.comments (ID_Comment, Score, Content, Type) VALUES (1, '2', 'test comment', 'positive');