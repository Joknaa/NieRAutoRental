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
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (5, 1, 5);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (17, 4, 2);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (7, 2, 2);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (8, 2, 3);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (9, 2, 4);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (10, 2, 5);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (11, 3, 1);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (13, 3, 3);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (14, 3, 4);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (15, 3, 5);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (19, 4, 4);
INSERT INTO neirautorental.profilecomments (ID_ProfileComment, ID_Comment, ID_User) VALUES (22, 6, 2);