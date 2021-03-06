create table users
(
    ID_User   int auto_increment
        primary key,
    Email     varchar(50)                         not null,
    Password  varchar(50)                         not null,
    FirstName varchar(30)                         null,
    LastName  varchar(30)                         null,
    CIN       varchar(20)                         null,
    Phone     int(20)                             null,
    City      varchar(30)                         null,
    Address   varchar(60)                         null,
    userType  enum ('client', 'partner', 'admin') not null,
    Status    int                                 null
)
    engine = InnoDB
    charset = utf8mb4;

INSERT INTO neirautorental.users (ID_User, Email, Password, FirstName, LastName, CIN, Phone, City, Address, userType, Status) VALUES (1, 'oknaa@a.a', 'oknaa', 'Mohammad', 'Laadidaoui', 'CIN22222', 303030302, 'city2', 'address22222', 'partner', null);
INSERT INTO neirautorental.users (ID_User, Email, Password, FirstName, LastName, CIN, Phone, City, Address, userType, Status) VALUES (2, 'niaa@a.a', 'niaa', 'niama', 'mouradi', null, null, null, null, 'client', null);
INSERT INTO neirautorental.users (ID_User, Email, Password, FirstName, LastName, CIN, Phone, City, Address, userType, Status) VALUES (3, 'med@a.a', 'med', 'mohamed', 'hamouyi', null, null, null, null, 'client', null);
INSERT INTO neirautorental.users (ID_User, Email, Password, FirstName, LastName, CIN, Phone, City, Address, userType, Status) VALUES (4, 'houda@a.a', 'houda', 'houda', 'mzari', null, null, null, null, 'client', null);
INSERT INTO neirautorental.users (ID_User, Email, Password, FirstName, LastName, CIN, Phone, City, Address, userType, Status) VALUES (5, 'ibrahim@a.a', 'ibrahim', 'ibrahim', 'lhajj', null, null, null, null, 'client', null);