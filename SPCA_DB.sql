CREATE TABLE employee(
    ENum INT NOT NULL,
    FName VARCHAR(50) NOT NULL,
    LName VARCHAR(50) NOT NULL,
    EAddress VARCHAR(100) NOT NULL,
    Phone VARCHAR(10) NOT NULL,
    PRIMARY KEY (ENum)
);

CREATE TABLE facility(
    Num INT NOT NULL,
    PRIMARY KEY (NUM)
);

CREATE TABLE spca_branch(
    BNum INT NOT NULL,
    BName VARCHAR(100) NOT NULL,
    BAddress VARCHAR(100) NOT NULL,
    BPhone VARCHAR(10) NOT NULL,
    FOREIGN KEY (BNum) REFERENCES facility(Num),
    PRIMARY KEY (BNum, BName, BAddress)
);

CREATE TABLE shelter(
    SNum INT NOT NULL,
    SName VARCHAR(100) NOT NULL,
    SAddress VARCHAR(100) NOT NULL,
    SPhone VARCHAR(10) NOT NULL,
    SWeb VARCHAR(100) NOT NULL,
    OwnNum INT NOT NULL,
    FOREIGN KEY (SNum) REFERENCES facility(Num),
    FOREIGN KEY (OwnNum) REFERENCES employee(ENum),
    PRIMARY KEY (SNum, SName, SAddress)
);

CREATE TABLE animal_type(
    AType VARCHAR(20) NOT NULL,
    PRIMARY KEY (AType)
);

CREATE TABLE shelter_animal_type(
    SNum INT NOT NULL,
    AType VARCHAR(20) NOT NULL,
    AMax INT NOT NULL,
    FOREIGN KEY (SNum) REFERENCES shelter(SNum),
    FOREIGN KEY (AType) REFERENCES animal_type(AType),
    PRIMARY KEY (SNum, AType)
);



CREATE TABLE rescuer(
    RNum INT NOT NULL,
    RName VARCHAR(100) NOT NULL,
    RAddress VARCHAR(100) NOT NULL,
    RPhone VARCHAR(10) NOT NULL,
    OwnNum INT NOT NULL,
    FOREIGN KEY (RNum) REFERENCES facility(Num),
    FOREIGN KEY (OwnNum) REFERENCES employee(ENum),
    PRIMARY KEY (RNum, RName, RAddress)
);


CREATE TABLE spca_employee(
    ENum INT NOT NULL,
    BNum INT NOT NULL,
    FOREIGN KEY (ENum) REFERENCES employee(ENum),
    FOREIGN KEY (BNum) REFERENCES spca_branch(BNum),
    PRIMARY KEY (ENum, BNum)
);


CREATE TABLE shelter_employee(
    ENum INT NOT NULL,
    SNum INT NOT NULL,
    FOREIGN KEY (ENum) REFERENCES employee(ENum),
    FOREIGN KEY (SNum) REFERENCES shelter(SNum),
    PRIMARY KEY (ENum, SNum)
);

CREATE TABLE rescuer_employee(
    ENum INT NOT NULL,
    RNum INT NOT NULL,
    FOREIGN KEY (ENum) REFERENCES employee(ENum),
    FOREIGN KEY (RNum) REFERENCES rescuer(RNum),
    PRIMARY KEY (ENum, RNum)
);

CREATE TABLE driver(
    ENum INT NOT NULL,
    DLicence VARCHAR(10) NOT NULL,
    EPhone VARCHAR(10) NOT NULL,
    FOREIGN KEY (ENum) REFERENCES rescuer_employee(ENum),
    PRIMARY KEY (ENum, DLicence)

);


CREATE TABLE donor(
    DName VARCHAR(100) NOT NULL,
    DAmount INT NOT NULL,
    DDate DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    Num INT NOT NULL,
    FOREIGN KEY (Num) REFERENCES facility(Num), 
    PRIMARY KEY (DName, DAmount, DDate)
);

CREATE TABLE animal(
    AID INT NOT NULL,
    AName VARCHAR(30) NOT NULL,
    AType VARCHAR(20) NOT NULL, 
    BNum INT NOT NULL,
    Arrival DATE NOT NULL,
    Departure DATE,
    ALocation INT NOT NULL,
    RNum INT,
    FOREIGN KEY (BNum) REFERENCES spca_branch(BNum),
    FOREIGN KEY (RNUM) REFERENCES rescuer(RNum),
    FOREIGN KEY (AType) REFERENCES animal_type(AType),
    FOREIGN KEY (ALocation) REFERENCES facility(Num),
    PRIMARY KEY (AID)
);

CREATE TABLE has_driven(
    AID INT NOT NULL,
    ENum INT NOT NULL,
    ONum INT NOT NULL,
    DNum INT NOT NULL,
    FOREIGN KEY (AID) REFERENCES animal(AID),
    FOREIGN Key (ENum) REFERENCES driver(ENum),
    FOREIGN Key (ONum) REFERENCES spca_branch(BNum),
    FOREIGN KEY (DNum) REFERENCES shelter(SNum),
    PRIMARY KEY (AID, ENum, ONum, DNum)
);

CREATE TABLE vet_visit(
    AID INT NOT NULL,
    VName VARCHAR(100) NOT NULL,
    ACondition VARCHAR(300) NOT NULL,
    AWeight VARCHAR(10) NOT NULL,
    VDate DATE NOT NULL,
    FOREIGN KEY (AID) REFERENCES animal(AID),
    PRIMARY KEY (AID, VNAME, VDate)

);

CREATE TABLE adopter(
    LName VARCHAR(50) NOT NULL,
    APhone VARCHAR(10) NOT NULL,
    AAddress VARCHAR(100) NOT NULL,
    APayment INT,
    ADate DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    AID INT NOT NULL,
    FOREIGN KEY (AID) REFERENCES animal(AID),
    PRIMARY KEY (AID, LNAME, ADate)
);


