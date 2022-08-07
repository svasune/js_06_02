<?php
function connectToDb(string &$err)
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "js_06_02";

    $con = new mysqli($hostname, $username, $password, $databasename);
    if ($con->connect_error) {
        $err = $con->connect_error;
    }
    return $con;
}

function selectCustomer(mysqli $con, int $id = null): mysqli_result
{
    if ($id === null)
        $query = "SELECT * FROM customer_new";
    else
        $query = "SELECT * FROM customer_new WHERE id=$id";
    return $con->query($query);
}

function updateCustomer(
    mysqli $con,
    int $id,
    string $firstname,
    string $lastname,
    string $email,
    string $phone
) {

    $query = "UPDATE customer_new SET firstname='$firstname',lastname='$lastname',email='$email', 
    phone='$phone' WHERE id=$id";
    $con->query($query);
}

function saveFromFile(string $filename)
{
    $file = fopen($filename, "r");
    if ($file == false) {
        echo ("<h2 class='err'>File cannot be opened </h1>");
        exit();
    }
    // skip the header line
    $csvContenLineArr = fgetcsv($file, filesize($filename), ";");

    while ($csvContentLineArr = fgetcsv($file, filesize($filename), ";")) :
        //implement code here
        /*
    $csvContentLineArr[0] == Kate;
    $csvContentLineArr[1] == Smith;
    etc.
    */
        $firstname =  $csvContentLineArr[0];
        $lastname =  $csvContentLineArr[1];
        $email =  $csvContentLineArr[2];
        $phone =  $csvContentLineArr[3];


    endwhile;
}