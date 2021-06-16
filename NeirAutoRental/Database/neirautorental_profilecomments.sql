create table profilecomments
(
    ID_ProfileComment int auto_increment
        primary key,
    ID_Comment        int not null,
    ID_User           int not null
);

create index profilecomments_ibfk_2
    on profilecomments (ID_Comment);

create index profilecomments_ibfk_3
    on profilecomments (ID_User);

INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (1, 1, 1);