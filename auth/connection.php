<?php
function connect()
{

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "inventory_project";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    return $conn;
}


function closeConnection($cn)
{
    $cn->close();
}
