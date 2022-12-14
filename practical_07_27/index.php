<html>
<?php
include("db_utils.php");
include("ui_utils.php");
$con = connectToDb();
$err = "";
if ($err === "") {
    $result = selectCustomers($con);
}
$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comment = $_POST["comment"];
$photo = $_POST["photo"];

if ($con->connect_error) {
    $err = $con->connect_error;
} else {
    $entry = "UPDATE `customer_new` SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `phone`= '$phone', `photo`= '$photo', `comment`= '$comment' WHERE id=$id";
    if ($con->query($entry)) {
        $success = "Customer updated successfully";
    } else {
        $err = $con->error;
    }
}
?>

<head>
    <?php
    include("header.php");
    ?>
</head>

<body>
    <?php
    include("navigation.php")
    ?>
    <!-- <?php printHelloName("Svajūnė", "Laurinėnaitė", "Pupki") ?> -->
    <div class="container m-2 p-2">
        <?php if ($err === "") : ?>
        <b>
            <div class="row ">
                <div class="col">ID</div>
                <div class="col">Name</div>
                <div class="col">Surname</div>
                <div class="col">Email</div>
                <div class="col">Phone</div>
                <div class="col">Comment</div>
                <div class="col">Photo</div>
            </div>
        </b>
        <?php


            while ($entry = $result->fetch_assoc()) :
                echo "<div class='row'>";

                echo "<div class='col'>";
                echo ($entry["id"]);
                echo "</div>";

                //put it inside the form and triger the query.

                echo "<div class='col'>";
                echo "<input value='" . ($entry['firstname']) . "'>";
                echo "</div>";

                echo "<div class='col'>";
                echo "<input value='" . ($entry['lastname']) . "'>";
                echo "</div>";

                echo "<div class='col'>";
                echo "<input value='" . ($entry['email']) . "'>";
                echo "</div>";

                echo "<div class='col'>";
                echo "<input value='" . ($entry['phone']) . "'>";
                echo "</div>";

                echo "<div class='col'>";
                echo "<input value='" . ($entry['comment']) . "'>";
                echo "</div>";

                echo "<div class='col'>";
                echo ($entry["photo"]);
                echo "</div>";

                echo "</div>";
            // echo "<button href='updateForm.php' type='submit' class='btn btn-primary'>Update</button>";
            endwhile;

            ?>
        <?php else :
            echo "<div class='alert alert-primary' role='alert'><h1>$err</h1></div>";
        endif
        ?>

    </div>
    <button href="updateForm.php" class="btn btn-primary">Update</button>

</body>

</html>