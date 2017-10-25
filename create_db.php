<?php
ini_set('display_startup_errors',1);                                                                                                                              ini_set('display_errors',1);                                                    
error_reporting(-1);

require("include/dbinfo.php");
$LINK_SERVER=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error()));
mysqli_query($LINK_SERVER, "create database if not exists $db");
mysqli_select_db($LINK_SERVER, $db)or die(errorReport(mysqli_error()));
mysqli_query($LINK_SERVER, "use $db");

mysqli_query($LINK_SERVER, "Create table Departments(
    Name varchar(255) NOT NULL, 
    Location varchar(255) NOT NULL, 
    Dept_No varchar(255) NOT NULL, 
    PRIMARY KEY(Dept_No) 
    )ENGINE INNODB;");

mysqli_query($LINK_SERVER, "Create table if not exists Employee(
	Employee_ID varchar(255) PRIMARY KEY,
	Name varchar(255) NOT NULL,
	Address varchar(255) NOT NULL,
	DOB date NOT NULL,
	Contact varchar(25),
	Gender varchar(10) NOT NULL,
	Salary float(15,3) DEFAULT 0,
    Category varchar(25),
    Dept_No varchar(255) NOT NULL, 
    FOREIGN KEY (Dept_No) References Departments(Dept_No) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE=INNODB;");
	
mysqli_query($LINK_SERVER, "Create table if not exists Patients(
	Patient_ID varchar(255) PRIMARY KEY,
	Name varchar(255) NOT NULL,
	Address varchar(255) NOT NULL,
	DOB date NOT NULL,
	Contact varchar(25),
	Gender varchar(10) NOT NULL,
	D_Adm date NOT NULL,
	D_Dis date,
	Blood_Group varchar(5)
	)ENGINE INNODB;");
	
mysqli_query($LINK_SERVER, "Create table if not exists Room(
	Room_No varchar(255) PRIMARY KEY,
	Room_Type varchar(255) DEFAULT 'GEN',
	Phone_Ext varchar(255),
	Rent float(15,2),
	Patient_ID varchar(255)
	)ENGINE INNODB;");

mysqli_query($LINK_SERVER, "Create table if not exists Assigned(
	Patient_ID varchar(255) PRIMARY KEY,
	Room_No varchar(255),
	FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE,
	FOREIGN KEY (Room_No) References Room(Room_No) ON DELETE CASCADE
	)ENGINE INNODB;");

mysqli_query($LINK_SERVER, "Create table if not exists Doctors(
	Doc_ID varchar(255) PRIMARY KEY,
	Spz varchar(255),
	Employee_ID varchar(255) NOT NULL UNIQUE,
	FOREIGN KEY (Employee_ID) References Employee(Employee_ID) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE INNODB;");

mysqli_query($LINK_SERVER, "Create table if not exists Bill(
	Bill_No varchar(255) PRIMARY KEY,
	Patient_ID varchar(255),
	Report_ID varchar(255),
	Totamt int,
	FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE
	)ENGINE INNODB;");
	
mysqli_query($LINK_SERVER, "Create Table if not exists attends(
	Doc_ID varchar(255),
	Patient_ID varchar(255),
	PRIMARY KEY(Doc_ID, Patient_ID),
	FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE,
	FOREIGN KEY (Doc_ID) References Doctors(Doc_ID) ON DELETE CASCADE
	)ENGINE INNODB;");
	
mysqli_query($LINK_SERVER, "Create table Passwords(
	Username varchar(255) PRIMARY KEY,
	Password varchar(255) NOT NULL,
	FOREIGN KEY (Username) References Employee(Employee_ID) ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE INNODB;");
	
mysqli_query($LINK_SERVER, "Create table Session(
	Username varchar(255) NOT NULL,
	ID varchar(255) PRIMARY KEY
	)ENGINE INNODB;");
	

mysqli_query($LINK_SERVER, "insert into Departments values (\"IT Department\",\"Sector 68\",\"IT-101\");");
mysqli_query($LINK_SERVER, "insert into Departments values (\"Cardiography Department\",\"Sector 71\",\"CAR-101\");");
mysqli_query($LINK_SERVER, "insert into Employee value (\"IT-1\",\"Andrew\",\"Delhi\",\"1987-01-02\",null,\"Male\",20000,\"Adminstration\",\"IT-101\");");
mysqli_query($LINK_SERVER, "insert into Passwords value (\"IT-1\",\"IT-1\");");



/*
//mysqli_select_db($db,$LINK_SERVER)or die(errorReport(mysqli_error()));
mysqli_query($LINK_SERVER, "create table Patients(Patient_ID varchar(255) PRIMARY KEY, Name varchar(255) NOT NULL, Address varchar(255) NOT NULL, DOB date NOT NULL, Contact varchar(25), Gender varchar(10) NOT NULL, Blood_Group varchar(5)) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Departments(Name varchar(255) NOT NULL, Location varchar(255) NOT NULL, Dept_No varchar(255) NOT NULL, PRIMARY KEY(Dept_No) ) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Room(Room_No varchar(255) PRIMARY KEY, Type varchar(255) DEFAULT \"GEN\", Extension varchar(255),Rent float(15,2), Patient_ID varchar(255)) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Vehicles(Type varchar(255) NOT NULL, Reg_No varchar(255) PRIMARY KEY, DOP date NOT NULL, MODEL varchar(255) NOT NULL,ID varchar(255), Rent float(15,2)) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "alter table Vehicles ENGINE=INNODB");
mysqli_query($LINK_SERVER, "create table Employee(Employee_ID varchar(255) PRIMARY KEY, Name varchar(255) NOT NULL, Address varchar(255) NOT NULL, DOB date NOT NULL, Contact varchar(25), Gender varchar(10) NOT NULL, Salary float(15,3) DEFAULT 0, Category varchar(25),Dept_No varchar(255) NOT NULL, FOREIGN KEY (Dept_No) References Departments(Dept_No) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE=INNODB;");
//mysqli_query($LINK_SERVER, "alter table employee ENGINE=INNODB");
mysqli_query($LINK_SERVER, "create table Doctors(Batch_No varchar(255) PRIMARY KEY, Employee_ID varchar(255) NOT NULL UNIQUE, FOREIGN KEY (Employee_ID) References Employee(Employee_ID) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Accompanies(Patient_ID varchar(255) NOT NULL, Name varchar(255) NOT NULL, Address varchar(255) NOT NULL, DOB date NOT NULL, Contact varchar(25), Gender varchar(10) NOT NULL, Relationship varchar(255) NOT NULL, PRIMARY KEY (Name,Patient_ID), FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE=INNODB;");
//mysqli_query($LINK_SERVER, "alter table Accompanies ENGINE=INNODB");
mysqli_query($LINK_SERVER, "create table Medical_Report(Patient_ID varchar(255) NOT NULL, Report_No varchar(255) PRIMARY KEY,R_date date NOT NULL,C_date date, Room_No varchar(255), Diet varchar(255), Payment float(15,2), FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE ON UPDATE CASCADE,FOREIGN KEY (Room_No) References Room(Room_No) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE=INNODB;");
mysqli_query($LINK_SERVER, "create table Attended_By(Patient_ID varchar(255) NOT NULL, Batch_No varchar(255) NOT NULL, DOA Date NOT NULL, PRIMARY KEY (Patient_ID,Batch_No), FOREIGN KEY (Batch_No) References Doctors(Batch_No) ON DELETE CASCADE ON UPDATE CASCADE, FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Diagnosis(Test_date date, Tests varchar(255) NOT NULL, T_result varchar(255), Report_No varchar(255), Cost float(15,2) NOT NULL,PRIMARY KEY (Report_No,Tests,Test_date),FOREIGN KEY (Report_No) References Medical_Report(Report_No) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE=INNODB;");
//mysqli_query($LINK_SERVER, "alter table Diagnosis ENGINE=INNODB");
mysqli_query($LINK_SERVER, "create table Give_Details(Department_No varchar(255) NOT NULL, Report_No varchar(255) NOT NULL, PRIMARY KEY (Department_No,Report_No), FOREIGN KEY (Report_No) References Medical_Report(Report_No) ON DELETE CASCADE ON UPDATE CASCADE, FOREIGN KEY (Department_No) References Departments(Dept_No) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE=INNODB;");
//mysqli_query($LINK_SERVER, "alter table Give_Details ENGINE=INNODB");
mysqli_query($LINK_SERVER, "create table Passwords(Username varchar(255) PRIMARY KEY, Password varchar(255) NOT NULL, FOREIGN KEY (Username) References Employee(Employee_ID) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Session(Username varchar(255) NOT NULL, ID varchar(255) PRIMARY KEY) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Room_Given(Room_No varchar(255) NOT NULL,Patient_ID varchar(255) NOT NULL, Allot_date date NOT NULL, Discharge_date date,PRIMARY KEY (Patient_ID, Room_No,Allot_date), FOREIGN KEY (Room_No) References Room(Room_No) ON DELETE CASCADE ON UPDATE CASCADE, FOREIGN KEY (Patient_ID) References Patients(Patient_ID) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "create table Vehicle_Given(Reg_No varchar(255),ID varchar(255), Allot_date date NOT NULL, Return_date date,PRIMARY KEY (Reg_No,ID,Allot_date), FOREIGN KEY (Reg_No) References Vehicles(Reg_No) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE INNODB;");
//mysqli_query($LINK_SERVER, "alter table Vehicle_Given ENGINE=INNODB");
mysqli_query($LINK_SERVER, "create table Governed_By(Employee_ID varchar(255), Room_No varchar(255), Date date NOT NULL,Join_Time time NOT NULL,Leave_Time time not null,PRIMARY KEY (Employee_ID,Room_No,Date), FOREIGN KEY (Room_No) References Room(Room_No) ON DELETE CASCADE ON UPDATE CASCADE,FOREIGN KEY (Employee_ID) References Employee(Employee_ID) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE INNODB;");
mysqli_query($LINK_SERVER, "insert into Departments values (\"IT Department\",\"Sector 68\",\"IT-101\");");
mysqli_query($LINK_SERVER, "insert into Employee values (\"IT-1\",\"Andrew\",\"Delhi\",\"1987-01-02\",null,\"Male\",20000,\"Adminstration\",\"IT-101\");");
mysqli_query($LINK_SERVER, "insert into Passwords values (\"IT-1\",\"IT-1\");");*/

?>
