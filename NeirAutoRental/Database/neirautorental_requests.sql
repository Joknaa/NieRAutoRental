create table requests
(
    ID_Request int auto_increment
        primary key,
    ID_User    int  not null,
    ID_Offer   int  not null,
    Data_Start date not null,
    Date_End   date not null,
    Hour_Start time not null,
    Hour_End   time not null,
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

