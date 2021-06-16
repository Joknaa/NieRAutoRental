create table offercomments
(
    ID_OfferComment int auto_increment
        primary key,
    ID_Offer        int not null,
    ID_Comment      int not null,
    ID_User         int not null
);

create index ID_Comment
    on offercomments (ID_Comment);

create index ID_Offer
    on offercomments (ID_Offer);

create index ID_User
    on offercomments (ID_User);

INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (1, 1, 1, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (2, 2, 2, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (3, 1, 3, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (4, 1, 4, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (5, 1, 5, 1);