<?php

$link = mysqli_connect('localhost','root','','Homework_2_VS_DB');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE TABLE Departments(
    Department_ID int(5) PRIMARY KEY,
Department_Name VARCHAR(20) NOT NULL,
Manager_ID INT(5),
Location_ID INT(5) NOT NULL
)";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>