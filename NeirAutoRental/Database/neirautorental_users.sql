create table users
(
    ID_User   int auto_increment
        primary key,
    Email     varchar(50)                         not null,
    Password  varchar(50)                         not null,
    FirstName varchar(30)                         null,
    LastName  varchar(30)                         null,
    CIN       int                                 null,
    Phone     int(20)                             null,
    City      varchar(30)                         null,
    Address   varchar(60)                         null,
    userType  enum ('client', 'partner', 'admin') not null,
    Status    int                                 null
)
    engine = InnoDB
    charset = utf8mb4;

INSERT INTO neirautorental.users (ID_User, Email, Password, FirstName, LastName, CIN, Phone, City, Address, userType, Status) VALUES (1, 'oknaa@.', 'oknaa', null, null, null, null, null, null, 'client', null);
INSERT INTO neirautorental.users (ID_User, Email, Password, FirstName, LastName, CIN, Phone, City, Address, userType, Status) VALUES (2, 'niaa@.', 'niaa', null, null, null, null, null, null, 'client', null);