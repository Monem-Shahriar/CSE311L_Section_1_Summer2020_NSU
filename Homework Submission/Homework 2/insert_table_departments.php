<?php

$link = mysqli_connect('localhost','root','','Homework_2_VS_DB');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "INSERT INTO Departments VALUES
(10, 'Administration', 200, 1700),
(20, 'Marketing', 201, 1800),
(50, 'Shipping', 124, 1500),
(60, 'IT', 103, 1400),
(80, 'Sales', 149, 2500),
(90, 'Executive', 100, 1700),
(110, 'Accounting', 205, 1700),
(190, 'Contracting', NULL, 1700)";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "ERROR: Could not able to INSERT VALUES " .mysqli_error($link);
}

mysqli_close($link)


?>