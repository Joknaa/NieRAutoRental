create table users
(
    ID_User   int auto_increment
        primary key,
    FirstName varchar(30)                         null,
    LastName  varchar(30)                         null,
    Email     varchar(20)                         not null,
    Password  varchar(50)                         not null,
    Status    int                                 null,
    City      varchar(30)                         null,
    CIN       int                                 null,
    Address   varchar(60)                         null,
    userType  enum ('client', 'partner', 'admin') not null
)
    engine = InnoDB
    charset = utf8mb4;

