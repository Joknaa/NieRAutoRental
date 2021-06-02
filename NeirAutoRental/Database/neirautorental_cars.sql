create table cars
(
    ID_Car   int auto_increment
        primary key,
    Brand    varchar(50)                                not null,
    Model    varchar(50)                                not null,
    Price    float                                      not null,
    Fuel     enum ('Diesel', 'Gasoline', 'Electricity') not null,
    Mileage  int         default 0                      null,
    Color    varchar(50)                                not null,
    Category varchar(50) default 'car'                  not null,
    Image    longtext                                   null
)
    engine = InnoDB
    charset = utf8mb4;

INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (1, 'Audi', 'E_Tron', 300, 'Electricity', 0, 'Blue', 'car', 'Audi e-tron.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (2, 'Chevrolet', 'Camaro SS', 599, 'Diesel', 0, 'Red', 'car', 'Camaro SS .png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (3, 'Challenger', 'SRT-8', 500, 'Diesel', 0, 'Orange', 'car', 'Challenger SRT-8.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (4, 'Corvette', 'Stingray Z51', 600, 'Diesel', 0, 'Black', 'car', 'Corvette Stingray Z51.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (5, 'Hyundai', 'i20', 150, 'Diesel', 0, 'Red', 'car', 'Hyundai i20.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (6, 'Hyundai', 'Kona Electric', 200, 'Diesel', 0, 'White', 'car', 'Hyundai Kona Electric.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (7, 'Hyundai', 'Venue', 200, 'Diesel', 0, 'Dark-Blue', 'car', 'Hyundai Venue.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (8, 'Hyundai', 'Verna', 200, 'Diesel', 0, 'Dark-Blue', 'car', 'Hyundai Verna.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (9, 'Hyundai', 'Creta', 200, 'Diesel', 0, 'Black', 'car', 'Hyundai creta.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (10, 'Jaguar', 'I-Pace', 400, 'Electricity', 0, 'Silver', 'car', 'Jaguar I-Pace.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (11, 'Mahindra', 'Thar', 300, 'Gasoline', 0, 'Red', 'car', 'Mahindra Thar.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (12, 'Mahindra', 'XUV300', 300, 'Gasoline', 0, 'Red', 'car', 'Mahindra XUV300.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (13, 'Mercedes-Benz', 'EQC', 300, 'Electricity', 0, 'Silver', 'car', 'Mercedes-Benz EQC.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (14, 'MG', 'ZS EV', 150, 'Electricity', 0, 'Sky-Blue', 'car', 'MG ZS EV.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (15, 'Mustang', 'GT', 599, 'Diesel', 0, 'Gray', 'car', 'Mustang GT.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (16, 'Nissan', 'Magnite', 300, 'Diesel', 0, 'Red', 'car', 'Nissan Magnite.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (17, 'Tata', 'Nexon', 150, 'Diesel', 0, 'Red', 'car', 'Tata Nexon.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (18, 'Tata', 'Nexon EV', 150, 'Diesel', 0, 'Blue', 'car', 'Tata Nexon EV.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (19, 'Tata', 'Safari', 250, 'Diesel', 0, 'Blue', 'car', 'Tata Safari.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (20, 'Tesla', 'Model 3', 450, 'Electricity', 0, 'Red', 'car', 'Tesla Model 3.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (21, 'Toyota', 'Fortuner', 350, 'Electricity', 0, 'Red', 'car', 'Toyota Fortuner.jpeg');