<?php

$link = mysqli_connect('localhost','root','','Quiz_2_VS_DB');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE TABLE Jobs(
    JOB_ID VARCHAR(10) NOT NULL,
    JOB_TITLE VARCHAR(35) NOT NULL,
    MIN_SALARY INT(6),
    MAX_SALARY INT(6)
)";

if(mysqli_query($link, $sql)){
    echo "TABLE Created";
}
else{
    echo "ERROR: Could not able to create TABLE. " .mysqli_error($link);
}

mysqli_close($link)


?>