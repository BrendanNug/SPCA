INSERT INTO `employee` (`ENum`, `FName`, `LName`, `EAddress`, `Phone`) VALUES (1, 'Adam', 'A', '123 a rd', '4161231234'), (2, 'Bob', 'Ben', '456 street rd', '4164564567'), (3, 'Conner', 'Cave', '789 Street dr', '4167897890'), (4, 'Dan', 'Dave', '1011 Street dr', '4161011011'), (5, 'Frank', 'Forest', '444 Road st', '6471011011');

INSERT INTO `facility` (`Num`) VALUES (1), (2), (3), (4);

INSERT INTO `rescuer` (`RNum`, `RName`, `RAddress`, `RPhone`, `OwnNum`) VALUES (4, 'Tronto Rescuers', '1000 Bloor st', '4161112222', 4);

INSERT INTO `rescuer_employee` (`ENum`, `RNum`) VALUES (4, 4), (5, 4);

INSERT INTO `shelter` (`SNum`, `SName`, `SAddress`, `SPhone`, `SWeb`, `OwnNum`) VALUES (2, 'North Shelter', '123 North ave', '6471001111', 'www.north.ca', 2), (3, 'South Shelter', '987 South rd', '416311234', 'www.south.ca', 3);

INSERT INTO `animal_type` (`AType`) VALUES ('Capybara'), ('Cat'), ('Dog'), ('Rabbit'), ('Rodent');

INSERT INTO `shelter_animal_type` (`SNum`, `AType`, `AMax`) VALUES (2, 'Cat', 50), (2, 'Dog', 50), (3, 'Cat', 100), (3, 'Dog', 100);

INSERT INTO `shelter_employee` (`ENum`, `SNum`) VALUES (2, 2), (3, 3);

INSERT INTO `spca_branch` (`BNum`, `BName`, `BAddress`, `BPhone`) VALUES (1, 'SPCA Toronto', '100 Front st', '6471231234');

INSERT INTO `spca_employee` (`ENum`, `BNum`) VALUES (1, 1);

INSERT INTO `animal` (`AID`, `AName`, `AType`, `BNum`, `Arrival`, `Departure`, `RNum`, `ALocation`) VALUES (1, 'Bruce', 'Dog', 1, '2020-03-01', '2020-03-10', NULL, 2), (2, 'Hunter', 'Cat', 1, '2020-02-28', '2020-03-02', 4, 3), (3, 'Charles', 'Rabbit', 1, '2020-02-01', NULL, NULL, 1), (4, 'Tommy', 'Capybara', 1, '2020-03-08', NULL, NULL, 1);

INSERT INTO `donor` (`DName`, `DAmount`, `DDate`, `Num`) VALUES ('Tim Jones', 200, '2018-08-14', 1), ('Tim John', 200, '2018-09-14', 2), ('Bob Ross', 500, '2018-11-16', 3), ('Ted Smith', 700, '2020-03-21', 3), ('Bob Ross', 1000, '2018-12-12', 4);

INSERT INTO `driver` (`ENum`, `DLicence`, `EPhone`) VALUES (5, 'aaa1111', '4161231234');

INSERT INTO `has_driven` (`AID`, `ENum`, `ONum`, `DNum`) VALUES (2, 5, 1, 3);

INSERT INTO `vet_visit` (`AID`, `VName`, `ACondition`, `AWeight`, `VDate`) VALUES (2, 'Dr. Robert', 'Hairball', '100kg', '2020-03-19');


