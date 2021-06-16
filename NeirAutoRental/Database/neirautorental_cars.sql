create table cars
(
    ID_Car   int auto_increment
        primary key,
    Brand    varchar(50)                                                not null,
    Model    varchar(50)                                                null,
    Price    float                                                      null,
    Fuel     enum ('Diesel', 'Gasoline', 'Electricity')                 null,
    Mileage  int                                    default 0           null,
    Color    varchar(50)                                                null,
    Category enum ('FamilyCar', 'SportsCar', 'Van') default 'FamilyCar' null,
    Image    longtext                                                   null
);

INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (22, 'Chevrolet-corvette', '2019', 200, 'Diesel', 0, 'grey', 'SportsCar', '2019-chevrolet-corvette.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (23, 'Audi-r8', '2018', 350, 'Diesel', 0, 'green', 'FamilyCar', '2018-audi-r8.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (24, 'Mini-countryman', '2021', 400, 'Diesel', 0, 'white', 'FamilyCar', '2021-mini-countryman.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (25, 'Jeep Grand Cherokee ', '2017', 250, 'Diesel', 0, 'white', 'FamilyCar', 'JeepGrandCherokee2017.png ');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (1, 'Audi', 'E_Tron', 300, 'Electricity', 0, 'Blue', 'FamilyCar', 'Audi e-tron.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (2, 'Chevrolet', 'Camaro SS', 599, 'Diesel', 0, 'Red', 'SportsCar', 'Camaro SS .png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (3, '0', 'SRT-8', 500, 'Diesel', 0, 'Orange', 'SportsCar', 'Challenger SRT-8.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (4, 'Corvette', 'Stingray Z51', 600, 'Diesel', 0, 'Black', 'SportsCar', 'Corvette Stingray Z51.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (5, 'Hyundai', 'i20', 150, 'Diesel', 0, 'Red', 'FamilyCar', 'Hyundai i20.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (6, 'Hyundai', 'Kona Electric', 200, 'Diesel', 0, 'White', 'FamilyCar', 'Hyundai Kona Electric.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (7, 'Hyundai', 'Venue', 200, 'Diesel', 0, 'Dark-Blue', 'FamilyCar', 'Hyundai Venue.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (8, 'Hyundai', 'Verna', 200, 'Diesel', 0, 'Dark-Blue', 'FamilyCar', 'Hyundai Verna.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (9, 'Hyundai', 'Creta', 200, 'Diesel', 0, 'Black', 'FamilyCar', 'Hyundai creta.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (10, 'Jaguar', 'I-Pace', 400, 'Electricity', 0, 'Silver', 'FamilyCar', 'Jaguar I-Pace.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (11, 'Mahindra', 'Thar', 300, 'Gasoline', 0, 'Red', 'FamilyCar', 'Mahindra Thar.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (12, 'Mahindra', 'XUV300', 300, 'Gasoline', 0, 'Red', 'FamilyCar', 'Mahindra XUV300.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (13, 'Mercedes-Benz', 'EQC', 300, 'Electricity', 0, 'Silver', 'FamilyCar', 'Mercedes-Benz EQC.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (14, 'MG', 'ZS EV', 150, 'Electricity', 0, 'Sky-Blue', 'FamilyCar', 'MG ZS EV.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (15, 'Mustang', 'GT', 599, 'Diesel', 0, 'Gray', 'SportsCar', 'Mustang GT.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (16, 'Nissan', 'Magnite', 300, 'Diesel', 0, 'Red', 'FamilyCar', 'Nissan Magnite.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (17, 'Tata', 'Nexon', 150, 'Diesel', 0, 'Red', 'FamilyCar', 'Tata Nexon.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (18, 'Tata', 'Nexon EV', 150, 'Diesel', 0, 'Blue', 'FamilyCar', 'Tata Nexon EV.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (19, 'Tata', 'Safari', 250, 'Diesel', 0, 'Blue', 'FamilyCar', 'Tata Safari.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (20, 'Tesla', 'Model 3', 450, 'Electricity', 0, 'Red', 'FamilyCar', 'Tesla Model 3.jpg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (21, 'Toyota', 'Fortuner', 350, 'Electricity', 0, 'Red', 'FamilyCar', 'Toyota Fortuner.jpeg');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (26, 'Brand', null, null, null, 0, null, 'SportsCar', 'badreview.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (27, 'Brand', null, null, null, 0, null, 'SportsCar', 'badreview.png');
INSERT INTO neirautorental.cars (ID_Car, Brand, Model, Price, Fuel, Mileage, Color, Category, Image) VALUES (28, 'Brand', null, null, null, 0, null, 'SportsCar', 'badreview.png');