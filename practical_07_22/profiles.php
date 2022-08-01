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
    <?php include("navbar.php")
    ?>
    <div class="container">
        <h1>V.I.P. data base</h1>
        <?php
        while ($entry = $result->fetch_assoc()) {
            echo "<h4>ID: " .  $entry["id"] . "</h4>",  "<h5>" . $entry["firstname"] . $entry["lastname"] . "</h5>", "<h6>" . $entry["email"] . $entry["phone"] . "</h6>", "<img src=$entry[photo]>", "<p>" . $entry["comment"] . "</p>", "<br>";
        }

        ?>
    </div>

</body>


</html>