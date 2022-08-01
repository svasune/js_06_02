<html>

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "js_06_02";

$con = new mysqli($hostname, $username, $password, $databasename);

$success = "";

if ($con->connect_error) {
    $err = $con->connect_error;
} else {
    $query = "SELECT * FROM customer_new";
    $result = $con->query($query);

    if ($result->num_rows === 0) {
        $err = "No entries found";
    } else {
        $entry = $result->fetch_assoc();
    }
}
?>

<?php include("header.php")
?>

<body>

    <div class="container">
        <?php
        while ($entry = $result->fetch_assoc()) {
            echo "<h2>Name: " . $entry["firstname"] . "</h2>";
        }

        ?>
    </div>

</body>

</html>