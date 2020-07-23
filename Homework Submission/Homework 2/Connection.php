<?php

$MySQLi_connection = new MySQLi('localhost','root','','');


if($MySQLi_connection->connect_error)
{
    echo "Not Connected Error:" .$MySQLi_connection -> connect_error;
}
else
{
    echo "Connected";
}

?>
