<?php

$link = mysqli_connect('localhost','root','','Homework_2_VS_DB');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "INSERT INTO locations VALUES
(1400, '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US'),
(1500, '2011 Interiors Blvd', '99236', 'South San Francisco', 'California', 'US' ),
(1700, '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US'),
(1800, '406 Bloor St. W.', 'ON M5S 1X8', 'Toronto', 'Ontario', 'CA'),
(2500, 'Magdalen Center- The Oxford Sc. Park', 'OX9 9ZB', 'Oxford', 'Oxford', 'UK')";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "ERROR: Could not able to INSERT VALUES " .mysqli_error($link);
}

mysqli_close($link)


?>