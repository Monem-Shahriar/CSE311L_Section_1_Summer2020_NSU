<?php

$link = mysqli_connect('localhost','root','');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "CREATE DATABASE Homework_2_VS_DB";

if(mysqli_query($link, $sql)){
    echo "DATABASE Created";
}
else{
    echo "ERROR: Could not able to create DATABASE. " .mysqli_error($link);
}

mysqli_close($link)

?>

