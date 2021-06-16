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

INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (1, 1, 8, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (2, 2, 9, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (4, 1, 10, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (5, 4, 11, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (6, 2, 8, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (7, 3, 8, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (8, 5, 9, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (9, 6, 10, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (10, 7, 9, 9);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (11, 8, 8, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (12, 9, 8, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (13, 10, 8, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (14, 11, 11, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (15, 12, 11, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (16, 13, 8, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (17, 14, 9, 1);
INSERT INTO neirautorental.offercomments (ID_OfferComment, ID_Offer, ID_Comment, ID_User) VALUES (18, 15, 10, 1);