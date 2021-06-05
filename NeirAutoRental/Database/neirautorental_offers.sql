create table offers
(
    ID_Offer     int auto_increment
        primary key,
    ID_User      int                                                         not null,
    ID_Car       int                                                         null,
    isVIP        enum ('noVIP', '1WeekVIP', '2WeeksVIP') default 'noVIP'     not null,
    Availability enum ('available', 'unavailable')       default 'available' not null,
    Date_Start   date                                                        not null,
    Date_End     date                                                        not null,
    Hour_Start   time                                                        not null,
    Hour_End     time                                                        not null,
    Description  longtext                                                    null,
    constraint offers_cars_ID_Car_fk
        foreign key (ID_Car) references cars (ID_Car),
    constraint offers_ibfk_2
        foreign key (ID_User) references users (ID_User)
)
    engine = InnoDB
    charset = utf8mb4;

create index ID_User
    on offers (ID_User);

INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (1, 1, 1, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (10, 3, 3, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (11, 1, 4, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (12, 4, 5, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (13, 2, 6, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (14, 2, 7, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (15, 3, 8, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (16, 1, 9, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, isVIP, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (17, 1, 10, 'noVIP', 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');