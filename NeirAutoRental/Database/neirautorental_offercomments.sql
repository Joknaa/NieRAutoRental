create table offercomments
(
    ID_OfferComment int auto_increment
        primary key,
    ID_Offer        int not null,
    ID_Comment      int not null,
    ID_User         int not null,
    constraint offercomments_ibfk_1
        foreign key (ID_Offer) references offers (ID_Offer),
    constraint offercomments_ibfk_2
        foreign key (ID_Comment) references comments (ID_Comment),
    constraint offercomments_ibfk_3
        foreign key (ID_User) references users (ID_User)
)
    engine = InnoDB
    charset = utf8mb4;

create index ID_Comment
    on offercomments (ID_Comment);

create index ID_Offer
    on offercomments (ID_Offer);

create index ID_User
    on offercomments (ID_User);

