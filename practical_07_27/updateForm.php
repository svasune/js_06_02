<!-- <html>
<!-- <?php

        // $id = $_POST["id"];
        // $firstname = $_POST["firstname"];
        // $lastname = $_POST["lastname"];
        // $email = $_POST["email"];
        // $phone = $_POST["phone"];
        // $comment = $_POST["comment"];
        // $photo = $_POST["photo"];

        ?>

<head>
    <!-- <?php
            include("header.php");
            ?> -->
</head>

<body>
    <?php
    include("navbar.php");
    ?> -->
    <div class="container">
        <h1>Update customer info:</h1>
        <form method="POST" action="updateDataMethods.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address:</label>
                <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value=<?= $id ?>>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">First name:</label>
                <input name="FirstName" type="text" class="form-control" id="exampleInputName1" aria-describedby="firstNameHelp" placeholder="Enter first name" value=<?= $firstname ?>>
                <small id="firstNameHelp" class="form-text text-muted">Enter your first name.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputSurname1">Last name:</label>
                <input name="LastName" type="text" class="form-control" id="exampleInputSurname1" aria-describedby="lastNameHelp" placeholder="Enter last name" value=<?= $lastname ?>>
                <small id="lastNameHelp" class="form-text text-muted">Enter your first name.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPhone1">Phone number:</label>
                <input name="Phone" type="number" class="form-control" id="exampleInputphone1" aria-describedby="phoneHelp" placeholder="Enter your phone number" value=<?= $phone ?>>
                <small id="phoneHelp" class="form-text text-muted">Enter your phone number.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputComment1">Comment:</label>
                <input name="Comment" type="text" class="form-control" id="exampleInputComment1" aria-describedby="commentHelp" placeholder="Enter your comment" value=<?= $comment ?>>
                <small id="commentHelp" class="form-text text-muted">Enter your comment.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPhoto1">Photo:</label>
                <input name="Photo" type="file" class="form-control" id="exampleInputphoto1" aria-describedby="photoHelp" placeholder="Choose your photo" value=<?= $photo ?>>
                <small id="photoHelp" class="form-text text-muted">Choose your photo.</small>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html> -->