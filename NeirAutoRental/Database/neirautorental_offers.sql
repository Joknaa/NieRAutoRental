create table offers
(
    ID_Offer     int auto_increment
        primary key,
    ID_User      int                                                   not null,
    ID_Car       int                                                   null,
    Availability enum ('available', 'unavailable') default 'available' not null,
    Date_Start   date                                                  not null,
    Date_End     date                                                  not null,
    Hour_Start   time                                                  not null,
    Hour_End     time                                                  not null,
    Description  longtext                                              null,
    constraint offers_ibfk_2
        foreign key (ID_User) references users (ID_User)
)
    engine = InnoDB
    charset = utf8mb4;

create index ID_User
    on offers (ID_User);

INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (1, 1, 2510, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (2, 2, 2517, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (3, 1, 2514, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (4, 4, 2513, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar liberoLorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. 
');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (5, 1, 2512, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (6, 3, 2511, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (7, 5, 2515, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');
INSERT INTO neirautorental.offers (ID_Offer, ID_User, ID_Car, Availability, Date_Start, Date_End, Hour_Start, Hour_End, Description) VALUES (8, 2, 2516, 'available', '2021-05-18', '2021-05-15', '10:00:00', '23:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut eros quis urna mattis gravida sed vel tellus. Fusce vitae tincidunt justo, eu placerat sem. Sed fringilla orci sit amet blandit molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam pretium, nibh non venenatis ultrices, neque velit pulvinar libero');