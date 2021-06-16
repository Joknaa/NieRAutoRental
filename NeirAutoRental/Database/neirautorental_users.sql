create table users
(
    ID_User   int                        not null
        primary key,
    Email     varchar(45)                null,
    Password  varchar(45)                null,
    Firstname varchar(45)                null,
    Lastname  varchar(45)                null,
    CIN       varchar(45)                null,
    Phone     int                        null,
    City      varchar(45)                null,
    Address   varchar(45)                null,
    UserType  enum ('partner', 'client') null,
    Status    int                        null,
    Image     varchar(400)               null
);

INSERT INTO neirautorental.users (ID_User, Email, Password, Firstname, Lastname, CIN, Phone, City, Address, UserType, Status, Image) VALUES (1, 'oknaa@a.a', 'hehe', 'mohammad', 'Laadidaoui', 'CIN22222', 303030302, 'city2', 'address2', 'client', null, 'craig-mckay-jmURdhtm7Ng-unsplash(1).png');
INSERT INTO neirautorental.users (ID_User, Email, Password, Firstname, Lastname, CIN, Phone, City, Address, UserType, Status, Image) VALUES (2, 'niaa@.', 'niaa', 'niama', 'mouradi', null, null, null, null, 'client', null, null);
INSERT INTO neirautorental.users (ID_User, Email, Password, Firstname, Lastname, CIN, Phone, City, Address, UserType, Status, Image) VALUES (3, 'med@.', 'med', 'mohamed', 'hamouyi', null, null, null, null, 'client', null, null);
INSERT INTO neirautorental.users (ID_User, Email, Password, Firstname, Lastname, CIN, Phone, City, Address, UserType, Status, Image) VALUES (4, 'houda@a.a', 'houda', 'Houda', 'Mzari', 'CIN7676', 87878787, 'RABAT', 'RABAT-AGDAL', 'partner', null, 'pdp(1).png');
INSERT INTO neirautorental.users (ID_User, Email, Password, Firstname, Lastname, CIN, Phone, City, Address, UserType, Status, Image) VALUES (5, 'ibrahim@.', 'ibrahim', 'ibrahim', 'lhajj', null, null, null, null, 'client', null, null);
INSERT INTO neirautorental.users (ID_User, Email, Password, Firstname, Lastname, CIN, Phone, City, Address, UserType, Status, Image) VALUES (6, 'naa@gmail.com', '', '', '', '', null, '', '', 'partner', null, null);
INSERT INTO neirautorental.users (ID_User, Email, Password, Firstname, Lastname, CIN, Phone, City, Address, UserType, Status, Image) VALUES (7, 'neilla.mgch@gmail.com', '', '', '', '', null, '', '', 'partner', null, null);