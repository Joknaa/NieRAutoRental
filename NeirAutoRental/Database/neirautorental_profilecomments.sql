create table profilecomments
(
    ID_ProfileComment int auto_increment
        primary key,
    ID_Comment        int not null,
    ID_User           int not null,
    constraint profilecomments_ibfk_2
        foreign key (ID_Comment) references comments (ID_Comment),
    constraint profilecomments_ibfk_3
        foreign key (ID_User) references users (ID_User)
)
    engine = InnoDB
    charset = utf8mb4;

INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (1, 1, 1);