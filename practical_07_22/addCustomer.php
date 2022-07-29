<?php
$err = "";

if ($_POST["FirstName"] === "" || $_POST["LastName"] === "" || $_POST["Email"] === "") {
    $err = "First name, last name and email are mandatory!";
} else {

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "js_06_02";

    $con = new mysqli($hostname, $username, $password, $databasename);

    $success = "";

    if ($con->connect_error) {
        $err = $con->connect_error;
    } else {
        $query = "INSERT INTO customer_new (firstname,lastname,email,phone)
    VALUES('" . $_POST["FirstName"]  . "','" . $_POST["LastName"] . "','" . $_POST["Email"] . "', '" . $_POST["Phone"] . "')";
        if ($con->query($query)) {
            $success = "Customer added successfully";
        } else {
            $err = $con->error;
        }
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
        <?php if ($err != "") { ?>
        <h1 style="color: red"><?= $err ?></h1>
        <?php } else { ?>
        <h1 style="color: green"><?= $success ?></h1>
        <?php } ?>
    </div>
</body>

</html>