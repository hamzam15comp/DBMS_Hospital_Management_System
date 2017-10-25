Create table if not exists Employee(
	Employee_ID varchar(255) PRIMARY KEY,
	Name varchar(255) NOT NULL,
	Address varchar(255) NOT NULL,
	DOB date NOT NULL,
	Contact varchar(25),
	Gender varchar(10) NOT NULL,
	Salary float(15,3) DEFAULT 0,
	Category varchar(25)
	)ENGINE=INNODB;

Create table if not exists Patients(
	Patient_ID varchar(255) PRIMARY KEY,
	Name varchar(255) NOT NULL,
	Address varchar(255) NOT NULL,
	DOB date NOT NULL,
	Contact varchar(25),
	Gender varchar(10) NOT NULL,
	D_Adm date NOT NULL,
	D_Dis date,
	Blood_Group varchar(5)
	)ENGINE INNODB;

Create table if not exists Room(
	Room_No varchar(255) PRIMARY KEY,
	Type varchar(255) DEFAULT 'GEN',
	Phone_Ext varchar(255),
	Rent float(15,2),
	Patient_ID varchar(255)
	)ENGINE INNODB;

Create table if not exists Assigned(
	Patient_ID varchar(255) PRIMARY KEY,
	Room_No varchar(255),
	FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE,
	FOREIGN KEY (Room_No) References Room(Room_No) ON DELETE CASCADE
	)ENGINE INNODB;


Create table if not exists Doctors(
	Doc_ID varchar(255) PRIMARY KEY,
	Spz varchar(255),
	Employee_ID varchar(255) NOT NULL UNIQUE,
	FOREIGN KEY (Employee_ID) References Employee(Employee_ID) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE INNODB;

Create table if not exists Bill(
	Bill_No varchar(255) PRIMARY KEY,
	Patient_ID varchar(255),
	Report_ID varchar(255),
	Totamt int,
	FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE
	)ENGINE INNODB;
	
Create Table if not exists attends(
	Doc_ID varchar(255),
	Patient_ID varchar(255),
	PRIMARY KEY(Doc_ID, Patient_ID),
	FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE,
	FOREIGN KEY (Doc_ID) References Doctors(Doc_ID) ON DELETE CASCADE
	)ENGINE INNODB;
	


/*
Create table Passwords(
	Username varchar(255) PRIMARY KEY,
	Password varchar(255) NOT NULL,
	FOREIGN KEY (Username) References Employee(Employee_ID) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE INNODB;");
Create table Session(
	Username varchar(255) NOT NULL,
	ID varchar(255) PRIMARY KEY
	) ENGINE INNODB;
*/


