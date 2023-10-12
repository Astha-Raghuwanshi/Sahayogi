<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "sehyogi";

$con = mysqli_connect($host,$user,$pass,$db_name);

/*if(mysqli_connect_errno())
{
    die("Failed to connect to database".mysqli_connect_error());
}*/

/*DB Create and Connect
$db_create = "CREATE DATABASE sehyogi;";
$a = mysqli_query($con,$db_create);
if(!mysqli_query($con,$db_create))
{
    die("Failed to create database:".mysqli_error($con));
}*/

//Table creation

$children = "CREATE TABLE Children
(Id INT AUTO_INCREMENT,
NGO_no VARCHAR(50),
FirstName VARCHAR(20) NOT NULL,
MidName VARCHAR(20),
LastName VARCHAR(20),
MobileNo VARCHAR(10) NOT NULL,
Gender VARCHAR (20),
_Address VARCHAR (30),
Locality VARCHAR (50),
Pincode VARCHAR (10) NOT NULL,
PRIMARY KEY (Id))";

/*if(!mysqli_query($con,$children))
{
die(mysqli_error($con));
}*/

$Volunteer = "CREATE TABLE Volunteer
(V_Id INT AUTO_INCREMENT,
FirstName VARCHAR(20) NOT NULL,
MidName VARCHAR(20),
LastName VARCHAR(20),
MobileNo VARCHAR(10) NOT NULL,
Email VARCHAR(50) NOT NULL,
Gender VARCHAR (20),
_Address VARCHAR (30),
Locality VARCHAR (50),
PRIMARY KEY (V_Id))";

/*if(!mysqli_query($con,$Volunteer))
{
die(mysqli_error($con));
}*/

$doctors = "CREATE TABLE Doctor
(D_Id INT AUTO_INCREMENT,
FirstName VARCHAR(20) NOT NULL,
MidName VARCHAR(20),
LastName VARCHAR(20),
MobileNo VARCHAR(10) NOT NULL,
Email VARCHAR(50) NOT NULL,
Hospital VARCHAR (50),
Locality VARCHAR (50),
Expertise VARCHAR (30),
PRIMARY KEY (D_Id))";

/*if(!mysqli_query($con,$doctors))
{
die(mysqli_error($con));
}*/

$NGO = "CREATE TABLE NGO
(Registration_no VARCHAR(50) ,
NGO_name VARCHAR(50) NOT NULL,
President VARCHAR(50),
Contact VARCHAR(20) NOT NULL,
Locality VARCHAR (50),
Pincode VARCHAR (10) NOT NULL,
PRIMARY KEY (Registration_no))";

/*if(!mysqli_query($con,$NGO))
{
die(mysqli_error($con));
}*/

$fk = "ALTER TABLE Children
ADD CONSTRAINT fk_child
FOREIGN KEY (NGO_no) REFERENCES NGO(Registration_no)";

$insert = "INSERT INTO NGO 
VALUES ('166420040', 'CRY - Child Rights', 'Puja Marwaha', '+91-22-61462424', 'Mumbai', '400018'), 
('347200001', 'Bharti Foundation', 'Rakesh Bharti Mittal', '+91-11-46666100', 'New Delhi ', '110017'), 
('41471', 'Room to Read', 'Geetha Murali', '+91-11-40585600', 'New Delhi', '110065'), 
('6382002', 'Smile Foundation', 'Santanu Mishra', '+91-11-43123700 ', 'New Delhi', '110049'), 
('KA7182003-04', 'Akshaya Patra', 'Shridhar Venkat', '+91-80-30143400', 'Bengaluru', '560103'), 
('M219870', 'Save the Children', 'Rakesh Chaudhary', '+91-11-41031234', 'New Delhi', '110030'), 
('MH20000046108', 'Pratham', 'Madhav Chavan', '+91-22-23801447', 'Mumbai', '400025'),";

/*if(!mysqli_query($con,$insert))
{
    die(mysqli_error($con));
}*/

/*if(!mysqli_query($con,$fk))
{
    die(mysqli_error($con));
}
else

  echo "successful database.";
*/
?>