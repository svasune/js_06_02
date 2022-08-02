<?php
$err = "";
function connectToDb()
{

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "js_06_02";

    $con = new mysqli($hostname, $username, $password, $databasename);

    return $con;
}

function selectCustomers(mysqli $con): mysqli_result
{
    $query = "SELECT * FROM customer_new";
    return $con->query($query);
}