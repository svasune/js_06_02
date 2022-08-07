<html>
<?php
include("db_utils.php");
if (isset($_POST['update'])) {
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
        $query = "UPDATE `customer_new` SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `phone`= '$phone', `photo`= '$photo', `comment`= '$comment' WHERE id=$id";
        if ($con->query($query)) {
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
        include("navbar.php");
        ?>

        <di class="container">
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width="400" border=" 0" cellspacing="1" cellpadding="2">

                    <tr>
                        <td width="100">Id</td>
                        <td><input name="id" type="text" id="id"></td>
                    </tr>

                    <tr>
                        <td width="100">Name</td>
                        <td><input name="firstname" type="text" id="firstname"></td>
                    </tr>

                    <tr>
                        <td width="100">Surname</td>
                        <td><input name="lastname" type="text" id="lastname"></td>
                    </tr>
                    <tr>
                        <td width="100">Phone</td>
                        <td><input name="phone" type="text" id="phone"></td>
                    </tr>
                    <tr>
                        <td width="100">Email</td>
                        <td><input name="email" type="text" id="email"></td>
                    </tr>
                    <tr>
                        <td width="100">Comment</td>
                        <td><input name="comment" type="text" id="comment"></td>
                    </tr>
                    <tr>
                        <td width="100">Photo</td>
                        <td><input name="photo" type="text" id="photo"></td>
                    </tr>


                    <tr>
                        <td width="100"> </td>
                        <td>
                            <input name="update" type="submit" id="update" value="Update">
                        </td>
                    </tr>

                </table>
            </form>
            </div>


        <?php
    }
        ?>
    </body>

</html>