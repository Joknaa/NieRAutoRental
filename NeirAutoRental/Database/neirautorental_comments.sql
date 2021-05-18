create table comments
(
    ID_comment int auto_increment
        primary key,
    Score      int                           not null,
    Content    varchar(500)                  not null,
    Type       enum ('positive', 'negative') not null
)
    engine = InnoDB
    charset = utf8mb4;

