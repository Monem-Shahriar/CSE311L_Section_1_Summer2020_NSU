<?php

$link = mysqli_connect('localhost','root','','Homework_2_VS_DB');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE TABLE Employees(
    Employee_ID INT(6) PRIMARY KEY NOT NULL,
    First_Name VARCHAR(20),
    Last_Name VARCHAR(25) NOT NULL,
    Email VARCHAR(25) NOT NULL,
    Phone_Number VARCHAR(15),
    Hire_Date DATE NOT NULL,
    Job_ID VARCHAR(10) NOT NULL,
    Salary INT(8),
    Commission_pct INT(2),
    Manager_ID INT(6),
    Department_ID INT(4)
)";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>