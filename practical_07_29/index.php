<?php
include("db_utils.php");
include("ui_utils.php");
$err = "";
$con = connectToDb($err);

if ($err === "")
    $result = selectCustomer($con);

?>

<head>
    <?php include("header.php") ?>
</head>


<body>
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
                echo ($entry['firstname']);
                echo "</div>";

                echo "<div class='col'>";
                echo ($entry['lastname']);
                echo "</div>";

                echo "<div class='col'>";
                echo ($entry['email']);
                echo "</div>";

                echo "<div class='col'>";
                echo ($entry['phone']);
                echo "</div>";

                echo "<div class='col'>";
                echo ($entry['comment']);
                echo "</div>";

                echo "<div class='col'>";
                echo ($entry["photo"]);
                echo "</div>";

                echo "</div>";
            endwhile;

            ?>
        <?php else :
            echo "<div class='alert alert-primary' role='alert'><h1>$err</h1></div>";
        endif
        ?>

    </div>
    <button href="updateForm.php" class="btn btn-primary">Update</button>

</body>