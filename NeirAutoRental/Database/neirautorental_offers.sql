create table offers
(
    ID_Offer     int auto_increment
        primary key,
    ID_User      int                                                   not null,
    ID_Car       int                                                   not null,
    Availability enum ('available', 'unavailable') default 'available' not null,
    Date_Start   date                                                  not null,
    Date_End     date                                                  not null,
    Hour_Start   time                                                  not null,
    Hour_End     time                                                  not null,
    Description  varchar(300)                                          null,
    constraint offers_ibfk_1
        foreign key (ID_Car) references cars (ID_Car),
    constraint offers_ibfk_2
        foreign key (ID_User) references users (ID_User)
)
    engine = InnoDB
    charset = utf8mb4;

create index ID_Car
    on offers (ID_Car);

create index ID_User
    on offers (ID_User);

