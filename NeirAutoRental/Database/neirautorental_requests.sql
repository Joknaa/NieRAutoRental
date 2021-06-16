create table requests
(
    ID_Request int auto_increment
        primary key,
    ID_User    int                                                           not null,
    ID_Offer   int                                                           not null,
    Status     enum ('Waiting', 'InUse', 'Done', 'Denied') default 'Waiting' null
);

create index ID_Offer
    on requests (ID_Offer);

create index ID_User
    on requests (ID_User);

INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (1, 1, 1, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (2, 3, 2, 'Denied');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (3, 2, 1, 'Denied');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (4, 1, 2, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (5, 1, 3, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (6, 1, 1, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (7, 1, 10, 'InUse');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (8, 1, 11, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (9, 2, 11, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (10, 2, 12, 'InUse');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (11, 3, 13, 'Denied');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (12, 3, 15, 'Denied');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (13, 5, 10, 'Waiting');
INSERT INTO neirautorental.requests (ID_Request, ID_User, ID_Offer, Status) VALUES (14, 1, 1, 'Waiting');