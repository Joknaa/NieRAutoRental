create table requests
(
    ID_Request int auto_increment
        primary key,
    ID_User    int                                                           not null,
    ID_Offer   int                                                           not null,
    Status     enum ('Waiting', 'InUse', 'Done', 'Denied') default 'Waiting' null,
    constraint requests_ibfk_1
        foreign key (ID_User) references users (ID_User),
    constraint requests_ibfk_2
        foreign key (ID_Offer) references offers (ID_Offer)
)
    engine = InnoDB
    charset = utf8mb4;

create index ID_Offer
    on requests (ID_Offer);

create index ID_User
    on requests (ID_User);

INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (1, 1, 1, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (2, 3, 1, 'Denied');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (3, 2, 1, 'Denied');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (4, 1, 1, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (5, 1, 1, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (6, 1, 1, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (14, 1, 1, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (15, 1, 13, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (16, 1, 11, 'Denied');