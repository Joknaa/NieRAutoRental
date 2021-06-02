create table cars
(
    ID_Car   int auto_increment
        primary key,
    Brand    varchar(50)                 not null,
    Model    varchar(50)                 not null,
    Price    float                       not null,
    Fuel     enum ('Diesel', 'Gasoline') not null,
    Mileage  int         default 0       null,
    Year     int(4)                      null,
    Color    varchar(50)                 not null,
    VIN      varchar(50)                 null comment 'VIN: Vehicule Identification Number',
    Category varchar(50) default 'car'   not null,
    Image    longtext                    not null
)
    engine = InnoDB
    charset = utf8mb4;

INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2510, 'Toyota', '882', 100, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2511, 'rono', 'Kongo', 84, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2512, 'Ferari', '11', 220, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2513, 'BMW', 'A1', 29, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2514, 'Toyota', 'Benz', 191, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2519, 'Shivrole', 'Camaro', 88, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2520, 'Toyota', 'Benz', 429, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2521, 'Toyota', 'Benz', 928, 'Diesel', 0, null, 'RED', null, 'car', '');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Year, Color, VIN, Category, Image) VALUES (2522, 'Toyota', 'Benz', 119, 'Diesel', 0, null, 'RED', null, 'car', '');