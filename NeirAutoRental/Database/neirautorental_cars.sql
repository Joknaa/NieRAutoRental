create table cars
(
    ID_Car      int auto_increment
        primary key,
    Category    varchar(50)  not null,
    Name        varchar(50)  not null,
    Price       float        not null,
    Description varchar(500) null
)
    engine = InnoDB
    charset = utf8mb4;

