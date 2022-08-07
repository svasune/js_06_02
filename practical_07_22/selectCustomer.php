<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "js_06_02";

$con = new mysqli($hostname, $username, $password, $databasename);

$success = "";
$err = "";

$entry = [];

if ($con->connect_error) {
    $err = $con->connect_error;
} else {
    $query = "SELECT * FROM customer_new WHERE id = 1";
    $result = $con->query($query);

    if ($result->num_rows === 0) {
        $err = "No entries found";
    } else {
        $entry = $result->fetch_assoc();
    }
}
?>

<html>

<?php
include("header.php")
?>

<body>
    <?php
    include("navbar.php")
    ?>
    <div class="container">
        <?php if ($err == "") { ?>
            <h1><?= "Name : " . $entry["firstname"] . " , Last Name : " . $entry["lastname"] ?></h1>

        <?php } ?>

        <?php
        $query = " SELECT * from photos ";
        $result = mysqli_query($db, $query);

        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./photos/<?php echo $data['filename']; ?>">

        <?php
        }
        ?>
    </div>
</body>

</html>