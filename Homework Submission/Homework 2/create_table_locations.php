<?php

$link = mysqli_connect('localhost','root','','Homework_2_VS_DB');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE TABLE Locations(
    Location_ID INT(4) PRIMARY KEY NOT NULL,
    Street_Address VARCHAR(40),
    Postal_Code VARCHAR(12),
    City VARCHAR(30) NOT NULL,
    State_Province VARCHAR(25),
    Country_ID VARCHAR(2)
)";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>