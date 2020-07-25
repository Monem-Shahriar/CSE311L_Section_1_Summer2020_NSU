<?php

$link = mysqli_connect('localhost','root','','Homework_2_VS_DB');

if($link == false)
{
    die("ERROR: Could not connect." .mysqli_connect_error());
}


$sql = "INSERT INTO Employees VALUES
(100, 'Steven', 'King', 'SKING', '515.123.4567', '17-JUN-87', 'AD_PRES', 24000, NULL, NULL, 90),
(101, 'Neena', 'Kochhar', 'NKOCHHAR', '515.123.4568', '21-SEP-89', 'AD_VP', 17000, NULL, 100, 90),
(102, 'Lex', 'De Haan', 'LDEHAAN', '515.123.4569', '12-JAN-93', 'AD_VP', 17000, NULL, 100, 90),
(103, 'Alexander', 'Hunold', 'AHUNOLD', '590.423.4567', '03-JAN-90', 'IT_PROG', 9000, NULL, 102, 60),
(104, 'Bruce', 'Emst', 'BERNST', '590.423.4566', '21-MAY-91', 'IT_PROG', 6000, NULL, 103, 60),
(107, 'Diana', 'Lorentz', 'DLORENTZ', '590.423.5567', '07-FEB-99', 'IT_PROG', 4200, NULL, 103, 60),
(124, 'Kevin', 'Mourgos', 'KMOURGOS', '650.123.5234', '16-NOV-99', 'ST_MAN', 5800, NULL, 100, 50),
(141, 'Trenna', 'Rajs', 'TRAJS', '650.121.8009', '17-OCT-95', 'ST_CLERK', 3500, NULL, 124, 50),
(142, 'Curtis', 'Davies', 'CDAVIES', '650.121.2994', '29-JAN-97', 'ST_CLERK', 3100, NULL, 124, 50),
(143, 'Randall', 'Matos', 'RMATOS', '650.121.2874', '15-MAR-98', 'ST_CLERK', 2600, NULL, 124, 50),
(144, 'Peter', 'Vargas', 'PVARGAS', '650.121.2004', '09-JUL-98', 'ST_CLERK', 2500, NULL, 124, 50),
(149, 'Eleni', 'Zlotkey', 'EZLOTKEY', '011.44.1344.429018', '29-JAN-00', 'SA_MAN', 10500, 2, 100, 80),
(174, 'Ellen', 'Abel', 'EABEL', '011.44.1644.429267', '11-MAY-96', 'SA_REP', 11000, 3, 149, 80),
(176, 'Jonathon', 'Taylor', 'JTAYLOR', '011.44.1644.429265', '24-MAR-98', 'SA_REP', 8600, 2, 149, 80),
(178, 'Kimberely', 'Grant', 'KGRANT', '011.44.1644.429263', '24-MAY-99', 'SA_REP', 7000, 15, 149, NULL),
(200, 'Jennifer', 'Whalen', 'JWHALEN', '515.123.4444', '17-SEP-87', 'AD_ASST', 4400, NULL, 101, 10),
(201, 'Michael', 'Hartstein', 'MHARTSTE', '515.123.5555', '17-FEB-96', 'MK_MAN', 13000, NULL, 100, 20),
(202, 'Pat', 'Fay', 'PFAY', '603.123.6666', '17-AUG-97', 'MK_REP', 6000, NULL, 201, 20),
(205, 'Shelley', 'Higgins', 'SHIGGINS', '515.123.8080', '07-JUN-94', 'AC_MGR', 12000, NULL, 101, 110),
(206, 'William', 'Gietz', 'WGIETZ', '515.123.8181', '07-JUN-94', 'AC_ACCOUNT', 8300, NULL, 205, 110)";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "ERROR: Could not able to INSERT VALUES " .mysqli_error($link);
}

mysqli_close($link)


?>