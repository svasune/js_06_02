<html>

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "js_06_02";

$con = new mysqli($hostname, $username, $password, $databasename);




?>

<?php
include("header.php")
?>

<body>
    <?php
    include("navbar.php")
    ?>

    <div class="container m-2">
        <div class="container col-md-3 mt-1">
            <form class="form-inline" method="GET">
                <input class="form-control" type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                                    echo $_GET['search'];
                                                                                } ?>" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-md-11">
            <div class=" mt-3">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Comment</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_GET['search'])) {
                                $filtervalues = $_GET['search'];
                                // $query = "SELECT * FROM customer_new WHERE CONCAT(id, firstname, lastname, email, phone, photo, comment) LIKE '%$filtervalues%' ";
                                $query = "SELECT * FROM customer_new WHERE CONCAT(id) LIKE '%$filtervalues%' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $items) {
                            ?>
                            <tr>
                                <td><?= $items['id'] ?></td>
                                <td><?= $items['firstname'] ?></td>
                                <td><?= $items['lastname'] ?></td>
                                <td><?= $items['email'] ?></td>
                                <td><?= $items['phone'] ?></td>
                                <td><?= "<img src='" . $items['photo'] . "' height=100>" ?></td>
                                <td><?= $items['comment'] ?></td>
                            </tr>
                            <?php
                                    }
                                } else {
                                    ?>
                            <tr>
                                <td>No such a profile found</td>
                            </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>